<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7c6e82b12eb9d3a3315ea256ba3c91b26522f737b799746e7a8627d754ce0a86 extends Twig_Template
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
        $__internal_511c5ec9083e68de139b0ff4058d37b58aab03315880e683b5c8207756b95c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511c5ec9083e68de139b0ff4058d37b58aab03315880e683b5c8207756b95c4c->enter($__internal_511c5ec9083e68de139b0ff4058d37b58aab03315880e683b5c8207756b95c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2e29b0994c56da565a478a122dbadd0bf54f19e02ab40e35b97905d9137b6d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e29b0994c56da565a478a122dbadd0bf54f19e02ab40e35b97905d9137b6d8f->enter($__internal_2e29b0994c56da565a478a122dbadd0bf54f19e02ab40e35b97905d9137b6d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_511c5ec9083e68de139b0ff4058d37b58aab03315880e683b5c8207756b95c4c->leave($__internal_511c5ec9083e68de139b0ff4058d37b58aab03315880e683b5c8207756b95c4c_prof);

        
        $__internal_2e29b0994c56da565a478a122dbadd0bf54f19e02ab40e35b97905d9137b6d8f->leave($__internal_2e29b0994c56da565a478a122dbadd0bf54f19e02ab40e35b97905d9137b6d8f_prof);

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
