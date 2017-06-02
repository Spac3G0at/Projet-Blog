<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c3a76699c9da10cc6123d686a2413d37881045ee9e3153b561ba0ae7292ba515 extends Twig_Template
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
        $__internal_c38de6645dd2ac3d31803adbe1b83dfa9d924068b37bba41b988d3077924b355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38de6645dd2ac3d31803adbe1b83dfa9d924068b37bba41b988d3077924b355->enter($__internal_c38de6645dd2ac3d31803adbe1b83dfa9d924068b37bba41b988d3077924b355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_bbc5d1c1b83c135dad3d3187e8b4f1b794c3f0dd7dd2ccfb7be2c09476eb27b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc5d1c1b83c135dad3d3187e8b4f1b794c3f0dd7dd2ccfb7be2c09476eb27b0->enter($__internal_bbc5d1c1b83c135dad3d3187e8b4f1b794c3f0dd7dd2ccfb7be2c09476eb27b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c38de6645dd2ac3d31803adbe1b83dfa9d924068b37bba41b988d3077924b355->leave($__internal_c38de6645dd2ac3d31803adbe1b83dfa9d924068b37bba41b988d3077924b355_prof);

        
        $__internal_bbc5d1c1b83c135dad3d3187e8b4f1b794c3f0dd7dd2ccfb7be2c09476eb27b0->leave($__internal_bbc5d1c1b83c135dad3d3187e8b4f1b794c3f0dd7dd2ccfb7be2c09476eb27b0_prof);

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
