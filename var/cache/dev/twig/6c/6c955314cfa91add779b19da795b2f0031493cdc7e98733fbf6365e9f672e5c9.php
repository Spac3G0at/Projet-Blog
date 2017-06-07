<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_e0d75de853a97ee80dd8edfe86d91737f099aeb6952a0a251fa788b3eb54759b extends Twig_Template
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
        $__internal_90f4bab87b13d9bf765ac7f46b01f8fde4934284216ecde3b2ff04af4e19cf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f4bab87b13d9bf765ac7f46b01f8fde4934284216ecde3b2ff04af4e19cf19->enter($__internal_90f4bab87b13d9bf765ac7f46b01f8fde4934284216ecde3b2ff04af4e19cf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_45d2f82bef6897357793356d22057fa4ceafc2f03dc3aabfb8ffb7bf98f674b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d2f82bef6897357793356d22057fa4ceafc2f03dc3aabfb8ffb7bf98f674b3->enter($__internal_45d2f82bef6897357793356d22057fa4ceafc2f03dc3aabfb8ffb7bf98f674b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_90f4bab87b13d9bf765ac7f46b01f8fde4934284216ecde3b2ff04af4e19cf19->leave($__internal_90f4bab87b13d9bf765ac7f46b01f8fde4934284216ecde3b2ff04af4e19cf19_prof);

        
        $__internal_45d2f82bef6897357793356d22057fa4ceafc2f03dc3aabfb8ffb7bf98f674b3->leave($__internal_45d2f82bef6897357793356d22057fa4ceafc2f03dc3aabfb8ffb7bf98f674b3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6724f7697162ef9379589f123f2614e14765cb7a3355182b9fb71b8418fc88dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6724f7697162ef9379589f123f2614e14765cb7a3355182b9fb71b8418fc88dd->enter($__internal_6724f7697162ef9379589f123f2614e14765cb7a3355182b9fb71b8418fc88dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20d3bd8e1ad817f74f3ed26bc995881d2ef8f7458e4cb8b6f10598a0e849d19e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d3bd8e1ad817f74f3ed26bc995881d2ef8f7458e4cb8b6f10598a0e849d19e->enter($__internal_20d3bd8e1ad817f74f3ed26bc995881d2ef8f7458e4cb8b6f10598a0e849d19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_20d3bd8e1ad817f74f3ed26bc995881d2ef8f7458e4cb8b6f10598a0e849d19e->leave($__internal_20d3bd8e1ad817f74f3ed26bc995881d2ef8f7458e4cb8b6f10598a0e849d19e_prof);

        
        $__internal_6724f7697162ef9379589f123f2614e14765cb7a3355182b9fb71b8418fc88dd->leave($__internal_6724f7697162ef9379589f123f2614e14765cb7a3355182b9fb71b8418fc88dd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/Modal/login.html.twig";
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
    {{ include('@FOSUser/Security/Modal/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/Modal/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login.html.twig");
    }
}
