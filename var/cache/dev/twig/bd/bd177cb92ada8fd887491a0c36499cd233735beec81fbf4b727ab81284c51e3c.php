<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_1ea3093e7d6bf82b1cec2d1bf047c95c50d7402b74d2c2da4aec9d4da671e288 extends Twig_Template
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
        $__internal_9a8f2524aa77ffa42603e5b6eaf11eb447cba43756e74664066f6620495bfc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8f2524aa77ffa42603e5b6eaf11eb447cba43756e74664066f6620495bfc37->enter($__internal_9a8f2524aa77ffa42603e5b6eaf11eb447cba43756e74664066f6620495bfc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_741063504ff0da34135c2d18c271d7bc7d67ea9ee24e8ebec226d3c3b900f1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741063504ff0da34135c2d18c271d7bc7d67ea9ee24e8ebec226d3c3b900f1e9->enter($__internal_741063504ff0da34135c2d18c271d7bc7d67ea9ee24e8ebec226d3c3b900f1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_9a8f2524aa77ffa42603e5b6eaf11eb447cba43756e74664066f6620495bfc37->leave($__internal_9a8f2524aa77ffa42603e5b6eaf11eb447cba43756e74664066f6620495bfc37_prof);

        
        $__internal_741063504ff0da34135c2d18c271d7bc7d67ea9ee24e8ebec226d3c3b900f1e9->leave($__internal_741063504ff0da34135c2d18c271d7bc7d67ea9ee24e8ebec226d3c3b900f1e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
