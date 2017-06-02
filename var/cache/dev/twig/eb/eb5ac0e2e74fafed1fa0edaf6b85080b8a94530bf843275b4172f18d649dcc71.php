<?php

/* FOSUserBundle:Registration/Modal:confirmed.html.twig */
class __TwigTemplate_0d32b4c910bb0d525a12c3ca9117607ae96afff0f1140d8a2da39e64cfd5a0a4 extends Twig_Template
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
        $__internal_5b9869db4121325614a90d053adbb3817ae1e069a65b431c23a424f8c6e5e5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9869db4121325614a90d053adbb3817ae1e069a65b431c23a424f8c6e5e5e9->enter($__internal_5b9869db4121325614a90d053adbb3817ae1e069a65b431c23a424f8c6e5e5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $__internal_96d897bf409688e339d7d6d97409f061eb6a457f96862f048c08dbff098ff94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d897bf409688e339d7d6d97409f061eb6a457f96862f048c08dbff098ff94b->enter($__internal_96d897bf409688e339d7d6d97409f061eb6a457f96862f048c08dbff098ff94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b9869db4121325614a90d053adbb3817ae1e069a65b431c23a424f8c6e5e5e9->leave($__internal_5b9869db4121325614a90d053adbb3817ae1e069a65b431c23a424f8c6e5e5e9_prof);

        
        $__internal_96d897bf409688e339d7d6d97409f061eb6a457f96862f048c08dbff098ff94b->leave($__internal_96d897bf409688e339d7d6d97409f061eb6a457f96862f048c08dbff098ff94b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02429f014cb540eaf5fa418e91ded57a82fceae526e7e19eadf685eb21dd6810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02429f014cb540eaf5fa418e91ded57a82fceae526e7e19eadf685eb21dd6810->enter($__internal_02429f014cb540eaf5fa418e91ded57a82fceae526e7e19eadf685eb21dd6810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1047d7436d63d46a8028cfd590ab448003e66710fa8540538e7ce4f95ce43738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1047d7436d63d46a8028cfd590ab448003e66710fa8540538e7ce4f95ce43738->enter($__internal_1047d7436d63d46a8028cfd590ab448003e66710fa8540538e7ce4f95ce43738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1047d7436d63d46a8028cfd590ab448003e66710fa8540538e7ce4f95ce43738->leave($__internal_1047d7436d63d46a8028cfd590ab448003e66710fa8540538e7ce4f95ce43738_prof);

        
        $__internal_02429f014cb540eaf5fa418e91ded57a82fceae526e7e19eadf685eb21dd6810->leave($__internal_02429f014cb540eaf5fa418e91ded57a82fceae526e7e19eadf685eb21dd6810_prof);

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
