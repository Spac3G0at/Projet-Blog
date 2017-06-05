<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3d990847c0b0d09074ad2ce74bff97484647405177fda80093db502ce8d6f923 extends Twig_Template
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
        $__internal_fe5156d3a9c0d24d114903c312bc0f43e18138b450f027194b74975bfdd8bbe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5156d3a9c0d24d114903c312bc0f43e18138b450f027194b74975bfdd8bbe4->enter($__internal_fe5156d3a9c0d24d114903c312bc0f43e18138b450f027194b74975bfdd8bbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b1c12ce58f6a9126eef34d8a516ce049ce031883ab6aa87ed472e8f05861d860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c12ce58f6a9126eef34d8a516ce049ce031883ab6aa87ed472e8f05861d860->enter($__internal_b1c12ce58f6a9126eef34d8a516ce049ce031883ab6aa87ed472e8f05861d860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fe5156d3a9c0d24d114903c312bc0f43e18138b450f027194b74975bfdd8bbe4->leave($__internal_fe5156d3a9c0d24d114903c312bc0f43e18138b450f027194b74975bfdd8bbe4_prof);

        
        $__internal_b1c12ce58f6a9126eef34d8a516ce049ce031883ab6aa87ed472e8f05861d860->leave($__internal_b1c12ce58f6a9126eef34d8a516ce049ce031883ab6aa87ed472e8f05861d860_prof);

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
