<?php

/* TwigBundle:Exceptions:error404.html.twig */
class __TwigTemplate_525961922b77e6e6575be6bd9757a65cab5f2c8a8729e1c072ba4edb3aae8030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exceptions:error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a79d4f98459b43c0d9da99e6ab5b59ca8d36b492b121e8d7aada7431150e4623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79d4f98459b43c0d9da99e6ab5b59ca8d36b492b121e8d7aada7431150e4623->enter($__internal_a79d4f98459b43c0d9da99e6ab5b59ca8d36b492b121e8d7aada7431150e4623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $__internal_6df88475c138c11d830f04df0df5b1b0d29ee410bfb3b36967367b17b40d5a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df88475c138c11d830f04df0df5b1b0d29ee410bfb3b36967367b17b40d5a06->enter($__internal_6df88475c138c11d830f04df0df5b1b0d29ee410bfb3b36967367b17b40d5a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79d4f98459b43c0d9da99e6ab5b59ca8d36b492b121e8d7aada7431150e4623->leave($__internal_a79d4f98459b43c0d9da99e6ab5b59ca8d36b492b121e8d7aada7431150e4623_prof);

        
        $__internal_6df88475c138c11d830f04df0df5b1b0d29ee410bfb3b36967367b17b40d5a06->leave($__internal_6df88475c138c11d830f04df0df5b1b0d29ee410bfb3b36967367b17b40d5a06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_843dc66932afca793fc45d0d5fa84a833fcf6e946c6d2a476da876908b74ca56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843dc66932afca793fc45d0d5fa84a833fcf6e946c6d2a476da876908b74ca56->enter($__internal_843dc66932afca793fc45d0d5fa84a833fcf6e946c6d2a476da876908b74ca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9273a1afe570d676ce363afcd37d2e49309ebe34a3677a7bc0664d2560b6f9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9273a1afe570d676ce363afcd37d2e49309ebe34a3677a7bc0664d2560b6f9e8->enter($__internal_9273a1afe570d676ce363afcd37d2e49309ebe34a3677a7bc0664d2560b6f9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Page not found</h1>

    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>

";
        
        $__internal_9273a1afe570d676ce363afcd37d2e49309ebe34a3677a7bc0664d2560b6f9e8->leave($__internal_9273a1afe570d676ce363afcd37d2e49309ebe34a3677a7bc0664d2560b6f9e8_prof);

        
        $__internal_843dc66932afca793fc45d0d5fa84a833fcf6e946c6d2a476da876908b74ca56->leave($__internal_843dc66932afca793fc45d0d5fa84a833fcf6e946c6d2a476da876908b74ca56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exceptions:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Page not found</h1>

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {# ... #}
    {% endif %}

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the homepage</a>.
    </p>

{% endblock %}", "TwigBundle:Exceptions:error404.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/TwigBundle/views/Exceptions/error404.html.twig");
    }
}
