<?php

/* :article:edit.html.twig */
class __TwigTemplate_b458babfec24c8e47e51bc4717c5ce10f4f20a26483661b747969f0399a1509a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:edit.html.twig", 1);
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
        $__internal_3674049f7e3c39c00f9508767a5df896d6fe5d065b5d61d10a882ede79902800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3674049f7e3c39c00f9508767a5df896d6fe5d065b5d61d10a882ede79902800->enter($__internal_3674049f7e3c39c00f9508767a5df896d6fe5d065b5d61d10a882ede79902800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_0c369da47ce9255d58ca68519a4efb0cab0c20ce170c4379512c6f963565c7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c369da47ce9255d58ca68519a4efb0cab0c20ce170c4379512c6f963565c7a4->enter($__internal_0c369da47ce9255d58ca68519a4efb0cab0c20ce170c4379512c6f963565c7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3674049f7e3c39c00f9508767a5df896d6fe5d065b5d61d10a882ede79902800->leave($__internal_3674049f7e3c39c00f9508767a5df896d6fe5d065b5d61d10a882ede79902800_prof);

        
        $__internal_0c369da47ce9255d58ca68519a4efb0cab0c20ce170c4379512c6f963565c7a4->leave($__internal_0c369da47ce9255d58ca68519a4efb0cab0c20ce170c4379512c6f963565c7a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_097bc7c0fc50102e338cd8807f4b38f18dd3aadefee9be763eb9f8a7c8bb12a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097bc7c0fc50102e338cd8807f4b38f18dd3aadefee9be763eb9f8a7c8bb12a1->enter($__internal_097bc7c0fc50102e338cd8807f4b38f18dd3aadefee9be763eb9f8a7c8bb12a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_487a22b9c74803fa51f46f1c5ad4a670da89b649b985dea5bd464bce8fe913c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487a22b9c74803fa51f46f1c5ad4a670da89b649b985dea5bd464bce8fe913c0->enter($__internal_487a22b9c74803fa51f46f1c5ad4a670da89b649b985dea5bd464bce8fe913c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_487a22b9c74803fa51f46f1c5ad4a670da89b649b985dea5bd464bce8fe913c0->leave($__internal_487a22b9c74803fa51f46f1c5ad4a670da89b649b985dea5bd464bce8fe913c0_prof);

        
        $__internal_097bc7c0fc50102e338cd8807f4b38f18dd3aadefee9be763eb9f8a7c8bb12a1->leave($__internal_097bc7c0fc50102e338cd8807f4b38f18dd3aadefee9be763eb9f8a7c8bb12a1_prof);

    }

    public function getTemplateName()
    {
        return ":article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Article edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":article:edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/edit.html.twig");
    }
}
