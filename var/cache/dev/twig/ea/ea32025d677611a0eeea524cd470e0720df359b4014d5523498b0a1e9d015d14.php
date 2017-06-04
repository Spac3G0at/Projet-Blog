<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_bbafbc15aa2802e3e50fab1adeb9200088614cad1d8b4231f2dc6632616e89a1 extends Twig_Template
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
        $__internal_e152756786b34bfcaff9658b5d2b8b5dc444fe7a0d8db1461c1d4db4d2687956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e152756786b34bfcaff9658b5d2b8b5dc444fe7a0d8db1461c1d4db4d2687956->enter($__internal_e152756786b34bfcaff9658b5d2b8b5dc444fe7a0d8db1461c1d4db4d2687956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d2baf3c700538d3278b738e2f6d19b8aacae6d9589b33eedd9c7de7a12accb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2baf3c700538d3278b738e2f6d19b8aacae6d9589b33eedd9c7de7a12accb36->enter($__internal_d2baf3c700538d3278b738e2f6d19b8aacae6d9589b33eedd9c7de7a12accb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e152756786b34bfcaff9658b5d2b8b5dc444fe7a0d8db1461c1d4db4d2687956->leave($__internal_e152756786b34bfcaff9658b5d2b8b5dc444fe7a0d8db1461c1d4db4d2687956_prof);

        
        $__internal_d2baf3c700538d3278b738e2f6d19b8aacae6d9589b33eedd9c7de7a12accb36->leave($__internal_d2baf3c700538d3278b738e2f6d19b8aacae6d9589b33eedd9c7de7a12accb36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
