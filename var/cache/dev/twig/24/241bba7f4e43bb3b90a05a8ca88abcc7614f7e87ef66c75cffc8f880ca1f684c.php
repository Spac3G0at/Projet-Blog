<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2229f0dea080c27f7f3b8107158b9feb89a647caae1dca73bfbaf1564c6ce903 extends Twig_Template
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
        $__internal_2098bd67e33600d79434911828263a5f24f43ffff5d44f935e3f2cbf3a7bb1e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2098bd67e33600d79434911828263a5f24f43ffff5d44f935e3f2cbf3a7bb1e5->enter($__internal_2098bd67e33600d79434911828263a5f24f43ffff5d44f935e3f2cbf3a7bb1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_f2f5a6e86a8229166780e312caa139376c33bf724ed09b698e80f7b27132b6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f5a6e86a8229166780e312caa139376c33bf724ed09b698e80f7b27132b6f0->enter($__internal_f2f5a6e86a8229166780e312caa139376c33bf724ed09b698e80f7b27132b6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2098bd67e33600d79434911828263a5f24f43ffff5d44f935e3f2cbf3a7bb1e5->leave($__internal_2098bd67e33600d79434911828263a5f24f43ffff5d44f935e3f2cbf3a7bb1e5_prof);

        
        $__internal_f2f5a6e86a8229166780e312caa139376c33bf724ed09b698e80f7b27132b6f0->leave($__internal_f2f5a6e86a8229166780e312caa139376c33bf724ed09b698e80f7b27132b6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
