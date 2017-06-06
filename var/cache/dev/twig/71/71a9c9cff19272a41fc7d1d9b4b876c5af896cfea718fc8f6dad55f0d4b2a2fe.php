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
        $__internal_7d85d91eaf08575fc79c21c9ad8ee2709e1169797f21d2034b9376e21b306ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d85d91eaf08575fc79c21c9ad8ee2709e1169797f21d2034b9376e21b306ff9->enter($__internal_7d85d91eaf08575fc79c21c9ad8ee2709e1169797f21d2034b9376e21b306ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_4a72bc7ae1203484ec2e3141bd3f407287a7fa66c58efac2652cf7b2673a350e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a72bc7ae1203484ec2e3141bd3f407287a7fa66c58efac2652cf7b2673a350e->enter($__internal_4a72bc7ae1203484ec2e3141bd3f407287a7fa66c58efac2652cf7b2673a350e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d85d91eaf08575fc79c21c9ad8ee2709e1169797f21d2034b9376e21b306ff9->leave($__internal_7d85d91eaf08575fc79c21c9ad8ee2709e1169797f21d2034b9376e21b306ff9_prof);

        
        $__internal_4a72bc7ae1203484ec2e3141bd3f407287a7fa66c58efac2652cf7b2673a350e->leave($__internal_4a72bc7ae1203484ec2e3141bd3f407287a7fa66c58efac2652cf7b2673a350e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a968e588cbdf110f8a71166e6b734b3ba9fd8083f271982529a8f43108c4c9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a968e588cbdf110f8a71166e6b734b3ba9fd8083f271982529a8f43108c4c9ad->enter($__internal_a968e588cbdf110f8a71166e6b734b3ba9fd8083f271982529a8f43108c4c9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5994dbca35fa920c84c1cd4d01c18a98a1cac470ba487bfd86fa79cb3f0ff7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5994dbca35fa920c84c1cd4d01c18a98a1cac470ba487bfd86fa79cb3f0ff7e0->enter($__internal_5994dbca35fa920c84c1cd4d01c18a98a1cac470ba487bfd86fa79cb3f0ff7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5994dbca35fa920c84c1cd4d01c18a98a1cac470ba487bfd86fa79cb3f0ff7e0->leave($__internal_5994dbca35fa920c84c1cd4d01c18a98a1cac470ba487bfd86fa79cb3f0ff7e0_prof);

        
        $__internal_a968e588cbdf110f8a71166e6b734b3ba9fd8083f271982529a8f43108c4c9ad->leave($__internal_a968e588cbdf110f8a71166e6b734b3ba9fd8083f271982529a8f43108c4c9ad_prof);

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
