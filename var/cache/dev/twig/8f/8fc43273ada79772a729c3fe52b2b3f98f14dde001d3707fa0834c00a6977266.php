<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_faa3cecf6c6686e8651fa99eaf3e1969782fc8965bbb85de4a16771771178774 extends Twig_Template
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
        $__internal_8a528a4602271f9e1f6ccaef0e595754c28cb0d7ea62916e83dfd3b0aedada86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a528a4602271f9e1f6ccaef0e595754c28cb0d7ea62916e83dfd3b0aedada86->enter($__internal_8a528a4602271f9e1f6ccaef0e595754c28cb0d7ea62916e83dfd3b0aedada86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e0c979d54992cbad90007bc2e7c30cdf3f5047182c4a377d8634b1d2247e7d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c979d54992cbad90007bc2e7c30cdf3f5047182c4a377d8634b1d2247e7d25->enter($__internal_e0c979d54992cbad90007bc2e7c30cdf3f5047182c4a377d8634b1d2247e7d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_8a528a4602271f9e1f6ccaef0e595754c28cb0d7ea62916e83dfd3b0aedada86->leave($__internal_8a528a4602271f9e1f6ccaef0e595754c28cb0d7ea62916e83dfd3b0aedada86_prof);

        
        $__internal_e0c979d54992cbad90007bc2e7c30cdf3f5047182c4a377d8634b1d2247e7d25->leave($__internal_e0c979d54992cbad90007bc2e7c30cdf3f5047182c4a377d8634b1d2247e7d25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
