<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_3f002c1a57dc16643e9f139568f5cdc1e8bcf6a73c8b2b00e0ce085ca0a4aed5 extends Twig_Template
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
        $__internal_e095bf0ac8de03f5d6c10f3e07db4601a503df1c1c1f4672fb53b064cc685da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e095bf0ac8de03f5d6c10f3e07db4601a503df1c1c1f4672fb53b064cc685da5->enter($__internal_e095bf0ac8de03f5d6c10f3e07db4601a503df1c1c1f4672fb53b064cc685da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_02ea63aa0cb6f390d012557339ed89c74790e3921bee9c25d862c92cd34e0b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ea63aa0cb6f390d012557339ed89c74790e3921bee9c25d862c92cd34e0b03->enter($__internal_02ea63aa0cb6f390d012557339ed89c74790e3921bee9c25d862c92cd34e0b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_e095bf0ac8de03f5d6c10f3e07db4601a503df1c1c1f4672fb53b064cc685da5->leave($__internal_e095bf0ac8de03f5d6c10f3e07db4601a503df1c1c1f4672fb53b064cc685da5_prof);

        
        $__internal_02ea63aa0cb6f390d012557339ed89c74790e3921bee9c25d862c92cd34e0b03->leave($__internal_02ea63aa0cb6f390d012557339ed89c74790e3921bee9c25d862c92cd34e0b03_prof);

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
