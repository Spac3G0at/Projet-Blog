<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_92618bfaa236fad52fbd48e219e19fd5b4040e6e8aad988dc74eff494445a674 extends Twig_Template
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
        $__internal_1788f443cb4522792f29eb9aa9d1ea1618b378d9787365dcec808a4e2bf1be8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1788f443cb4522792f29eb9aa9d1ea1618b378d9787365dcec808a4e2bf1be8b->enter($__internal_1788f443cb4522792f29eb9aa9d1ea1618b378d9787365dcec808a4e2bf1be8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e932c58c695f5994321f47e23773bc2ca02aae103f7ab1540044fc26aeae02a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e932c58c695f5994321f47e23773bc2ca02aae103f7ab1540044fc26aeae02a6->enter($__internal_e932c58c695f5994321f47e23773bc2ca02aae103f7ab1540044fc26aeae02a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1788f443cb4522792f29eb9aa9d1ea1618b378d9787365dcec808a4e2bf1be8b->leave($__internal_1788f443cb4522792f29eb9aa9d1ea1618b378d9787365dcec808a4e2bf1be8b_prof);

        
        $__internal_e932c58c695f5994321f47e23773bc2ca02aae103f7ab1540044fc26aeae02a6->leave($__internal_e932c58c695f5994321f47e23773bc2ca02aae103f7ab1540044fc26aeae02a6_prof);

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
