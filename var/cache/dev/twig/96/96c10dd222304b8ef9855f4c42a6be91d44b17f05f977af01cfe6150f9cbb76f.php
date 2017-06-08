<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5961d3cdd12061db55cb8477d5898be8fde78df435ea68f37de62cd091b6a411 extends Twig_Template
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
        $__internal_0e87585fdfacc5bc718f7a68e6a9d82db199a3e5abff9761dd84a0179dce5394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e87585fdfacc5bc718f7a68e6a9d82db199a3e5abff9761dd84a0179dce5394->enter($__internal_0e87585fdfacc5bc718f7a68e6a9d82db199a3e5abff9761dd84a0179dce5394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7645a9d4c6074d5564d7039e8bfcaf2de352230d72c755390a43cd535f19ce6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7645a9d4c6074d5564d7039e8bfcaf2de352230d72c755390a43cd535f19ce6e->enter($__internal_7645a9d4c6074d5564d7039e8bfcaf2de352230d72c755390a43cd535f19ce6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0e87585fdfacc5bc718f7a68e6a9d82db199a3e5abff9761dd84a0179dce5394->leave($__internal_0e87585fdfacc5bc718f7a68e6a9d82db199a3e5abff9761dd84a0179dce5394_prof);

        
        $__internal_7645a9d4c6074d5564d7039e8bfcaf2de352230d72c755390a43cd535f19ce6e->leave($__internal_7645a9d4c6074d5564d7039e8bfcaf2de352230d72c755390a43cd535f19ce6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
