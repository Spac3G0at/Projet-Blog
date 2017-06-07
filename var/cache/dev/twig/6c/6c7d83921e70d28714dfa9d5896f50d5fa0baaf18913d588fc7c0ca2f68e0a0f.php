<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4c1f9ef962bf8efc2eb1a5300ad663b84285dc1f85d02ac753dd1923d91fef06 extends Twig_Template
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
        $__internal_6ef01ad4dbe6406e3ef1d10a53765248eebd7e49691786d14d8b8249cb736715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef01ad4dbe6406e3ef1d10a53765248eebd7e49691786d14d8b8249cb736715->enter($__internal_6ef01ad4dbe6406e3ef1d10a53765248eebd7e49691786d14d8b8249cb736715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a7fde1f0afb722adbc4390a155ee2a645e9d014a1f365d4e82cc37665f9bf536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fde1f0afb722adbc4390a155ee2a645e9d014a1f365d4e82cc37665f9bf536->enter($__internal_a7fde1f0afb722adbc4390a155ee2a645e9d014a1f365d4e82cc37665f9bf536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6ef01ad4dbe6406e3ef1d10a53765248eebd7e49691786d14d8b8249cb736715->leave($__internal_6ef01ad4dbe6406e3ef1d10a53765248eebd7e49691786d14d8b8249cb736715_prof);

        
        $__internal_a7fde1f0afb722adbc4390a155ee2a645e9d014a1f365d4e82cc37665f9bf536->leave($__internal_a7fde1f0afb722adbc4390a155ee2a645e9d014a1f365d4e82cc37665f9bf536_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
