<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3ce9b6a4691cae51ab4bc63ae49afb66e09ef1a0a9808725c9ba981b9a606be2 extends Twig_Template
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
        $__internal_8a5c63fd7813c55bead2bdc947412399058480ee9fcd91231dc4d17c74aecc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a5c63fd7813c55bead2bdc947412399058480ee9fcd91231dc4d17c74aecc2c->enter($__internal_8a5c63fd7813c55bead2bdc947412399058480ee9fcd91231dc4d17c74aecc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_28249b45caeb4139a63fab1a3bd8132fcfe460a3db3f2ca0db6d8c7ddb3b5b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28249b45caeb4139a63fab1a3bd8132fcfe460a3db3f2ca0db6d8c7ddb3b5b14->enter($__internal_28249b45caeb4139a63fab1a3bd8132fcfe460a3db3f2ca0db6d8c7ddb3b5b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_8a5c63fd7813c55bead2bdc947412399058480ee9fcd91231dc4d17c74aecc2c->leave($__internal_8a5c63fd7813c55bead2bdc947412399058480ee9fcd91231dc4d17c74aecc2c_prof);

        
        $__internal_28249b45caeb4139a63fab1a3bd8132fcfe460a3db3f2ca0db6d8c7ddb3b5b14->leave($__internal_28249b45caeb4139a63fab1a3bd8132fcfe460a3db3f2ca0db6d8c7ddb3b5b14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
