<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1a3f53ed2771ce99822d0c0c2b51d69348af10cce50176c39994724ac459b274 extends Twig_Template
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
        $__internal_8012d226e15a436a5a8018045633dfa5c3fe97dcb91ee78beea83809c5856649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8012d226e15a436a5a8018045633dfa5c3fe97dcb91ee78beea83809c5856649->enter($__internal_8012d226e15a436a5a8018045633dfa5c3fe97dcb91ee78beea83809c5856649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_772820e07945e3e4efb1e8e06848ebafc42a12cf8dcd8fa6f34c76f6daf52aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772820e07945e3e4efb1e8e06848ebafc42a12cf8dcd8fa6f34c76f6daf52aad->enter($__internal_772820e07945e3e4efb1e8e06848ebafc42a12cf8dcd8fa6f34c76f6daf52aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8012d226e15a436a5a8018045633dfa5c3fe97dcb91ee78beea83809c5856649->leave($__internal_8012d226e15a436a5a8018045633dfa5c3fe97dcb91ee78beea83809c5856649_prof);

        
        $__internal_772820e07945e3e4efb1e8e06848ebafc42a12cf8dcd8fa6f34c76f6daf52aad->leave($__internal_772820e07945e3e4efb1e8e06848ebafc42a12cf8dcd8fa6f34c76f6daf52aad_prof);

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
