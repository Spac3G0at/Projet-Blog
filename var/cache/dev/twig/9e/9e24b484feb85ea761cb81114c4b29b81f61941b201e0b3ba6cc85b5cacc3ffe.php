<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4b55af74d0d295675bc2e527f121c27726a1c3c4693590e8eca532b20fa1420d extends Twig_Template
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
        $__internal_5047cb095ffcfcba24cc8383874c59eb84e4d665da91c035c4d374211612b3a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5047cb095ffcfcba24cc8383874c59eb84e4d665da91c035c4d374211612b3a6->enter($__internal_5047cb095ffcfcba24cc8383874c59eb84e4d665da91c035c4d374211612b3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_eb6ccaff4eaa00eceece9b1389a49ad3d049b1e144024afcfa185fd57a4c3c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb6ccaff4eaa00eceece9b1389a49ad3d049b1e144024afcfa185fd57a4c3c6e->enter($__internal_eb6ccaff4eaa00eceece9b1389a49ad3d049b1e144024afcfa185fd57a4c3c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5047cb095ffcfcba24cc8383874c59eb84e4d665da91c035c4d374211612b3a6->leave($__internal_5047cb095ffcfcba24cc8383874c59eb84e4d665da91c035c4d374211612b3a6_prof);

        
        $__internal_eb6ccaff4eaa00eceece9b1389a49ad3d049b1e144024afcfa185fd57a4c3c6e->leave($__internal_eb6ccaff4eaa00eceece9b1389a49ad3d049b1e144024afcfa185fd57a4c3c6e_prof);

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
