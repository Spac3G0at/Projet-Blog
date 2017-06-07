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
        $__internal_0ca78c5faa0a2a8bf067f9919a9629b351c6125bd8f058ec81e75a5f7feb515f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca78c5faa0a2a8bf067f9919a9629b351c6125bd8f058ec81e75a5f7feb515f->enter($__internal_0ca78c5faa0a2a8bf067f9919a9629b351c6125bd8f058ec81e75a5f7feb515f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_49b90c9ee0197ba4519b63ef6f182049051ef3d995ce63a8a69e42e56dbaadc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b90c9ee0197ba4519b63ef6f182049051ef3d995ce63a8a69e42e56dbaadc6->enter($__internal_49b90c9ee0197ba4519b63ef6f182049051ef3d995ce63a8a69e42e56dbaadc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0ca78c5faa0a2a8bf067f9919a9629b351c6125bd8f058ec81e75a5f7feb515f->leave($__internal_0ca78c5faa0a2a8bf067f9919a9629b351c6125bd8f058ec81e75a5f7feb515f_prof);

        
        $__internal_49b90c9ee0197ba4519b63ef6f182049051ef3d995ce63a8a69e42e56dbaadc6->leave($__internal_49b90c9ee0197ba4519b63ef6f182049051ef3d995ce63a8a69e42e56dbaadc6_prof);

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
