<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7915ca6531085e54d488f5ed1fc25c802219e6a8a41e6b6171c95e814cf69e45 extends Twig_Template
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
        $__internal_eac8124f003f680b2821ed3e357c6ae64449fffde15ca3fe3426c7e37ad9e6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac8124f003f680b2821ed3e357c6ae64449fffde15ca3fe3426c7e37ad9e6e5->enter($__internal_eac8124f003f680b2821ed3e357c6ae64449fffde15ca3fe3426c7e37ad9e6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_0ca1c1bb0c84cd3ca9fc2b553b928e66927be879bc6bd0cac420d8967daa3c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca1c1bb0c84cd3ca9fc2b553b928e66927be879bc6bd0cac420d8967daa3c03->enter($__internal_0ca1c1bb0c84cd3ca9fc2b553b928e66927be879bc6bd0cac420d8967daa3c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac8124f003f680b2821ed3e357c6ae64449fffde15ca3fe3426c7e37ad9e6e5->leave($__internal_eac8124f003f680b2821ed3e357c6ae64449fffde15ca3fe3426c7e37ad9e6e5_prof);

        
        $__internal_0ca1c1bb0c84cd3ca9fc2b553b928e66927be879bc6bd0cac420d8967daa3c03->leave($__internal_0ca1c1bb0c84cd3ca9fc2b553b928e66927be879bc6bd0cac420d8967daa3c03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c6f0f8fa803afb84b204a65558caedcc7e388b4c5f911481a6c0fb19cb8b0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c6f0f8fa803afb84b204a65558caedcc7e388b4c5f911481a6c0fb19cb8b0f6->enter($__internal_0c6f0f8fa803afb84b204a65558caedcc7e388b4c5f911481a6c0fb19cb8b0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90eec75e144e8d5042e409dc9c1ac75b0838df82d63d0889fb54e33acd537a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90eec75e144e8d5042e409dc9c1ac75b0838df82d63d0889fb54e33acd537a39->enter($__internal_90eec75e144e8d5042e409dc9c1ac75b0838df82d63d0889fb54e33acd537a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_90eec75e144e8d5042e409dc9c1ac75b0838df82d63d0889fb54e33acd537a39->leave($__internal_90eec75e144e8d5042e409dc9c1ac75b0838df82d63d0889fb54e33acd537a39_prof);

        
        $__internal_0c6f0f8fa803afb84b204a65558caedcc7e388b4c5f911481a6c0fb19cb8b0f6->leave($__internal_0c6f0f8fa803afb84b204a65558caedcc7e388b4c5f911481a6c0fb19cb8b0f6_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab00d10110a5cef55a8a6c1ff0b5bd599b3ad1f4d8abd528b04f4611e040c7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab00d10110a5cef55a8a6c1ff0b5bd599b3ad1f4d8abd528b04f4611e040c7d1->enter($__internal_ab00d10110a5cef55a8a6c1ff0b5bd599b3ad1f4d8abd528b04f4611e040c7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_81a6f760761617731c294acd25ff13ca4390655cd564ba1f5bf22d8c0fdb39e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a6f760761617731c294acd25ff13ca4390655cd564ba1f5bf22d8c0fdb39e3->enter($__internal_81a6f760761617731c294acd25ff13ca4390655cd564ba1f5bf22d8c0fdb39e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_81a6f760761617731c294acd25ff13ca4390655cd564ba1f5bf22d8c0fdb39e3->leave($__internal_81a6f760761617731c294acd25ff13ca4390655cd564ba1f5bf22d8c0fdb39e3_prof);

        
        $__internal_ab00d10110a5cef55a8a6c1ff0b5bd599b3ad1f4d8abd528b04f4611e040c7d1->leave($__internal_ab00d10110a5cef55a8a6c1ff0b5bd599b3ad1f4d8abd528b04f4611e040c7d1_prof);

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
