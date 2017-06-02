<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_70741f43223fde4fc1583be885c06f741893dd136ba35f11a2c8d26906bea9ec extends Twig_Template
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
        $__internal_6732c5966d6fe7cc182d6451fe12bd69864130200390dd5a8c7ca3e025f142d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6732c5966d6fe7cc182d6451fe12bd69864130200390dd5a8c7ca3e025f142d7->enter($__internal_6732c5966d6fe7cc182d6451fe12bd69864130200390dd5a8c7ca3e025f142d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cf1f7635f8a2e9080ae5990e54f865b8ac0c5336d9745a652c0b03c7f59370d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1f7635f8a2e9080ae5990e54f865b8ac0c5336d9745a652c0b03c7f59370d6->enter($__internal_cf1f7635f8a2e9080ae5990e54f865b8ac0c5336d9745a652c0b03c7f59370d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6732c5966d6fe7cc182d6451fe12bd69864130200390dd5a8c7ca3e025f142d7->leave($__internal_6732c5966d6fe7cc182d6451fe12bd69864130200390dd5a8c7ca3e025f142d7_prof);

        
        $__internal_cf1f7635f8a2e9080ae5990e54f865b8ac0c5336d9745a652c0b03c7f59370d6->leave($__internal_cf1f7635f8a2e9080ae5990e54f865b8ac0c5336d9745a652c0b03c7f59370d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
