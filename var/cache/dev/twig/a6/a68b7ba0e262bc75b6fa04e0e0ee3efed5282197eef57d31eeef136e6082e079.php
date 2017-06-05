<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cf89a01289e3796ba9c736f06918401379d2aba4ef0a248e2fffcc90215ab694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b45d5d8eb6bd6356dbf2f0d410c4b231a6fb074100bf4021d681483061f8da2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b45d5d8eb6bd6356dbf2f0d410c4b231a6fb074100bf4021d681483061f8da2->enter($__internal_9b45d5d8eb6bd6356dbf2f0d410c4b231a6fb074100bf4021d681483061f8da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9a220bf45c2afb757f940e4accd8a37356d46ea1632809610bcb19e1af2f0b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a220bf45c2afb757f940e4accd8a37356d46ea1632809610bcb19e1af2f0b00->enter($__internal_9a220bf45c2afb757f940e4accd8a37356d46ea1632809610bcb19e1af2f0b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b45d5d8eb6bd6356dbf2f0d410c4b231a6fb074100bf4021d681483061f8da2->leave($__internal_9b45d5d8eb6bd6356dbf2f0d410c4b231a6fb074100bf4021d681483061f8da2_prof);

        
        $__internal_9a220bf45c2afb757f940e4accd8a37356d46ea1632809610bcb19e1af2f0b00->leave($__internal_9a220bf45c2afb757f940e4accd8a37356d46ea1632809610bcb19e1af2f0b00_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a9089a34a5bbca505f10cc2c1f06fa72e192bccd4d73dcd5b395294d2776562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9089a34a5bbca505f10cc2c1f06fa72e192bccd4d73dcd5b395294d2776562->enter($__internal_7a9089a34a5bbca505f10cc2c1f06fa72e192bccd4d73dcd5b395294d2776562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b16fd6a4e24245fae8ad375672f77fe95c5874a128a42168dc091ba48d6dccac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16fd6a4e24245fae8ad375672f77fe95c5874a128a42168dc091ba48d6dccac->enter($__internal_b16fd6a4e24245fae8ad375672f77fe95c5874a128a42168dc091ba48d6dccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b16fd6a4e24245fae8ad375672f77fe95c5874a128a42168dc091ba48d6dccac->leave($__internal_b16fd6a4e24245fae8ad375672f77fe95c5874a128a42168dc091ba48d6dccac_prof);

        
        $__internal_7a9089a34a5bbca505f10cc2c1f06fa72e192bccd4d73dcd5b395294d2776562->leave($__internal_7a9089a34a5bbca505f10cc2c1f06fa72e192bccd4d73dcd5b395294d2776562_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4466c80ab30c912c46ef23ae119442322aa3820ab6c41b14996273c58155e64d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4466c80ab30c912c46ef23ae119442322aa3820ab6c41b14996273c58155e64d->enter($__internal_4466c80ab30c912c46ef23ae119442322aa3820ab6c41b14996273c58155e64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9831fb2dfe0a940ffce8369bee6f84e85557266a4f2cd0a915f3cb3396fa22ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9831fb2dfe0a940ffce8369bee6f84e85557266a4f2cd0a915f3cb3396fa22ce->enter($__internal_9831fb2dfe0a940ffce8369bee6f84e85557266a4f2cd0a915f3cb3396fa22ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9831fb2dfe0a940ffce8369bee6f84e85557266a4f2cd0a915f3cb3396fa22ce->leave($__internal_9831fb2dfe0a940ffce8369bee6f84e85557266a4f2cd0a915f3cb3396fa22ce_prof);

        
        $__internal_4466c80ab30c912c46ef23ae119442322aa3820ab6c41b14996273c58155e64d->leave($__internal_4466c80ab30c912c46ef23ae119442322aa3820ab6c41b14996273c58155e64d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
