<?php

/* base.html.twig */
class __TwigTemplate_3305326ff3d1cda82e8be83718776bf8b68d9c52a9caa8b2573d8b4da74f999b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc5aa2e1727caf6a3ed4448b5bc1c079eefff8c31a3b3be827233fbab3cd2df3 = $this->env->getExtension("native_profiler");
        $__internal_dc5aa2e1727caf6a3ed4448b5bc1c079eefff8c31a3b3be827233fbab3cd2df3->enter($__internal_dc5aa2e1727caf6a3ed4448b5bc1c079eefff8c31a3b3be827233fbab3cd2df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <h4>Voici l'utilisation d'une font de Bootstrap : <span class=\"glyphicon glyphicon-arrow-right\"></span></h4>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "    </body>
</html>
";
        
        $__internal_dc5aa2e1727caf6a3ed4448b5bc1c079eefff8c31a3b3be827233fbab3cd2df3->leave($__internal_dc5aa2e1727caf6a3ed4448b5bc1c079eefff8c31a3b3be827233fbab3cd2df3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9cdb058f978431f23e7e3775636cecb3ae49e5dff7a662e0c982a5d5d52d8ca = $this->env->getExtension("native_profiler");
        $__internal_c9cdb058f978431f23e7e3775636cecb3ae49e5dff7a662e0c982a5d5d52d8ca->enter($__internal_c9cdb058f978431f23e7e3775636cecb3ae49e5dff7a662e0c982a5d5d52d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c9cdb058f978431f23e7e3775636cecb3ae49e5dff7a662e0c982a5d5d52d8ca->leave($__internal_c9cdb058f978431f23e7e3775636cecb3ae49e5dff7a662e0c982a5d5d52d8ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14261e9fb85dcfd20e255f7117de8053be78cf8bfe6c3a8fe5c21f0dd11b3dce = $this->env->getExtension("native_profiler");
        $__internal_14261e9fb85dcfd20e255f7117de8053be78cf8bfe6c3a8fe5c21f0dd11b3dce->enter($__internal_14261e9fb85dcfd20e255f7117de8053be78cf8bfe6c3a8fe5c21f0dd11b3dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_14261e9fb85dcfd20e255f7117de8053be78cf8bfe6c3a8fe5c21f0dd11b3dce->leave($__internal_14261e9fb85dcfd20e255f7117de8053be78cf8bfe6c3a8fe5c21f0dd11b3dce_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef7f88cb71c6e836767eeb898f0ac0c97370f0a51ab5324b001a554608e4765 = $this->env->getExtension("native_profiler");
        $__internal_cef7f88cb71c6e836767eeb898f0ac0c97370f0a51ab5324b001a554608e4765->enter($__internal_cef7f88cb71c6e836767eeb898f0ac0c97370f0a51ab5324b001a554608e4765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cef7f88cb71c6e836767eeb898f0ac0c97370f0a51ab5324b001a554608e4765->leave($__internal_cef7f88cb71c6e836767eeb898f0ac0c97370f0a51ab5324b001a554608e4765_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97365a1d089b8af9af8af9802fd4f2e039779e7e871369afef0ad7423271d023 = $this->env->getExtension("native_profiler");
        $__internal_97365a1d089b8af9af8af9802fd4f2e039779e7e871369afef0ad7423271d023->enter($__internal_97365a1d089b8af9af8af9802fd4f2e039779e7e871369afef0ad7423271d023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_97365a1d089b8af9af8af9802fd4f2e039779e7e871369afef0ad7423271d023->leave($__internal_97365a1d089b8af9af8af9802fd4f2e039779e7e871369afef0ad7423271d023_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 15,  99 => 14,  88 => 13,  78 => 7,  72 => 6,  60 => 5,  51 => 17,  48 => 14,  46 => 13,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('css/main.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <h4>Voici l'utilisation d'une font de Bootstrap : <span class="glyphicon glyphicon-arrow-right"></span></h4>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('js/main.js')}}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
