<?php

/* default/post.html.twig */
class __TwigTemplate_6087cb2bc56699c9a57809ee27ff229f5183aacd611a5729338f795ab444f9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/post.html.twig", 1);
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
        $__internal_a09c622e3c45b61ec35188570eb69a9b5b4f557f2b82771ac8d6b947fbdf707d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09c622e3c45b61ec35188570eb69a9b5b4f557f2b82771ac8d6b947fbdf707d->enter($__internal_a09c622e3c45b61ec35188570eb69a9b5b4f557f2b82771ac8d6b947fbdf707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $__internal_c0d5bc9aa2884899809d102b3fa9271823f9412f8887ee0e0dcd122e056663b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0d5bc9aa2884899809d102b3fa9271823f9412f8887ee0e0dcd122e056663b2->enter($__internal_c0d5bc9aa2884899809d102b3fa9271823f9412f8887ee0e0dcd122e056663b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a09c622e3c45b61ec35188570eb69a9b5b4f557f2b82771ac8d6b947fbdf707d->leave($__internal_a09c622e3c45b61ec35188570eb69a9b5b4f557f2b82771ac8d6b947fbdf707d_prof);

        
        $__internal_c0d5bc9aa2884899809d102b3fa9271823f9412f8887ee0e0dcd122e056663b2->leave($__internal_c0d5bc9aa2884899809d102b3fa9271823f9412f8887ee0e0dcd122e056663b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f8cdfccaf5cd22c2f78091947fdf5d952c095aa77baf03a16fc952a1336c700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8cdfccaf5cd22c2f78091947fdf5d952c095aa77baf03a16fc952a1336c700->enter($__internal_2f8cdfccaf5cd22c2f78091947fdf5d952c095aa77baf03a16fc952a1336c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4bc3ace1618591c7378524bf035cdc96439ecc8bd50c44325d7fe4999b61a9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc3ace1618591c7378524bf035cdc96439ecc8bd50c44325d7fe4999b61a9ae->enter($__internal_4bc3ace1618591c7378524bf035cdc96439ecc8bd50c44325d7fe4999b61a9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t";
        // line 5
        if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "isDraft", array()) != 1)) {
            // line 6
            echo "
\t<div class=\"row ";
            // line 7
            if (($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()) != null)) {
                echo " haveImage ";
            }
            echo "\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "image", array()), "html", null, true);
            echo ");\">
\t\t<h1 class=\"text-center\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", array()), "html", null, true);
            echo "</h1>

\t</div>

\t<div class=\"row container\">
\t\t<h4>Author, ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</h4>
\t</div>


\t<div class=\"row article-content container\">

\t\t";
            // line 19
            echo $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "text", array());
            echo "

\t</div>

\t";
        } else {
            // line 24
            echo "
\t\t<h1 class=\"text-center\">Article indisponible</h1>

\t";
        }
        // line 28
        echo "
";
        
        $__internal_4bc3ace1618591c7378524bf035cdc96439ecc8bd50c44325d7fe4999b61a9ae->leave($__internal_4bc3ace1618591c7378524bf035cdc96439ecc8bd50c44325d7fe4999b61a9ae_prof);

        
        $__internal_2f8cdfccaf5cd22c2f78091947fdf5d952c095aa77baf03a16fc952a1336c700->leave($__internal_2f8cdfccaf5cd22c2f78091947fdf5d952c095aa77baf03a16fc952a1336c700_prof);

    }

    public function getTemplateName()
    {
        return "default/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  93 => 24,  85 => 19,  74 => 13,  66 => 8,  57 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

\t{% if article.isDraft != 1 %}

\t<div class=\"row {% if article.image != NULL %} haveImage {% endif %}\" style=\"background-image: url({{ asset(\"uploads/articles/\") }}{{ article.image }});\">
\t\t<h1 class=\"text-center\">{{ article.title }}</h1>

\t</div>

\t<div class=\"row container\">
\t\t<h4>Author, {{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</h4>
\t</div>


\t<div class=\"row article-content container\">

\t\t{{ article.text | raw }}

\t</div>

\t{% else %}

\t\t<h1 class=\"text-center\">Article indisponible</h1>

\t{% endif %}

{% endblock %}", "default/post.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/post.html.twig");
    }
}
