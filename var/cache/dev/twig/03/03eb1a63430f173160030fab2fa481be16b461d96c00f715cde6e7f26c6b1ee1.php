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
        $__internal_78d9c3a24a693e87bf4a8c71c573c7c223e9703341a6461657438442ca03e760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d9c3a24a693e87bf4a8c71c573c7c223e9703341a6461657438442ca03e760->enter($__internal_78d9c3a24a693e87bf4a8c71c573c7c223e9703341a6461657438442ca03e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_37068d52da6e89c643cb4b66f89e04ca723c1b27fffdfb7fb4b5404b43f62782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37068d52da6e89c643cb4b66f89e04ca723c1b27fffdfb7fb4b5404b43f62782->enter($__internal_37068d52da6e89c643cb4b66f89e04ca723c1b27fffdfb7fb4b5404b43f62782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_78d9c3a24a693e87bf4a8c71c573c7c223e9703341a6461657438442ca03e760->leave($__internal_78d9c3a24a693e87bf4a8c71c573c7c223e9703341a6461657438442ca03e760_prof);

        
        $__internal_37068d52da6e89c643cb4b66f89e04ca723c1b27fffdfb7fb4b5404b43f62782->leave($__internal_37068d52da6e89c643cb4b66f89e04ca723c1b27fffdfb7fb4b5404b43f62782_prof);

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
