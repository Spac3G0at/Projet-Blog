<?php

/* :article:edit.html.twig */
class __TwigTemplate_d3790342bab9603876e0749239fbea6d7f0972cca0c559dacbb1c5e7b1a27870 extends Twig_Template
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
        $__internal_9d4aabae44982dec73133838e9f794ac628f8fedfc47b3e672f3da335eccf8eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d4aabae44982dec73133838e9f794ac628f8fedfc47b3e672f3da335eccf8eb->enter($__internal_9d4aabae44982dec73133838e9f794ac628f8fedfc47b3e672f3da335eccf8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_938fdb2c8d34acdaf7fe345eed6dcc62ef75de5b32914176ef62106f3044daed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938fdb2c8d34acdaf7fe345eed6dcc62ef75de5b32914176ef62106f3044daed->enter($__internal_938fdb2c8d34acdaf7fe345eed6dcc62ef75de5b32914176ef62106f3044daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d4aabae44982dec73133838e9f794ac628f8fedfc47b3e672f3da335eccf8eb->leave($__internal_9d4aabae44982dec73133838e9f794ac628f8fedfc47b3e672f3da335eccf8eb_prof);

        
        $__internal_938fdb2c8d34acdaf7fe345eed6dcc62ef75de5b32914176ef62106f3044daed->leave($__internal_938fdb2c8d34acdaf7fe345eed6dcc62ef75de5b32914176ef62106f3044daed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81997cd59235a5c142df68048699ce983ac6cac1c48666f8f829079728c12333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81997cd59235a5c142df68048699ce983ac6cac1c48666f8f829079728c12333->enter($__internal_81997cd59235a5c142df68048699ce983ac6cac1c48666f8f829079728c12333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1bed2a8d59f9affe9eb29ec5f2fa59d4262916ce73d09c18e96f725cc0cf55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bed2a8d59f9affe9eb29ec5f2fa59d4262916ce73d09c18e96f725cc0cf55a->enter($__internal_c1bed2a8d59f9affe9eb29ec5f2fa59d4262916ce73d09c18e96f725cc0cf55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c1bed2a8d59f9affe9eb29ec5f2fa59d4262916ce73d09c18e96f725cc0cf55a->leave($__internal_c1bed2a8d59f9affe9eb29ec5f2fa59d4262916ce73d09c18e96f725cc0cf55a_prof);

        
        $__internal_81997cd59235a5c142df68048699ce983ac6cac1c48666f8f829079728c12333->leave($__internal_81997cd59235a5c142df68048699ce983ac6cac1c48666f8f829079728c12333_prof);

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
", ":article:edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/edit.html.twig");
    }
}
