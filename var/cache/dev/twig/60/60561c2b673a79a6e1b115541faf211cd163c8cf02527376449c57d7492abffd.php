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
        $__internal_92fcf64fc0ae0968798998ccd5605597e9bcbf921d0318a286fddb56a0c4de80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fcf64fc0ae0968798998ccd5605597e9bcbf921d0318a286fddb56a0c4de80->enter($__internal_92fcf64fc0ae0968798998ccd5605597e9bcbf921d0318a286fddb56a0c4de80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d3318a839472769942b6993e2599ec7632620d97c2a168ee40fc14848f5122ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3318a839472769942b6993e2599ec7632620d97c2a168ee40fc14848f5122ce->enter($__internal_d3318a839472769942b6993e2599ec7632620d97c2a168ee40fc14848f5122ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_92fcf64fc0ae0968798998ccd5605597e9bcbf921d0318a286fddb56a0c4de80->leave($__internal_92fcf64fc0ae0968798998ccd5605597e9bcbf921d0318a286fddb56a0c4de80_prof);

        
        $__internal_d3318a839472769942b6993e2599ec7632620d97c2a168ee40fc14848f5122ce->leave($__internal_d3318a839472769942b6993e2599ec7632620d97c2a168ee40fc14848f5122ce_prof);

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
