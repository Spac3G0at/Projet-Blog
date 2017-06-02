<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_18ffa91dbb573d5566edc49533f0ab66f7639f38cdde9a2c5490f10679d200cd extends Twig_Template
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
        $__internal_daf7d81a1f9db02245bd803dabbb18882db37642ce01fcdabca22a1815215b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf7d81a1f9db02245bd803dabbb18882db37642ce01fcdabca22a1815215b80->enter($__internal_daf7d81a1f9db02245bd803dabbb18882db37642ce01fcdabca22a1815215b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_b99ea3937de0554ca6adc310613daed81d33c44b721b25a35ad1476744e5f9ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99ea3937de0554ca6adc310613daed81d33c44b721b25a35ad1476744e5f9ec->enter($__internal_b99ea3937de0554ca6adc310613daed81d33c44b721b25a35ad1476744e5f9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daf7d81a1f9db02245bd803dabbb18882db37642ce01fcdabca22a1815215b80->leave($__internal_daf7d81a1f9db02245bd803dabbb18882db37642ce01fcdabca22a1815215b80_prof);

        
        $__internal_b99ea3937de0554ca6adc310613daed81d33c44b721b25a35ad1476744e5f9ec->leave($__internal_b99ea3937de0554ca6adc310613daed81d33c44b721b25a35ad1476744e5f9ec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d023b5e169b30752f6b56b873279048c43702319c468f8afb5196fe2837871a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d023b5e169b30752f6b56b873279048c43702319c468f8afb5196fe2837871a->enter($__internal_4d023b5e169b30752f6b56b873279048c43702319c468f8afb5196fe2837871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_706701fc26b6a5b6c821cb6f923632688ced0ba569dbeec0e41f86cdc5ad82c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_706701fc26b6a5b6c821cb6f923632688ced0ba569dbeec0e41f86cdc5ad82c8->enter($__internal_706701fc26b6a5b6c821cb6f923632688ced0ba569dbeec0e41f86cdc5ad82c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_706701fc26b6a5b6c821cb6f923632688ced0ba569dbeec0e41f86cdc5ad82c8->leave($__internal_706701fc26b6a5b6c821cb6f923632688ced0ba569dbeec0e41f86cdc5ad82c8_prof);

        
        $__internal_4d023b5e169b30752f6b56b873279048c43702319c468f8afb5196fe2837871a->leave($__internal_4d023b5e169b30752f6b56b873279048c43702319c468f8afb5196fe2837871a_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2044537a160838e825a8429e9d13e9395df4aebeb2b7fa2a5111540bbbc7527e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2044537a160838e825a8429e9d13e9395df4aebeb2b7fa2a5111540bbbc7527e->enter($__internal_2044537a160838e825a8429e9d13e9395df4aebeb2b7fa2a5111540bbbc7527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8a28efa9daea38a5d20df68c03c829feefe3a8ee1ffe15bc3190d5aa4cd83817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a28efa9daea38a5d20df68c03c829feefe3a8ee1ffe15bc3190d5aa4cd83817->enter($__internal_8a28efa9daea38a5d20df68c03c829feefe3a8ee1ffe15bc3190d5aa4cd83817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_8a28efa9daea38a5d20df68c03c829feefe3a8ee1ffe15bc3190d5aa4cd83817->leave($__internal_8a28efa9daea38a5d20df68c03c829feefe3a8ee1ffe15bc3190d5aa4cd83817_prof);

        
        $__internal_2044537a160838e825a8429e9d13e9395df4aebeb2b7fa2a5111540bbbc7527e->leave($__internal_2044537a160838e825a8429e9d13e9395df4aebeb2b7fa2a5111540bbbc7527e_prof);

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
