<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4f5acc3505ea5fe61cd88bf70ad5b45c6071f2920ee6c0d4995395f79b9852db extends Twig_Template
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
        $__internal_7bbd0a11a54e5bea227fbaf52836b6d168fc8ad927997f2690cfcb2e21b23388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bbd0a11a54e5bea227fbaf52836b6d168fc8ad927997f2690cfcb2e21b23388->enter($__internal_7bbd0a11a54e5bea227fbaf52836b6d168fc8ad927997f2690cfcb2e21b23388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_64343b3b5c789a16e866e0309a8ba71550be23a2d903d4ff71eb1f39035a1a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64343b3b5c789a16e866e0309a8ba71550be23a2d903d4ff71eb1f39035a1a56->enter($__internal_64343b3b5c789a16e866e0309a8ba71550be23a2d903d4ff71eb1f39035a1a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbd0a11a54e5bea227fbaf52836b6d168fc8ad927997f2690cfcb2e21b23388->leave($__internal_7bbd0a11a54e5bea227fbaf52836b6d168fc8ad927997f2690cfcb2e21b23388_prof);

        
        $__internal_64343b3b5c789a16e866e0309a8ba71550be23a2d903d4ff71eb1f39035a1a56->leave($__internal_64343b3b5c789a16e866e0309a8ba71550be23a2d903d4ff71eb1f39035a1a56_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0ea6278c063e2da144c6dd99fd9cf9bf7b37ea9049ee3e951af72ebc5e43b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ea6278c063e2da144c6dd99fd9cf9bf7b37ea9049ee3e951af72ebc5e43b05->enter($__internal_a0ea6278c063e2da144c6dd99fd9cf9bf7b37ea9049ee3e951af72ebc5e43b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_330aa4404dab82bc7ed76a6929dfd01444feb272c39501994174058a2209ca68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330aa4404dab82bc7ed76a6929dfd01444feb272c39501994174058a2209ca68->enter($__internal_330aa4404dab82bc7ed76a6929dfd01444feb272c39501994174058a2209ca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_330aa4404dab82bc7ed76a6929dfd01444feb272c39501994174058a2209ca68->leave($__internal_330aa4404dab82bc7ed76a6929dfd01444feb272c39501994174058a2209ca68_prof);

        
        $__internal_a0ea6278c063e2da144c6dd99fd9cf9bf7b37ea9049ee3e951af72ebc5e43b05->leave($__internal_a0ea6278c063e2da144c6dd99fd9cf9bf7b37ea9049ee3e951af72ebc5e43b05_prof);

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
