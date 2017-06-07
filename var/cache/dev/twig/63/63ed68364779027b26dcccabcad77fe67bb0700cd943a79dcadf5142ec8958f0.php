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
        $__internal_65399d3c7c31db84792091498758e04efc5145211b3312e12a45dfc928608dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65399d3c7c31db84792091498758e04efc5145211b3312e12a45dfc928608dd8->enter($__internal_65399d3c7c31db84792091498758e04efc5145211b3312e12a45dfc928608dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a07bd4ee6ef01a3830033bd92e582bae0c56af9270dd1952d9eacf5920335bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07bd4ee6ef01a3830033bd92e582bae0c56af9270dd1952d9eacf5920335bdb->enter($__internal_a07bd4ee6ef01a3830033bd92e582bae0c56af9270dd1952d9eacf5920335bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_65399d3c7c31db84792091498758e04efc5145211b3312e12a45dfc928608dd8->leave($__internal_65399d3c7c31db84792091498758e04efc5145211b3312e12a45dfc928608dd8_prof);

        
        $__internal_a07bd4ee6ef01a3830033bd92e582bae0c56af9270dd1952d9eacf5920335bdb->leave($__internal_a07bd4ee6ef01a3830033bd92e582bae0c56af9270dd1952d9eacf5920335bdb_prof);

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
