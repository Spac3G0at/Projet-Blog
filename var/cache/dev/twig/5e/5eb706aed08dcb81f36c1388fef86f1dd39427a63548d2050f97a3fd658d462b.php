<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7db14f83ef5a0fccb259df97232585b2fda65636e5e6c61b87cc06936bac8c2a extends Twig_Template
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
        $__internal_90733de5e37625d39e2071d8497c0550092d84be37d66aac4ed3cb774fee55d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90733de5e37625d39e2071d8497c0550092d84be37d66aac4ed3cb774fee55d9->enter($__internal_90733de5e37625d39e2071d8497c0550092d84be37d66aac4ed3cb774fee55d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b713be547e712895632a393340b21d3987eb7cae1c70d3bfe6f12593c2aae6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b713be547e712895632a393340b21d3987eb7cae1c70d3bfe6f12593c2aae6d7->enter($__internal_b713be547e712895632a393340b21d3987eb7cae1c70d3bfe6f12593c2aae6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_90733de5e37625d39e2071d8497c0550092d84be37d66aac4ed3cb774fee55d9->leave($__internal_90733de5e37625d39e2071d8497c0550092d84be37d66aac4ed3cb774fee55d9_prof);

        
        $__internal_b713be547e712895632a393340b21d3987eb7cae1c70d3bfe6f12593c2aae6d7->leave($__internal_b713be547e712895632a393340b21d3987eb7cae1c70d3bfe6f12593c2aae6d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
