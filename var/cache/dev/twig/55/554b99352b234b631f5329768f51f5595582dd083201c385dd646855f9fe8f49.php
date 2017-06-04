<?php

/* article/new.html.twig */
class __TwigTemplate_e999b50f23c78ce1ac76c815480b9fe32e5f053cc9f9f450dc7ee7e0c4b2a28f extends Twig_Template
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
        $__internal_0fe76e3a0ffa1f76a3c2bb73b5fe45bd93f340baef096f18bb73db910ac7717b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe76e3a0ffa1f76a3c2bb73b5fe45bd93f340baef096f18bb73db910ac7717b->enter($__internal_0fe76e3a0ffa1f76a3c2bb73b5fe45bd93f340baef096f18bb73db910ac7717b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_b42513b7caff256ca259ac94bbe01bc482decc4719bae90b4c1f020040e58798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b42513b7caff256ca259ac94bbe01bc482decc4719bae90b4c1f020040e58798->enter($__internal_b42513b7caff256ca259ac94bbe01bc482decc4719bae90b4c1f020040e58798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe76e3a0ffa1f76a3c2bb73b5fe45bd93f340baef096f18bb73db910ac7717b->leave($__internal_0fe76e3a0ffa1f76a3c2bb73b5fe45bd93f340baef096f18bb73db910ac7717b_prof);

        
        $__internal_b42513b7caff256ca259ac94bbe01bc482decc4719bae90b4c1f020040e58798->leave($__internal_b42513b7caff256ca259ac94bbe01bc482decc4719bae90b4c1f020040e58798_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bf85bc5725aae2d1990d3b32108cf39234d957fb03fc4076dfaa5e9f39875bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bf85bc5725aae2d1990d3b32108cf39234d957fb03fc4076dfaa5e9f39875bc->enter($__internal_5bf85bc5725aae2d1990d3b32108cf39234d957fb03fc4076dfaa5e9f39875bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_076c978a8691b7db2b3efc1410e6fd2cc3b6b10fd9ab322c48f2d1933952198b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076c978a8691b7db2b3efc1410e6fd2cc3b6b10fd9ab322c48f2d1933952198b->enter($__internal_076c978a8691b7db2b3efc1410e6fd2cc3b6b10fd9ab322c48f2d1933952198b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_076c978a8691b7db2b3efc1410e6fd2cc3b6b10fd9ab322c48f2d1933952198b->leave($__internal_076c978a8691b7db2b3efc1410e6fd2cc3b6b10fd9ab322c48f2d1933952198b_prof);

        
        $__internal_5bf85bc5725aae2d1990d3b32108cf39234d957fb03fc4076dfaa5e9f39875bc->leave($__internal_5bf85bc5725aae2d1990d3b32108cf39234d957fb03fc4076dfaa5e9f39875bc_prof);

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
", "article/new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
