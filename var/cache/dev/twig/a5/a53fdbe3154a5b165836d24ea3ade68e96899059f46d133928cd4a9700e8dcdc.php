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
        $__internal_b9e3a04fb6f6f2c4ddf78c96c6351ebebc38768842e2fcb075a4a43622d13628 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e3a04fb6f6f2c4ddf78c96c6351ebebc38768842e2fcb075a4a43622d13628->enter($__internal_b9e3a04fb6f6f2c4ddf78c96c6351ebebc38768842e2fcb075a4a43622d13628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_0fde918192646734a6387fb4a17d396ad26dee4fd004d2b20b7d3a49869928bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fde918192646734a6387fb4a17d396ad26dee4fd004d2b20b7d3a49869928bf->enter($__internal_0fde918192646734a6387fb4a17d396ad26dee4fd004d2b20b7d3a49869928bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e3a04fb6f6f2c4ddf78c96c6351ebebc38768842e2fcb075a4a43622d13628->leave($__internal_b9e3a04fb6f6f2c4ddf78c96c6351ebebc38768842e2fcb075a4a43622d13628_prof);

        
        $__internal_0fde918192646734a6387fb4a17d396ad26dee4fd004d2b20b7d3a49869928bf->leave($__internal_0fde918192646734a6387fb4a17d396ad26dee4fd004d2b20b7d3a49869928bf_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14431ad1369b7e262013a3f9cee79edce2ecc38d892c44bcff2f0b86a72d64cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14431ad1369b7e262013a3f9cee79edce2ecc38d892c44bcff2f0b86a72d64cb->enter($__internal_14431ad1369b7e262013a3f9cee79edce2ecc38d892c44bcff2f0b86a72d64cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d98b8c8168286892f10c452c56b946a1fee10e959d67bad9720b8b11a9e8380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d98b8c8168286892f10c452c56b946a1fee10e959d67bad9720b8b11a9e8380->enter($__internal_9d98b8c8168286892f10c452c56b946a1fee10e959d67bad9720b8b11a9e8380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_9d98b8c8168286892f10c452c56b946a1fee10e959d67bad9720b8b11a9e8380->leave($__internal_9d98b8c8168286892f10c452c56b946a1fee10e959d67bad9720b8b11a9e8380_prof);

        
        $__internal_14431ad1369b7e262013a3f9cee79edce2ecc38d892c44bcff2f0b86a72d64cb->leave($__internal_14431ad1369b7e262013a3f9cee79edce2ecc38d892c44bcff2f0b86a72d64cb_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80ff25652784c6809169f85c616737eed84c941a87b86cfc7227e86f61f25739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ff25652784c6809169f85c616737eed84c941a87b86cfc7227e86f61f25739->enter($__internal_80ff25652784c6809169f85c616737eed84c941a87b86cfc7227e86f61f25739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7d44c08325b25c66f7ad5feb97424068c008c0505b874ce192b9a537fb89b55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d44c08325b25c66f7ad5feb97424068c008c0505b874ce192b9a537fb89b55c->enter($__internal_7d44c08325b25c66f7ad5feb97424068c008c0505b874ce192b9a537fb89b55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_7d44c08325b25c66f7ad5feb97424068c008c0505b874ce192b9a537fb89b55c->leave($__internal_7d44c08325b25c66f7ad5feb97424068c008c0505b874ce192b9a537fb89b55c_prof);

        
        $__internal_80ff25652784c6809169f85c616737eed84c941a87b86cfc7227e86f61f25739->leave($__internal_80ff25652784c6809169f85c616737eed84c941a87b86cfc7227e86f61f25739_prof);

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
