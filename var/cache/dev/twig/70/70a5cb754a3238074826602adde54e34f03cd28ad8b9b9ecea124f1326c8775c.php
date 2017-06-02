<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_41feb670a21bb25ec30a3560eede8ee50776501e12554294cb2800f623d7cf52 extends Twig_Template
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
        $__internal_1adf0ab1a10d422467b65faf1a19d03d6c16188f87600f595d2f2c977fa29055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adf0ab1a10d422467b65faf1a19d03d6c16188f87600f595d2f2c977fa29055->enter($__internal_1adf0ab1a10d422467b65faf1a19d03d6c16188f87600f595d2f2c977fa29055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_942d9d73dc42c09daf9ec5703b2e698b62246dfa7f4d8f79bfb36e64b1225808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942d9d73dc42c09daf9ec5703b2e698b62246dfa7f4d8f79bfb36e64b1225808->enter($__internal_942d9d73dc42c09daf9ec5703b2e698b62246dfa7f4d8f79bfb36e64b1225808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1adf0ab1a10d422467b65faf1a19d03d6c16188f87600f595d2f2c977fa29055->leave($__internal_1adf0ab1a10d422467b65faf1a19d03d6c16188f87600f595d2f2c977fa29055_prof);

        
        $__internal_942d9d73dc42c09daf9ec5703b2e698b62246dfa7f4d8f79bfb36e64b1225808->leave($__internal_942d9d73dc42c09daf9ec5703b2e698b62246dfa7f4d8f79bfb36e64b1225808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
