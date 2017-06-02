<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c9fc2a62a2aa920966ca01e9aff0076ee524b0d3decd85ec104dc76828ada589 extends Twig_Template
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
        $__internal_a90a7b812852c0a8e69dd711e64108356a3f16e5f29b777112a75a21401e75eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90a7b812852c0a8e69dd711e64108356a3f16e5f29b777112a75a21401e75eb->enter($__internal_a90a7b812852c0a8e69dd711e64108356a3f16e5f29b777112a75a21401e75eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_8c6a01b06479e7b36f757ea21580575ed260c2d43287f38eef9c455b9f2adaf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6a01b06479e7b36f757ea21580575ed260c2d43287f38eef9c455b9f2adaf8->enter($__internal_8c6a01b06479e7b36f757ea21580575ed260c2d43287f38eef9c455b9f2adaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a90a7b812852c0a8e69dd711e64108356a3f16e5f29b777112a75a21401e75eb->leave($__internal_a90a7b812852c0a8e69dd711e64108356a3f16e5f29b777112a75a21401e75eb_prof);

        
        $__internal_8c6a01b06479e7b36f757ea21580575ed260c2d43287f38eef9c455b9f2adaf8->leave($__internal_8c6a01b06479e7b36f757ea21580575ed260c2d43287f38eef9c455b9f2adaf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
