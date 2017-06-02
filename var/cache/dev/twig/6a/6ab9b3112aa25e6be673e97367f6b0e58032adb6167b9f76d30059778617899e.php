<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_654c192d31fb7c5b60340031e40767b32ed7958d65e7800d039ec1b50cc98335 extends Twig_Template
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
        $__internal_647ae36126e8dfb803868625f6ad9cb786c592af698af409bf0c380015182e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_647ae36126e8dfb803868625f6ad9cb786c592af698af409bf0c380015182e9b->enter($__internal_647ae36126e8dfb803868625f6ad9cb786c592af698af409bf0c380015182e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_f3800ad35bad75bdcc747185846015075d1d6ec7d852c6894809e893d64db7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3800ad35bad75bdcc747185846015075d1d6ec7d852c6894809e893d64db7d0->enter($__internal_f3800ad35bad75bdcc747185846015075d1d6ec7d852c6894809e893d64db7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_647ae36126e8dfb803868625f6ad9cb786c592af698af409bf0c380015182e9b->leave($__internal_647ae36126e8dfb803868625f6ad9cb786c592af698af409bf0c380015182e9b_prof);

        
        $__internal_f3800ad35bad75bdcc747185846015075d1d6ec7d852c6894809e893d64db7d0->leave($__internal_f3800ad35bad75bdcc747185846015075d1d6ec7d852c6894809e893d64db7d0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8750852e7a0fba86d7f6c508eab5740c35728e71fb1bdc9c04e322eaadc48729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8750852e7a0fba86d7f6c508eab5740c35728e71fb1bdc9c04e322eaadc48729->enter($__internal_8750852e7a0fba86d7f6c508eab5740c35728e71fb1bdc9c04e322eaadc48729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5dee569e1942fb3f241a99671df097774074b4aa0d9d6cdaa864342c7ee4b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5dee569e1942fb3f241a99671df097774074b4aa0d9d6cdaa864342c7ee4b13->enter($__internal_c5dee569e1942fb3f241a99671df097774074b4aa0d9d6cdaa864342c7ee4b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c5dee569e1942fb3f241a99671df097774074b4aa0d9d6cdaa864342c7ee4b13->leave($__internal_c5dee569e1942fb3f241a99671df097774074b4aa0d9d6cdaa864342c7ee4b13_prof);

        
        $__internal_8750852e7a0fba86d7f6c508eab5740c35728e71fb1bdc9c04e322eaadc48729->leave($__internal_8750852e7a0fba86d7f6c508eab5740c35728e71fb1bdc9c04e322eaadc48729_prof);

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
