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
        $__internal_f4df203c05aa2804cc79d0eab0d372f799ff586d2ecb171770fea1a8d49256af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4df203c05aa2804cc79d0eab0d372f799ff586d2ecb171770fea1a8d49256af->enter($__internal_f4df203c05aa2804cc79d0eab0d372f799ff586d2ecb171770fea1a8d49256af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c7748f312af8131862bff839ab312cfa828d16af29201bc210f5a940dd6350ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7748f312af8131862bff839ab312cfa828d16af29201bc210f5a940dd6350ee->enter($__internal_c7748f312af8131862bff839ab312cfa828d16af29201bc210f5a940dd6350ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f4df203c05aa2804cc79d0eab0d372f799ff586d2ecb171770fea1a8d49256af->leave($__internal_f4df203c05aa2804cc79d0eab0d372f799ff586d2ecb171770fea1a8d49256af_prof);

        
        $__internal_c7748f312af8131862bff839ab312cfa828d16af29201bc210f5a940dd6350ee->leave($__internal_c7748f312af8131862bff839ab312cfa828d16af29201bc210f5a940dd6350ee_prof);

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
