<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0bf80af9d2f90d7bccf9eb4f4e20b075078b8d898d96306aa677907d67ad4901 extends Twig_Template
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
        $__internal_06bfb4e980338c1ab3be55f6b80a5283ef06b01735756e0984b186bebbb99570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bfb4e980338c1ab3be55f6b80a5283ef06b01735756e0984b186bebbb99570->enter($__internal_06bfb4e980338c1ab3be55f6b80a5283ef06b01735756e0984b186bebbb99570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1cdcd376e6586d1ada369fa6d8fed0d9308456a25242c924495df133f38b95d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cdcd376e6586d1ada369fa6d8fed0d9308456a25242c924495df133f38b95d8->enter($__internal_1cdcd376e6586d1ada369fa6d8fed0d9308456a25242c924495df133f38b95d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_06bfb4e980338c1ab3be55f6b80a5283ef06b01735756e0984b186bebbb99570->leave($__internal_06bfb4e980338c1ab3be55f6b80a5283ef06b01735756e0984b186bebbb99570_prof);

        
        $__internal_1cdcd376e6586d1ada369fa6d8fed0d9308456a25242c924495df133f38b95d8->leave($__internal_1cdcd376e6586d1ada369fa6d8fed0d9308456a25242c924495df133f38b95d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
