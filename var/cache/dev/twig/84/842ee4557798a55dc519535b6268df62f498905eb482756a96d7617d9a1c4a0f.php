<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3d61591d162a60a9ae31e0824e890758251c854316bcdedc0c7fd0ad6f01f875 extends Twig_Template
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
        $__internal_70a1916bb3a0300fe22509fe600026da64e926503cf73a3bc20475a824bae8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a1916bb3a0300fe22509fe600026da64e926503cf73a3bc20475a824bae8e6->enter($__internal_70a1916bb3a0300fe22509fe600026da64e926503cf73a3bc20475a824bae8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_70dcec9117fdf382c1d09de6563f36a96a06060af5875860027da744c255e5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dcec9117fdf382c1d09de6563f36a96a06060af5875860027da744c255e5d5->enter($__internal_70dcec9117fdf382c1d09de6563f36a96a06060af5875860027da744c255e5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_70a1916bb3a0300fe22509fe600026da64e926503cf73a3bc20475a824bae8e6->leave($__internal_70a1916bb3a0300fe22509fe600026da64e926503cf73a3bc20475a824bae8e6_prof);

        
        $__internal_70dcec9117fdf382c1d09de6563f36a96a06060af5875860027da744c255e5d5->leave($__internal_70dcec9117fdf382c1d09de6563f36a96a06060af5875860027da744c255e5d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
