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
        $__internal_474c469375d5bcf5e86f013cf2d67dc821c7d8c35b093e507f26c8c39a143e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474c469375d5bcf5e86f013cf2d67dc821c7d8c35b093e507f26c8c39a143e72->enter($__internal_474c469375d5bcf5e86f013cf2d67dc821c7d8c35b093e507f26c8c39a143e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $__internal_e5a56d54855ebbcb9067e5f998e026e806cb928838a1b47ec488a384bae3b34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a56d54855ebbcb9067e5f998e026e806cb928838a1b47ec488a384bae3b34a->enter($__internal_e5a56d54855ebbcb9067e5f998e026e806cb928838a1b47ec488a384bae3b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474c469375d5bcf5e86f013cf2d67dc821c7d8c35b093e507f26c8c39a143e72->leave($__internal_474c469375d5bcf5e86f013cf2d67dc821c7d8c35b093e507f26c8c39a143e72_prof);

        
        $__internal_e5a56d54855ebbcb9067e5f998e026e806cb928838a1b47ec488a384bae3b34a->leave($__internal_e5a56d54855ebbcb9067e5f998e026e806cb928838a1b47ec488a384bae3b34a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d039233c35bcc05bb1933c456c7b9340980ac34d7b5ef8c3160333cb76cb86c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d039233c35bcc05bb1933c456c7b9340980ac34d7b5ef8c3160333cb76cb86c4->enter($__internal_d039233c35bcc05bb1933c456c7b9340980ac34d7b5ef8c3160333cb76cb86c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319e2a8f64c646c85db420457b931edf05fcc7d37e94cbbc16d7140a87290261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319e2a8f64c646c85db420457b931edf05fcc7d37e94cbbc16d7140a87290261->enter($__internal_319e2a8f64c646c85db420457b931edf05fcc7d37e94cbbc16d7140a87290261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_319e2a8f64c646c85db420457b931edf05fcc7d37e94cbbc16d7140a87290261->leave($__internal_319e2a8f64c646c85db420457b931edf05fcc7d37e94cbbc16d7140a87290261_prof);

        
        $__internal_d039233c35bcc05bb1933c456c7b9340980ac34d7b5ef8c3160333cb76cb86c4->leave($__internal_d039233c35bcc05bb1933c456c7b9340980ac34d7b5ef8c3160333cb76cb86c4_prof);

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
