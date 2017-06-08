<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_914f314f34053ad0a3ad96cba706baa061eb7b1a80a7ac6886ee30de48a75cb2 extends Twig_Template
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
        $__internal_28089a168e9bbf329a70ec27333e3b65c52085c7edb7442a191ef30dd2d81ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28089a168e9bbf329a70ec27333e3b65c52085c7edb7442a191ef30dd2d81ca6->enter($__internal_28089a168e9bbf329a70ec27333e3b65c52085c7edb7442a191ef30dd2d81ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_fe06336cceab87b7dd0271dfc8d0b5de9bd6b1eaf9a0bc93d250b8f0ec4fdebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe06336cceab87b7dd0271dfc8d0b5de9bd6b1eaf9a0bc93d250b8f0ec4fdebc->enter($__internal_fe06336cceab87b7dd0271dfc8d0b5de9bd6b1eaf9a0bc93d250b8f0ec4fdebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_28089a168e9bbf329a70ec27333e3b65c52085c7edb7442a191ef30dd2d81ca6->leave($__internal_28089a168e9bbf329a70ec27333e3b65c52085c7edb7442a191ef30dd2d81ca6_prof);

        
        $__internal_fe06336cceab87b7dd0271dfc8d0b5de9bd6b1eaf9a0bc93d250b8f0ec4fdebc->leave($__internal_fe06336cceab87b7dd0271dfc8d0b5de9bd6b1eaf9a0bc93d250b8f0ec4fdebc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
