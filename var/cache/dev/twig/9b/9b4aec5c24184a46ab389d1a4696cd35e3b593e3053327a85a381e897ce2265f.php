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
        $__internal_ef90d4df5633ff0a4af09d89d94cd25e48a746ce256fdb69c885311281b054c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef90d4df5633ff0a4af09d89d94cd25e48a746ce256fdb69c885311281b054c7->enter($__internal_ef90d4df5633ff0a4af09d89d94cd25e48a746ce256fdb69c885311281b054c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f3cd4c289648b0602581623c7788971b32057950b0226f6700433b740bd67093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3cd4c289648b0602581623c7788971b32057950b0226f6700433b740bd67093->enter($__internal_f3cd4c289648b0602581623c7788971b32057950b0226f6700433b740bd67093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ef90d4df5633ff0a4af09d89d94cd25e48a746ce256fdb69c885311281b054c7->leave($__internal_ef90d4df5633ff0a4af09d89d94cd25e48a746ce256fdb69c885311281b054c7_prof);

        
        $__internal_f3cd4c289648b0602581623c7788971b32057950b0226f6700433b740bd67093->leave($__internal_f3cd4c289648b0602581623c7788971b32057950b0226f6700433b740bd67093_prof);

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
