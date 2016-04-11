<?php

/* default/index.html.twig */
class __TwigTemplate_e2f93f0abcb02d2a1d8cf7fc11989b14e503455f19f3bb0ac6eb80587c5e32ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_103737664c1661b49d2f3f01aa3fdcd7e1cfa5dc09d814a0bed1460f43c262e4 = $this->env->getExtension("native_profiler");
        $__internal_103737664c1661b49d2f3f01aa3fdcd7e1cfa5dc09d814a0bed1460f43c262e4->enter($__internal_103737664c1661b49d2f3f01aa3fdcd7e1cfa5dc09d814a0bed1460f43c262e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_103737664c1661b49d2f3f01aa3fdcd7e1cfa5dc09d814a0bed1460f43c262e4->leave($__internal_103737664c1661b49d2f3f01aa3fdcd7e1cfa5dc09d814a0bed1460f43c262e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e63d96b53543ae47f406f879079fd129bd35b2ad7bd0e9188cf77184bdc7792 = $this->env->getExtension("native_profiler");
        $__internal_8e63d96b53543ae47f406f879079fd129bd35b2ad7bd0e9188cf77184bdc7792->enter($__internal_8e63d96b53543ae47f406f879079fd129bd35b2ad7bd0e9188cf77184bdc7792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to</span> Symfony ";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"status\">
                <p>
                    Your application is now ready. You can start working on it at:
                    <code>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        echo "/</code>
                </p>
            </div>

            <div id=\"next\">
                <h2>What's next?</h2>
                <p>
                    Read the documentation to learn
                    <a href=\"http://symfony.com/doc/";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), 0, 3), "html", null, true);
        echo "/book/page_creation.html\">
                        How to create your first page in Symfony
                    </a>
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_8e63d96b53543ae47f406f879079fd129bd35b2ad7bd0e9188cf77184bdc7792->leave($__internal_8e63d96b53543ae47f406f879079fd129bd35b2ad7bd0e9188cf77184bdc7792_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  54 => 13,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION') }}</h1>*/
/*             </div>*/
/* */
/*             <div id="status">*/
/*                 <p>*/
/*                     Your application is now ready. You can start working on it at:*/
/*                     <code>{{ base_dir }}/</code>*/
/*                 </p>*/
/*             </div>*/
/* */
/*             <div id="next">*/
/*                 <h2>What's next?</h2>*/
/*                 <p>*/
/*                     Read the documentation to learn*/
/*                     <a href="http://symfony.com/doc/{{ constant('Symfony\\Component\\HttpKernel\\Kernel::VERSION')[:3] }}/book/page_creation.html">*/
/*                         How to create your first page in Symfony*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
