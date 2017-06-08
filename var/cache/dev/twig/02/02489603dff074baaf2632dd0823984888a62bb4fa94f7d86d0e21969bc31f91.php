<?php

/* TwigBundle:Exceptions:error404.html.twig */
class __TwigTemplate_8a0b33291b8f9e9e731fab45589f04adf8d02f4ce20742f77e27e1a198b8d520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exceptions:error404.html.twig", 1);
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
        $__internal_c30f72b82c70b233230634cab6292c5c5dc5b1f5dbe2cb660795bc86122d172e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30f72b82c70b233230634cab6292c5c5dc5b1f5dbe2cb660795bc86122d172e->enter($__internal_c30f72b82c70b233230634cab6292c5c5dc5b1f5dbe2cb660795bc86122d172e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $__internal_051a4d3ac1f6fd6d02ac5dbe159ecc7bcd83828e1e0d5af85af32557edf783b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051a4d3ac1f6fd6d02ac5dbe159ecc7bcd83828e1e0d5af85af32557edf783b1->enter($__internal_051a4d3ac1f6fd6d02ac5dbe159ecc7bcd83828e1e0d5af85af32557edf783b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30f72b82c70b233230634cab6292c5c5dc5b1f5dbe2cb660795bc86122d172e->leave($__internal_c30f72b82c70b233230634cab6292c5c5dc5b1f5dbe2cb660795bc86122d172e_prof);

        
        $__internal_051a4d3ac1f6fd6d02ac5dbe159ecc7bcd83828e1e0d5af85af32557edf783b1->leave($__internal_051a4d3ac1f6fd6d02ac5dbe159ecc7bcd83828e1e0d5af85af32557edf783b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c618fe43d5ab7587df3064a5dd1dd48316e8072da8212a2ee487e5b7c2852d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c618fe43d5ab7587df3064a5dd1dd48316e8072da8212a2ee487e5b7c2852d1f->enter($__internal_c618fe43d5ab7587df3064a5dd1dd48316e8072da8212a2ee487e5b7c2852d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90b510b055b6d609439c8f72cb058b847655a922b41579b60da343026e8e3067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b510b055b6d609439c8f72cb058b847655a922b41579b60da343026e8e3067->enter($__internal_90b510b055b6d609439c8f72cb058b847655a922b41579b60da343026e8e3067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Page not found</h1>

    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>

";
        
        $__internal_90b510b055b6d609439c8f72cb058b847655a922b41579b60da343026e8e3067->leave($__internal_90b510b055b6d609439c8f72cb058b847655a922b41579b60da343026e8e3067_prof);

        
        $__internal_c618fe43d5ab7587df3064a5dd1dd48316e8072da8212a2ee487e5b7c2852d1f->leave($__internal_c618fe43d5ab7587df3064a5dd1dd48316e8072da8212a2ee487e5b7c2852d1f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exceptions:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

<h1>Page not found</h1>

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {# ... #}
    {% endif %}

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the homepage</a>.
    </p>

{% endblock %}", "TwigBundle:Exceptions:error404.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/TwigBundle/views/Exceptions/error404.html.twig");
    }
}
