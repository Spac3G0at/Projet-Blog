<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1311f9fe849992f2483616c732d1dc4c98715d91f693cbe6dba0b7180c85b568 extends Twig_Template
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
        $__internal_7fcdc4814b954e6314f42f780f63d2d63b0c8ae73805745555198f9160395de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcdc4814b954e6314f42f780f63d2d63b0c8ae73805745555198f9160395de0->enter($__internal_7fcdc4814b954e6314f42f780f63d2d63b0c8ae73805745555198f9160395de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_229ca88dd6d7e91b0714e32c93273a4d130b5280802ac1f76844c205f095f480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229ca88dd6d7e91b0714e32c93273a4d130b5280802ac1f76844c205f095f480->enter($__internal_229ca88dd6d7e91b0714e32c93273a4d130b5280802ac1f76844c205f095f480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7fcdc4814b954e6314f42f780f63d2d63b0c8ae73805745555198f9160395de0->leave($__internal_7fcdc4814b954e6314f42f780f63d2d63b0c8ae73805745555198f9160395de0_prof);

        
        $__internal_229ca88dd6d7e91b0714e32c93273a4d130b5280802ac1f76844c205f095f480->leave($__internal_229ca88dd6d7e91b0714e32c93273a4d130b5280802ac1f76844c205f095f480_prof);

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
