<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_933b4d1f5e988d6592596d5179df778549945594f5ffb12300ecfa9f5e938821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_9cd02e19c01a001bb9469b6bb09e85b88d63d9ac6cfbc5419c456c0ab7808fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd02e19c01a001bb9469b6bb09e85b88d63d9ac6cfbc5419c456c0ab7808fa7->enter($__internal_9cd02e19c01a001bb9469b6bb09e85b88d63d9ac6cfbc5419c456c0ab7808fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_6b299d09456afd1b81d763d1c698bf2ff02c3529a25a08ac23181a9df077be97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b299d09456afd1b81d763d1c698bf2ff02c3529a25a08ac23181a9df077be97->enter($__internal_6b299d09456afd1b81d763d1c698bf2ff02c3529a25a08ac23181a9df077be97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd02e19c01a001bb9469b6bb09e85b88d63d9ac6cfbc5419c456c0ab7808fa7->leave($__internal_9cd02e19c01a001bb9469b6bb09e85b88d63d9ac6cfbc5419c456c0ab7808fa7_prof);

        
        $__internal_6b299d09456afd1b81d763d1c698bf2ff02c3529a25a08ac23181a9df077be97->leave($__internal_6b299d09456afd1b81d763d1c698bf2ff02c3529a25a08ac23181a9df077be97_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_beb302182cda7f0b0316691e71c9dec9f7416b572ccefb01291c1dda54815184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb302182cda7f0b0316691e71c9dec9f7416b572ccefb01291c1dda54815184->enter($__internal_beb302182cda7f0b0316691e71c9dec9f7416b572ccefb01291c1dda54815184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67b2993f0e500c752514b4e4a86e838cb7b46d0ac40cb7a4287ec327df1d1907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b2993f0e500c752514b4e4a86e838cb7b46d0ac40cb7a4287ec327df1d1907->enter($__internal_67b2993f0e500c752514b4e4a86e838cb7b46d0ac40cb7a4287ec327df1d1907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_67b2993f0e500c752514b4e4a86e838cb7b46d0ac40cb7a4287ec327df1d1907->leave($__internal_67b2993f0e500c752514b4e4a86e838cb7b46d0ac40cb7a4287ec327df1d1907_prof);

        
        $__internal_beb302182cda7f0b0316691e71c9dec9f7416b572ccefb01291c1dda54815184->leave($__internal_beb302182cda7f0b0316691e71c9dec9f7416b572ccefb01291c1dda54815184_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
