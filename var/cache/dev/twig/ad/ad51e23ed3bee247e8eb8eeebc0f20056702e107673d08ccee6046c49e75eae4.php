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
        $__internal_b9d9ccf11780cffffcc0e0f583a7fc319803094b8bdb4e533f8dd3c5cfb51d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d9ccf11780cffffcc0e0f583a7fc319803094b8bdb4e533f8dd3c5cfb51d42->enter($__internal_b9d9ccf11780cffffcc0e0f583a7fc319803094b8bdb4e533f8dd3c5cfb51d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_3ead9492707c26995cff4deb23aea4e97e6963f7af19af8bc7104eb1dd334115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ead9492707c26995cff4deb23aea4e97e6963f7af19af8bc7104eb1dd334115->enter($__internal_3ead9492707c26995cff4deb23aea4e97e6963f7af19af8bc7104eb1dd334115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9d9ccf11780cffffcc0e0f583a7fc319803094b8bdb4e533f8dd3c5cfb51d42->leave($__internal_b9d9ccf11780cffffcc0e0f583a7fc319803094b8bdb4e533f8dd3c5cfb51d42_prof);

        
        $__internal_3ead9492707c26995cff4deb23aea4e97e6963f7af19af8bc7104eb1dd334115->leave($__internal_3ead9492707c26995cff4deb23aea4e97e6963f7af19af8bc7104eb1dd334115_prof);

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
