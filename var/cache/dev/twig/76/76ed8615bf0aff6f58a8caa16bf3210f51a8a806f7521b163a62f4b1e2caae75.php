<?php

/* FOSUserBundle:Registration/Modal:check_email.html.twig */
class __TwigTemplate_9124a94e36e6327bd4264cad7bba7775a46cf735379ecd6bcc4c1ee811a58dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration/Modal:check_email.html.twig", 1);
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
        $__internal_c97bfa2d56cad386edd3a60c3fb30cfea9410e3dad7d87d88a2e780797be4d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97bfa2d56cad386edd3a60c3fb30cfea9410e3dad7d87d88a2e780797be4d3f->enter($__internal_c97bfa2d56cad386edd3a60c3fb30cfea9410e3dad7d87d88a2e780797be4d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $__internal_789a481696a217be7c93851a195367728334c35635bf07d617ab43f06b7da23f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_789a481696a217be7c93851a195367728334c35635bf07d617ab43f06b7da23f->enter($__internal_789a481696a217be7c93851a195367728334c35635bf07d617ab43f06b7da23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97bfa2d56cad386edd3a60c3fb30cfea9410e3dad7d87d88a2e780797be4d3f->leave($__internal_c97bfa2d56cad386edd3a60c3fb30cfea9410e3dad7d87d88a2e780797be4d3f_prof);

        
        $__internal_789a481696a217be7c93851a195367728334c35635bf07d617ab43f06b7da23f->leave($__internal_789a481696a217be7c93851a195367728334c35635bf07d617ab43f06b7da23f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f9f59e9afe26f66dfbbbc2a9a8b31cd29a26b11edd8f8dbd278d82031290462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f9f59e9afe26f66dfbbbc2a9a8b31cd29a26b11edd8f8dbd278d82031290462->enter($__internal_3f9f59e9afe26f66dfbbbc2a9a8b31cd29a26b11edd8f8dbd278d82031290462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f7792639f801d8eeadf08a9d45c3bb78cbe23b281883edc4260cbff7e625c242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7792639f801d8eeadf08a9d45c3bb78cbe23b281883edc4260cbff7e625c242->enter($__internal_f7792639f801d8eeadf08a9d45c3bb78cbe23b281883edc4260cbff7e625c242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f7792639f801d8eeadf08a9d45c3bb78cbe23b281883edc4260cbff7e625c242->leave($__internal_f7792639f801d8eeadf08a9d45c3bb78cbe23b281883edc4260cbff7e625c242_prof);

        
        $__internal_3f9f59e9afe26f66dfbbbc2a9a8b31cd29a26b11edd8f8dbd278d82031290462->leave($__internal_3f9f59e9afe26f66dfbbbc2a9a8b31cd29a26b11edd8f8dbd278d82031290462_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration/Modal:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/check_email.html.twig");
    }
}
