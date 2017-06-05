<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0a5a4cd85abb269f3d351ba4386d4f6a657516fc31af3f052ad5294f86316033 extends Twig_Template
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
        $__internal_866873026c6926c5733ca0d39b4242134a89c0b801d961c1258713bb5e9ccf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866873026c6926c5733ca0d39b4242134a89c0b801d961c1258713bb5e9ccf03->enter($__internal_866873026c6926c5733ca0d39b4242134a89c0b801d961c1258713bb5e9ccf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b59a909d88cb29d86b5c9e84124577ed5cc33d1adf584aa0d2e81c13bc634cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59a909d88cb29d86b5c9e84124577ed5cc33d1adf584aa0d2e81c13bc634cbe->enter($__internal_b59a909d88cb29d86b5c9e84124577ed5cc33d1adf584aa0d2e81c13bc634cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_866873026c6926c5733ca0d39b4242134a89c0b801d961c1258713bb5e9ccf03->leave($__internal_866873026c6926c5733ca0d39b4242134a89c0b801d961c1258713bb5e9ccf03_prof);

        
        $__internal_b59a909d88cb29d86b5c9e84124577ed5cc33d1adf584aa0d2e81c13bc634cbe->leave($__internal_b59a909d88cb29d86b5c9e84124577ed5cc33d1adf584aa0d2e81c13bc634cbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
