<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ae4dd936e16e727f952d535b309903d1416e38298d7de15c20645359925d7b14 extends Twig_Template
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
        $__internal_7f5d0d2af4f1a461a35b781dec70cd269b94fe8eb682df9c45c3c6635947dc02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5d0d2af4f1a461a35b781dec70cd269b94fe8eb682df9c45c3c6635947dc02->enter($__internal_7f5d0d2af4f1a461a35b781dec70cd269b94fe8eb682df9c45c3c6635947dc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_0132633e0f41b2b75bd911d6e9f6f8876fa4c3058a474b17988cbb6f6551d29f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0132633e0f41b2b75bd911d6e9f6f8876fa4c3058a474b17988cbb6f6551d29f->enter($__internal_0132633e0f41b2b75bd911d6e9f6f8876fa4c3058a474b17988cbb6f6551d29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_7f5d0d2af4f1a461a35b781dec70cd269b94fe8eb682df9c45c3c6635947dc02->leave($__internal_7f5d0d2af4f1a461a35b781dec70cd269b94fe8eb682df9c45c3c6635947dc02_prof);

        
        $__internal_0132633e0f41b2b75bd911d6e9f6f8876fa4c3058a474b17988cbb6f6551d29f->leave($__internal_0132633e0f41b2b75bd911d6e9f6f8876fa4c3058a474b17988cbb6f6551d29f_prof);

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
