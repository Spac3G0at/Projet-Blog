<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_783fe3d5adcc92a8af798f5ae3afb9f58540ea2e6c0ccabfcb1e73fdc82d9bfe extends Twig_Template
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
        $__internal_a52cece1f6d7eebb4c4087a8e54b66c577c19e92f0977d3833a4ca4a1f32b944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52cece1f6d7eebb4c4087a8e54b66c577c19e92f0977d3833a4ca4a1f32b944->enter($__internal_a52cece1f6d7eebb4c4087a8e54b66c577c19e92f0977d3833a4ca4a1f32b944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_6f46cbdf5019344c87f1a84bab6692e979d02922dd6790648a2176131d986c98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f46cbdf5019344c87f1a84bab6692e979d02922dd6790648a2176131d986c98->enter($__internal_6f46cbdf5019344c87f1a84bab6692e979d02922dd6790648a2176131d986c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a52cece1f6d7eebb4c4087a8e54b66c577c19e92f0977d3833a4ca4a1f32b944->leave($__internal_a52cece1f6d7eebb4c4087a8e54b66c577c19e92f0977d3833a4ca4a1f32b944_prof);

        
        $__internal_6f46cbdf5019344c87f1a84bab6692e979d02922dd6790648a2176131d986c98->leave($__internal_6f46cbdf5019344c87f1a84bab6692e979d02922dd6790648a2176131d986c98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
