//On récupère les modules
var gulp = require('gulp');                         //Boite à outil pour auomatiser des tâches
var gutil = require('gulp-util');                   //Utilitaire général pour les plugins Gulp
var gsass = require('gulp-sass');                   //Compile les fichiers sass
var livereload = require('gulp-livereload');        //Rafraichissement de page automatique dans chrome
var autoprefixer = require('gulp-autoprefixer');    //Prefixer css
var minifyCss = require('gulp-minify-css');         //Minifie les css
var concat = require('gulp-concat');                //Concatène tous les fichiers javascript
var uglify = require('gulp-uglify');                //Minifie les javascripts
var minifyHtml = require('gulp-minify-html');       //Minifie les fichiers html
var imagemin = require('gulp-imagemin');            //Optimise le poids des images
var del = require('del');                                   //Supprime les fichiers préalablement régénrés
var options = require('minimist')(process.argv.slice(2));   //Parse les arguments en option

//Paths
var resources = './src/AppBundle/Resources/';
var sassDir = resources+'sass/';
//var cssDir = 'web/css/';
//var jsDir = 'web/js/';
//var fontDir = 'web/fonts/';
//var cssPrivate = '';
//var jsPrivate = '';
//var fontPrivate = 'src/AppBundle/Resources/bower_components/bootstrap-sass/assets/fonts/bootstrap/*';
var modeState = 'dev'; //dev | prod


//On créé une tâche test
gulp.task('test', function(){
    return gutil.log(gutil.colors.yellow('Bonjour ;'));
});

gulp.task('testminimist', function(){
    
});

//On créé une tâche qui va concaténer les fichiers javascript
gulp.task('scripts', function(){
    return gulp.src(
                [
                    resources+'/bower_components/jquery/dist/jquery.js',
                    resources+'/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
                    resources+'/js/**/*.js'
                ]
            )
            //.pipe(uglify())
            .pipe(options.prod ? uglify() : gutil.noop())
            .pipe(concat('main.js'))
            .pipe(gulp.dest('./web/js/'))
            .pipe(livereload())
            ;
});

//On créé la tâche pour les feuilles de styles
gulp.task('styles', function(){
    return gulp.src(sassDir+'main.scss')
            .pipe(gsass(
                {
                    //outputStyle: 'nested'
                    //prod = compressed | dev = nested
                    outputStyle: (options.prod ? 'compressed': 'nested')
                }
            ).on('error', gsass.logError))
            .pipe(autoprefixer('last 3 version'))
            //.pipe(minifyCss())
            //Quand on veut avorter un pipe on utilise gutil.noop()
            .pipe(options.prod ? minifyCss() : gutil.noop())
            .pipe(gulp.dest('./web/css/'))
            .pipe(livereload())
            .on('end', function(){
                gutil.log(gutil.colors.yellow('La tâche "styles" est terminée !'));
            })
            ;
});

//On envoie les fichiers images optimisées
//On met en argument del:img
gulp.task('img',['del:img'], function(){
    return gulp.src(resources+'/img/**/*.*')
            .pipe(imagemin())
            .pipe(gulp.dest('./web/img'))
            .on('end', function(){
                gutil.log(gutil.colors.yellow('La tâche "img" est terminée !'));
            })
            ;
});

//On envoie tous les fichiers html dans le dossier public
gulp.task('html', function(){
    var opts = {
                conditionals: true,	//Pour ne pas supprimer les commentaires IE
                spare: true		//Pour ne pas supprimer les attributs redondants
		};
    return gulp.src(resources+'/views/**/*.html')
            //.pipe(minifyHtml(opts))
            .pipe(options.prod ? minifyHtml(opts) : gutil.noop())
            .pipe(gulp.dest('./web/'))
            .pipe(livereload())
            ;
});

//On récupère toutes les polices
gulp.task('icons', function(){
    return gulp.src(resources+'bower_components/bootstrap-sass/assets/fonts/bootstrap/**.*')
            .pipe(gulp.dest('./web/fonts'))
            .on('end', function(){
                gutil.log(gutil.colors.yellow('La tâche "icons" est terminée !'));
            })
            ;
});

//On écoute tous les fichiers du répertoire sass qui finissent pas scss
gulp.task('watch', function(){
    livereload.listen();
    gulp.watch([sassDir+'/*.scss', sassDir+'/*.sass'], ['styles']);
    gulp.watch(resources+'/views/**/*.html',['html']);
    gulp.watch([
                    resources+'/bower_components/jquery/dist/jquery.js',
                    resources+'/bower_components/bootstrap-sass/assets/javascripts/bootstrap.js',
                    resources+'/js/**/*.js'
                ],['scripts']);
});

//Tâche qui supprime (nettoyage) les fichiers en trop
gulp.task('del:img', function(){
    return del(['./web/img/**/*']);
});

//On  fait une tâche qui appelle les tâches de production
gulp.task('prod', function(){
    gulp.start('styles','html','icons','scripts');
});

