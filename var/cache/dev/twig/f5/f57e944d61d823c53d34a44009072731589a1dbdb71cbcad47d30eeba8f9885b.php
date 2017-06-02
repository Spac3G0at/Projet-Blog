<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_dcafd8406a380ea2e407f7ceacdfdbeed14a68d11795dc90cd90643b2b93371e extends Twig_Template
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
        $__internal_37af99d9ac34ce5937b9b110e22e77f6ba479ddd2e36d2e34283592b62b9cc74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37af99d9ac34ce5937b9b110e22e77f6ba479ddd2e36d2e34283592b62b9cc74->enter($__internal_37af99d9ac34ce5937b9b110e22e77f6ba479ddd2e36d2e34283592b62b9cc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_805266320defb8bd36c9d6025819c01207ce4a82da4a0b105180d28943f6ce23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805266320defb8bd36c9d6025819c01207ce4a82da4a0b105180d28943f6ce23->enter($__internal_805266320defb8bd36c9d6025819c01207ce4a82da4a0b105180d28943f6ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_37af99d9ac34ce5937b9b110e22e77f6ba479ddd2e36d2e34283592b62b9cc74->leave($__internal_37af99d9ac34ce5937b9b110e22e77f6ba479ddd2e36d2e34283592b62b9cc74_prof);

        
        $__internal_805266320defb8bd36c9d6025819c01207ce4a82da4a0b105180d28943f6ce23->leave($__internal_805266320defb8bd36c9d6025819c01207ce4a82da4a0b105180d28943f6ce23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
