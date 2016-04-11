<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3c1e7155fa848291f42035f9aa56d0d472ac8fdfc98bcee3298b93da28ebc165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9542070247bc5848913e3e1663bae3fe7b4f3459ad0bb797d4d4e42f7e45bf4 = $this->env->getExtension("native_profiler");
        $__internal_d9542070247bc5848913e3e1663bae3fe7b4f3459ad0bb797d4d4e42f7e45bf4->enter($__internal_d9542070247bc5848913e3e1663bae3fe7b4f3459ad0bb797d4d4e42f7e45bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9542070247bc5848913e3e1663bae3fe7b4f3459ad0bb797d4d4e42f7e45bf4->leave($__internal_d9542070247bc5848913e3e1663bae3fe7b4f3459ad0bb797d4d4e42f7e45bf4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7605cb537d98d3e604c58e6026738a6c5cd9b55698fba4261e8b9b1539b1271 = $this->env->getExtension("native_profiler");
        $__internal_f7605cb537d98d3e604c58e6026738a6c5cd9b55698fba4261e8b9b1539b1271->enter($__internal_f7605cb537d98d3e604c58e6026738a6c5cd9b55698fba4261e8b9b1539b1271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f7605cb537d98d3e604c58e6026738a6c5cd9b55698fba4261e8b9b1539b1271->leave($__internal_f7605cb537d98d3e604c58e6026738a6c5cd9b55698fba4261e8b9b1539b1271_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3595f6f06ea9f04df63242247ac13ad570e2c7e1de59beda4b00ed843e8537e5 = $this->env->getExtension("native_profiler");
        $__internal_3595f6f06ea9f04df63242247ac13ad570e2c7e1de59beda4b00ed843e8537e5->enter($__internal_3595f6f06ea9f04df63242247ac13ad570e2c7e1de59beda4b00ed843e8537e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3595f6f06ea9f04df63242247ac13ad570e2c7e1de59beda4b00ed843e8537e5->leave($__internal_3595f6f06ea9f04df63242247ac13ad570e2c7e1de59beda4b00ed843e8537e5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_48625841c90beafd2201b429ff7bfa48248f2cfd47f348635ebb44ab73bf0017 = $this->env->getExtension("native_profiler");
        $__internal_48625841c90beafd2201b429ff7bfa48248f2cfd47f348635ebb44ab73bf0017->enter($__internal_48625841c90beafd2201b429ff7bfa48248f2cfd47f348635ebb44ab73bf0017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_48625841c90beafd2201b429ff7bfa48248f2cfd47f348635ebb44ab73bf0017->leave($__internal_48625841c90beafd2201b429ff7bfa48248f2cfd47f348635ebb44ab73bf0017_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
