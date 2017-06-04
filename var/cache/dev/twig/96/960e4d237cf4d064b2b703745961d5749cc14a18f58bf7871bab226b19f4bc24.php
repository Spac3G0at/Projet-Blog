<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0ae28cf7911f0ed20a0011eeb87b0415361bd11e29500c4e72d1da95d03e51d8 extends Twig_Template
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
        $__internal_6a175a37eb88dbaedf02cc9b6441ea58fbe2b5516d02b2e51b76842449917c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a175a37eb88dbaedf02cc9b6441ea58fbe2b5516d02b2e51b76842449917c00->enter($__internal_6a175a37eb88dbaedf02cc9b6441ea58fbe2b5516d02b2e51b76842449917c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_00ac40e076b8c239793a20551db6d02fd4746ff81133693af2fae7d9d32661b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ac40e076b8c239793a20551db6d02fd4746ff81133693af2fae7d9d32661b6->enter($__internal_00ac40e076b8c239793a20551db6d02fd4746ff81133693af2fae7d9d32661b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6a175a37eb88dbaedf02cc9b6441ea58fbe2b5516d02b2e51b76842449917c00->leave($__internal_6a175a37eb88dbaedf02cc9b6441ea58fbe2b5516d02b2e51b76842449917c00_prof);

        
        $__internal_00ac40e076b8c239793a20551db6d02fd4746ff81133693af2fae7d9d32661b6->leave($__internal_00ac40e076b8c239793a20551db6d02fd4746ff81133693af2fae7d9d32661b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
