<?php

/* article/new.html.twig */
class __TwigTemplate_e999b50f23c78ce1ac76c815480b9fe32e5f053cc9f9f450dc7ee7e0c4b2a28f extends Twig_Template
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
        $__internal_0b5fbbd659da7d821fd13ce30087fc7d6311a536ab491227767acb00fae122ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5fbbd659da7d821fd13ce30087fc7d6311a536ab491227767acb00fae122ca->enter($__internal_0b5fbbd659da7d821fd13ce30087fc7d6311a536ab491227767acb00fae122ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_f6de501d41b0f4ef8f4cf33701296272fb9ebeecc60dfa0b738c8ac775ca8f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6de501d41b0f4ef8f4cf33701296272fb9ebeecc60dfa0b738c8ac775ca8f2f->enter($__internal_f6de501d41b0f4ef8f4cf33701296272fb9ebeecc60dfa0b738c8ac775ca8f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b5fbbd659da7d821fd13ce30087fc7d6311a536ab491227767acb00fae122ca->leave($__internal_0b5fbbd659da7d821fd13ce30087fc7d6311a536ab491227767acb00fae122ca_prof);

        
        $__internal_f6de501d41b0f4ef8f4cf33701296272fb9ebeecc60dfa0b738c8ac775ca8f2f->leave($__internal_f6de501d41b0f4ef8f4cf33701296272fb9ebeecc60dfa0b738c8ac775ca8f2f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d083702545ea4177d2ae7c4e069461b38578bde715a7dbabcb18a169db46f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d083702545ea4177d2ae7c4e069461b38578bde715a7dbabcb18a169db46f7d->enter($__internal_3d083702545ea4177d2ae7c4e069461b38578bde715a7dbabcb18a169db46f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5968c064e942b1a0e40f7c9c662cc5be9fa24447c822eb69ddfc92f09d4ec857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5968c064e942b1a0e40f7c9c662cc5be9fa24447c822eb69ddfc92f09d4ec857->enter($__internal_5968c064e942b1a0e40f7c9c662cc5be9fa24447c822eb69ddfc92f09d4ec857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5968c064e942b1a0e40f7c9c662cc5be9fa24447c822eb69ddfc92f09d4ec857->leave($__internal_5968c064e942b1a0e40f7c9c662cc5be9fa24447c822eb69ddfc92f09d4ec857_prof);

        
        $__internal_3d083702545ea4177d2ae7c4e069461b38578bde715a7dbabcb18a169db46f7d->leave($__internal_3d083702545ea4177d2ae7c4e069461b38578bde715a7dbabcb18a169db46f7d_prof);

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
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('article_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "article/new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/new.html.twig");
    }
}
