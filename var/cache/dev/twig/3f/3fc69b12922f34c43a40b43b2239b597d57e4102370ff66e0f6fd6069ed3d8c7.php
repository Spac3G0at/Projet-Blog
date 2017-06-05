<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_534995e2b280640c733dc40f80f8e6656ce776f3f8b8c75267285cb614128378 extends Twig_Template
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
        $__internal_662a91a6339fc6472911d38a9b63bae32f18afb83c961ec1983f311bb2579b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662a91a6339fc6472911d38a9b63bae32f18afb83c961ec1983f311bb2579b47->enter($__internal_662a91a6339fc6472911d38a9b63bae32f18afb83c961ec1983f311bb2579b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_140bcd9d7895a5e16c44393855298a1eaf0332303dd02be82b8daecb9ca486e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140bcd9d7895a5e16c44393855298a1eaf0332303dd02be82b8daecb9ca486e4->enter($__internal_140bcd9d7895a5e16c44393855298a1eaf0332303dd02be82b8daecb9ca486e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_662a91a6339fc6472911d38a9b63bae32f18afb83c961ec1983f311bb2579b47->leave($__internal_662a91a6339fc6472911d38a9b63bae32f18afb83c961ec1983f311bb2579b47_prof);

        
        $__internal_140bcd9d7895a5e16c44393855298a1eaf0332303dd02be82b8daecb9ca486e4->leave($__internal_140bcd9d7895a5e16c44393855298a1eaf0332303dd02be82b8daecb9ca486e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
