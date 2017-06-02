<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_d89ed5e953e304551ca7f6c82e4675afdd9722bb523469cf57b44a2c55ac1b80 extends Twig_Template
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
        $__internal_88b789c76a72a86bcf6cb5628667fec180a0910f4eec679d3b43a9abeb3dcc29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b789c76a72a86bcf6cb5628667fec180a0910f4eec679d3b43a9abeb3dcc29->enter($__internal_88b789c76a72a86bcf6cb5628667fec180a0910f4eec679d3b43a9abeb3dcc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_ae6999d59bf4b608c79a2881a6c4463578e5a7672f94625c57d04d81fe693f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6999d59bf4b608c79a2881a6c4463578e5a7672f94625c57d04d81fe693f4d->enter($__internal_ae6999d59bf4b608c79a2881a6c4463578e5a7672f94625c57d04d81fe693f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_88b789c76a72a86bcf6cb5628667fec180a0910f4eec679d3b43a9abeb3dcc29->leave($__internal_88b789c76a72a86bcf6cb5628667fec180a0910f4eec679d3b43a9abeb3dcc29_prof);

        
        $__internal_ae6999d59bf4b608c79a2881a6c4463578e5a7672f94625c57d04d81fe693f4d->leave($__internal_ae6999d59bf4b608c79a2881a6c4463578e5a7672f94625c57d04d81fe693f4d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a8dc431ecfb748adacb10e3a20016dfcc12d53fd6ca8899f2721901902f3ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8dc431ecfb748adacb10e3a20016dfcc12d53fd6ca8899f2721901902f3ad7->enter($__internal_3a8dc431ecfb748adacb10e3a20016dfcc12d53fd6ca8899f2721901902f3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d8c0b3a5efa7e0a92dbfd1c24d90538d99f87bebf2f269a379a6c692cdf3a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8c0b3a5efa7e0a92dbfd1c24d90538d99f87bebf2f269a379a6c692cdf3a01->enter($__internal_5d8c0b3a5efa7e0a92dbfd1c24d90538d99f87bebf2f269a379a6c692cdf3a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_5d8c0b3a5efa7e0a92dbfd1c24d90538d99f87bebf2f269a379a6c692cdf3a01->leave($__internal_5d8c0b3a5efa7e0a92dbfd1c24d90538d99f87bebf2f269a379a6c692cdf3a01_prof);

        
        $__internal_3a8dc431ecfb748adacb10e3a20016dfcc12d53fd6ca8899f2721901902f3ad7->leave($__internal_3a8dc431ecfb748adacb10e3a20016dfcc12d53fd6ca8899f2721901902f3ad7_prof);

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
