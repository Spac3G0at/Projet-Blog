<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_80bb32e6f54d6071c3d38c48652f0cb4e6e7fe32bd6a4371ba86a03c402622ca extends Twig_Template
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
        $__internal_7cda5603f10f99ce87cb1b47d64dfc3198472390233c60ecf47b878dac488d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cda5603f10f99ce87cb1b47d64dfc3198472390233c60ecf47b878dac488d14->enter($__internal_7cda5603f10f99ce87cb1b47d64dfc3198472390233c60ecf47b878dac488d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_be27928279f99eed73ea9a42b3358ccd3da88ba0b9f3553693c7e7f14d6b02f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be27928279f99eed73ea9a42b3358ccd3da88ba0b9f3553693c7e7f14d6b02f0->enter($__internal_be27928279f99eed73ea9a42b3358ccd3da88ba0b9f3553693c7e7f14d6b02f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_7cda5603f10f99ce87cb1b47d64dfc3198472390233c60ecf47b878dac488d14->leave($__internal_7cda5603f10f99ce87cb1b47d64dfc3198472390233c60ecf47b878dac488d14_prof);

        
        $__internal_be27928279f99eed73ea9a42b3358ccd3da88ba0b9f3553693c7e7f14d6b02f0->leave($__internal_be27928279f99eed73ea9a42b3358ccd3da88ba0b9f3553693c7e7f14d6b02f0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45c861f3ee1a53d0ff2845c76cc01584c6063ef52aca4f81f6a15c3d4db069b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45c861f3ee1a53d0ff2845c76cc01584c6063ef52aca4f81f6a15c3d4db069b4->enter($__internal_45c861f3ee1a53d0ff2845c76cc01584c6063ef52aca4f81f6a15c3d4db069b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34a319ddf88b6c72e86ce3d2143da353c32acddb394846eda7d6e631c46ccec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a319ddf88b6c72e86ce3d2143da353c32acddb394846eda7d6e631c46ccec1->enter($__internal_34a319ddf88b6c72e86ce3d2143da353c32acddb394846eda7d6e631c46ccec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_34a319ddf88b6c72e86ce3d2143da353c32acddb394846eda7d6e631c46ccec1->leave($__internal_34a319ddf88b6c72e86ce3d2143da353c32acddb394846eda7d6e631c46ccec1_prof);

        
        $__internal_45c861f3ee1a53d0ff2845c76cc01584c6063ef52aca4f81f6a15c3d4db069b4->leave($__internal_45c861f3ee1a53d0ff2845c76cc01584c6063ef52aca4f81f6a15c3d4db069b4_prof);

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
