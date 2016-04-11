<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775cf3966226437039a0e3f213ac3897e07bb55c86e2810ba026bd90160fb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e32d359b6a724fda60e31dbf45b72fe0a40741a1e449dbd9e0829634d05ad996 = $this->env->getExtension("native_profiler");
        $__internal_e32d359b6a724fda60e31dbf45b72fe0a40741a1e449dbd9e0829634d05ad996->enter($__internal_e32d359b6a724fda60e31dbf45b72fe0a40741a1e449dbd9e0829634d05ad996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e32d359b6a724fda60e31dbf45b72fe0a40741a1e449dbd9e0829634d05ad996->leave($__internal_e32d359b6a724fda60e31dbf45b72fe0a40741a1e449dbd9e0829634d05ad996_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3c235d3798e3019a59faf9db44a024d2baa3a9f95a0a6087bdc8f6353e88922 = $this->env->getExtension("native_profiler");
        $__internal_f3c235d3798e3019a59faf9db44a024d2baa3a9f95a0a6087bdc8f6353e88922->enter($__internal_f3c235d3798e3019a59faf9db44a024d2baa3a9f95a0a6087bdc8f6353e88922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f3c235d3798e3019a59faf9db44a024d2baa3a9f95a0a6087bdc8f6353e88922->leave($__internal_f3c235d3798e3019a59faf9db44a024d2baa3a9f95a0a6087bdc8f6353e88922_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8008cc4ed27fc98de8931f6963b92b16c7069791f9b4f6fc786e0664dbb3867f = $this->env->getExtension("native_profiler");
        $__internal_8008cc4ed27fc98de8931f6963b92b16c7069791f9b4f6fc786e0664dbb3867f->enter($__internal_8008cc4ed27fc98de8931f6963b92b16c7069791f9b4f6fc786e0664dbb3867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8008cc4ed27fc98de8931f6963b92b16c7069791f9b4f6fc786e0664dbb3867f->leave($__internal_8008cc4ed27fc98de8931f6963b92b16c7069791f9b4f6fc786e0664dbb3867f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aa10e8b22a9afabf3e57830ff97cc6aa5de92af5ffae8768451a9e571314e6fe = $this->env->getExtension("native_profiler");
        $__internal_aa10e8b22a9afabf3e57830ff97cc6aa5de92af5ffae8768451a9e571314e6fe->enter($__internal_aa10e8b22a9afabf3e57830ff97cc6aa5de92af5ffae8768451a9e571314e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aa10e8b22a9afabf3e57830ff97cc6aa5de92af5ffae8768451a9e571314e6fe->leave($__internal_aa10e8b22a9afabf3e57830ff97cc6aa5de92af5ffae8768451a9e571314e6fe_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
