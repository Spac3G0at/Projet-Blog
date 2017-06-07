<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_31dd8a8fd916bac1e307543261449b84b5eaf5d607fc9fd5175f6af632d14184 extends Twig_Template
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
        $__internal_08fc4c6f691821e175481bed7d0351caabc3200325d724e17a483bd0fcda9a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fc4c6f691821e175481bed7d0351caabc3200325d724e17a483bd0fcda9a59->enter($__internal_08fc4c6f691821e175481bed7d0351caabc3200325d724e17a483bd0fcda9a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6311c7ddbbeebdf28e69c64f168205bde79bd5516c90e917d6881c2549655945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6311c7ddbbeebdf28e69c64f168205bde79bd5516c90e917d6881c2549655945->enter($__internal_6311c7ddbbeebdf28e69c64f168205bde79bd5516c90e917d6881c2549655945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_08fc4c6f691821e175481bed7d0351caabc3200325d724e17a483bd0fcda9a59->leave($__internal_08fc4c6f691821e175481bed7d0351caabc3200325d724e17a483bd0fcda9a59_prof);

        
        $__internal_6311c7ddbbeebdf28e69c64f168205bde79bd5516c90e917d6881c2549655945->leave($__internal_6311c7ddbbeebdf28e69c64f168205bde79bd5516c90e917d6881c2549655945_prof);

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
