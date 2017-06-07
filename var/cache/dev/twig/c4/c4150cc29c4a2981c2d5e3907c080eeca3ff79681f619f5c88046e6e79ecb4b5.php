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
        $__internal_6db7de33508060b89d75463b3c14802cfee92b5f32a2507d440ad8738828d784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db7de33508060b89d75463b3c14802cfee92b5f32a2507d440ad8738828d784->enter($__internal_6db7de33508060b89d75463b3c14802cfee92b5f32a2507d440ad8738828d784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a10523f2305d1489cb43d3c54dcc1ed94ebd44e81213d253f2ed7e139b88f285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a10523f2305d1489cb43d3c54dcc1ed94ebd44e81213d253f2ed7e139b88f285->enter($__internal_a10523f2305d1489cb43d3c54dcc1ed94ebd44e81213d253f2ed7e139b88f285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6db7de33508060b89d75463b3c14802cfee92b5f32a2507d440ad8738828d784->leave($__internal_6db7de33508060b89d75463b3c14802cfee92b5f32a2507d440ad8738828d784_prof);

        
        $__internal_a10523f2305d1489cb43d3c54dcc1ed94ebd44e81213d253f2ed7e139b88f285->leave($__internal_a10523f2305d1489cb43d3c54dcc1ed94ebd44e81213d253f2ed7e139b88f285_prof);

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
