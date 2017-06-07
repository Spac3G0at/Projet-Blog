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
        $__internal_34ae630b5fa9de6a376107a8716aa85cf9fce9b9f9991888ba73d0755e87b8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ae630b5fa9de6a376107a8716aa85cf9fce9b9f9991888ba73d0755e87b8b1->enter($__internal_34ae630b5fa9de6a376107a8716aa85cf9fce9b9f9991888ba73d0755e87b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6217c0b075562d10e29688dc364d578f5b97b9d0224460e592253dd516bd7e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6217c0b075562d10e29688dc364d578f5b97b9d0224460e592253dd516bd7e3a->enter($__internal_6217c0b075562d10e29688dc364d578f5b97b9d0224460e592253dd516bd7e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_34ae630b5fa9de6a376107a8716aa85cf9fce9b9f9991888ba73d0755e87b8b1->leave($__internal_34ae630b5fa9de6a376107a8716aa85cf9fce9b9f9991888ba73d0755e87b8b1_prof);

        
        $__internal_6217c0b075562d10e29688dc364d578f5b97b9d0224460e592253dd516bd7e3a->leave($__internal_6217c0b075562d10e29688dc364d578f5b97b9d0224460e592253dd516bd7e3a_prof);

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
