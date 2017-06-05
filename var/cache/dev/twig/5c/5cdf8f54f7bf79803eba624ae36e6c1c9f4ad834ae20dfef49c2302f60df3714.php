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
        $__internal_0b157dbad49b95a8a8ef6595d841a1f0c2bdb7ead2355ecc0fbacbb6f39aff5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b157dbad49b95a8a8ef6595d841a1f0c2bdb7ead2355ecc0fbacbb6f39aff5d->enter($__internal_0b157dbad49b95a8a8ef6595d841a1f0c2bdb7ead2355ecc0fbacbb6f39aff5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $__internal_9cb9b6fa5fa8c1b95a68e323b4b7efb1524bed740abcb3fba6a90b7fcbf91bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb9b6fa5fa8c1b95a68e323b4b7efb1524bed740abcb3fba6a90b7fcbf91bbf->enter($__internal_9cb9b6fa5fa8c1b95a68e323b4b7efb1524bed740abcb3fba6a90b7fcbf91bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b157dbad49b95a8a8ef6595d841a1f0c2bdb7ead2355ecc0fbacbb6f39aff5d->leave($__internal_0b157dbad49b95a8a8ef6595d841a1f0c2bdb7ead2355ecc0fbacbb6f39aff5d_prof);

        
        $__internal_9cb9b6fa5fa8c1b95a68e323b4b7efb1524bed740abcb3fba6a90b7fcbf91bbf->leave($__internal_9cb9b6fa5fa8c1b95a68e323b4b7efb1524bed740abcb3fba6a90b7fcbf91bbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a072674f434f7184740a0c7506ba21c4fc8e4609f778dc32929c2f9c0045829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a072674f434f7184740a0c7506ba21c4fc8e4609f778dc32929c2f9c0045829->enter($__internal_0a072674f434f7184740a0c7506ba21c4fc8e4609f778dc32929c2f9c0045829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c4840793c78f035788989c811c3524e5e27788dbd5b5b3713645854eadd56fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4840793c78f035788989c811c3524e5e27788dbd5b5b3713645854eadd56fbe->enter($__internal_c4840793c78f035788989c811c3524e5e27788dbd5b5b3713645854eadd56fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c4840793c78f035788989c811c3524e5e27788dbd5b5b3713645854eadd56fbe->leave($__internal_c4840793c78f035788989c811c3524e5e27788dbd5b5b3713645854eadd56fbe_prof);

        
        $__internal_0a072674f434f7184740a0c7506ba21c4fc8e4609f778dc32929c2f9c0045829->leave($__internal_0a072674f434f7184740a0c7506ba21c4fc8e4609f778dc32929c2f9c0045829_prof);

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
