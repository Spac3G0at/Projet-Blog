<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_866a49996fc651ea4592e6458b34c68b47035e9a834bf5ede1b157724e02e0f8 extends Twig_Template
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
        $__internal_9e98152df4cf60d40098976409587188bc6444a5291c6296adf3070d5e007b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e98152df4cf60d40098976409587188bc6444a5291c6296adf3070d5e007b2b->enter($__internal_9e98152df4cf60d40098976409587188bc6444a5291c6296adf3070d5e007b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_113dc7aa84be20f4c0b49d459273194005aad597f8b640a2104a79d5dc724784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113dc7aa84be20f4c0b49d459273194005aad597f8b640a2104a79d5dc724784->enter($__internal_113dc7aa84be20f4c0b49d459273194005aad597f8b640a2104a79d5dc724784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9e98152df4cf60d40098976409587188bc6444a5291c6296adf3070d5e007b2b->leave($__internal_9e98152df4cf60d40098976409587188bc6444a5291c6296adf3070d5e007b2b_prof);

        
        $__internal_113dc7aa84be20f4c0b49d459273194005aad597f8b640a2104a79d5dc724784->leave($__internal_113dc7aa84be20f4c0b49d459273194005aad597f8b640a2104a79d5dc724784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
