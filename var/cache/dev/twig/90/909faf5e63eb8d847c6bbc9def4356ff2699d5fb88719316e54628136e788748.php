<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9d8c6bbfcd38649d20c4452094d58c5e2b577fbdc5c7ca388cb5103b7a4b9054 extends Twig_Template
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
        $__internal_3644e85712df0aa74477939c4b4ed0b45618a79f2ab6618daa7007d983e4acbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3644e85712df0aa74477939c4b4ed0b45618a79f2ab6618daa7007d983e4acbf->enter($__internal_3644e85712df0aa74477939c4b4ed0b45618a79f2ab6618daa7007d983e4acbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b2c877186c71b3cddc3fba5c88f0da9bc55a0bac8215c2d756338455178a8ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c877186c71b3cddc3fba5c88f0da9bc55a0bac8215c2d756338455178a8ec3->enter($__internal_b2c877186c71b3cddc3fba5c88f0da9bc55a0bac8215c2d756338455178a8ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3644e85712df0aa74477939c4b4ed0b45618a79f2ab6618daa7007d983e4acbf->leave($__internal_3644e85712df0aa74477939c4b4ed0b45618a79f2ab6618daa7007d983e4acbf_prof);

        
        $__internal_b2c877186c71b3cddc3fba5c88f0da9bc55a0bac8215c2d756338455178a8ec3->leave($__internal_b2c877186c71b3cddc3fba5c88f0da9bc55a0bac8215c2d756338455178a8ec3_prof);

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
