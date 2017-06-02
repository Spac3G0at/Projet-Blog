<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_74f54e63d0b93edb721e13a3adc179182c5f2c633298a3ec9d9bd71aca524f85 extends Twig_Template
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
        $__internal_bc9d1656c99e4ef277a86435967bc39739159a049aafaf7ca3eca07419681265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9d1656c99e4ef277a86435967bc39739159a049aafaf7ca3eca07419681265->enter($__internal_bc9d1656c99e4ef277a86435967bc39739159a049aafaf7ca3eca07419681265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_d285e1d02460088d84da2b215b27d52b241848f7148aa93c89de5820a6315908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d285e1d02460088d84da2b215b27d52b241848f7148aa93c89de5820a6315908->enter($__internal_d285e1d02460088d84da2b215b27d52b241848f7148aa93c89de5820a6315908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bc9d1656c99e4ef277a86435967bc39739159a049aafaf7ca3eca07419681265->leave($__internal_bc9d1656c99e4ef277a86435967bc39739159a049aafaf7ca3eca07419681265_prof);

        
        $__internal_d285e1d02460088d84da2b215b27d52b241848f7148aa93c89de5820a6315908->leave($__internal_d285e1d02460088d84da2b215b27d52b241848f7148aa93c89de5820a6315908_prof);

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
