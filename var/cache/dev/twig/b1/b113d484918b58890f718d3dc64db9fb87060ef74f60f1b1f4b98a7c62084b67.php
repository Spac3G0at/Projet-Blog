<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_553946c43c59a04323385a671604a35dc39e294f3cb0d4c32b6443f2dc5d3b86 extends Twig_Template
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
        $__internal_be89c3b7954eababe1b5585c8cf0dea1e841bae7d818278f7ab589c080e20a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be89c3b7954eababe1b5585c8cf0dea1e841bae7d818278f7ab589c080e20a70->enter($__internal_be89c3b7954eababe1b5585c8cf0dea1e841bae7d818278f7ab589c080e20a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_18d49f81404a3d76a8ae39878ea62d2119305aba3defe3b5edb4afa27944926e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d49f81404a3d76a8ae39878ea62d2119305aba3defe3b5edb4afa27944926e->enter($__internal_18d49f81404a3d76a8ae39878ea62d2119305aba3defe3b5edb4afa27944926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_be89c3b7954eababe1b5585c8cf0dea1e841bae7d818278f7ab589c080e20a70->leave($__internal_be89c3b7954eababe1b5585c8cf0dea1e841bae7d818278f7ab589c080e20a70_prof);

        
        $__internal_18d49f81404a3d76a8ae39878ea62d2119305aba3defe3b5edb4afa27944926e->leave($__internal_18d49f81404a3d76a8ae39878ea62d2119305aba3defe3b5edb4afa27944926e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
