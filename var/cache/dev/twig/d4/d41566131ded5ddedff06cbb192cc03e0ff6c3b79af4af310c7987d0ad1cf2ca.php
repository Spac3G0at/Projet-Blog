<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c7445741cb00c83c40ee2ff98002ad5218feb09a1d1719319a3d3716cd6ce8a7 extends Twig_Template
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
        $__internal_33ba0c233f031eb24b551b0b9935be021071063c25b023671f9a45fb787b1702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ba0c233f031eb24b551b0b9935be021071063c25b023671f9a45fb787b1702->enter($__internal_33ba0c233f031eb24b551b0b9935be021071063c25b023671f9a45fb787b1702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cee876d9553cba09dee552ff89384210cd1c0772217c819817eb5d9947c63ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee876d9553cba09dee552ff89384210cd1c0772217c819817eb5d9947c63ad6->enter($__internal_cee876d9553cba09dee552ff89384210cd1c0772217c819817eb5d9947c63ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_33ba0c233f031eb24b551b0b9935be021071063c25b023671f9a45fb787b1702->leave($__internal_33ba0c233f031eb24b551b0b9935be021071063c25b023671f9a45fb787b1702_prof);

        
        $__internal_cee876d9553cba09dee552ff89384210cd1c0772217c819817eb5d9947c63ad6->leave($__internal_cee876d9553cba09dee552ff89384210cd1c0772217c819817eb5d9947c63ad6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
