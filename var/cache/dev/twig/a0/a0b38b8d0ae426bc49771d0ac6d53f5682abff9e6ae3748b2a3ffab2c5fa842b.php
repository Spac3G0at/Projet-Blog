<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b37b911834439bc9f2112c6974a15286b3020c5d441e87dc28e74572451c9cb2 extends Twig_Template
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
        $__internal_ae083c40d85cbf6603fe6b6556a6f0553c61444d7d83360e0342fb14a7dc6635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae083c40d85cbf6603fe6b6556a6f0553c61444d7d83360e0342fb14a7dc6635->enter($__internal_ae083c40d85cbf6603fe6b6556a6f0553c61444d7d83360e0342fb14a7dc6635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_a63628ac5a0378874b65f56e9f04576722dd8de50c716f2e91bf0156d3c04b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63628ac5a0378874b65f56e9f04576722dd8de50c716f2e91bf0156d3c04b83->enter($__internal_a63628ac5a0378874b65f56e9f04576722dd8de50c716f2e91bf0156d3c04b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ae083c40d85cbf6603fe6b6556a6f0553c61444d7d83360e0342fb14a7dc6635->leave($__internal_ae083c40d85cbf6603fe6b6556a6f0553c61444d7d83360e0342fb14a7dc6635_prof);

        
        $__internal_a63628ac5a0378874b65f56e9f04576722dd8de50c716f2e91bf0156d3c04b83->leave($__internal_a63628ac5a0378874b65f56e9f04576722dd8de50c716f2e91bf0156d3c04b83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
