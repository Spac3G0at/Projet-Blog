<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1bbe03c8b93e638aa4c8295f9cd73781434698185b649da0a803f3579d7498e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_db1afc85a4e7d773b4b74bcb45a4350e3aaf6c241bd1639979a85085bc419742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1afc85a4e7d773b4b74bcb45a4350e3aaf6c241bd1639979a85085bc419742->enter($__internal_db1afc85a4e7d773b4b74bcb45a4350e3aaf6c241bd1639979a85085bc419742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_749dd6fdde5c3dd9d62436d97d27bae7b814a985250ce12d08a712be22bdbbba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749dd6fdde5c3dd9d62436d97d27bae7b814a985250ce12d08a712be22bdbbba->enter($__internal_749dd6fdde5c3dd9d62436d97d27bae7b814a985250ce12d08a712be22bdbbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db1afc85a4e7d773b4b74bcb45a4350e3aaf6c241bd1639979a85085bc419742->leave($__internal_db1afc85a4e7d773b4b74bcb45a4350e3aaf6c241bd1639979a85085bc419742_prof);

        
        $__internal_749dd6fdde5c3dd9d62436d97d27bae7b814a985250ce12d08a712be22bdbbba->leave($__internal_749dd6fdde5c3dd9d62436d97d27bae7b814a985250ce12d08a712be22bdbbba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c015f431aaabc9fa7b66e6df6b4cb6cb3e67e16f5fb03cc4e981895676e50b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c015f431aaabc9fa7b66e6df6b4cb6cb3e67e16f5fb03cc4e981895676e50b92->enter($__internal_c015f431aaabc9fa7b66e6df6b4cb6cb3e67e16f5fb03cc4e981895676e50b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5ffcb6a2eb14189f8efb354913e593e87bfbc5f11f0b1699ee9f72d11047c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ffcb6a2eb14189f8efb354913e593e87bfbc5f11f0b1699ee9f72d11047c57->enter($__internal_c5ffcb6a2eb14189f8efb354913e593e87bfbc5f11f0b1699ee9f72d11047c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_c5ffcb6a2eb14189f8efb354913e593e87bfbc5f11f0b1699ee9f72d11047c57->leave($__internal_c5ffcb6a2eb14189f8efb354913e593e87bfbc5f11f0b1699ee9f72d11047c57_prof);

        
        $__internal_c015f431aaabc9fa7b66e6df6b4cb6cb3e67e16f5fb03cc4e981895676e50b92->leave($__internal_c015f431aaabc9fa7b66e6df6b4cb6cb3e67e16f5fb03cc4e981895676e50b92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
