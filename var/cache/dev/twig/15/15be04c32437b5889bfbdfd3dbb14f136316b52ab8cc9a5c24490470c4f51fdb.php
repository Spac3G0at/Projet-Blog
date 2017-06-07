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
        $__internal_99e4c5e4d6ee9f23f850918e30c0e2774252a143524ec0d82464b32e1f71ba56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e4c5e4d6ee9f23f850918e30c0e2774252a143524ec0d82464b32e1f71ba56->enter($__internal_99e4c5e4d6ee9f23f850918e30c0e2774252a143524ec0d82464b32e1f71ba56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e5625bfa03c093bd87ed0c6352693507cdcc1fbbdeebfbcfd2b2bf8416b07423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5625bfa03c093bd87ed0c6352693507cdcc1fbbdeebfbcfd2b2bf8416b07423->enter($__internal_e5625bfa03c093bd87ed0c6352693507cdcc1fbbdeebfbcfd2b2bf8416b07423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_99e4c5e4d6ee9f23f850918e30c0e2774252a143524ec0d82464b32e1f71ba56->leave($__internal_99e4c5e4d6ee9f23f850918e30c0e2774252a143524ec0d82464b32e1f71ba56_prof);

        
        $__internal_e5625bfa03c093bd87ed0c6352693507cdcc1fbbdeebfbcfd2b2bf8416b07423->leave($__internal_e5625bfa03c093bd87ed0c6352693507cdcc1fbbdeebfbcfd2b2bf8416b07423_prof);

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
