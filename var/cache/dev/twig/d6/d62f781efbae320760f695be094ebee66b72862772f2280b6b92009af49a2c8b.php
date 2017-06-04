<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7218a35b34365909ea69a4bb50c3819b4ef44f8f05c69a0f6a532841479f0bd2 extends Twig_Template
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
        $__internal_c4cd7aecea706264b7ab440a2db724b05fce4203c3368b892539bf04f68615cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cd7aecea706264b7ab440a2db724b05fce4203c3368b892539bf04f68615cc->enter($__internal_c4cd7aecea706264b7ab440a2db724b05fce4203c3368b892539bf04f68615cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_11fc229186d05954b63bba6befbba00f60fd10288ef92665f7a7a4266f6f8bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fc229186d05954b63bba6befbba00f60fd10288ef92665f7a7a4266f6f8bc0->enter($__internal_11fc229186d05954b63bba6befbba00f60fd10288ef92665f7a7a4266f6f8bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c4cd7aecea706264b7ab440a2db724b05fce4203c3368b892539bf04f68615cc->leave($__internal_c4cd7aecea706264b7ab440a2db724b05fce4203c3368b892539bf04f68615cc_prof);

        
        $__internal_11fc229186d05954b63bba6befbba00f60fd10288ef92665f7a7a4266f6f8bc0->leave($__internal_11fc229186d05954b63bba6befbba00f60fd10288ef92665f7a7a4266f6f8bc0_prof);

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
