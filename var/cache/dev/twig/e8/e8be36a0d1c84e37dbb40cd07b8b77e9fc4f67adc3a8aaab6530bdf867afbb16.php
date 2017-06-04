<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54b220587afcb11d94e2d645132729fd8ac988346f81b80c826e7ed2b9914ded extends Twig_Template
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
        $__internal_c3f6cecc7cf44442f7a2bb998eb6717186c33bab1adc518c17bde89125b89f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f6cecc7cf44442f7a2bb998eb6717186c33bab1adc518c17bde89125b89f40->enter($__internal_c3f6cecc7cf44442f7a2bb998eb6717186c33bab1adc518c17bde89125b89f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_8cc41d8b5acb78bbf228ebcc997c86d10499315e880608a59752ab9c3075ee62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc41d8b5acb78bbf228ebcc997c86d10499315e880608a59752ab9c3075ee62->enter($__internal_8cc41d8b5acb78bbf228ebcc997c86d10499315e880608a59752ab9c3075ee62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c3f6cecc7cf44442f7a2bb998eb6717186c33bab1adc518c17bde89125b89f40->leave($__internal_c3f6cecc7cf44442f7a2bb998eb6717186c33bab1adc518c17bde89125b89f40_prof);

        
        $__internal_8cc41d8b5acb78bbf228ebcc997c86d10499315e880608a59752ab9c3075ee62->leave($__internal_8cc41d8b5acb78bbf228ebcc997c86d10499315e880608a59752ab9c3075ee62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
