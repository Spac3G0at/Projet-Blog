<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5b7b243daf62d9ca334b31bf42391b95139834ac8e483cb9058fc9052e85e435 extends Twig_Template
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
        $__internal_2f396713d193db24a00ca842067c916f50b2ebab67e88fa2473c680f8dfb288b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f396713d193db24a00ca842067c916f50b2ebab67e88fa2473c680f8dfb288b->enter($__internal_2f396713d193db24a00ca842067c916f50b2ebab67e88fa2473c680f8dfb288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6cfa8f35cb2dce4f3f09eebf4cb723ab8fe5bbb0614e037c3f74ac42e81271a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfa8f35cb2dce4f3f09eebf4cb723ab8fe5bbb0614e037c3f74ac42e81271a3->enter($__internal_6cfa8f35cb2dce4f3f09eebf4cb723ab8fe5bbb0614e037c3f74ac42e81271a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f396713d193db24a00ca842067c916f50b2ebab67e88fa2473c680f8dfb288b->leave($__internal_2f396713d193db24a00ca842067c916f50b2ebab67e88fa2473c680f8dfb288b_prof);

        
        $__internal_6cfa8f35cb2dce4f3f09eebf4cb723ab8fe5bbb0614e037c3f74ac42e81271a3->leave($__internal_6cfa8f35cb2dce4f3f09eebf4cb723ab8fe5bbb0614e037c3f74ac42e81271a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
