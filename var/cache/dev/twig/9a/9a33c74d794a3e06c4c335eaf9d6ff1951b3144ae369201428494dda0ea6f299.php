<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_0087976affddccadfba6ea17d0de6924da9f30d6fcd98bbf723e83b5acd43a3d extends Twig_Template
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
        $__internal_20f5da72f82d92e455e12a26f6a70c354f0c3a7d6b1932854d4ea03b3c0a235a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f5da72f82d92e455e12a26f6a70c354f0c3a7d6b1932854d4ea03b3c0a235a->enter($__internal_20f5da72f82d92e455e12a26f6a70c354f0c3a7d6b1932854d4ea03b3c0a235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_6f5e5309aa950fec1a821aa8f449135cd1ca52c15f3216a7f24c2a5bbb8e4779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5e5309aa950fec1a821aa8f449135cd1ca52c15f3216a7f24c2a5bbb8e4779->enter($__internal_6f5e5309aa950fec1a821aa8f449135cd1ca52c15f3216a7f24c2a5bbb8e4779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_20f5da72f82d92e455e12a26f6a70c354f0c3a7d6b1932854d4ea03b3c0a235a->leave($__internal_20f5da72f82d92e455e12a26f6a70c354f0c3a7d6b1932854d4ea03b3c0a235a_prof);

        
        $__internal_6f5e5309aa950fec1a821aa8f449135cd1ca52c15f3216a7f24c2a5bbb8e4779->leave($__internal_6f5e5309aa950fec1a821aa8f449135cd1ca52c15f3216a7f24c2a5bbb8e4779_prof);

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
