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
        $__internal_8cfb6ef3e7d405c4b6f0938ecc7457874c1d3c7a39b5a9897823f271096e2efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfb6ef3e7d405c4b6f0938ecc7457874c1d3c7a39b5a9897823f271096e2efb->enter($__internal_8cfb6ef3e7d405c4b6f0938ecc7457874c1d3c7a39b5a9897823f271096e2efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8260581b809d2b72a92bfd2e126779040119e665ab698fd104dcd3bd358d8185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8260581b809d2b72a92bfd2e126779040119e665ab698fd104dcd3bd358d8185->enter($__internal_8260581b809d2b72a92bfd2e126779040119e665ab698fd104dcd3bd358d8185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfb6ef3e7d405c4b6f0938ecc7457874c1d3c7a39b5a9897823f271096e2efb->leave($__internal_8cfb6ef3e7d405c4b6f0938ecc7457874c1d3c7a39b5a9897823f271096e2efb_prof);

        
        $__internal_8260581b809d2b72a92bfd2e126779040119e665ab698fd104dcd3bd358d8185->leave($__internal_8260581b809d2b72a92bfd2e126779040119e665ab698fd104dcd3bd358d8185_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_041a98d82727632380ef97e4ab23b3c4afb84576abd698320a6ab91e1b602e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041a98d82727632380ef97e4ab23b3c4afb84576abd698320a6ab91e1b602e22->enter($__internal_041a98d82727632380ef97e4ab23b3c4afb84576abd698320a6ab91e1b602e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_672d66db14e9775a64c2e637b0457e864b675526b9cb71a825d09fff7cdfcc2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672d66db14e9775a64c2e637b0457e864b675526b9cb71a825d09fff7cdfcc2c->enter($__internal_672d66db14e9775a64c2e637b0457e864b675526b9cb71a825d09fff7cdfcc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_672d66db14e9775a64c2e637b0457e864b675526b9cb71a825d09fff7cdfcc2c->leave($__internal_672d66db14e9775a64c2e637b0457e864b675526b9cb71a825d09fff7cdfcc2c_prof);

        
        $__internal_041a98d82727632380ef97e4ab23b3c4afb84576abd698320a6ab91e1b602e22->leave($__internal_041a98d82727632380ef97e4ab23b3c4afb84576abd698320a6ab91e1b602e22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3e73bbf2b993522c4d0463a71cf02b3a187de72e530fcca3a7caf9b50497ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e73bbf2b993522c4d0463a71cf02b3a187de72e530fcca3a7caf9b50497ece->enter($__internal_b3e73bbf2b993522c4d0463a71cf02b3a187de72e530fcca3a7caf9b50497ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce4c714493d66fcc8550be464c1f4d76d7942dcb0b5f8f055072bcefe3d4ab28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4c714493d66fcc8550be464c1f4d76d7942dcb0b5f8f055072bcefe3d4ab28->enter($__internal_ce4c714493d66fcc8550be464c1f4d76d7942dcb0b5f8f055072bcefe3d4ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce4c714493d66fcc8550be464c1f4d76d7942dcb0b5f8f055072bcefe3d4ab28->leave($__internal_ce4c714493d66fcc8550be464c1f4d76d7942dcb0b5f8f055072bcefe3d4ab28_prof);

        
        $__internal_b3e73bbf2b993522c4d0463a71cf02b3a187de72e530fcca3a7caf9b50497ece->leave($__internal_b3e73bbf2b993522c4d0463a71cf02b3a187de72e530fcca3a7caf9b50497ece_prof);

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
