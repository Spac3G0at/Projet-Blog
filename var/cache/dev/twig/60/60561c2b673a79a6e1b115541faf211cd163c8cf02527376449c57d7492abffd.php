<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_79e883a5c10c0b904b52285b2f504f9ecc156b5ef4bfb8f8ebb89a118ec281e6 extends Twig_Template
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
        $__internal_9a9dd95657b7db4bf4d8f9e5d6dbdb8c5f2f1adaec6747190cecad29c1a04c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a9dd95657b7db4bf4d8f9e5d6dbdb8c5f2f1adaec6747190cecad29c1a04c8b->enter($__internal_9a9dd95657b7db4bf4d8f9e5d6dbdb8c5f2f1adaec6747190cecad29c1a04c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0c42cffb9bfed491e6d4ee9efe91b84f049a813077a029c2a69e1b7559e03138 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c42cffb9bfed491e6d4ee9efe91b84f049a813077a029c2a69e1b7559e03138->enter($__internal_0c42cffb9bfed491e6d4ee9efe91b84f049a813077a029c2a69e1b7559e03138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9a9dd95657b7db4bf4d8f9e5d6dbdb8c5f2f1adaec6747190cecad29c1a04c8b->leave($__internal_9a9dd95657b7db4bf4d8f9e5d6dbdb8c5f2f1adaec6747190cecad29c1a04c8b_prof);

        
        $__internal_0c42cffb9bfed491e6d4ee9efe91b84f049a813077a029c2a69e1b7559e03138->leave($__internal_0c42cffb9bfed491e6d4ee9efe91b84f049a813077a029c2a69e1b7559e03138_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
