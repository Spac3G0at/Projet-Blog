<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_65b39c3a5c5a228a3dd848581b06adaef37fecc0df9f0abefff6472f5c236a19 extends Twig_Template
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
        $__internal_f99a55efafa34624f26e083ffc2acf5c8546ba4b556be761f3abb40f553c5101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99a55efafa34624f26e083ffc2acf5c8546ba4b556be761f3abb40f553c5101->enter($__internal_f99a55efafa34624f26e083ffc2acf5c8546ba4b556be761f3abb40f553c5101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ad0c7a08f314d09c7c6adce1e6178b20b787ca4436af34ceb36dd93258f7b0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad0c7a08f314d09c7c6adce1e6178b20b787ca4436af34ceb36dd93258f7b0e0->enter($__internal_ad0c7a08f314d09c7c6adce1e6178b20b787ca4436af34ceb36dd93258f7b0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f99a55efafa34624f26e083ffc2acf5c8546ba4b556be761f3abb40f553c5101->leave($__internal_f99a55efafa34624f26e083ffc2acf5c8546ba4b556be761f3abb40f553c5101_prof);

        
        $__internal_ad0c7a08f314d09c7c6adce1e6178b20b787ca4436af34ceb36dd93258f7b0e0->leave($__internal_ad0c7a08f314d09c7c6adce1e6178b20b787ca4436af34ceb36dd93258f7b0e0_prof);

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
