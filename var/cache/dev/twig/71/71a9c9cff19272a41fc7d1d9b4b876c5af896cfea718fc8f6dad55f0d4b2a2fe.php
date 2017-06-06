<?php

/* article/new.html.twig */
class __TwigTemplate_61318842e5f78503c21dd01e1616d1a648abbc5374c946e4d40613fd7878f307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
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
        $__internal_ccfd3912601ae0da852a0720610a1d051450f69b738f5812cc42e1c878b5ff5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfd3912601ae0da852a0720610a1d051450f69b738f5812cc42e1c878b5ff5e->enter($__internal_ccfd3912601ae0da852a0720610a1d051450f69b738f5812cc42e1c878b5ff5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_94ca9fa3b838c514442dd716a6bd715531a6c9a7b77214e6f6b0e291f9b9be1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ca9fa3b838c514442dd716a6bd715531a6c9a7b77214e6f6b0e291f9b9be1f->enter($__internal_94ca9fa3b838c514442dd716a6bd715531a6c9a7b77214e6f6b0e291f9b9be1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfd3912601ae0da852a0720610a1d051450f69b738f5812cc42e1c878b5ff5e->leave($__internal_ccfd3912601ae0da852a0720610a1d051450f69b738f5812cc42e1c878b5ff5e_prof);

        
        $__internal_94ca9fa3b838c514442dd716a6bd715531a6c9a7b77214e6f6b0e291f9b9be1f->leave($__internal_94ca9fa3b838c514442dd716a6bd715531a6c9a7b77214e6f6b0e291f9b9be1f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdf14a448149263f66ec0ed3992b8c7ee075ce7b59547b8a03d06e764f92d2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf14a448149263f66ec0ed3992b8c7ee075ce7b59547b8a03d06e764f92d2bd->enter($__internal_fdf14a448149263f66ec0ed3992b8c7ee075ce7b59547b8a03d06e764f92d2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_80e8c55e3c622b2cd139ee0dd5918d75a8f5cc7b49c9e684f9efe146a501baa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e8c55e3c622b2cd139ee0dd5918d75a8f5cc7b49c9e684f9efe146a501baa8->enter($__internal_80e8c55e3c622b2cd139ee0dd5918d75a8f5cc7b49c9e684f9efe146a501baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_80e8c55e3c622b2cd139ee0dd5918d75a8f5cc7b49c9e684f9efe146a501baa8->leave($__internal_80e8c55e3c622b2cd139ee0dd5918d75a8f5cc7b49c9e684f9efe146a501baa8_prof);

        
        $__internal_fdf14a448149263f66ec0ed3992b8c7ee075ce7b59547b8a03d06e764f92d2bd->leave($__internal_fdf14a448149263f66ec0ed3992b8c7ee075ce7b59547b8a03d06e764f92d2bd_prof);

    }

    public function getTemplateName()
    {
        return "article/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/app/Resources/views/article/new.html.twig");
    }
}
