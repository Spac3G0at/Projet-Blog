<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e6744eeaf163b2b4c8f18e680f8ce33a000cd79e5350c960cf34f057c98e8aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc3e75819aa532bc355a03663812a164edb58a4cb78d4809070c3d0a77401a84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc3e75819aa532bc355a03663812a164edb58a4cb78d4809070c3d0a77401a84->enter($__internal_dc3e75819aa532bc355a03663812a164edb58a4cb78d4809070c3d0a77401a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e12837e2554fda954dca7e403c04ee260e970e844e2d1b5189c3a5d73d18ee18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12837e2554fda954dca7e403c04ee260e970e844e2d1b5189c3a5d73d18ee18->enter($__internal_e12837e2554fda954dca7e403c04ee260e970e844e2d1b5189c3a5d73d18ee18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc3e75819aa532bc355a03663812a164edb58a4cb78d4809070c3d0a77401a84->leave($__internal_dc3e75819aa532bc355a03663812a164edb58a4cb78d4809070c3d0a77401a84_prof);

        
        $__internal_e12837e2554fda954dca7e403c04ee260e970e844e2d1b5189c3a5d73d18ee18->leave($__internal_e12837e2554fda954dca7e403c04ee260e970e844e2d1b5189c3a5d73d18ee18_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03b3405756dd59114cc3d7ebbb82b1966f9c0b8fbfc50d8f630d6b560d7ca8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b3405756dd59114cc3d7ebbb82b1966f9c0b8fbfc50d8f630d6b560d7ca8e5->enter($__internal_03b3405756dd59114cc3d7ebbb82b1966f9c0b8fbfc50d8f630d6b560d7ca8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b87d66649575b2558cc9b204117ca7dee743d65847c53922f70692918aa5b9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87d66649575b2558cc9b204117ca7dee743d65847c53922f70692918aa5b9d9->enter($__internal_b87d66649575b2558cc9b204117ca7dee743d65847c53922f70692918aa5b9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_b87d66649575b2558cc9b204117ca7dee743d65847c53922f70692918aa5b9d9->leave($__internal_b87d66649575b2558cc9b204117ca7dee743d65847c53922f70692918aa5b9d9_prof);

        
        $__internal_03b3405756dd59114cc3d7ebbb82b1966f9c0b8fbfc50d8f630d6b560d7ca8e5->leave($__internal_03b3405756dd59114cc3d7ebbb82b1966f9c0b8fbfc50d8f630d6b560d7ca8e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
