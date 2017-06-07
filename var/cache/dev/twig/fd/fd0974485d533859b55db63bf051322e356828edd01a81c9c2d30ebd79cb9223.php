<?php

/* FOSUserBundle:Registration/Modal:confirmed.html.twig */
class __TwigTemplate_240028d391a8e01e13feb07e6c878ce04e49424e15f40ca0f6e68a822d3135e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration/Modal:confirmed.html.twig", 1);
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
        $__internal_85abec87c9a6c4853fe217083c7c1f0713f5451e3beb66808d73f156c298a325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85abec87c9a6c4853fe217083c7c1f0713f5451e3beb66808d73f156c298a325->enter($__internal_85abec87c9a6c4853fe217083c7c1f0713f5451e3beb66808d73f156c298a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $__internal_fa3970e2c7b50bc543084d6a516b35a9adf96d9f23eceb0586ddc334e29aa7ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3970e2c7b50bc543084d6a516b35a9adf96d9f23eceb0586ddc334e29aa7ea->enter($__internal_fa3970e2c7b50bc543084d6a516b35a9adf96d9f23eceb0586ddc334e29aa7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85abec87c9a6c4853fe217083c7c1f0713f5451e3beb66808d73f156c298a325->leave($__internal_85abec87c9a6c4853fe217083c7c1f0713f5451e3beb66808d73f156c298a325_prof);

        
        $__internal_fa3970e2c7b50bc543084d6a516b35a9adf96d9f23eceb0586ddc334e29aa7ea->leave($__internal_fa3970e2c7b50bc543084d6a516b35a9adf96d9f23eceb0586ddc334e29aa7ea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d878f4989feac8c0f0e9ab808719c0f9b974050d966312c485f5b54b8071c80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d878f4989feac8c0f0e9ab808719c0f9b974050d966312c485f5b54b8071c80b->enter($__internal_d878f4989feac8c0f0e9ab808719c0f9b974050d966312c485f5b54b8071c80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b8a909b88c96f879355a1f26c60ee92a0ce2a6abb8aad509dddba57a100a5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8a909b88c96f879355a1f26c60ee92a0ce2a6abb8aad509dddba57a100a5c4->enter($__internal_9b8a909b88c96f879355a1f26c60ee92a0ce2a6abb8aad509dddba57a100a5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9b8a909b88c96f879355a1f26c60ee92a0ce2a6abb8aad509dddba57a100a5c4->leave($__internal_9b8a909b88c96f879355a1f26c60ee92a0ce2a6abb8aad509dddba57a100a5c4_prof);

        
        $__internal_d878f4989feac8c0f0e9ab808719c0f9b974050d966312c485f5b54b8071c80b->leave($__internal_d878f4989feac8c0f0e9ab808719c0f9b974050d966312c485f5b54b8071c80b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:confirmed.html.twig";
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
", "FOSUserBundle:Registration/Modal:confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/confirmed.html.twig");
    }
}
