<?php

/* :article:new.html.twig */
class __TwigTemplate_e999b50f23c78ce1ac76c815480b9fe32e5f053cc9f9f450dc7ee7e0c4b2a28f extends Twig_Template
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
        $__internal_710d5de4fb021ed316c6b6befc0669728041f2f3dc0e6e22504c9633dc1390da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710d5de4fb021ed316c6b6befc0669728041f2f3dc0e6e22504c9633dc1390da->enter($__internal_710d5de4fb021ed316c6b6befc0669728041f2f3dc0e6e22504c9633dc1390da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $__internal_c1231ac6b9a796cef44f6381435368a0835b24ed6e8ceb7b20ddd0dc9b2055eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1231ac6b9a796cef44f6381435368a0835b24ed6e8ceb7b20ddd0dc9b2055eb->enter($__internal_c1231ac6b9a796cef44f6381435368a0835b24ed6e8ceb7b20ddd0dc9b2055eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":article:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_710d5de4fb021ed316c6b6befc0669728041f2f3dc0e6e22504c9633dc1390da->leave($__internal_710d5de4fb021ed316c6b6befc0669728041f2f3dc0e6e22504c9633dc1390da_prof);

        
        $__internal_c1231ac6b9a796cef44f6381435368a0835b24ed6e8ceb7b20ddd0dc9b2055eb->leave($__internal_c1231ac6b9a796cef44f6381435368a0835b24ed6e8ceb7b20ddd0dc9b2055eb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb233ff241845d84568b7a7048623f5d41e45e0ded120d061a011a47200225f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb233ff241845d84568b7a7048623f5d41e45e0ded120d061a011a47200225f3->enter($__internal_fb233ff241845d84568b7a7048623f5d41e45e0ded120d061a011a47200225f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ddc5dc24a26247b60ffdd56aea5fbacdeb8689b113a68546d87016b08675483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ddc5dc24a26247b60ffdd56aea5fbacdeb8689b113a68546d87016b08675483->enter($__internal_3ddc5dc24a26247b60ffdd56aea5fbacdeb8689b113a68546d87016b08675483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3ddc5dc24a26247b60ffdd56aea5fbacdeb8689b113a68546d87016b08675483->leave($__internal_3ddc5dc24a26247b60ffdd56aea5fbacdeb8689b113a68546d87016b08675483_prof);

        
        $__internal_fb233ff241845d84568b7a7048623f5d41e45e0ded120d061a011a47200225f3->leave($__internal_fb233ff241845d84568b7a7048623f5d41e45e0ded120d061a011a47200225f3_prof);

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
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":article:new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
