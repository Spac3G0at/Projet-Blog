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
        $__internal_e760ac5eef6c8d578bd4abef69c2b14f3fc2822b50ca78a9f3651b80fe21e9b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e760ac5eef6c8d578bd4abef69c2b14f3fc2822b50ca78a9f3651b80fe21e9b5->enter($__internal_e760ac5eef6c8d578bd4abef69c2b14f3fc2822b50ca78a9f3651b80fe21e9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_18a869db38e1bb4763c76292cdc11af1ffbd9881a44bcdcb0a3a4881087e78b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a869db38e1bb4763c76292cdc11af1ffbd9881a44bcdcb0a3a4881087e78b8->enter($__internal_18a869db38e1bb4763c76292cdc11af1ffbd9881a44bcdcb0a3a4881087e78b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e760ac5eef6c8d578bd4abef69c2b14f3fc2822b50ca78a9f3651b80fe21e9b5->leave($__internal_e760ac5eef6c8d578bd4abef69c2b14f3fc2822b50ca78a9f3651b80fe21e9b5_prof);

        
        $__internal_18a869db38e1bb4763c76292cdc11af1ffbd9881a44bcdcb0a3a4881087e78b8->leave($__internal_18a869db38e1bb4763c76292cdc11af1ffbd9881a44bcdcb0a3a4881087e78b8_prof);

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
