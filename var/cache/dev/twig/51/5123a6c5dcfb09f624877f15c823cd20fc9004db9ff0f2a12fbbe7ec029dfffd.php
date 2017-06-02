<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c5993f342c1ef401200c065a4a34055176e0f4288db4cd5895670091b2fc401b extends Twig_Template
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
        $__internal_d601d44fcc001d8b56367a95e6905afedf81fe133523ab26bacefdac5acf6a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d601d44fcc001d8b56367a95e6905afedf81fe133523ab26bacefdac5acf6a27->enter($__internal_d601d44fcc001d8b56367a95e6905afedf81fe133523ab26bacefdac5acf6a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_ede8dad8424333ff7d536f6de963c72a18c50d7f3713c48dc0e9870e17fc9573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede8dad8424333ff7d536f6de963c72a18c50d7f3713c48dc0e9870e17fc9573->enter($__internal_ede8dad8424333ff7d536f6de963c72a18c50d7f3713c48dc0e9870e17fc9573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_d601d44fcc001d8b56367a95e6905afedf81fe133523ab26bacefdac5acf6a27->leave($__internal_d601d44fcc001d8b56367a95e6905afedf81fe133523ab26bacefdac5acf6a27_prof);

        
        $__internal_ede8dad8424333ff7d536f6de963c72a18c50d7f3713c48dc0e9870e17fc9573->leave($__internal_ede8dad8424333ff7d536f6de963c72a18c50d7f3713c48dc0e9870e17fc9573_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
