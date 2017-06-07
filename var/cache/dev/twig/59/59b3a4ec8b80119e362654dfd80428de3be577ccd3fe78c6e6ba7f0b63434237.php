<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_f80e07bce2eca373542acb0f4849cd2fe32f66103d9b447a8d461e79950298ca extends Twig_Template
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
        $__internal_9af28a7be59123cc3c421435122e69b4c64e04d8a122104ba692d81f1fae176e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af28a7be59123cc3c421435122e69b4c64e04d8a122104ba692d81f1fae176e->enter($__internal_9af28a7be59123cc3c421435122e69b4c64e04d8a122104ba692d81f1fae176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b4cbc86c6263d35ab7a04c3f408c023d98c47852db76ad163223c0d82f189054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cbc86c6263d35ab7a04c3f408c023d98c47852db76ad163223c0d82f189054->enter($__internal_b4cbc86c6263d35ab7a04c3f408c023d98c47852db76ad163223c0d82f189054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9af28a7be59123cc3c421435122e69b4c64e04d8a122104ba692d81f1fae176e->leave($__internal_9af28a7be59123cc3c421435122e69b4c64e04d8a122104ba692d81f1fae176e_prof);

        
        $__internal_b4cbc86c6263d35ab7a04c3f408c023d98c47852db76ad163223c0d82f189054->leave($__internal_b4cbc86c6263d35ab7a04c3f408c023d98c47852db76ad163223c0d82f189054_prof);

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
