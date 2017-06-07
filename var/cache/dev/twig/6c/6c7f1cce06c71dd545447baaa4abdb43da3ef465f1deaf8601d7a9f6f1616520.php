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
        $__internal_175ac7751d517718de6dae6c5c8483737ce829847219c4ce960c85208427d7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_175ac7751d517718de6dae6c5c8483737ce829847219c4ce960c85208427d7ea->enter($__internal_175ac7751d517718de6dae6c5c8483737ce829847219c4ce960c85208427d7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_acaa8a9ea3286796c810c400ccc2d906b948475a604631dd8bd4161eb5fc1754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acaa8a9ea3286796c810c400ccc2d906b948475a604631dd8bd4161eb5fc1754->enter($__internal_acaa8a9ea3286796c810c400ccc2d906b948475a604631dd8bd4161eb5fc1754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_175ac7751d517718de6dae6c5c8483737ce829847219c4ce960c85208427d7ea->leave($__internal_175ac7751d517718de6dae6c5c8483737ce829847219c4ce960c85208427d7ea_prof);

        
        $__internal_acaa8a9ea3286796c810c400ccc2d906b948475a604631dd8bd4161eb5fc1754->leave($__internal_acaa8a9ea3286796c810c400ccc2d906b948475a604631dd8bd4161eb5fc1754_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b2b478aae6eac0db5769bb79bd33146485b673f52b3638c9ccc947a62023386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2b478aae6eac0db5769bb79bd33146485b673f52b3638c9ccc947a62023386->enter($__internal_0b2b478aae6eac0db5769bb79bd33146485b673f52b3638c9ccc947a62023386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7087be2ae36fa02e224f1a39f0b672a8139eab75db71a9e7300eda17f40bb4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7087be2ae36fa02e224f1a39f0b672a8139eab75db71a9e7300eda17f40bb4bd->enter($__internal_7087be2ae36fa02e224f1a39f0b672a8139eab75db71a9e7300eda17f40bb4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7087be2ae36fa02e224f1a39f0b672a8139eab75db71a9e7300eda17f40bb4bd->leave($__internal_7087be2ae36fa02e224f1a39f0b672a8139eab75db71a9e7300eda17f40bb4bd_prof);

        
        $__internal_0b2b478aae6eac0db5769bb79bd33146485b673f52b3638c9ccc947a62023386->leave($__internal_0b2b478aae6eac0db5769bb79bd33146485b673f52b3638c9ccc947a62023386_prof);

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
