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
        $__internal_9c92f825a3e67085aab52f61e67985cbfadb2e240ec0ce040f9ebeef55d586d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c92f825a3e67085aab52f61e67985cbfadb2e240ec0ce040f9ebeef55d586d9->enter($__internal_9c92f825a3e67085aab52f61e67985cbfadb2e240ec0ce040f9ebeef55d586d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_e50067d425e9fcb9b3b6538dd61a9f93f09f45db11d1d152de776f6974a4e906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50067d425e9fcb9b3b6538dd61a9f93f09f45db11d1d152de776f6974a4e906->enter($__internal_e50067d425e9fcb9b3b6538dd61a9f93f09f45db11d1d152de776f6974a4e906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_9c92f825a3e67085aab52f61e67985cbfadb2e240ec0ce040f9ebeef55d586d9->leave($__internal_9c92f825a3e67085aab52f61e67985cbfadb2e240ec0ce040f9ebeef55d586d9_prof);

        
        $__internal_e50067d425e9fcb9b3b6538dd61a9f93f09f45db11d1d152de776f6974a4e906->leave($__internal_e50067d425e9fcb9b3b6538dd61a9f93f09f45db11d1d152de776f6974a4e906_prof);

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
