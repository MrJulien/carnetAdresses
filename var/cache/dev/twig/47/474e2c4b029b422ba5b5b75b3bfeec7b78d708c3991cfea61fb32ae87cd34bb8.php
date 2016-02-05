<?php

/* base.html.twig */
class __TwigTemplate_ece2b271862242bf61b204a93c4cde6e4dfa4a1566c204c5dd3a76aba6f132f3 extends Twig_Template
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
        $__internal_7cd27d2d1e15f228316f640e8a331d6a0aa28ab4fe6921921b3bf9784757b8b8 = $this->env->getExtension("native_profiler");
        $__internal_7cd27d2d1e15f228316f640e8a331d6a0aa28ab4fe6921921b3bf9784757b8b8->enter($__internal_7cd27d2d1e15f228316f640e8a331d6a0aa28ab4fe6921921b3bf9784757b8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7cd27d2d1e15f228316f640e8a331d6a0aa28ab4fe6921921b3bf9784757b8b8->leave($__internal_7cd27d2d1e15f228316f640e8a331d6a0aa28ab4fe6921921b3bf9784757b8b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3205b0b1bf13a4252546663d59de9b08692b61911636ab8be50e8c05cda82677 = $this->env->getExtension("native_profiler");
        $__internal_3205b0b1bf13a4252546663d59de9b08692b61911636ab8be50e8c05cda82677->enter($__internal_3205b0b1bf13a4252546663d59de9b08692b61911636ab8be50e8c05cda82677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3205b0b1bf13a4252546663d59de9b08692b61911636ab8be50e8c05cda82677->leave($__internal_3205b0b1bf13a4252546663d59de9b08692b61911636ab8be50e8c05cda82677_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2bcd34e2b61f1140f22eec1413577817997f44b828c0e28975a29806d4feeaed = $this->env->getExtension("native_profiler");
        $__internal_2bcd34e2b61f1140f22eec1413577817997f44b828c0e28975a29806d4feeaed->enter($__internal_2bcd34e2b61f1140f22eec1413577817997f44b828c0e28975a29806d4feeaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2bcd34e2b61f1140f22eec1413577817997f44b828c0e28975a29806d4feeaed->leave($__internal_2bcd34e2b61f1140f22eec1413577817997f44b828c0e28975a29806d4feeaed_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9274a3315d33fd1d472fbf550c255cc660f1d586a79e0c37e315f190710f3403 = $this->env->getExtension("native_profiler");
        $__internal_9274a3315d33fd1d472fbf550c255cc660f1d586a79e0c37e315f190710f3403->enter($__internal_9274a3315d33fd1d472fbf550c255cc660f1d586a79e0c37e315f190710f3403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9274a3315d33fd1d472fbf550c255cc660f1d586a79e0c37e315f190710f3403->leave($__internal_9274a3315d33fd1d472fbf550c255cc660f1d586a79e0c37e315f190710f3403_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_34192c53a23a9c36f8f96e889fa7d0db12ffa5f6fff2d7a5637abbd123c2210f = $this->env->getExtension("native_profiler");
        $__internal_34192c53a23a9c36f8f96e889fa7d0db12ffa5f6fff2d7a5637abbd123c2210f->enter($__internal_34192c53a23a9c36f8f96e889fa7d0db12ffa5f6fff2d7a5637abbd123c2210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34192c53a23a9c36f8f96e889fa7d0db12ffa5f6fff2d7a5637abbd123c2210f->leave($__internal_34192c53a23a9c36f8f96e889fa7d0db12ffa5f6fff2d7a5637abbd123c2210f_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
