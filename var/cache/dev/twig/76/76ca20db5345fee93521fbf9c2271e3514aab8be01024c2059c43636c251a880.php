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
        $__internal_e28b67cbbd1ddb3c86f3e122cf9d2432b301779becc2601657fcc6748fee3edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28b67cbbd1ddb3c86f3e122cf9d2432b301779becc2601657fcc6748fee3edc->enter($__internal_e28b67cbbd1ddb3c86f3e122cf9d2432b301779becc2601657fcc6748fee3edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_f49cfc91a4fc2729ddf194a7576b6a0777a8998f164db76884dca83d263918b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49cfc91a4fc2729ddf194a7576b6a0777a8998f164db76884dca83d263918b5->enter($__internal_f49cfc91a4fc2729ddf194a7576b6a0777a8998f164db76884dca83d263918b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e28b67cbbd1ddb3c86f3e122cf9d2432b301779becc2601657fcc6748fee3edc->leave($__internal_e28b67cbbd1ddb3c86f3e122cf9d2432b301779becc2601657fcc6748fee3edc_prof);

        
        $__internal_f49cfc91a4fc2729ddf194a7576b6a0777a8998f164db76884dca83d263918b5->leave($__internal_f49cfc91a4fc2729ddf194a7576b6a0777a8998f164db76884dca83d263918b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_79115f8e2c2706c2edd79a61beafefba9dfcdcd05f711a9c266f94e1b371b00e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79115f8e2c2706c2edd79a61beafefba9dfcdcd05f711a9c266f94e1b371b00e->enter($__internal_79115f8e2c2706c2edd79a61beafefba9dfcdcd05f711a9c266f94e1b371b00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ad1baffad11d15992d1aeeb254a2da4bdb8c5cd73608e9e7e1f95cc68655299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad1baffad11d15992d1aeeb254a2da4bdb8c5cd73608e9e7e1f95cc68655299->enter($__internal_2ad1baffad11d15992d1aeeb254a2da4bdb8c5cd73608e9e7e1f95cc68655299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ad1baffad11d15992d1aeeb254a2da4bdb8c5cd73608e9e7e1f95cc68655299->leave($__internal_2ad1baffad11d15992d1aeeb254a2da4bdb8c5cd73608e9e7e1f95cc68655299_prof);

        
        $__internal_79115f8e2c2706c2edd79a61beafefba9dfcdcd05f711a9c266f94e1b371b00e->leave($__internal_79115f8e2c2706c2edd79a61beafefba9dfcdcd05f711a9c266f94e1b371b00e_prof);

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
", "article/edit.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/app/Resources/views/article/edit.html.twig");
    }
}
