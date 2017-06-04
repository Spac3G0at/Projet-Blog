<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_cc5d5f525393b828248e2660af3ca3e1d7217bea479a1f5a03f4bc713485819a extends Twig_Template
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
        $__internal_b1645f00c96be9b90fdbbd72d32f7b9d915dadab0f1f041a8776fbdfe46015d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1645f00c96be9b90fdbbd72d32f7b9d915dadab0f1f041a8776fbdfe46015d3->enter($__internal_b1645f00c96be9b90fdbbd72d32f7b9d915dadab0f1f041a8776fbdfe46015d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e60fe6c2187c0b15e0f9122e9f3439bc57e37bbf0aee716e4c4031ba2bc65604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60fe6c2187c0b15e0f9122e9f3439bc57e37bbf0aee716e4c4031ba2bc65604->enter($__internal_e60fe6c2187c0b15e0f9122e9f3439bc57e37bbf0aee716e4c4031ba2bc65604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b1645f00c96be9b90fdbbd72d32f7b9d915dadab0f1f041a8776fbdfe46015d3->leave($__internal_b1645f00c96be9b90fdbbd72d32f7b9d915dadab0f1f041a8776fbdfe46015d3_prof);

        
        $__internal_e60fe6c2187c0b15e0f9122e9f3439bc57e37bbf0aee716e4c4031ba2bc65604->leave($__internal_e60fe6c2187c0b15e0f9122e9f3439bc57e37bbf0aee716e4c4031ba2bc65604_prof);

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
