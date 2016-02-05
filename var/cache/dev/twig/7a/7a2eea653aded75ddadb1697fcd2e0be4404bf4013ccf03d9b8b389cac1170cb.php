<?php

/* contact/edit.html.twig */
class __TwigTemplate_e9e36bd536e17c90d7abebda6b570ca0ab845b85e87d48c160c9606f3b5df474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit.html.twig", 1);
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
        $__internal_8fc08429fa7407cdc10a07e5f8659094264dbcadde9ecc4ab6355594acff42fb = $this->env->getExtension("native_profiler");
        $__internal_8fc08429fa7407cdc10a07e5f8659094264dbcadde9ecc4ab6355594acff42fb->enter($__internal_8fc08429fa7407cdc10a07e5f8659094264dbcadde9ecc4ab6355594acff42fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fc08429fa7407cdc10a07e5f8659094264dbcadde9ecc4ab6355594acff42fb->leave($__internal_8fc08429fa7407cdc10a07e5f8659094264dbcadde9ecc4ab6355594acff42fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf3d89cd06a8dc7c566434fb44960de597829824ac04fb721f268a30840789a7 = $this->env->getExtension("native_profiler");
        $__internal_bf3d89cd06a8dc7c566434fb44960de597829824ac04fb721f268a30840789a7->enter($__internal_bf3d89cd06a8dc7c566434fb44960de597829824ac04fb721f268a30840789a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_bf3d89cd06a8dc7c566434fb44960de597829824ac04fb721f268a30840789a7->leave($__internal_bf3d89cd06a8dc7c566434fb44960de597829824ac04fb721f268a30840789a7_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
