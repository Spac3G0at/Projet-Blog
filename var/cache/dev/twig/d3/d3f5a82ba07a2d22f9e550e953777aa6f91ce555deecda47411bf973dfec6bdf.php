<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_80bb32e6f54d6071c3d38c48652f0cb4e6e7fe32bd6a4371ba86a03c402622ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3670f88b79845a9de38836d2bedbd94f4c2fcb065b2afcb3f1da2fe39ffa9465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3670f88b79845a9de38836d2bedbd94f4c2fcb065b2afcb3f1da2fe39ffa9465->enter($__internal_3670f88b79845a9de38836d2bedbd94f4c2fcb065b2afcb3f1da2fe39ffa9465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_a8cd5e7efcaf196166f8468480d43009b58653e05a33959abda462160efb92a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8cd5e7efcaf196166f8468480d43009b58653e05a33959abda462160efb92a6->enter($__internal_a8cd5e7efcaf196166f8468480d43009b58653e05a33959abda462160efb92a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3670f88b79845a9de38836d2bedbd94f4c2fcb065b2afcb3f1da2fe39ffa9465->leave($__internal_3670f88b79845a9de38836d2bedbd94f4c2fcb065b2afcb3f1da2fe39ffa9465_prof);

        
        $__internal_a8cd5e7efcaf196166f8468480d43009b58653e05a33959abda462160efb92a6->leave($__internal_a8cd5e7efcaf196166f8468480d43009b58653e05a33959abda462160efb92a6_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27d40596304ae9c0f3b946e73f03531b9542cd343642028505adaef895170209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27d40596304ae9c0f3b946e73f03531b9542cd343642028505adaef895170209->enter($__internal_27d40596304ae9c0f3b946e73f03531b9542cd343642028505adaef895170209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9bf85ed476019236d8de3cb07ed2fc9c3de347bc3c0c4bf6ab4bcaef0d7a0e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf85ed476019236d8de3cb07ed2fc9c3de347bc3c0c4bf6ab4bcaef0d7a0e7f->enter($__internal_9bf85ed476019236d8de3cb07ed2fc9c3de347bc3c0c4bf6ab4bcaef0d7a0e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9bf85ed476019236d8de3cb07ed2fc9c3de347bc3c0c4bf6ab4bcaef0d7a0e7f->leave($__internal_9bf85ed476019236d8de3cb07ed2fc9c3de347bc3c0c4bf6ab4bcaef0d7a0e7f_prof);

        
        $__internal_27d40596304ae9c0f3b946e73f03531b9542cd343642028505adaef895170209->leave($__internal_27d40596304ae9c0f3b946e73f03531b9542cd343642028505adaef895170209_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
