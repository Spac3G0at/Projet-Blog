<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a4089b83c9e5c41c2571a6dab540149666ce13561c43f6e680c8fc137ae17808 extends Twig_Template
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
        $__internal_7c8f506326c5e4d387fc000a37b2e610ba188f8d720ff55cadc9fc99cf82627c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8f506326c5e4d387fc000a37b2e610ba188f8d720ff55cadc9fc99cf82627c->enter($__internal_7c8f506326c5e4d387fc000a37b2e610ba188f8d720ff55cadc9fc99cf82627c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_992deca295aff262db8b5bc63b3cae27252acd0a121622e06c7fde0c8385d76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992deca295aff262db8b5bc63b3cae27252acd0a121622e06c7fde0c8385d76b->enter($__internal_992deca295aff262db8b5bc63b3cae27252acd0a121622e06c7fde0c8385d76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7c8f506326c5e4d387fc000a37b2e610ba188f8d720ff55cadc9fc99cf82627c->leave($__internal_7c8f506326c5e4d387fc000a37b2e610ba188f8d720ff55cadc9fc99cf82627c_prof);

        
        $__internal_992deca295aff262db8b5bc63b3cae27252acd0a121622e06c7fde0c8385d76b->leave($__internal_992deca295aff262db8b5bc63b3cae27252acd0a121622e06c7fde0c8385d76b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
