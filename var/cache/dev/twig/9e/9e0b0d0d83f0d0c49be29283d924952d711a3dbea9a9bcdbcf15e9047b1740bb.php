<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a062cd6e1c37bdd18196034028055e99d94ad5af1ffa8164f80b0bd0e89f2049 extends Twig_Template
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
        $__internal_a97be6829dc7135a0c704c4e9c55fac58bbfeacf82ec0c6cb4dfdeab0c6c6bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97be6829dc7135a0c704c4e9c55fac58bbfeacf82ec0c6cb4dfdeab0c6c6bf8->enter($__internal_a97be6829dc7135a0c704c4e9c55fac58bbfeacf82ec0c6cb4dfdeab0c6c6bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_42b2fa5bb3b2dc5d83c20a771d75f85f58bf9c7e7d84fbea6638748cbe54df31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b2fa5bb3b2dc5d83c20a771d75f85f58bf9c7e7d84fbea6638748cbe54df31->enter($__internal_42b2fa5bb3b2dc5d83c20a771d75f85f58bf9c7e7d84fbea6638748cbe54df31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a97be6829dc7135a0c704c4e9c55fac58bbfeacf82ec0c6cb4dfdeab0c6c6bf8->leave($__internal_a97be6829dc7135a0c704c4e9c55fac58bbfeacf82ec0c6cb4dfdeab0c6c6bf8_prof);

        
        $__internal_42b2fa5bb3b2dc5d83c20a771d75f85f58bf9c7e7d84fbea6638748cbe54df31->leave($__internal_42b2fa5bb3b2dc5d83c20a771d75f85f58bf9c7e7d84fbea6638748cbe54df31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
