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
        $__internal_e6cda77093083ac21cfbfee32235ff283120135acfd62e2fc0680b80d691a431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6cda77093083ac21cfbfee32235ff283120135acfd62e2fc0680b80d691a431->enter($__internal_e6cda77093083ac21cfbfee32235ff283120135acfd62e2fc0680b80d691a431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e96574950b68e7450bcfa630ce59807805ec3be85766d753b2cb11fd93af1d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96574950b68e7450bcfa630ce59807805ec3be85766d753b2cb11fd93af1d8f->enter($__internal_e96574950b68e7450bcfa630ce59807805ec3be85766d753b2cb11fd93af1d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6cda77093083ac21cfbfee32235ff283120135acfd62e2fc0680b80d691a431->leave($__internal_e6cda77093083ac21cfbfee32235ff283120135acfd62e2fc0680b80d691a431_prof);

        
        $__internal_e96574950b68e7450bcfa630ce59807805ec3be85766d753b2cb11fd93af1d8f->leave($__internal_e96574950b68e7450bcfa630ce59807805ec3be85766d753b2cb11fd93af1d8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1abf626b069b7efff808cf0bd6fe7af07fb91404779071429d44c6d9160390da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abf626b069b7efff808cf0bd6fe7af07fb91404779071429d44c6d9160390da->enter($__internal_1abf626b069b7efff808cf0bd6fe7af07fb91404779071429d44c6d9160390da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_418c30808192852cf77693f7c043bac824b4e5a13c171b8d5d11f3b867261bf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418c30808192852cf77693f7c043bac824b4e5a13c171b8d5d11f3b867261bf1->enter($__internal_418c30808192852cf77693f7c043bac824b4e5a13c171b8d5d11f3b867261bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_418c30808192852cf77693f7c043bac824b4e5a13c171b8d5d11f3b867261bf1->leave($__internal_418c30808192852cf77693f7c043bac824b4e5a13c171b8d5d11f3b867261bf1_prof);

        
        $__internal_1abf626b069b7efff808cf0bd6fe7af07fb91404779071429d44c6d9160390da->leave($__internal_1abf626b069b7efff808cf0bd6fe7af07fb91404779071429d44c6d9160390da_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc3f3cf604be574a2670f3d543bb2d2d63cb472e1843ed47ce13b52430461774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3f3cf604be574a2670f3d543bb2d2d63cb472e1843ed47ce13b52430461774->enter($__internal_cc3f3cf604be574a2670f3d543bb2d2d63cb472e1843ed47ce13b52430461774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_369c9c864e0dde8e1fc96677daeae9f18b6fddc6541a1a0ed5ce1c5ef7a15615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369c9c864e0dde8e1fc96677daeae9f18b6fddc6541a1a0ed5ce1c5ef7a15615->enter($__internal_369c9c864e0dde8e1fc96677daeae9f18b6fddc6541a1a0ed5ce1c5ef7a15615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_369c9c864e0dde8e1fc96677daeae9f18b6fddc6541a1a0ed5ce1c5ef7a15615->leave($__internal_369c9c864e0dde8e1fc96677daeae9f18b6fddc6541a1a0ed5ce1c5ef7a15615_prof);

        
        $__internal_cc3f3cf604be574a2670f3d543bb2d2d63cb472e1843ed47ce13b52430461774->leave($__internal_cc3f3cf604be574a2670f3d543bb2d2d63cb472e1843ed47ce13b52430461774_prof);

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
