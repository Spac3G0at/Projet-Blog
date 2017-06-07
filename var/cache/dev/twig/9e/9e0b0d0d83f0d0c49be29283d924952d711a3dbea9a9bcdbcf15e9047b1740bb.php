<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a062cd6e1c37bdd18196034028055e99d94ad5af1ffa8164f80b0bd0e89f2049 extends Twig_Template
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
        $__internal_b11eb47994e09a20032990c4e6e02a84d538bda79bca1c50e38d453a5bb8feaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11eb47994e09a20032990c4e6e02a84d538bda79bca1c50e38d453a5bb8feaf->enter($__internal_b11eb47994e09a20032990c4e6e02a84d538bda79bca1c50e38d453a5bb8feaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8a7b94b5b8c4bc185ee3209c8032d8798306953801673663fda4656dae5c126f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a7b94b5b8c4bc185ee3209c8032d8798306953801673663fda4656dae5c126f->enter($__internal_8a7b94b5b8c4bc185ee3209c8032d8798306953801673663fda4656dae5c126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b11eb47994e09a20032990c4e6e02a84d538bda79bca1c50e38d453a5bb8feaf->leave($__internal_b11eb47994e09a20032990c4e6e02a84d538bda79bca1c50e38d453a5bb8feaf_prof);

        
        $__internal_8a7b94b5b8c4bc185ee3209c8032d8798306953801673663fda4656dae5c126f->leave($__internal_8a7b94b5b8c4bc185ee3209c8032d8798306953801673663fda4656dae5c126f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
