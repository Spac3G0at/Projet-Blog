<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_bac993b38a10b760e35c201b00831f8a2c92449cf55f229001b54a075771aecd extends Twig_Template
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
        $__internal_a4be4efe69a3e63beab54a5f66cc818c39355ee557bf9a16dcce8428a1079a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4be4efe69a3e63beab54a5f66cc818c39355ee557bf9a16dcce8428a1079a0e->enter($__internal_a4be4efe69a3e63beab54a5f66cc818c39355ee557bf9a16dcce8428a1079a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_6100d0f8c5f96f9f53ae1916786dd20481e3ba1edd051f5ce9d4a8ebf8ef0005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6100d0f8c5f96f9f53ae1916786dd20481e3ba1edd051f5ce9d4a8ebf8ef0005->enter($__internal_6100d0f8c5f96f9f53ae1916786dd20481e3ba1edd051f5ce9d4a8ebf8ef0005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a4be4efe69a3e63beab54a5f66cc818c39355ee557bf9a16dcce8428a1079a0e->leave($__internal_a4be4efe69a3e63beab54a5f66cc818c39355ee557bf9a16dcce8428a1079a0e_prof);

        
        $__internal_6100d0f8c5f96f9f53ae1916786dd20481e3ba1edd051f5ce9d4a8ebf8ef0005->leave($__internal_6100d0f8c5f96f9f53ae1916786dd20481e3ba1edd051f5ce9d4a8ebf8ef0005_prof);

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
