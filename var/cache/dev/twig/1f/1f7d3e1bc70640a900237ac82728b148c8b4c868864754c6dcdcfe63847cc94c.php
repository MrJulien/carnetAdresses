<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_864a1c0e9df9cb149923caaaca860d93f2db40f75f371afa25f91970de9245f8 extends Twig_Template
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
        $__internal_cec7dc13463e469ce715afcbd13a8c2d59125452395417daa638112a9e28a67a = $this->env->getExtension("native_profiler");
        $__internal_cec7dc13463e469ce715afcbd13a8c2d59125452395417daa638112a9e28a67a->enter($__internal_cec7dc13463e469ce715afcbd13a8c2d59125452395417daa638112a9e28a67a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cec7dc13463e469ce715afcbd13a8c2d59125452395417daa638112a9e28a67a->leave($__internal_cec7dc13463e469ce715afcbd13a8c2d59125452395417daa638112a9e28a67a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f648ce18b19eaf0f836533ad7b8deb2e6316845235bb8269826751fa4ee3599b = $this->env->getExtension("native_profiler");
        $__internal_f648ce18b19eaf0f836533ad7b8deb2e6316845235bb8269826751fa4ee3599b->enter($__internal_f648ce18b19eaf0f836533ad7b8deb2e6316845235bb8269826751fa4ee3599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f648ce18b19eaf0f836533ad7b8deb2e6316845235bb8269826751fa4ee3599b->leave($__internal_f648ce18b19eaf0f836533ad7b8deb2e6316845235bb8269826751fa4ee3599b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0001fdfee3e6a102772d36cce7e1a38afe60292ce3ad5b7feb9038dde415901b = $this->env->getExtension("native_profiler");
        $__internal_0001fdfee3e6a102772d36cce7e1a38afe60292ce3ad5b7feb9038dde415901b->enter($__internal_0001fdfee3e6a102772d36cce7e1a38afe60292ce3ad5b7feb9038dde415901b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0001fdfee3e6a102772d36cce7e1a38afe60292ce3ad5b7feb9038dde415901b->leave($__internal_0001fdfee3e6a102772d36cce7e1a38afe60292ce3ad5b7feb9038dde415901b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1cb02e0a689e2b26890af670f8164fb43fe5844ed3feda0130d709a9add2398 = $this->env->getExtension("native_profiler");
        $__internal_e1cb02e0a689e2b26890af670f8164fb43fe5844ed3feda0130d709a9add2398->enter($__internal_e1cb02e0a689e2b26890af670f8164fb43fe5844ed3feda0130d709a9add2398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1cb02e0a689e2b26890af670f8164fb43fe5844ed3feda0130d709a9add2398->leave($__internal_e1cb02e0a689e2b26890af670f8164fb43fe5844ed3feda0130d709a9add2398_prof);

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
