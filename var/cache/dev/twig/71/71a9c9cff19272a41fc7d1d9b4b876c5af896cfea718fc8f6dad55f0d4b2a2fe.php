<?php

/* :article:new.html.twig */
class __TwigTemplate_61318842e5f78503c21dd01e1616d1a648abbc5374c946e4d40613fd7878f307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:new.html.twig", 1);
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
        $__internal_7605c8e9ee278ae5a1faf4e2ac3027f38a2c4316833a62e1cc143aeeafc7bdd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7605c8e9ee278ae5a1faf4e2ac3027f38a2c4316833a62e1cc143aeeafc7bdd2->enter($__internal_7605c8e9ee278ae5a1faf4e2ac3027f38a2c4316833a62e1cc143aeeafc7bdd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $__internal_bcb0c4490f538a7d2fa61819c3fae4d18b5376ed5ea3e04549bc73369001105b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb0c4490f538a7d2fa61819c3fae4d18b5376ed5ea3e04549bc73369001105b->enter($__internal_bcb0c4490f538a7d2fa61819c3fae4d18b5376ed5ea3e04549bc73369001105b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7605c8e9ee278ae5a1faf4e2ac3027f38a2c4316833a62e1cc143aeeafc7bdd2->leave($__internal_7605c8e9ee278ae5a1faf4e2ac3027f38a2c4316833a62e1cc143aeeafc7bdd2_prof);

        
        $__internal_bcb0c4490f538a7d2fa61819c3fae4d18b5376ed5ea3e04549bc73369001105b->leave($__internal_bcb0c4490f538a7d2fa61819c3fae4d18b5376ed5ea3e04549bc73369001105b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_63be24fb7e21f7c52e08d97bd5517478ce9dfbf158b591d77700f7929c9f5c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63be24fb7e21f7c52e08d97bd5517478ce9dfbf158b591d77700f7929c9f5c5b->enter($__internal_63be24fb7e21f7c52e08d97bd5517478ce9dfbf158b591d77700f7929c9f5c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_771b7f2f879317a6ce055989a3e18609edc72ff28547e129549496b1edb0b5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_771b7f2f879317a6ce055989a3e18609edc72ff28547e129549496b1edb0b5bd->enter($__internal_771b7f2f879317a6ce055989a3e18609edc72ff28547e129549496b1edb0b5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_771b7f2f879317a6ce055989a3e18609edc72ff28547e129549496b1edb0b5bd->leave($__internal_771b7f2f879317a6ce055989a3e18609edc72ff28547e129549496b1edb0b5bd_prof);

        
        $__internal_63be24fb7e21f7c52e08d97bd5517478ce9dfbf158b591d77700f7929c9f5c5b->leave($__internal_63be24fb7e21f7c52e08d97bd5517478ce9dfbf158b591d77700f7929c9f5c5b_prof);

    }

    public function getTemplateName()
    {
        return ":article:new.html.twig";
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
", ":article:new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
