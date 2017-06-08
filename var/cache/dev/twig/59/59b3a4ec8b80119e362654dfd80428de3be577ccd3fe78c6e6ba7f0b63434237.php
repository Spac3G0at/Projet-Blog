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
        $__internal_f1413d26ea242ff909f002f6e5da319150cc301ad544fe097a45ec48dc6d4995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1413d26ea242ff909f002f6e5da319150cc301ad544fe097a45ec48dc6d4995->enter($__internal_f1413d26ea242ff909f002f6e5da319150cc301ad544fe097a45ec48dc6d4995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_cfc0d0af9db64a1629ba867736a8c13b4ec45733e3409bc9dd9e34806d39fb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc0d0af9db64a1629ba867736a8c13b4ec45733e3409bc9dd9e34806d39fb3e->enter($__internal_cfc0d0af9db64a1629ba867736a8c13b4ec45733e3409bc9dd9e34806d39fb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f1413d26ea242ff909f002f6e5da319150cc301ad544fe097a45ec48dc6d4995->leave($__internal_f1413d26ea242ff909f002f6e5da319150cc301ad544fe097a45ec48dc6d4995_prof);

        
        $__internal_cfc0d0af9db64a1629ba867736a8c13b4ec45733e3409bc9dd9e34806d39fb3e->leave($__internal_cfc0d0af9db64a1629ba867736a8c13b4ec45733e3409bc9dd9e34806d39fb3e_prof);

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
