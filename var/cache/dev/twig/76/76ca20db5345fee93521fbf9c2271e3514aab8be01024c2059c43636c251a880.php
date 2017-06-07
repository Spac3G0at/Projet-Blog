<?php

/* article/edit.html.twig */
class __TwigTemplate_d3790342bab9603876e0749239fbea6d7f0972cca0c559dacbb1c5e7b1a27870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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
        $__internal_e0534434f08fb2ce0d9104f0a4dd8ad8b4ba4de8f125585ae2ae5e6af5d2b51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0534434f08fb2ce0d9104f0a4dd8ad8b4ba4de8f125585ae2ae5e6af5d2b51b->enter($__internal_e0534434f08fb2ce0d9104f0a4dd8ad8b4ba4de8f125585ae2ae5e6af5d2b51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_b8b78695fdc0ee147e00f056151d64205cba2740977098e8cc664ef5aa736401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b78695fdc0ee147e00f056151d64205cba2740977098e8cc664ef5aa736401->enter($__internal_b8b78695fdc0ee147e00f056151d64205cba2740977098e8cc664ef5aa736401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0534434f08fb2ce0d9104f0a4dd8ad8b4ba4de8f125585ae2ae5e6af5d2b51b->leave($__internal_e0534434f08fb2ce0d9104f0a4dd8ad8b4ba4de8f125585ae2ae5e6af5d2b51b_prof);

        
        $__internal_b8b78695fdc0ee147e00f056151d64205cba2740977098e8cc664ef5aa736401->leave($__internal_b8b78695fdc0ee147e00f056151d64205cba2740977098e8cc664ef5aa736401_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb037924d63a8852dbc9369c2f7491cc2783c6f85f8566be7b09ec525f5a51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb037924d63a8852dbc9369c2f7491cc2783c6f85f8566be7b09ec525f5a51f->enter($__internal_7fb037924d63a8852dbc9369c2f7491cc2783c6f85f8566be7b09ec525f5a51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a3a27b4e023b2519ae2d3c8513eb196b62e278f1104bec70bbece28c22ca448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3a27b4e023b2519ae2d3c8513eb196b62e278f1104bec70bbece28c22ca448->enter($__internal_0a3a27b4e023b2519ae2d3c8513eb196b62e278f1104bec70bbece28c22ca448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0a3a27b4e023b2519ae2d3c8513eb196b62e278f1104bec70bbece28c22ca448->leave($__internal_0a3a27b4e023b2519ae2d3c8513eb196b62e278f1104bec70bbece28c22ca448_prof);

        
        $__internal_7fb037924d63a8852dbc9369c2f7491cc2783c6f85f8566be7b09ec525f5a51f->leave($__internal_7fb037924d63a8852dbc9369c2f7491cc2783c6f85f8566be7b09ec525f5a51f_prof);

    }

    public function getTemplateName()
    {
        return "article/edit.html.twig";
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
        <input class=\"btn btn-primary\" type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "article/edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/edit.html.twig");
    }
}
