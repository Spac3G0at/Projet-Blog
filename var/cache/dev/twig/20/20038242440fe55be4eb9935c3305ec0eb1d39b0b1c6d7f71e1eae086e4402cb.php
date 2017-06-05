<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_88b026f9d75bde90312f30a0ad1af36c003ff230ee33838578b375cf366a2f1c extends Twig_Template
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
        $__internal_35fd75aeace1097abb781466b90b11b9f5992db8bb1f66b43624bb86c8b1afb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35fd75aeace1097abb781466b90b11b9f5992db8bb1f66b43624bb86c8b1afb4->enter($__internal_35fd75aeace1097abb781466b90b11b9f5992db8bb1f66b43624bb86c8b1afb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_fcac3325e6c19c4224921ec9d80039a2312d97ee077a1af02077792056ffcec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcac3325e6c19c4224921ec9d80039a2312d97ee077a1af02077792056ffcec4->enter($__internal_fcac3325e6c19c4224921ec9d80039a2312d97ee077a1af02077792056ffcec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_35fd75aeace1097abb781466b90b11b9f5992db8bb1f66b43624bb86c8b1afb4->leave($__internal_35fd75aeace1097abb781466b90b11b9f5992db8bb1f66b43624bb86c8b1afb4_prof);

        
        $__internal_fcac3325e6c19c4224921ec9d80039a2312d97ee077a1af02077792056ffcec4->leave($__internal_fcac3325e6c19c4224921ec9d80039a2312d97ee077a1af02077792056ffcec4_prof);

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
