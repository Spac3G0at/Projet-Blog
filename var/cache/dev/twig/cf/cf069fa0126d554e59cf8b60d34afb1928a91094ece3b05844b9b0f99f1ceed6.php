<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a1730b05c8c67be0fba1b021ed900986e13401cef73d813c000ece116279977f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5a1e8a566fcbec0f2d0c74f2aab9a288617e3ee7b37f123a1d8b4d470f6abc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a1e8a566fcbec0f2d0c74f2aab9a288617e3ee7b37f123a1d8b4d470f6abc6->enter($__internal_a5a1e8a566fcbec0f2d0c74f2aab9a288617e3ee7b37f123a1d8b4d470f6abc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_7016581002cd3d4c4cc3eba2ff2e365fc338c5fbad9789e345f4734119b0b8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7016581002cd3d4c4cc3eba2ff2e365fc338c5fbad9789e345f4734119b0b8b0->enter($__internal_7016581002cd3d4c4cc3eba2ff2e365fc338c5fbad9789e345f4734119b0b8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a5a1e8a566fcbec0f2d0c74f2aab9a288617e3ee7b37f123a1d8b4d470f6abc6->leave($__internal_a5a1e8a566fcbec0f2d0c74f2aab9a288617e3ee7b37f123a1d8b4d470f6abc6_prof);

        
        $__internal_7016581002cd3d4c4cc3eba2ff2e365fc338c5fbad9789e345f4734119b0b8b0->leave($__internal_7016581002cd3d4c4cc3eba2ff2e365fc338c5fbad9789e345f4734119b0b8b0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
