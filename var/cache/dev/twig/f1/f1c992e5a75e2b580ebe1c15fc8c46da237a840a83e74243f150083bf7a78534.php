<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_43b2b094e83c68a7a011b0790a0ff4837f068befa34e7f86e99531e19a8723e8 extends Twig_Template
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
        $__internal_003b40152fb68f7dc400d47b87db2f7215d711f9f0ce7291e8ae6255a45d1a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_003b40152fb68f7dc400d47b87db2f7215d711f9f0ce7291e8ae6255a45d1a1d->enter($__internal_003b40152fb68f7dc400d47b87db2f7215d711f9f0ce7291e8ae6255a45d1a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_60c7d0995eebd81a623016fbc78f56eff8ae451efae628e5cdcd7afe60a4a877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c7d0995eebd81a623016fbc78f56eff8ae451efae628e5cdcd7afe60a4a877->enter($__internal_60c7d0995eebd81a623016fbc78f56eff8ae451efae628e5cdcd7afe60a4a877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_003b40152fb68f7dc400d47b87db2f7215d711f9f0ce7291e8ae6255a45d1a1d->leave($__internal_003b40152fb68f7dc400d47b87db2f7215d711f9f0ce7291e8ae6255a45d1a1d_prof);

        
        $__internal_60c7d0995eebd81a623016fbc78f56eff8ae451efae628e5cdcd7afe60a4a877->leave($__internal_60c7d0995eebd81a623016fbc78f56eff8ae451efae628e5cdcd7afe60a4a877_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
