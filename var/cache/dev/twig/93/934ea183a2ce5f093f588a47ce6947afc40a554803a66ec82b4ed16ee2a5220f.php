<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3f42098572f60aefd2baa971f7c4cbe00d018bed25d91e690d61fe20e514f620 extends Twig_Template
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
        $__internal_265f9cc8abbdc4b3f0e667ab3d5e668ceb1b338d9a994f08a82b7d84fc0428b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265f9cc8abbdc4b3f0e667ab3d5e668ceb1b338d9a994f08a82b7d84fc0428b9->enter($__internal_265f9cc8abbdc4b3f0e667ab3d5e668ceb1b338d9a994f08a82b7d84fc0428b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_87e5bca8655385e60ff06374fcc0ef87562da77ad72e9b750c185ab106ffc268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e5bca8655385e60ff06374fcc0ef87562da77ad72e9b750c185ab106ffc268->enter($__internal_87e5bca8655385e60ff06374fcc0ef87562da77ad72e9b750c185ab106ffc268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_265f9cc8abbdc4b3f0e667ab3d5e668ceb1b338d9a994f08a82b7d84fc0428b9->leave($__internal_265f9cc8abbdc4b3f0e667ab3d5e668ceb1b338d9a994f08a82b7d84fc0428b9_prof);

        
        $__internal_87e5bca8655385e60ff06374fcc0ef87562da77ad72e9b750c185ab106ffc268->leave($__internal_87e5bca8655385e60ff06374fcc0ef87562da77ad72e9b750c185ab106ffc268_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
