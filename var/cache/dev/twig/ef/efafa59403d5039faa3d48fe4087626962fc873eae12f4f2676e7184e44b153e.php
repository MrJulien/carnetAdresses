<?php

/* contact/new.html.twig */
class __TwigTemplate_91807fc6ec7a064321a0e0d091d5421ccebb3bccdb0336fa79bee1fede5607d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/new.html.twig", 1);
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
        $__internal_ec5c0f8bf70e40ad9a7144c232f39e302832338e5e17b95118f555b6161735bd = $this->env->getExtension("native_profiler");
        $__internal_ec5c0f8bf70e40ad9a7144c232f39e302832338e5e17b95118f555b6161735bd->enter($__internal_ec5c0f8bf70e40ad9a7144c232f39e302832338e5e17b95118f555b6161735bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec5c0f8bf70e40ad9a7144c232f39e302832338e5e17b95118f555b6161735bd->leave($__internal_ec5c0f8bf70e40ad9a7144c232f39e302832338e5e17b95118f555b6161735bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c891671da4669831705159af23b5f08916c65d97d8c731ce925ca22a6852261 = $this->env->getExtension("native_profiler");
        $__internal_6c891671da4669831705159af23b5f08916c65d97d8c731ce925ca22a6852261->enter($__internal_6c891671da4669831705159af23b5f08916c65d97d8c731ce925ca22a6852261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6c891671da4669831705159af23b5f08916c65d97d8c731ce925ca22a6852261->leave($__internal_6c891671da4669831705159af23b5f08916c65d97d8c731ce925ca22a6852261_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
