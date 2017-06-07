<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_33cb6c6787cb86a2147150fb8aaf40532c2552e71879fbef35afff6e14e65e16 extends Twig_Template
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
        $__internal_a490dd3debeb0db475e9d67414b44eaffdb894828abb8759f4c5737b83bf0455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a490dd3debeb0db475e9d67414b44eaffdb894828abb8759f4c5737b83bf0455->enter($__internal_a490dd3debeb0db475e9d67414b44eaffdb894828abb8759f4c5737b83bf0455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5a4c3fcf9d0e5f6a6214c3c79f046aec1d67f6110e8e8c1ee4a90c465d2650b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4c3fcf9d0e5f6a6214c3c79f046aec1d67f6110e8e8c1ee4a90c465d2650b1->enter($__internal_5a4c3fcf9d0e5f6a6214c3c79f046aec1d67f6110e8e8c1ee4a90c465d2650b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a490dd3debeb0db475e9d67414b44eaffdb894828abb8759f4c5737b83bf0455->leave($__internal_a490dd3debeb0db475e9d67414b44eaffdb894828abb8759f4c5737b83bf0455_prof);

        
        $__internal_5a4c3fcf9d0e5f6a6214c3c79f046aec1d67f6110e8e8c1ee4a90c465d2650b1->leave($__internal_5a4c3fcf9d0e5f6a6214c3c79f046aec1d67f6110e8e8c1ee4a90c465d2650b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
