<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_fc6cdd2fddf373bba7396b97405cf3e29e30d247ffeb1a8adeb745b17c26dc83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4b3d5dfca30d43628f6ede053877f3446522dedf084e603853d88a74ec4ffe5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3d5dfca30d43628f6ede053877f3446522dedf084e603853d88a74ec4ffe5b->enter($__internal_4b3d5dfca30d43628f6ede053877f3446522dedf084e603853d88a74ec4ffe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_9c048dc6b4f8ce33d47af68258aa27e16c92b43a37cb079a66873e1d76a444a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c048dc6b4f8ce33d47af68258aa27e16c92b43a37cb079a66873e1d76a444a4->enter($__internal_9c048dc6b4f8ce33d47af68258aa27e16c92b43a37cb079a66873e1d76a444a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b3d5dfca30d43628f6ede053877f3446522dedf084e603853d88a74ec4ffe5b->leave($__internal_4b3d5dfca30d43628f6ede053877f3446522dedf084e603853d88a74ec4ffe5b_prof);

        
        $__internal_9c048dc6b4f8ce33d47af68258aa27e16c92b43a37cb079a66873e1d76a444a4->leave($__internal_9c048dc6b4f8ce33d47af68258aa27e16c92b43a37cb079a66873e1d76a444a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b59d478c722933cafea72366a998c79640f6b771dec4e6a60db90a2901b23e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b59d478c722933cafea72366a998c79640f6b771dec4e6a60db90a2901b23e7->enter($__internal_3b59d478c722933cafea72366a998c79640f6b771dec4e6a60db90a2901b23e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f9c3a05925065ec45f8c990339d14dc6c00f2fa2c46131c580ef0519e683a9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c3a05925065ec45f8c990339d14dc6c00f2fa2c46131c580ef0519e683a9dc->enter($__internal_f9c3a05925065ec45f8c990339d14dc6c00f2fa2c46131c580ef0519e683a9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f9c3a05925065ec45f8c990339d14dc6c00f2fa2c46131c580ef0519e683a9dc->leave($__internal_f9c3a05925065ec45f8c990339d14dc6c00f2fa2c46131c580ef0519e683a9dc_prof);

        
        $__internal_3b59d478c722933cafea72366a998c79640f6b771dec4e6a60db90a2901b23e7->leave($__internal_3b59d478c722933cafea72366a998c79640f6b771dec4e6a60db90a2901b23e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
