<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3f42098572f60aefd2baa971f7c4cbe00d018bed25d91e690d61fe20e514f620 extends Twig_Template
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
        $__internal_0472531bbf9e5658ea858857442bb0cf09c1c8902f2e881eccfd7d4bf9293f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0472531bbf9e5658ea858857442bb0cf09c1c8902f2e881eccfd7d4bf9293f5b->enter($__internal_0472531bbf9e5658ea858857442bb0cf09c1c8902f2e881eccfd7d4bf9293f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_9597761b8ab43fb2efe9783bab6a7ab5fab07123ab903edee1e98222b022cd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9597761b8ab43fb2efe9783bab6a7ab5fab07123ab903edee1e98222b022cd1a->enter($__internal_9597761b8ab43fb2efe9783bab6a7ab5fab07123ab903edee1e98222b022cd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0472531bbf9e5658ea858857442bb0cf09c1c8902f2e881eccfd7d4bf9293f5b->leave($__internal_0472531bbf9e5658ea858857442bb0cf09c1c8902f2e881eccfd7d4bf9293f5b_prof);

        
        $__internal_9597761b8ab43fb2efe9783bab6a7ab5fab07123ab903edee1e98222b022cd1a->leave($__internal_9597761b8ab43fb2efe9783bab6a7ab5fab07123ab903edee1e98222b022cd1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
