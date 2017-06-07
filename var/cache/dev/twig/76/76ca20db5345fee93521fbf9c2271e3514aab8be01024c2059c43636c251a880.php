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
        $__internal_6aba887ae228d48c302c3814e94a8bdfef02f344c72a4f51f73ebc9467a2555d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aba887ae228d48c302c3814e94a8bdfef02f344c72a4f51f73ebc9467a2555d->enter($__internal_6aba887ae228d48c302c3814e94a8bdfef02f344c72a4f51f73ebc9467a2555d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_0fa57b97879e06f2589d8e0a2db6789ca143e93b48494ff3c36f276f8a5a70b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa57b97879e06f2589d8e0a2db6789ca143e93b48494ff3c36f276f8a5a70b3->enter($__internal_0fa57b97879e06f2589d8e0a2db6789ca143e93b48494ff3c36f276f8a5a70b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aba887ae228d48c302c3814e94a8bdfef02f344c72a4f51f73ebc9467a2555d->leave($__internal_6aba887ae228d48c302c3814e94a8bdfef02f344c72a4f51f73ebc9467a2555d_prof);

        
        $__internal_0fa57b97879e06f2589d8e0a2db6789ca143e93b48494ff3c36f276f8a5a70b3->leave($__internal_0fa57b97879e06f2589d8e0a2db6789ca143e93b48494ff3c36f276f8a5a70b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9617bee63c256881d4e93655a907ae83933805cd1b1afecff39800b3518cfc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9617bee63c256881d4e93655a907ae83933805cd1b1afecff39800b3518cfc7->enter($__internal_a9617bee63c256881d4e93655a907ae83933805cd1b1afecff39800b3518cfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6229f493e52a333f48b59a0deb41bd478d53a2f4cbb9cee59e30af60de2efa62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6229f493e52a333f48b59a0deb41bd478d53a2f4cbb9cee59e30af60de2efa62->enter($__internal_6229f493e52a333f48b59a0deb41bd478d53a2f4cbb9cee59e30af60de2efa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6229f493e52a333f48b59a0deb41bd478d53a2f4cbb9cee59e30af60de2efa62->leave($__internal_6229f493e52a333f48b59a0deb41bd478d53a2f4cbb9cee59e30af60de2efa62_prof);

        
        $__internal_a9617bee63c256881d4e93655a907ae83933805cd1b1afecff39800b3518cfc7->leave($__internal_a9617bee63c256881d4e93655a907ae83933805cd1b1afecff39800b3518cfc7_prof);

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
