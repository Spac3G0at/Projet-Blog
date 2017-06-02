<?php

/* article/edit.html.twig */
class __TwigTemplate_e35a1e32eba6a895b344b7ef81a3f151f3fab070c7b2d19acffadbfc8d01f63c extends Twig_Template
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
        $__internal_5c7dc77e7ae3c65b6ed25ddc862047d22355acdcb9ef9413be04e339d6865142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c7dc77e7ae3c65b6ed25ddc862047d22355acdcb9ef9413be04e339d6865142->enter($__internal_5c7dc77e7ae3c65b6ed25ddc862047d22355acdcb9ef9413be04e339d6865142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_ac30bc16791a9ad2175b4cd43902a43e3856612396af5a98a635705bf96f877c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac30bc16791a9ad2175b4cd43902a43e3856612396af5a98a635705bf96f877c->enter($__internal_ac30bc16791a9ad2175b4cd43902a43e3856612396af5a98a635705bf96f877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c7dc77e7ae3c65b6ed25ddc862047d22355acdcb9ef9413be04e339d6865142->leave($__internal_5c7dc77e7ae3c65b6ed25ddc862047d22355acdcb9ef9413be04e339d6865142_prof);

        
        $__internal_ac30bc16791a9ad2175b4cd43902a43e3856612396af5a98a635705bf96f877c->leave($__internal_ac30bc16791a9ad2175b4cd43902a43e3856612396af5a98a635705bf96f877c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d85b201106ee376a79112bb879bd0afbb91e8b4b486299f6e29dfba500ccdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d85b201106ee376a79112bb879bd0afbb91e8b4b486299f6e29dfba500ccdf->enter($__internal_30d85b201106ee376a79112bb879bd0afbb91e8b4b486299f6e29dfba500ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_663f8b7ac693d2f0ed7847b1d5c26d8bd972aa12e38977c79516451be7f6bd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663f8b7ac693d2f0ed7847b1d5c26d8bd972aa12e38977c79516451be7f6bd02->enter($__internal_663f8b7ac693d2f0ed7847b1d5c26d8bd972aa12e38977c79516451be7f6bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_663f8b7ac693d2f0ed7847b1d5c26d8bd972aa12e38977c79516451be7f6bd02->leave($__internal_663f8b7ac693d2f0ed7847b1d5c26d8bd972aa12e38977c79516451be7f6bd02_prof);

        
        $__internal_30d85b201106ee376a79112bb879bd0afbb91e8b4b486299f6e29dfba500ccdf->leave($__internal_30d85b201106ee376a79112bb879bd0afbb91e8b4b486299f6e29dfba500ccdf_prof);

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
", "article/edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/edit.html.twig");
    }
}
