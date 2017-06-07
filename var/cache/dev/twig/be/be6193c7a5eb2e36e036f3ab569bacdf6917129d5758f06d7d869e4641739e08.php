<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4899b806b1d06b9c7afc23f2311275bd8cc5fdb0535e04a6ae573b13acdb226e extends Twig_Template
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
        $__internal_eb8498dcdb51dff56e502f5799f30cf23ac0569d5ddd17b625949f4c53894c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8498dcdb51dff56e502f5799f30cf23ac0569d5ddd17b625949f4c53894c74->enter($__internal_eb8498dcdb51dff56e502f5799f30cf23ac0569d5ddd17b625949f4c53894c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_0241714a44133191bea31631a44ba2597a49b43b91c1d032d04d4e1a7ed318a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0241714a44133191bea31631a44ba2597a49b43b91c1d032d04d4e1a7ed318a0->enter($__internal_0241714a44133191bea31631a44ba2597a49b43b91c1d032d04d4e1a7ed318a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eb8498dcdb51dff56e502f5799f30cf23ac0569d5ddd17b625949f4c53894c74->leave($__internal_eb8498dcdb51dff56e502f5799f30cf23ac0569d5ddd17b625949f4c53894c74_prof);

        
        $__internal_0241714a44133191bea31631a44ba2597a49b43b91c1d032d04d4e1a7ed318a0->leave($__internal_0241714a44133191bea31631a44ba2597a49b43b91c1d032d04d4e1a7ed318a0_prof);

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
