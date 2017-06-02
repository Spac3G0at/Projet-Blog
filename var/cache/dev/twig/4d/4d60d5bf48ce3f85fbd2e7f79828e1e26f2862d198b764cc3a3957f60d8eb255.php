<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ab5daf69ec9c35398b62eb452a95020e3f9d9254db13ccc03a5b5e712f331020 extends Twig_Template
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
        $__internal_d2868ab334aa1fe482db24e6c14ac081742f00b93b90e1595524b805ab3cadd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2868ab334aa1fe482db24e6c14ac081742f00b93b90e1595524b805ab3cadd7->enter($__internal_d2868ab334aa1fe482db24e6c14ac081742f00b93b90e1595524b805ab3cadd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_b0de083b882437dcc1c460f9c928bb5e741590b4263490b8a845c5c04af38010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0de083b882437dcc1c460f9c928bb5e741590b4263490b8a845c5c04af38010->enter($__internal_b0de083b882437dcc1c460f9c928bb5e741590b4263490b8a845c5c04af38010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d2868ab334aa1fe482db24e6c14ac081742f00b93b90e1595524b805ab3cadd7->leave($__internal_d2868ab334aa1fe482db24e6c14ac081742f00b93b90e1595524b805ab3cadd7_prof);

        
        $__internal_b0de083b882437dcc1c460f9c928bb5e741590b4263490b8a845c5c04af38010->leave($__internal_b0de083b882437dcc1c460f9c928bb5e741590b4263490b8a845c5c04af38010_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
