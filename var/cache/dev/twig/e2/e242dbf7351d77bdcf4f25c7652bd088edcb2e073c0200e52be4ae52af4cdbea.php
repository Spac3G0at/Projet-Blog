<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_58295f4be7798145a30f6ad84c3d0341a9b68c423f0cc83157994819db580f11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d665cc660335ccfd6aa8da36ee00a1eadfe9338bba81bd07efa686b02fd40505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d665cc660335ccfd6aa8da36ee00a1eadfe9338bba81bd07efa686b02fd40505->enter($__internal_d665cc660335ccfd6aa8da36ee00a1eadfe9338bba81bd07efa686b02fd40505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_6d42f7414e85919398e06719998e8e9777eefada9b7115b11e1ca2863d96e7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d42f7414e85919398e06719998e8e9777eefada9b7115b11e1ca2863d96e7e2->enter($__internal_6d42f7414e85919398e06719998e8e9777eefada9b7115b11e1ca2863d96e7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d665cc660335ccfd6aa8da36ee00a1eadfe9338bba81bd07efa686b02fd40505->leave($__internal_d665cc660335ccfd6aa8da36ee00a1eadfe9338bba81bd07efa686b02fd40505_prof);

        
        $__internal_6d42f7414e85919398e06719998e8e9777eefada9b7115b11e1ca2863d96e7e2->leave($__internal_6d42f7414e85919398e06719998e8e9777eefada9b7115b11e1ca2863d96e7e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_690b8f6adcb62151118bb8ee9cee2272d22636704584054aba716ddac299be65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690b8f6adcb62151118bb8ee9cee2272d22636704584054aba716ddac299be65->enter($__internal_690b8f6adcb62151118bb8ee9cee2272d22636704584054aba716ddac299be65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_104555a823371bc31587acb6a8badc23377b49d3f2eb15c8a7a66f27bf5a57b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104555a823371bc31587acb6a8badc23377b49d3f2eb15c8a7a66f27bf5a57b8->enter($__internal_104555a823371bc31587acb6a8badc23377b49d3f2eb15c8a7a66f27bf5a57b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_104555a823371bc31587acb6a8badc23377b49d3f2eb15c8a7a66f27bf5a57b8->leave($__internal_104555a823371bc31587acb6a8badc23377b49d3f2eb15c8a7a66f27bf5a57b8_prof);

        
        $__internal_690b8f6adcb62151118bb8ee9cee2272d22636704584054aba716ddac299be65->leave($__internal_690b8f6adcb62151118bb8ee9cee2272d22636704584054aba716ddac299be65_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
