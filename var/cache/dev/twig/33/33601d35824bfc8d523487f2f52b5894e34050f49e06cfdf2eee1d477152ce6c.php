<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_e84fe3836a3d99f10f4facbaf7ca845020eb0277f51baada4bf7ad3e5ba32dd9 extends Twig_Template
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
        $__internal_1f0b6a88589dc2e4345b5b82b13f1d2a3506c99938cb9898245d769eb09564a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f0b6a88589dc2e4345b5b82b13f1d2a3506c99938cb9898245d769eb09564a1->enter($__internal_1f0b6a88589dc2e4345b5b82b13f1d2a3506c99938cb9898245d769eb09564a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_30811f145f8f0f6d2e1a2dee53b6e0c99bb5408ddd6afa932c25252f2d14c63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30811f145f8f0f6d2e1a2dee53b6e0c99bb5408ddd6afa932c25252f2d14c63b->enter($__internal_30811f145f8f0f6d2e1a2dee53b6e0c99bb5408ddd6afa932c25252f2d14c63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1f0b6a88589dc2e4345b5b82b13f1d2a3506c99938cb9898245d769eb09564a1->leave($__internal_1f0b6a88589dc2e4345b5b82b13f1d2a3506c99938cb9898245d769eb09564a1_prof);

        
        $__internal_30811f145f8f0f6d2e1a2dee53b6e0c99bb5408ddd6afa932c25252f2d14c63b->leave($__internal_30811f145f8f0f6d2e1a2dee53b6e0c99bb5408ddd6afa932c25252f2d14c63b_prof);

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
