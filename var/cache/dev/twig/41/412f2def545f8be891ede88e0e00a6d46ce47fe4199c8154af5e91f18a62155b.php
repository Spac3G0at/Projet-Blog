<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_edff58f094915862ed44fcd9415f62653f3e12bbd49bc59e06fc315c554ec6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_bc6ca5a0b516ad1f69c368f465b4b0aa3a9beffde28edac248d029c11a33c0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6ca5a0b516ad1f69c368f465b4b0aa3a9beffde28edac248d029c11a33c0da->enter($__internal_bc6ca5a0b516ad1f69c368f465b4b0aa3a9beffde28edac248d029c11a33c0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5387c19db9e06a53edc827f1b13d51e76828b62a615bd86df2332f80775ceed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5387c19db9e06a53edc827f1b13d51e76828b62a615bd86df2332f80775ceed3->enter($__internal_5387c19db9e06a53edc827f1b13d51e76828b62a615bd86df2332f80775ceed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6ca5a0b516ad1f69c368f465b4b0aa3a9beffde28edac248d029c11a33c0da->leave($__internal_bc6ca5a0b516ad1f69c368f465b4b0aa3a9beffde28edac248d029c11a33c0da_prof);

        
        $__internal_5387c19db9e06a53edc827f1b13d51e76828b62a615bd86df2332f80775ceed3->leave($__internal_5387c19db9e06a53edc827f1b13d51e76828b62a615bd86df2332f80775ceed3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_de883a71c4f7de0c0ae4b5fa3636ae12795feaea2d9beef06b761fce2b162bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de883a71c4f7de0c0ae4b5fa3636ae12795feaea2d9beef06b761fce2b162bc7->enter($__internal_de883a71c4f7de0c0ae4b5fa3636ae12795feaea2d9beef06b761fce2b162bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9f29daa042436feccad8cf0637c637513d50886bc5217589fb0a0926d134bb31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f29daa042436feccad8cf0637c637513d50886bc5217589fb0a0926d134bb31->enter($__internal_9f29daa042436feccad8cf0637c637513d50886bc5217589fb0a0926d134bb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9f29daa042436feccad8cf0637c637513d50886bc5217589fb0a0926d134bb31->leave($__internal_9f29daa042436feccad8cf0637c637513d50886bc5217589fb0a0926d134bb31_prof);

        
        $__internal_de883a71c4f7de0c0ae4b5fa3636ae12795feaea2d9beef06b761fce2b162bc7->leave($__internal_de883a71c4f7de0c0ae4b5fa3636ae12795feaea2d9beef06b761fce2b162bc7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6bc618ea46bd58817502592063833f25340c20f9f18fb36e238314d18d7beaa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc618ea46bd58817502592063833f25340c20f9f18fb36e238314d18d7beaa9->enter($__internal_6bc618ea46bd58817502592063833f25340c20f9f18fb36e238314d18d7beaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_417a95c5d8fcc0bc85886685db985d3e0ca4fe09f70b30af5d7b5953a159c324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417a95c5d8fcc0bc85886685db985d3e0ca4fe09f70b30af5d7b5953a159c324->enter($__internal_417a95c5d8fcc0bc85886685db985d3e0ca4fe09f70b30af5d7b5953a159c324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_417a95c5d8fcc0bc85886685db985d3e0ca4fe09f70b30af5d7b5953a159c324->leave($__internal_417a95c5d8fcc0bc85886685db985d3e0ca4fe09f70b30af5d7b5953a159c324_prof);

        
        $__internal_6bc618ea46bd58817502592063833f25340c20f9f18fb36e238314d18d7beaa9->leave($__internal_6bc618ea46bd58817502592063833f25340c20f9f18fb36e238314d18d7beaa9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a04f7c384b505572eb5dd5e979a74e65e7ee5516fed9ec090298b419046cc766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04f7c384b505572eb5dd5e979a74e65e7ee5516fed9ec090298b419046cc766->enter($__internal_a04f7c384b505572eb5dd5e979a74e65e7ee5516fed9ec090298b419046cc766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_20a800056884189f6777f71b7bee49a9175a209e6fa2987140a5312b077ecc59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a800056884189f6777f71b7bee49a9175a209e6fa2987140a5312b077ecc59->enter($__internal_20a800056884189f6777f71b7bee49a9175a209e6fa2987140a5312b077ecc59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20a800056884189f6777f71b7bee49a9175a209e6fa2987140a5312b077ecc59->leave($__internal_20a800056884189f6777f71b7bee49a9175a209e6fa2987140a5312b077ecc59_prof);

        
        $__internal_a04f7c384b505572eb5dd5e979a74e65e7ee5516fed9ec090298b419046cc766->leave($__internal_a04f7c384b505572eb5dd5e979a74e65e7ee5516fed9ec090298b419046cc766_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
