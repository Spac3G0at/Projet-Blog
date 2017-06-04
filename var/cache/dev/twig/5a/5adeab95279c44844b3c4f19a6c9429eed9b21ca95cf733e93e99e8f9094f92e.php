<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_4d576851984b740ab2b3074c977b0490757429cb20df1d219c75ecdd7aa67f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_1016f5e7e4f0ea189ea92519c1cc7aadf01d96cbeef1c1b06e445abf0d7ef88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1016f5e7e4f0ea189ea92519c1cc7aadf01d96cbeef1c1b06e445abf0d7ef88d->enter($__internal_1016f5e7e4f0ea189ea92519c1cc7aadf01d96cbeef1c1b06e445abf0d7ef88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_0d2c12e4b8b92cddf5e1e901e7a022f228bce2248f064a598f812aa5602ba162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2c12e4b8b92cddf5e1e901e7a022f228bce2248f064a598f812aa5602ba162->enter($__internal_0d2c12e4b8b92cddf5e1e901e7a022f228bce2248f064a598f812aa5602ba162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1016f5e7e4f0ea189ea92519c1cc7aadf01d96cbeef1c1b06e445abf0d7ef88d->leave($__internal_1016f5e7e4f0ea189ea92519c1cc7aadf01d96cbeef1c1b06e445abf0d7ef88d_prof);

        
        $__internal_0d2c12e4b8b92cddf5e1e901e7a022f228bce2248f064a598f812aa5602ba162->leave($__internal_0d2c12e4b8b92cddf5e1e901e7a022f228bce2248f064a598f812aa5602ba162_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dae73d80a584e48bfd527002e815e53ff86be54e4a7fc735de6533cceda1751c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae73d80a584e48bfd527002e815e53ff86be54e4a7fc735de6533cceda1751c->enter($__internal_dae73d80a584e48bfd527002e815e53ff86be54e4a7fc735de6533cceda1751c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36213722c2d6fc515de0fc887d717c3a9d70f3043b013af9c079dd828d475f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36213722c2d6fc515de0fc887d717c3a9d70f3043b013af9c079dd828d475f53->enter($__internal_36213722c2d6fc515de0fc887d717c3a9d70f3043b013af9c079dd828d475f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_36213722c2d6fc515de0fc887d717c3a9d70f3043b013af9c079dd828d475f53->leave($__internal_36213722c2d6fc515de0fc887d717c3a9d70f3043b013af9c079dd828d475f53_prof);

        
        $__internal_dae73d80a584e48bfd527002e815e53ff86be54e4a7fc735de6533cceda1751c->leave($__internal_dae73d80a584e48bfd527002e815e53ff86be54e4a7fc735de6533cceda1751c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
