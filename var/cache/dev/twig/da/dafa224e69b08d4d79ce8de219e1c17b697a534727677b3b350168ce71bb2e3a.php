<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_29ca890c1e959feb97be916ac3988e5ad7a75585056e124bb686b484233040ea extends Twig_Template
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
        $__internal_bc345cd7de23a3ac6026f6fa8f39dac2aeee6d13479856e4c13aee3b83ac3468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc345cd7de23a3ac6026f6fa8f39dac2aeee6d13479856e4c13aee3b83ac3468->enter($__internal_bc345cd7de23a3ac6026f6fa8f39dac2aeee6d13479856e4c13aee3b83ac3468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_1963a443268310c27b3a74fcb658df76219845d6d1a17712e30e1a43095f08d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1963a443268310c27b3a74fcb658df76219845d6d1a17712e30e1a43095f08d0->enter($__internal_1963a443268310c27b3a74fcb658df76219845d6d1a17712e30e1a43095f08d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bc345cd7de23a3ac6026f6fa8f39dac2aeee6d13479856e4c13aee3b83ac3468->leave($__internal_bc345cd7de23a3ac6026f6fa8f39dac2aeee6d13479856e4c13aee3b83ac3468_prof);

        
        $__internal_1963a443268310c27b3a74fcb658df76219845d6d1a17712e30e1a43095f08d0->leave($__internal_1963a443268310c27b3a74fcb658df76219845d6d1a17712e30e1a43095f08d0_prof);

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
