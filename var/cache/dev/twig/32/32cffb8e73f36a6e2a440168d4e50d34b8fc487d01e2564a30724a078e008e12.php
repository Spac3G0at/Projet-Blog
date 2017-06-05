<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3f7e18646c8ffd5c72b754f66eaa72a7423c60714c386b96b9c2eac1adb48c79 extends Twig_Template
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
        $__internal_691bebe6819d46ec4e753673cfc5fcadb7f75de8c1ebec4577a9891c57b51b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691bebe6819d46ec4e753673cfc5fcadb7f75de8c1ebec4577a9891c57b51b0f->enter($__internal_691bebe6819d46ec4e753673cfc5fcadb7f75de8c1ebec4577a9891c57b51b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5d3da46df1f3595729e15eac2b04d4f3ba9bf7a64d158bf2ed83f3bd438d3e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3da46df1f3595729e15eac2b04d4f3ba9bf7a64d158bf2ed83f3bd438d3e4f->enter($__internal_5d3da46df1f3595729e15eac2b04d4f3ba9bf7a64d158bf2ed83f3bd438d3e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_691bebe6819d46ec4e753673cfc5fcadb7f75de8c1ebec4577a9891c57b51b0f->leave($__internal_691bebe6819d46ec4e753673cfc5fcadb7f75de8c1ebec4577a9891c57b51b0f_prof);

        
        $__internal_5d3da46df1f3595729e15eac2b04d4f3ba9bf7a64d158bf2ed83f3bd438d3e4f->leave($__internal_5d3da46df1f3595729e15eac2b04d4f3ba9bf7a64d158bf2ed83f3bd438d3e4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
