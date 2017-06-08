<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f648bab52d404952c2b45c9e9fcf1099b9c2eda6871ec50b6b50dbede7b3fbb5 extends Twig_Template
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
        $__internal_ca9a94ff227832e97967ab7d682ee26982b362a84f72fd70bf70c6b6f09e5dc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9a94ff227832e97967ab7d682ee26982b362a84f72fd70bf70c6b6f09e5dc3->enter($__internal_ca9a94ff227832e97967ab7d682ee26982b362a84f72fd70bf70c6b6f09e5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0e4e037755f3deb42f9315d66fce1185ab613f2f0ea43a704f02648eddc0657c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e4e037755f3deb42f9315d66fce1185ab613f2f0ea43a704f02648eddc0657c->enter($__internal_0e4e037755f3deb42f9315d66fce1185ab613f2f0ea43a704f02648eddc0657c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ca9a94ff227832e97967ab7d682ee26982b362a84f72fd70bf70c6b6f09e5dc3->leave($__internal_ca9a94ff227832e97967ab7d682ee26982b362a84f72fd70bf70c6b6f09e5dc3_prof);

        
        $__internal_0e4e037755f3deb42f9315d66fce1185ab613f2f0ea43a704f02648eddc0657c->leave($__internal_0e4e037755f3deb42f9315d66fce1185ab613f2f0ea43a704f02648eddc0657c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
