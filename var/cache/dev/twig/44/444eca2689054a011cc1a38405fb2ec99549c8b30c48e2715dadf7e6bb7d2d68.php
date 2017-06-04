<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_b156f8d2fa7fab6c6e5d478c62d25a2591622dc8c4619ca3aeb0740c30f9562b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c3bd982799c3e1a9eb7317f3a9c983369360261b7168786af7911ce97eeef3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3bd982799c3e1a9eb7317f3a9c983369360261b7168786af7911ce97eeef3d->enter($__internal_9c3bd982799c3e1a9eb7317f3a9c983369360261b7168786af7911ce97eeef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_cf622801034632a87b092fa17d4d70f8382c625cee499f7bf3a0b441d0f205df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf622801034632a87b092fa17d4d70f8382c625cee499f7bf3a0b441d0f205df->enter($__internal_cf622801034632a87b092fa17d4d70f8382c625cee499f7bf3a0b441d0f205df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c3bd982799c3e1a9eb7317f3a9c983369360261b7168786af7911ce97eeef3d->leave($__internal_9c3bd982799c3e1a9eb7317f3a9c983369360261b7168786af7911ce97eeef3d_prof);

        
        $__internal_cf622801034632a87b092fa17d4d70f8382c625cee499f7bf3a0b441d0f205df->leave($__internal_cf622801034632a87b092fa17d4d70f8382c625cee499f7bf3a0b441d0f205df_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f48c0c3c2537971f3d05f9db3c9df00ab4fb09e047e1a6731f8e4cb320c1356e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48c0c3c2537971f3d05f9db3c9df00ab4fb09e047e1a6731f8e4cb320c1356e->enter($__internal_f48c0c3c2537971f3d05f9db3c9df00ab4fb09e047e1a6731f8e4cb320c1356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5086f70bf64481310b1706fa7ccc9b329df8871dbe6f25957fbfc37625c208dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5086f70bf64481310b1706fa7ccc9b329df8871dbe6f25957fbfc37625c208dc->enter($__internal_5086f70bf64481310b1706fa7ccc9b329df8871dbe6f25957fbfc37625c208dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5086f70bf64481310b1706fa7ccc9b329df8871dbe6f25957fbfc37625c208dc->leave($__internal_5086f70bf64481310b1706fa7ccc9b329df8871dbe6f25957fbfc37625c208dc_prof);

        
        $__internal_f48c0c3c2537971f3d05f9db3c9df00ab4fb09e047e1a6731f8e4cb320c1356e->leave($__internal_f48c0c3c2537971f3d05f9db3c9df00ab4fb09e047e1a6731f8e4cb320c1356e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92cf98bc632fd603641892f807c2b4bc52113ac1088fd4c122a30c29a29d146e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cf98bc632fd603641892f807c2b4bc52113ac1088fd4c122a30c29a29d146e->enter($__internal_92cf98bc632fd603641892f807c2b4bc52113ac1088fd4c122a30c29a29d146e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_704b3bcc577031cc677817ef59a484e17f9f86e3359ffbda9717a058ffe30cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704b3bcc577031cc677817ef59a484e17f9f86e3359ffbda9717a058ffe30cfb->enter($__internal_704b3bcc577031cc677817ef59a484e17f9f86e3359ffbda9717a058ffe30cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_704b3bcc577031cc677817ef59a484e17f9f86e3359ffbda9717a058ffe30cfb->leave($__internal_704b3bcc577031cc677817ef59a484e17f9f86e3359ffbda9717a058ffe30cfb_prof);

        
        $__internal_92cf98bc632fd603641892f807c2b4bc52113ac1088fd4c122a30c29a29d146e->leave($__internal_92cf98bc632fd603641892f807c2b4bc52113ac1088fd4c122a30c29a29d146e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca1cc88a3729ec09ae6a41211693b83f6881a3988fcf7633993a1e2921f80927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca1cc88a3729ec09ae6a41211693b83f6881a3988fcf7633993a1e2921f80927->enter($__internal_ca1cc88a3729ec09ae6a41211693b83f6881a3988fcf7633993a1e2921f80927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_26b6baa837335ded88b67d706798e0719a5ed897fb824f59587ae048d9ad4d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b6baa837335ded88b67d706798e0719a5ed897fb824f59587ae048d9ad4d10->enter($__internal_26b6baa837335ded88b67d706798e0719a5ed897fb824f59587ae048d9ad4d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_26b6baa837335ded88b67d706798e0719a5ed897fb824f59587ae048d9ad4d10->leave($__internal_26b6baa837335ded88b67d706798e0719a5ed897fb824f59587ae048d9ad4d10_prof);

        
        $__internal_ca1cc88a3729ec09ae6a41211693b83f6881a3988fcf7633993a1e2921f80927->leave($__internal_ca1cc88a3729ec09ae6a41211693b83f6881a3988fcf7633993a1e2921f80927_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
