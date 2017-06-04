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
        $__internal_8ca36e951e13db725b4384b1752a5dc63525c6d8041812d923d1fd0d5ab3c416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca36e951e13db725b4384b1752a5dc63525c6d8041812d923d1fd0d5ab3c416->enter($__internal_8ca36e951e13db725b4384b1752a5dc63525c6d8041812d923d1fd0d5ab3c416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6b9ee9ad35f65dbc510fc5e0509bf8889977871b5c0f56c068327011d6f7b60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9ee9ad35f65dbc510fc5e0509bf8889977871b5c0f56c068327011d6f7b60b->enter($__internal_6b9ee9ad35f65dbc510fc5e0509bf8889977871b5c0f56c068327011d6f7b60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ca36e951e13db725b4384b1752a5dc63525c6d8041812d923d1fd0d5ab3c416->leave($__internal_8ca36e951e13db725b4384b1752a5dc63525c6d8041812d923d1fd0d5ab3c416_prof);

        
        $__internal_6b9ee9ad35f65dbc510fc5e0509bf8889977871b5c0f56c068327011d6f7b60b->leave($__internal_6b9ee9ad35f65dbc510fc5e0509bf8889977871b5c0f56c068327011d6f7b60b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_743452c4a40d0a20d934041f17edc60ec2d3888f2f8c61570d7aa41a92f65a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743452c4a40d0a20d934041f17edc60ec2d3888f2f8c61570d7aa41a92f65a3c->enter($__internal_743452c4a40d0a20d934041f17edc60ec2d3888f2f8c61570d7aa41a92f65a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cca882fb58906ff1f3c5cca861a2862e552156dc74bede051e91b6053abc63d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca882fb58906ff1f3c5cca861a2862e552156dc74bede051e91b6053abc63d1->enter($__internal_cca882fb58906ff1f3c5cca861a2862e552156dc74bede051e91b6053abc63d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cca882fb58906ff1f3c5cca861a2862e552156dc74bede051e91b6053abc63d1->leave($__internal_cca882fb58906ff1f3c5cca861a2862e552156dc74bede051e91b6053abc63d1_prof);

        
        $__internal_743452c4a40d0a20d934041f17edc60ec2d3888f2f8c61570d7aa41a92f65a3c->leave($__internal_743452c4a40d0a20d934041f17edc60ec2d3888f2f8c61570d7aa41a92f65a3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8da2927fc66be767d3a4d7410562b6cc5a9fe0591faebe012ad902fe84ca7746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da2927fc66be767d3a4d7410562b6cc5a9fe0591faebe012ad902fe84ca7746->enter($__internal_8da2927fc66be767d3a4d7410562b6cc5a9fe0591faebe012ad902fe84ca7746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5327b2d17cb7141cc5c2aab02ac292bfeed9ee73e5074f15ea5d035a44c3b6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5327b2d17cb7141cc5c2aab02ac292bfeed9ee73e5074f15ea5d035a44c3b6da->enter($__internal_5327b2d17cb7141cc5c2aab02ac292bfeed9ee73e5074f15ea5d035a44c3b6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5327b2d17cb7141cc5c2aab02ac292bfeed9ee73e5074f15ea5d035a44c3b6da->leave($__internal_5327b2d17cb7141cc5c2aab02ac292bfeed9ee73e5074f15ea5d035a44c3b6da_prof);

        
        $__internal_8da2927fc66be767d3a4d7410562b6cc5a9fe0591faebe012ad902fe84ca7746->leave($__internal_8da2927fc66be767d3a4d7410562b6cc5a9fe0591faebe012ad902fe84ca7746_prof);

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
