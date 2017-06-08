<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_3d61591d162a60a9ae31e0824e890758251c854316bcdedc0c7fd0ad6f01f875 extends Twig_Template
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
        $__internal_b04409cb22f4759f2b1fa36766230f9db195c7842e9000aed96373c619fe1a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b04409cb22f4759f2b1fa36766230f9db195c7842e9000aed96373c619fe1a37->enter($__internal_b04409cb22f4759f2b1fa36766230f9db195c7842e9000aed96373c619fe1a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_98053be60212c3ec2c5ffe39785153ad932192fcfa4ac7c150875eec523b1ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98053be60212c3ec2c5ffe39785153ad932192fcfa4ac7c150875eec523b1ace->enter($__internal_98053be60212c3ec2c5ffe39785153ad932192fcfa4ac7c150875eec523b1ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b04409cb22f4759f2b1fa36766230f9db195c7842e9000aed96373c619fe1a37->leave($__internal_b04409cb22f4759f2b1fa36766230f9db195c7842e9000aed96373c619fe1a37_prof);

        
        $__internal_98053be60212c3ec2c5ffe39785153ad932192fcfa4ac7c150875eec523b1ace->leave($__internal_98053be60212c3ec2c5ffe39785153ad932192fcfa4ac7c150875eec523b1ace_prof);

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
