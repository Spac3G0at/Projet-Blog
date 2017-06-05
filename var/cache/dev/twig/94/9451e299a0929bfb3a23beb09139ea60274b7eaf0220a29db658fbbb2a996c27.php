<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9706713c25c363cdea73b0ec30a3b2637f99dec1d3fa7ad5fb22981b06024285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_309b70519131d32a0a4746182bc066cf245ec4808c870adac44322fc506ca1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309b70519131d32a0a4746182bc066cf245ec4808c870adac44322fc506ca1f0->enter($__internal_309b70519131d32a0a4746182bc066cf245ec4808c870adac44322fc506ca1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_becea4577f093abb600287ba0a6fa900573841b6ed594209d18a9991f213cb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_becea4577f093abb600287ba0a6fa900573841b6ed594209d18a9991f213cb9b->enter($__internal_becea4577f093abb600287ba0a6fa900573841b6ed594209d18a9991f213cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_309b70519131d32a0a4746182bc066cf245ec4808c870adac44322fc506ca1f0->leave($__internal_309b70519131d32a0a4746182bc066cf245ec4808c870adac44322fc506ca1f0_prof);

        
        $__internal_becea4577f093abb600287ba0a6fa900573841b6ed594209d18a9991f213cb9b->leave($__internal_becea4577f093abb600287ba0a6fa900573841b6ed594209d18a9991f213cb9b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a84755fd0bc0e5355909a5c29a97591995d75e99fe7725054cab481c8f8f956a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84755fd0bc0e5355909a5c29a97591995d75e99fe7725054cab481c8f8f956a->enter($__internal_a84755fd0bc0e5355909a5c29a97591995d75e99fe7725054cab481c8f8f956a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9942e8f33de6c74f2298c41d29891dc1c6cb191d51d68d3f301e40e586687210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9942e8f33de6c74f2298c41d29891dc1c6cb191d51d68d3f301e40e586687210->enter($__internal_9942e8f33de6c74f2298c41d29891dc1c6cb191d51d68d3f301e40e586687210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9942e8f33de6c74f2298c41d29891dc1c6cb191d51d68d3f301e40e586687210->leave($__internal_9942e8f33de6c74f2298c41d29891dc1c6cb191d51d68d3f301e40e586687210_prof);

        
        $__internal_a84755fd0bc0e5355909a5c29a97591995d75e99fe7725054cab481c8f8f956a->leave($__internal_a84755fd0bc0e5355909a5c29a97591995d75e99fe7725054cab481c8f8f956a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
