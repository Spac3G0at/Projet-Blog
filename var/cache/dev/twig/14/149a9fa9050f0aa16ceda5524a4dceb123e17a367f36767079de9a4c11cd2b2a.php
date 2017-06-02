<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9640b492e32632d7d96d14ac23dc20d3243028ef3a7c8ab33c8cad0eb9ebadc extends Twig_Template
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
        $__internal_5841d2c82fe78e9d6e22fa69baf6fa1710bffff20958f417a9ef7928351a41ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5841d2c82fe78e9d6e22fa69baf6fa1710bffff20958f417a9ef7928351a41ee->enter($__internal_5841d2c82fe78e9d6e22fa69baf6fa1710bffff20958f417a9ef7928351a41ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4276376f7c03196f1dd37363d1d05d77898f577c2774fadf11e5fb4d8e20895e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4276376f7c03196f1dd37363d1d05d77898f577c2774fadf11e5fb4d8e20895e->enter($__internal_4276376f7c03196f1dd37363d1d05d77898f577c2774fadf11e5fb4d8e20895e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5841d2c82fe78e9d6e22fa69baf6fa1710bffff20958f417a9ef7928351a41ee->leave($__internal_5841d2c82fe78e9d6e22fa69baf6fa1710bffff20958f417a9ef7928351a41ee_prof);

        
        $__internal_4276376f7c03196f1dd37363d1d05d77898f577c2774fadf11e5fb4d8e20895e->leave($__internal_4276376f7c03196f1dd37363d1d05d77898f577c2774fadf11e5fb4d8e20895e_prof);

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
