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
        $__internal_05815d99e05cdb551f5931ef3f6ab36a1f35894be9b424755bb03f415b3ef3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05815d99e05cdb551f5931ef3f6ab36a1f35894be9b424755bb03f415b3ef3e1->enter($__internal_05815d99e05cdb551f5931ef3f6ab36a1f35894be9b424755bb03f415b3ef3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5d8e691ee36cf304ffa9ce15677126c83e56e3776a3f7e24c689fbad3a2e1cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8e691ee36cf304ffa9ce15677126c83e56e3776a3f7e24c689fbad3a2e1cf6->enter($__internal_5d8e691ee36cf304ffa9ce15677126c83e56e3776a3f7e24c689fbad3a2e1cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_05815d99e05cdb551f5931ef3f6ab36a1f35894be9b424755bb03f415b3ef3e1->leave($__internal_05815d99e05cdb551f5931ef3f6ab36a1f35894be9b424755bb03f415b3ef3e1_prof);

        
        $__internal_5d8e691ee36cf304ffa9ce15677126c83e56e3776a3f7e24c689fbad3a2e1cf6->leave($__internal_5d8e691ee36cf304ffa9ce15677126c83e56e3776a3f7e24c689fbad3a2e1cf6_prof);

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
