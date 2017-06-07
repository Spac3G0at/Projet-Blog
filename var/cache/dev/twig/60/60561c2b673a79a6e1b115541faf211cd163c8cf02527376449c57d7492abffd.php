<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_79e883a5c10c0b904b52285b2f504f9ecc156b5ef4bfb8f8ebb89a118ec281e6 extends Twig_Template
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
        $__internal_388f26ad316ff576f91f0652d4cbb77a3e3afaf65a2e32a976c0c220f3ebe03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388f26ad316ff576f91f0652d4cbb77a3e3afaf65a2e32a976c0c220f3ebe03f->enter($__internal_388f26ad316ff576f91f0652d4cbb77a3e3afaf65a2e32a976c0c220f3ebe03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_49982b93f3fe1a1d214bb77a4608b5c9f27d33c64cfe1866023673e39660162f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49982b93f3fe1a1d214bb77a4608b5c9f27d33c64cfe1866023673e39660162f->enter($__internal_49982b93f3fe1a1d214bb77a4608b5c9f27d33c64cfe1866023673e39660162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_388f26ad316ff576f91f0652d4cbb77a3e3afaf65a2e32a976c0c220f3ebe03f->leave($__internal_388f26ad316ff576f91f0652d4cbb77a3e3afaf65a2e32a976c0c220f3ebe03f_prof);

        
        $__internal_49982b93f3fe1a1d214bb77a4608b5c9f27d33c64cfe1866023673e39660162f->leave($__internal_49982b93f3fe1a1d214bb77a4608b5c9f27d33c64cfe1866023673e39660162f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
