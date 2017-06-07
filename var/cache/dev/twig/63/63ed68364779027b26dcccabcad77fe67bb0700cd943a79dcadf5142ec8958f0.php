<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_75bb201ed62917256744625acdae42dce0448d0d4b345a0623ea2b99c8fa97d8 extends Twig_Template
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
        $__internal_f886c9aed68d8c156883098c64ed1ec61a8daf68288becd322775b5d2d5511e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f886c9aed68d8c156883098c64ed1ec61a8daf68288becd322775b5d2d5511e4->enter($__internal_f886c9aed68d8c156883098c64ed1ec61a8daf68288becd322775b5d2d5511e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_329c925b00ced80081813acb7bd1e9c74036c74ed13e729c18524590461b930c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329c925b00ced80081813acb7bd1e9c74036c74ed13e729c18524590461b930c->enter($__internal_329c925b00ced80081813acb7bd1e9c74036c74ed13e729c18524590461b930c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_f886c9aed68d8c156883098c64ed1ec61a8daf68288becd322775b5d2d5511e4->leave($__internal_f886c9aed68d8c156883098c64ed1ec61a8daf68288becd322775b5d2d5511e4_prof);

        
        $__internal_329c925b00ced80081813acb7bd1e9c74036c74ed13e729c18524590461b930c->leave($__internal_329c925b00ced80081813acb7bd1e9c74036c74ed13e729c18524590461b930c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
