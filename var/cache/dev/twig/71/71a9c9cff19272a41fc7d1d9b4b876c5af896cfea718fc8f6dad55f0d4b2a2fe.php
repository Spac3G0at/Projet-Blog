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
        $__internal_707628e5dcdd80005f59ff01d6de65819db9662634ab727e829345602dc4497b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707628e5dcdd80005f59ff01d6de65819db9662634ab727e829345602dc4497b->enter($__internal_707628e5dcdd80005f59ff01d6de65819db9662634ab727e829345602dc4497b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_767ff6fbf70f46b71cb0f258b2132be6a9c245226c281d42de9bdac2e0ed3825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767ff6fbf70f46b71cb0f258b2132be6a9c245226c281d42de9bdac2e0ed3825->enter($__internal_767ff6fbf70f46b71cb0f258b2132be6a9c245226c281d42de9bdac2e0ed3825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707628e5dcdd80005f59ff01d6de65819db9662634ab727e829345602dc4497b->leave($__internal_707628e5dcdd80005f59ff01d6de65819db9662634ab727e829345602dc4497b_prof);

        
        $__internal_767ff6fbf70f46b71cb0f258b2132be6a9c245226c281d42de9bdac2e0ed3825->leave($__internal_767ff6fbf70f46b71cb0f258b2132be6a9c245226c281d42de9bdac2e0ed3825_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7175bfdaa330981daa3f407aa71cc88523a22a6aced3a8cb76a48497c282ca81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7175bfdaa330981daa3f407aa71cc88523a22a6aced3a8cb76a48497c282ca81->enter($__internal_7175bfdaa330981daa3f407aa71cc88523a22a6aced3a8cb76a48497c282ca81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26db9d23af46df9f7ba16212de32509a04eb713761ee1c8c85330056a1b5855f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26db9d23af46df9f7ba16212de32509a04eb713761ee1c8c85330056a1b5855f->enter($__internal_26db9d23af46df9f7ba16212de32509a04eb713761ee1c8c85330056a1b5855f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_26db9d23af46df9f7ba16212de32509a04eb713761ee1c8c85330056a1b5855f->leave($__internal_26db9d23af46df9f7ba16212de32509a04eb713761ee1c8c85330056a1b5855f_prof);

        
        $__internal_7175bfdaa330981daa3f407aa71cc88523a22a6aced3a8cb76a48497c282ca81->leave($__internal_7175bfdaa330981daa3f407aa71cc88523a22a6aced3a8cb76a48497c282ca81_prof);

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
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul class=\"list-unstyled\">
        <li>
            <a class=\"btn btn-primary\" href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
