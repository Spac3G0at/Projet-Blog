<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_900b4c82f4e0d8f6ba669e342919ce9fe5a212192da7be7098f09969e62e00d3 extends Twig_Template
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
        $__internal_84d8be88a29e1b421c9fcc599947b413814ee9f81159019393307afde9dc4fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84d8be88a29e1b421c9fcc599947b413814ee9f81159019393307afde9dc4fd8->enter($__internal_84d8be88a29e1b421c9fcc599947b413814ee9f81159019393307afde9dc4fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_6b1528501f815bfbbeff9a2b16b18a4421a99d6e52fb6e6d8d46f4f57f9e27e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b1528501f815bfbbeff9a2b16b18a4421a99d6e52fb6e6d8d46f4f57f9e27e3->enter($__internal_6b1528501f815bfbbeff9a2b16b18a4421a99d6e52fb6e6d8d46f4f57f9e27e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_84d8be88a29e1b421c9fcc599947b413814ee9f81159019393307afde9dc4fd8->leave($__internal_84d8be88a29e1b421c9fcc599947b413814ee9f81159019393307afde9dc4fd8_prof);

        
        $__internal_6b1528501f815bfbbeff9a2b16b18a4421a99d6e52fb6e6d8d46f4f57f9e27e3->leave($__internal_6b1528501f815bfbbeff9a2b16b18a4421a99d6e52fb6e6d8d46f4f57f9e27e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
