<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6f07abf1ef0163f1c8cfd44c9c67813661781b8bc08d872332d915255b154490 extends Twig_Template
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
        $__internal_74fb1b6cc36c7e4011d545f91eefb3132b1054aabc828076b11b4438d315fb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74fb1b6cc36c7e4011d545f91eefb3132b1054aabc828076b11b4438d315fb70->enter($__internal_74fb1b6cc36c7e4011d545f91eefb3132b1054aabc828076b11b4438d315fb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f9ea8bbd49c1d74374b04e4361563a27013ee4442262c5ade35a35525594568f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ea8bbd49c1d74374b04e4361563a27013ee4442262c5ade35a35525594568f->enter($__internal_f9ea8bbd49c1d74374b04e4361563a27013ee4442262c5ade35a35525594568f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_74fb1b6cc36c7e4011d545f91eefb3132b1054aabc828076b11b4438d315fb70->leave($__internal_74fb1b6cc36c7e4011d545f91eefb3132b1054aabc828076b11b4438d315fb70_prof);

        
        $__internal_f9ea8bbd49c1d74374b04e4361563a27013ee4442262c5ade35a35525594568f->leave($__internal_f9ea8bbd49c1d74374b04e4361563a27013ee4442262c5ade35a35525594568f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
