<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0e75815105d847d8c790db13e0b650bb9db51335b8fa6a9e56ac7260fe2fde4d extends Twig_Template
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
        $__internal_2fd99c01ecee37897dd85cb5397c46f16e621c516d882a89dbd13553aaf9a7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fd99c01ecee37897dd85cb5397c46f16e621c516d882a89dbd13553aaf9a7dc->enter($__internal_2fd99c01ecee37897dd85cb5397c46f16e621c516d882a89dbd13553aaf9a7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a7001a6d045421265e44f7debbfa19be12f01315a2196848c9a118872b7d2883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7001a6d045421265e44f7debbfa19be12f01315a2196848c9a118872b7d2883->enter($__internal_a7001a6d045421265e44f7debbfa19be12f01315a2196848c9a118872b7d2883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2fd99c01ecee37897dd85cb5397c46f16e621c516d882a89dbd13553aaf9a7dc->leave($__internal_2fd99c01ecee37897dd85cb5397c46f16e621c516d882a89dbd13553aaf9a7dc_prof);

        
        $__internal_a7001a6d045421265e44f7debbfa19be12f01315a2196848c9a118872b7d2883->leave($__internal_a7001a6d045421265e44f7debbfa19be12f01315a2196848c9a118872b7d2883_prof);

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
