<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_534995e2b280640c733dc40f80f8e6656ce776f3f8b8c75267285cb614128378 extends Twig_Template
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
        $__internal_d3ef1a557e32679e1d3cfae973ecd2073e707aea1b43a541e8f3b1abbae7cb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ef1a557e32679e1d3cfae973ecd2073e707aea1b43a541e8f3b1abbae7cb62->enter($__internal_d3ef1a557e32679e1d3cfae973ecd2073e707aea1b43a541e8f3b1abbae7cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ccddd5bea073b1685cb007e99e979526a2fc417f8d5d9aae897f2371abbe1265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccddd5bea073b1685cb007e99e979526a2fc417f8d5d9aae897f2371abbe1265->enter($__internal_ccddd5bea073b1685cb007e99e979526a2fc417f8d5d9aae897f2371abbe1265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d3ef1a557e32679e1d3cfae973ecd2073e707aea1b43a541e8f3b1abbae7cb62->leave($__internal_d3ef1a557e32679e1d3cfae973ecd2073e707aea1b43a541e8f3b1abbae7cb62_prof);

        
        $__internal_ccddd5bea073b1685cb007e99e979526a2fc417f8d5d9aae897f2371abbe1265->leave($__internal_ccddd5bea073b1685cb007e99e979526a2fc417f8d5d9aae897f2371abbe1265_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
