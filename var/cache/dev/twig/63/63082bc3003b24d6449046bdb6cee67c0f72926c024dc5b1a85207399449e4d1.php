<?php

/* contact/index.html.twig */
class __TwigTemplate_0c52b9d1d164ba1175db680907b0561c9cefcdd5295c5c0eebaf69a8fdfd585b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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
        $__internal_252c0133a5ff90fecf28ac298311955c19572fbb7828217b835ca0ea2609d145 = $this->env->getExtension("native_profiler");
        $__internal_252c0133a5ff90fecf28ac298311955c19572fbb7828217b835ca0ea2609d145->enter($__internal_252c0133a5ff90fecf28ac298311955c19572fbb7828217b835ca0ea2609d145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_252c0133a5ff90fecf28ac298311955c19572fbb7828217b835ca0ea2609d145->leave($__internal_252c0133a5ff90fecf28ac298311955c19572fbb7828217b835ca0ea2609d145_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_86009c907bddfd972f1268721c8d9113fe09f36028b4002d0cee13e346639a01 = $this->env->getExtension("native_profiler");
        $__internal_86009c907bddfd972f1268721c8d9113fe09f36028b4002d0cee13e346639a01->enter($__internal_86009c907bddfd972f1268721c8d9113fe09f36028b4002d0cee13e346639a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Societe</th>
                <th>Adresse</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Site</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "societe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "telephone", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "site", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_86009c907bddfd972f1268721c8d9113fe09f36028b4002d0cee13e346639a01->leave($__internal_86009c907bddfd972f1268721c8d9113fe09f36028b4002d0cee13e346639a01_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  126 => 45,  114 => 39,  108 => 36,  101 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  77 => 26,  73 => 25,  67 => 24,  64 => 23,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Societe</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Telephone</th>*/
/*                 <th>Email</th>*/
/*                 <th>Site</th>*/
/*                 <th>Type</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contact in contacts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contact_show', { 'id': contact.id }) }}">{{ contact.id }}</a></td>*/
/*                 <td>{{ contact.nom }}</td>*/
/*                 <td>{{ contact.prenom }}</td>*/
/*                 <td>{{ contact.societe }}</td>*/
/*                 <td>{{ contact.adresse }}</td>*/
/*                 <td>{{ contact.telephone }}</td>*/
/*                 <td>{{ contact.email }}</td>*/
/*                 <td>{{ contact.site }}</td>*/
/*                 <td>{{ contact.type }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_show', { 'id': contact.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_edit', { 'id': contact.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
