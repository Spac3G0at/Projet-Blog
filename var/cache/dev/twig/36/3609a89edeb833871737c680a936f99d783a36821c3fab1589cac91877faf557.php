<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_699e67d01a5a813515d5831d2a7c88b73b07b40b5a48555455afac50954eb4fe extends Twig_Template
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
        $__internal_bb8400491c974f0fe369302ac558df7b2b96176e4be062f2af03575087b26d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8400491c974f0fe369302ac558df7b2b96176e4be062f2af03575087b26d9c->enter($__internal_bb8400491c974f0fe369302ac558df7b2b96176e4be062f2af03575087b26d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_fc6f496f7cf43da98596d11218d348574ed00ef3f4963436ab1195ff313eb61c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6f496f7cf43da98596d11218d348574ed00ef3f4963436ab1195ff313eb61c->enter($__internal_fc6f496f7cf43da98596d11218d348574ed00ef3f4963436ab1195ff313eb61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_bb8400491c974f0fe369302ac558df7b2b96176e4be062f2af03575087b26d9c->leave($__internal_bb8400491c974f0fe369302ac558df7b2b96176e4be062f2af03575087b26d9c_prof);

        
        $__internal_fc6f496f7cf43da98596d11218d348574ed00ef3f4963436ab1195ff313eb61c->leave($__internal_fc6f496f7cf43da98596d11218d348574ed00ef3f4963436ab1195ff313eb61c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b21b8b69e0400770cf5bb2735b7f5e5dc05b4206487514d836278815f3959943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21b8b69e0400770cf5bb2735b7f5e5dc05b4206487514d836278815f3959943->enter($__internal_b21b8b69e0400770cf5bb2735b7f5e5dc05b4206487514d836278815f3959943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e84bf8dfc8a7e9f1ef61fb5fe4eba4f5526033dbf2699841b4b50bc2802b26a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84bf8dfc8a7e9f1ef61fb5fe4eba4f5526033dbf2699841b4b50bc2802b26a5->enter($__internal_e84bf8dfc8a7e9f1ef61fb5fe4eba4f5526033dbf2699841b4b50bc2802b26a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e84bf8dfc8a7e9f1ef61fb5fe4eba4f5526033dbf2699841b4b50bc2802b26a5->leave($__internal_e84bf8dfc8a7e9f1ef61fb5fe4eba4f5526033dbf2699841b4b50bc2802b26a5_prof);

        
        $__internal_b21b8b69e0400770cf5bb2735b7f5e5dc05b4206487514d836278815f3959943->leave($__internal_b21b8b69e0400770cf5bb2735b7f5e5dc05b4206487514d836278815f3959943_prof);

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
