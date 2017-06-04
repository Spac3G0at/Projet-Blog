<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c40651fe9a173c65a649db385b1380091e0f533b142bfe752c50e9bf5859ebe extends Twig_Template
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
        $__internal_f7b31c819bafacd79d27837baf945966962dcf49cdb28b0c53513ca8ccd06915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b31c819bafacd79d27837baf945966962dcf49cdb28b0c53513ca8ccd06915->enter($__internal_f7b31c819bafacd79d27837baf945966962dcf49cdb28b0c53513ca8ccd06915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5e294d3c124d5c94b6f6da6560006df6d466e3a95138ba276212028fa904ce6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e294d3c124d5c94b6f6da6560006df6d466e3a95138ba276212028fa904ce6f->enter($__internal_5e294d3c124d5c94b6f6da6560006df6d466e3a95138ba276212028fa904ce6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f7b31c819bafacd79d27837baf945966962dcf49cdb28b0c53513ca8ccd06915->leave($__internal_f7b31c819bafacd79d27837baf945966962dcf49cdb28b0c53513ca8ccd06915_prof);

        
        $__internal_5e294d3c124d5c94b6f6da6560006df6d466e3a95138ba276212028fa904ce6f->leave($__internal_5e294d3c124d5c94b6f6da6560006df6d466e3a95138ba276212028fa904ce6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
