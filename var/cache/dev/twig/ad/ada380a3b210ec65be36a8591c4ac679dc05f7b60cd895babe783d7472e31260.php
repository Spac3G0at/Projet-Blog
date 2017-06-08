<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_587ed1805f2d691da12b6726794c82e1faef1ab089216ea303f0bfeb4c61f3cc extends Twig_Template
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
        $__internal_97e9dd063a47fb71d78bb0b296d2feb9271b788cdbf524aa218958273de4b39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e9dd063a47fb71d78bb0b296d2feb9271b788cdbf524aa218958273de4b39d->enter($__internal_97e9dd063a47fb71d78bb0b296d2feb9271b788cdbf524aa218958273de4b39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2bf5aa3e853ff5abca6d0f258038d3d1f5e122bf8f24475b9cfab412fdc48a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bf5aa3e853ff5abca6d0f258038d3d1f5e122bf8f24475b9cfab412fdc48a18->enter($__internal_2bf5aa3e853ff5abca6d0f258038d3d1f5e122bf8f24475b9cfab412fdc48a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97e9dd063a47fb71d78bb0b296d2feb9271b788cdbf524aa218958273de4b39d->leave($__internal_97e9dd063a47fb71d78bb0b296d2feb9271b788cdbf524aa218958273de4b39d_prof);

        
        $__internal_2bf5aa3e853ff5abca6d0f258038d3d1f5e122bf8f24475b9cfab412fdc48a18->leave($__internal_2bf5aa3e853ff5abca6d0f258038d3d1f5e122bf8f24475b9cfab412fdc48a18_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da70b589e0f95c3a7f0e0321b7a8d4ebebe900a44107b9ba3204d4c7c9c093fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da70b589e0f95c3a7f0e0321b7a8d4ebebe900a44107b9ba3204d4c7c9c093fc->enter($__internal_da70b589e0f95c3a7f0e0321b7a8d4ebebe900a44107b9ba3204d4c7c9c093fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72a9168b0cf171437d4b2739b9efaf50200a1e7c33a1cf0af68d9cc873790cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a9168b0cf171437d4b2739b9efaf50200a1e7c33a1cf0af68d9cc873790cd0->enter($__internal_72a9168b0cf171437d4b2739b9efaf50200a1e7c33a1cf0af68d9cc873790cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_72a9168b0cf171437d4b2739b9efaf50200a1e7c33a1cf0af68d9cc873790cd0->leave($__internal_72a9168b0cf171437d4b2739b9efaf50200a1e7c33a1cf0af68d9cc873790cd0_prof);

        
        $__internal_da70b589e0f95c3a7f0e0321b7a8d4ebebe900a44107b9ba3204d4c7c9c093fc->leave($__internal_da70b589e0f95c3a7f0e0321b7a8d4ebebe900a44107b9ba3204d4c7c9c093fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc99fab6696a79e2fbbc0a0bb5b5df4487b974d379da8404ee17ef622c5fd0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc99fab6696a79e2fbbc0a0bb5b5df4487b974d379da8404ee17ef622c5fd0b0->enter($__internal_bc99fab6696a79e2fbbc0a0bb5b5df4487b974d379da8404ee17ef622c5fd0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ef92ffdd2096aafc58ddcb0d271f9809fd0bfaad3eaf21095911e77ad025b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef92ffdd2096aafc58ddcb0d271f9809fd0bfaad3eaf21095911e77ad025b62->enter($__internal_9ef92ffdd2096aafc58ddcb0d271f9809fd0bfaad3eaf21095911e77ad025b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ef92ffdd2096aafc58ddcb0d271f9809fd0bfaad3eaf21095911e77ad025b62->leave($__internal_9ef92ffdd2096aafc58ddcb0d271f9809fd0bfaad3eaf21095911e77ad025b62_prof);

        
        $__internal_bc99fab6696a79e2fbbc0a0bb5b5df4487b974d379da8404ee17ef622c5fd0b0->leave($__internal_bc99fab6696a79e2fbbc0a0bb5b5df4487b974d379da8404ee17ef622c5fd0b0_prof);

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
