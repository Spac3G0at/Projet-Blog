<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cf5a43fdd39d648b07dfe23513329b8871c20421e775b1b2b89662f7946ad032 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c4858b527d832871dd89ab49741370a9d6febb6126bfc660453967e8c1a22a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c4858b527d832871dd89ab49741370a9d6febb6126bfc660453967e8c1a22a1->enter($__internal_2c4858b527d832871dd89ab49741370a9d6febb6126bfc660453967e8c1a22a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_d7dd869609c0a50b149f0238d14b7bcf4dbbc956730f9137f8177c4d31ca67f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dd869609c0a50b149f0238d14b7bcf4dbbc956730f9137f8177c4d31ca67f9->enter($__internal_d7dd869609c0a50b149f0238d14b7bcf4dbbc956730f9137f8177c4d31ca67f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c4858b527d832871dd89ab49741370a9d6febb6126bfc660453967e8c1a22a1->leave($__internal_2c4858b527d832871dd89ab49741370a9d6febb6126bfc660453967e8c1a22a1_prof);

        
        $__internal_d7dd869609c0a50b149f0238d14b7bcf4dbbc956730f9137f8177c4d31ca67f9->leave($__internal_d7dd869609c0a50b149f0238d14b7bcf4dbbc956730f9137f8177c4d31ca67f9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da367eb08f22f3540f141aed523975d51343d6c6a47e8ac42d5649f4bff0b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da367eb08f22f3540f141aed523975d51343d6c6a47e8ac42d5649f4bff0b91->enter($__internal_3da367eb08f22f3540f141aed523975d51343d6c6a47e8ac42d5649f4bff0b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_662beaeeea4bf087efe8a728997e7da5057222804f71367a7e5cc07e16b4c874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662beaeeea4bf087efe8a728997e7da5057222804f71367a7e5cc07e16b4c874->enter($__internal_662beaeeea4bf087efe8a728997e7da5057222804f71367a7e5cc07e16b4c874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_662beaeeea4bf087efe8a728997e7da5057222804f71367a7e5cc07e16b4c874->leave($__internal_662beaeeea4bf087efe8a728997e7da5057222804f71367a7e5cc07e16b4c874_prof);

        
        $__internal_3da367eb08f22f3540f141aed523975d51343d6c6a47e8ac42d5649f4bff0b91->leave($__internal_3da367eb08f22f3540f141aed523975d51343d6c6a47e8ac42d5649f4bff0b91_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b79f7cd1d98ea639b9b5b9a76c9dda0ff9d620451c52e9318554d63d7b708c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79f7cd1d98ea639b9b5b9a76c9dda0ff9d620451c52e9318554d63d7b708c1f->enter($__internal_b79f7cd1d98ea639b9b5b9a76c9dda0ff9d620451c52e9318554d63d7b708c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7b6334b94417399cd5f06afcb250c3d09bf27786a45f9da30c66e5d40cb51cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6334b94417399cd5f06afcb250c3d09bf27786a45f9da30c66e5d40cb51cdf->enter($__internal_7b6334b94417399cd5f06afcb250c3d09bf27786a45f9da30c66e5d40cb51cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_7b6334b94417399cd5f06afcb250c3d09bf27786a45f9da30c66e5d40cb51cdf->leave($__internal_7b6334b94417399cd5f06afcb250c3d09bf27786a45f9da30c66e5d40cb51cdf_prof);

        
        $__internal_b79f7cd1d98ea639b9b5b9a76c9dda0ff9d620451c52e9318554d63d7b708c1f->leave($__internal_b79f7cd1d98ea639b9b5b9a76c9dda0ff9d620451c52e9318554d63d7b708c1f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  66 => 7,  55 => 10,  53 => 7,  50 => 6,  41 => 5,  11 => 3,);
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

{% extends 'base.html.twig' %}

{% block body %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}

{% endblock %}", "@FOSUser/Profile/edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
