<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_773fe90caa7fb324c9b947906a3c42ac7c4c0efc856f08d8bc94c36161102bce extends Twig_Template
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
        $__internal_e2cee764943479aac9df773692d174c6784e0a94fa5e2efdf0d190ca10e7084d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2cee764943479aac9df773692d174c6784e0a94fa5e2efdf0d190ca10e7084d->enter($__internal_e2cee764943479aac9df773692d174c6784e0a94fa5e2efdf0d190ca10e7084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0ce609a414a1b868a0e17e4def2977f4f3ebc245c93c4288288d88bf8065ff6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce609a414a1b868a0e17e4def2977f4f3ebc245c93c4288288d88bf8065ff6c->enter($__internal_0ce609a414a1b868a0e17e4def2977f4f3ebc245c93c4288288d88bf8065ff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2cee764943479aac9df773692d174c6784e0a94fa5e2efdf0d190ca10e7084d->leave($__internal_e2cee764943479aac9df773692d174c6784e0a94fa5e2efdf0d190ca10e7084d_prof);

        
        $__internal_0ce609a414a1b868a0e17e4def2977f4f3ebc245c93c4288288d88bf8065ff6c->leave($__internal_0ce609a414a1b868a0e17e4def2977f4f3ebc245c93c4288288d88bf8065ff6c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_498f7ca0ed1892c545ac80bc04443296bbc0a607df221e9d22d0b9eb7ede32e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498f7ca0ed1892c545ac80bc04443296bbc0a607df221e9d22d0b9eb7ede32e4->enter($__internal_498f7ca0ed1892c545ac80bc04443296bbc0a607df221e9d22d0b9eb7ede32e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_248e0a54273661abf561a3632254dc92040ad37240f915b4be62e84e0fa00199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248e0a54273661abf561a3632254dc92040ad37240f915b4be62e84e0fa00199->enter($__internal_248e0a54273661abf561a3632254dc92040ad37240f915b4be62e84e0fa00199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_248e0a54273661abf561a3632254dc92040ad37240f915b4be62e84e0fa00199->leave($__internal_248e0a54273661abf561a3632254dc92040ad37240f915b4be62e84e0fa00199_prof);

        
        $__internal_498f7ca0ed1892c545ac80bc04443296bbc0a607df221e9d22d0b9eb7ede32e4->leave($__internal_498f7ca0ed1892c545ac80bc04443296bbc0a607df221e9d22d0b9eb7ede32e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_881422b77bc0464ef9fda3a906d3b81b73f68d6ec378dc37c514f45240ddd1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881422b77bc0464ef9fda3a906d3b81b73f68d6ec378dc37c514f45240ddd1c1->enter($__internal_881422b77bc0464ef9fda3a906d3b81b73f68d6ec378dc37c514f45240ddd1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8568da99eda90b0838eac6e0fb126f9a627b13c8a4f5a11ec9178d1faf5a4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8568da99eda90b0838eac6e0fb126f9a627b13c8a4f5a11ec9178d1faf5a4ed->enter($__internal_b8568da99eda90b0838eac6e0fb126f9a627b13c8a4f5a11ec9178d1faf5a4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b8568da99eda90b0838eac6e0fb126f9a627b13c8a4f5a11ec9178d1faf5a4ed->leave($__internal_b8568da99eda90b0838eac6e0fb126f9a627b13c8a4f5a11ec9178d1faf5a4ed_prof);

        
        $__internal_881422b77bc0464ef9fda3a906d3b81b73f68d6ec378dc37c514f45240ddd1c1->leave($__internal_881422b77bc0464ef9fda3a906d3b81b73f68d6ec378dc37c514f45240ddd1c1_prof);

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
