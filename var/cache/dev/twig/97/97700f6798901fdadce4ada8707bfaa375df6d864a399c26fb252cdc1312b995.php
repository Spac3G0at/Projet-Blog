<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_73429af883cde40691ce021bab5dd4db4bb1616f50537ba9a0fe855678fcb57f extends Twig_Template
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
        $__internal_83e2f4933f9a4c47b9c7909b5b30e6fd948d03b0ef9035685eb552e45f7c8e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83e2f4933f9a4c47b9c7909b5b30e6fd948d03b0ef9035685eb552e45f7c8e0b->enter($__internal_83e2f4933f9a4c47b9c7909b5b30e6fd948d03b0ef9035685eb552e45f7c8e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_98efd90ff8637971376cc59222beb2c4cd464ab129a548b72724e71aa7153c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98efd90ff8637971376cc59222beb2c4cd464ab129a548b72724e71aa7153c7b->enter($__internal_98efd90ff8637971376cc59222beb2c4cd464ab129a548b72724e71aa7153c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_83e2f4933f9a4c47b9c7909b5b30e6fd948d03b0ef9035685eb552e45f7c8e0b->leave($__internal_83e2f4933f9a4c47b9c7909b5b30e6fd948d03b0ef9035685eb552e45f7c8e0b_prof);

        
        $__internal_98efd90ff8637971376cc59222beb2c4cd464ab129a548b72724e71aa7153c7b->leave($__internal_98efd90ff8637971376cc59222beb2c4cd464ab129a548b72724e71aa7153c7b_prof);

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
