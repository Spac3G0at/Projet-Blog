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
        $__internal_5bc284ac3c6eb56828d6c977c1ad31ddc292059b1b23d874a52884497068b73c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc284ac3c6eb56828d6c977c1ad31ddc292059b1b23d874a52884497068b73c->enter($__internal_5bc284ac3c6eb56828d6c977c1ad31ddc292059b1b23d874a52884497068b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_dd25c7f60c10a9d33e5e09d5b2a19da19cbfb266d5e263020d5e1be1cf2bbe6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd25c7f60c10a9d33e5e09d5b2a19da19cbfb266d5e263020d5e1be1cf2bbe6e->enter($__internal_dd25c7f60c10a9d33e5e09d5b2a19da19cbfb266d5e263020d5e1be1cf2bbe6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_5bc284ac3c6eb56828d6c977c1ad31ddc292059b1b23d874a52884497068b73c->leave($__internal_5bc284ac3c6eb56828d6c977c1ad31ddc292059b1b23d874a52884497068b73c_prof);

        
        $__internal_dd25c7f60c10a9d33e5e09d5b2a19da19cbfb266d5e263020d5e1be1cf2bbe6e->leave($__internal_dd25c7f60c10a9d33e5e09d5b2a19da19cbfb266d5e263020d5e1be1cf2bbe6e_prof);

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
