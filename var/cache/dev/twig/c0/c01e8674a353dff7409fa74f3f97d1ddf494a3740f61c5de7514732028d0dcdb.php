<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_c4573ef71992498a698d61c3a5de8e7dfba65a082cc8dc485db44ad0a257890e extends Twig_Template
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
        $__internal_7452bcab7db0321ce6adf9e8afa8abd5b15c947536c98400f56f79aba1834e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7452bcab7db0321ce6adf9e8afa8abd5b15c947536c98400f56f79aba1834e04->enter($__internal_7452bcab7db0321ce6adf9e8afa8abd5b15c947536c98400f56f79aba1834e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_f10fa0a8aa94e6d1ffd2bbe9f2598dc44245f4e0fcd1f9182e21d4ad56b2b18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10fa0a8aa94e6d1ffd2bbe9f2598dc44245f4e0fcd1f9182e21d4ad56b2b18c->enter($__internal_f10fa0a8aa94e6d1ffd2bbe9f2598dc44245f4e0fcd1f9182e21d4ad56b2b18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_7452bcab7db0321ce6adf9e8afa8abd5b15c947536c98400f56f79aba1834e04->leave($__internal_7452bcab7db0321ce6adf9e8afa8abd5b15c947536c98400f56f79aba1834e04_prof);

        
        $__internal_f10fa0a8aa94e6d1ffd2bbe9f2598dc44245f4e0fcd1f9182e21d4ad56b2b18c->leave($__internal_f10fa0a8aa94e6d1ffd2bbe9f2598dc44245f4e0fcd1f9182e21d4ad56b2b18c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e3cfc35c491aea9d7914d130de79830070f0e897279a6e4f84a77c434888d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3cfc35c491aea9d7914d130de79830070f0e897279a6e4f84a77c434888d8b->enter($__internal_9e3cfc35c491aea9d7914d130de79830070f0e897279a6e4f84a77c434888d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_98b027c134de271fd72e839dd399c3fd894a0b13924d1dd868eb42400280859d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b027c134de271fd72e839dd399c3fd894a0b13924d1dd868eb42400280859d->enter($__internal_98b027c134de271fd72e839dd399c3fd894a0b13924d1dd868eb42400280859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_98b027c134de271fd72e839dd399c3fd894a0b13924d1dd868eb42400280859d->leave($__internal_98b027c134de271fd72e839dd399c3fd894a0b13924d1dd868eb42400280859d_prof);

        
        $__internal_9e3cfc35c491aea9d7914d130de79830070f0e897279a6e4f84a77c434888d8b->leave($__internal_9e3cfc35c491aea9d7914d130de79830070f0e897279a6e4f84a77c434888d8b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register.html.twig";
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
{% include \"@FOSUser/Registration/Modal/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/Modal/register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
