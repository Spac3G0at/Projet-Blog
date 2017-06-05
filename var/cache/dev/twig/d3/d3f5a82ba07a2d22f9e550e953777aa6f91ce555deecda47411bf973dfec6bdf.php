<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_80bb32e6f54d6071c3d38c48652f0cb4e6e7fe32bd6a4371ba86a03c402622ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bed197d1ec39c80e23be2ca118604befac7cafd5b91c2e93b5542c545da30937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed197d1ec39c80e23be2ca118604befac7cafd5b91c2e93b5542c545da30937->enter($__internal_bed197d1ec39c80e23be2ca118604befac7cafd5b91c2e93b5542c545da30937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_c16636cbbb22040c110015dddf5f21ab407ab78805a4ce55d3aecc7433f2b43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16636cbbb22040c110015dddf5f21ab407ab78805a4ce55d3aecc7433f2b43b->enter($__internal_c16636cbbb22040c110015dddf5f21ab407ab78805a4ce55d3aecc7433f2b43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_bed197d1ec39c80e23be2ca118604befac7cafd5b91c2e93b5542c545da30937->leave($__internal_bed197d1ec39c80e23be2ca118604befac7cafd5b91c2e93b5542c545da30937_prof);

        
        $__internal_c16636cbbb22040c110015dddf5f21ab407ab78805a4ce55d3aecc7433f2b43b->leave($__internal_c16636cbbb22040c110015dddf5f21ab407ab78805a4ce55d3aecc7433f2b43b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2554de053e3de857479ae6cda8c7ef27da5d0d49ef5130ad77474478ede1769f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2554de053e3de857479ae6cda8c7ef27da5d0d49ef5130ad77474478ede1769f->enter($__internal_2554de053e3de857479ae6cda8c7ef27da5d0d49ef5130ad77474478ede1769f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_67e639b0d2c1ee452f0a54a277cf6f99ccca3e421a176e82d506b4cc406172db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e639b0d2c1ee452f0a54a277cf6f99ccca3e421a176e82d506b4cc406172db->enter($__internal_67e639b0d2c1ee452f0a54a277cf6f99ccca3e421a176e82d506b4cc406172db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_67e639b0d2c1ee452f0a54a277cf6f99ccca3e421a176e82d506b4cc406172db->leave($__internal_67e639b0d2c1ee452f0a54a277cf6f99ccca3e421a176e82d506b4cc406172db_prof);

        
        $__internal_2554de053e3de857479ae6cda8c7ef27da5d0d49ef5130ad77474478ede1769f->leave($__internal_2554de053e3de857479ae6cda8c7ef27da5d0d49ef5130ad77474478ede1769f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
