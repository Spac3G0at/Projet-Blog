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
        $__internal_07dd663e434abebf7d2180fbe2e38c3c3672d9edf2abe4130e8c564069a72ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07dd663e434abebf7d2180fbe2e38c3c3672d9edf2abe4130e8c564069a72ff8->enter($__internal_07dd663e434abebf7d2180fbe2e38c3c3672d9edf2abe4130e8c564069a72ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_efe049aa6d2ce2830450385fb060ed2451f7a236c762369a78e8ac0cbaa5c68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe049aa6d2ce2830450385fb060ed2451f7a236c762369a78e8ac0cbaa5c68b->enter($__internal_efe049aa6d2ce2830450385fb060ed2451f7a236c762369a78e8ac0cbaa5c68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07dd663e434abebf7d2180fbe2e38c3c3672d9edf2abe4130e8c564069a72ff8->leave($__internal_07dd663e434abebf7d2180fbe2e38c3c3672d9edf2abe4130e8c564069a72ff8_prof);

        
        $__internal_efe049aa6d2ce2830450385fb060ed2451f7a236c762369a78e8ac0cbaa5c68b->leave($__internal_efe049aa6d2ce2830450385fb060ed2451f7a236c762369a78e8ac0cbaa5c68b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dab9b557536a92561c45a3cd88d7871130d944a74b0f9b3a61fdf53c1ba734d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dab9b557536a92561c45a3cd88d7871130d944a74b0f9b3a61fdf53c1ba734d->enter($__internal_6dab9b557536a92561c45a3cd88d7871130d944a74b0f9b3a61fdf53c1ba734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e6bd84f7f5e308fb097da4552bd82a289529a941b8327fc502609f0060a4c1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bd84f7f5e308fb097da4552bd82a289529a941b8327fc502609f0060a4c1e6->enter($__internal_e6bd84f7f5e308fb097da4552bd82a289529a941b8327fc502609f0060a4c1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e6bd84f7f5e308fb097da4552bd82a289529a941b8327fc502609f0060a4c1e6->leave($__internal_e6bd84f7f5e308fb097da4552bd82a289529a941b8327fc502609f0060a4c1e6_prof);

        
        $__internal_6dab9b557536a92561c45a3cd88d7871130d944a74b0f9b3a61fdf53c1ba734d->leave($__internal_6dab9b557536a92561c45a3cd88d7871130d944a74b0f9b3a61fdf53c1ba734d_prof);

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
