<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9404db38d9d0d0b105f0ff80d0cb34fbb1734268df89b3eaa41b836543c0b8c6 extends Twig_Template
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
        $__internal_e79c5096e93a13d0f9ea604287939dc4881d20cc8f22393df7c7f9475881e57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79c5096e93a13d0f9ea604287939dc4881d20cc8f22393df7c7f9475881e57c->enter($__internal_e79c5096e93a13d0f9ea604287939dc4881d20cc8f22393df7c7f9475881e57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_18abeb341ae1fc2516e6796afc37a1350342645bca04b935ac7fe881904180a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18abeb341ae1fc2516e6796afc37a1350342645bca04b935ac7fe881904180a1->enter($__internal_18abeb341ae1fc2516e6796afc37a1350342645bca04b935ac7fe881904180a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e79c5096e93a13d0f9ea604287939dc4881d20cc8f22393df7c7f9475881e57c->leave($__internal_e79c5096e93a13d0f9ea604287939dc4881d20cc8f22393df7c7f9475881e57c_prof);

        
        $__internal_18abeb341ae1fc2516e6796afc37a1350342645bca04b935ac7fe881904180a1->leave($__internal_18abeb341ae1fc2516e6796afc37a1350342645bca04b935ac7fe881904180a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
