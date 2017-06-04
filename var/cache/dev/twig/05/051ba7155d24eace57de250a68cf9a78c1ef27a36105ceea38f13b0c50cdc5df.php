<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_7858f35920cb021241e4c4d22ca53d2915ae1723bfd10193cdf9ff465977acd7 extends Twig_Template
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
        $__internal_16af56e6f1d61dca54efc67d81f726ed60f70c1c9feff3bd583c21ccebb5d03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16af56e6f1d61dca54efc67d81f726ed60f70c1c9feff3bd583c21ccebb5d03b->enter($__internal_16af56e6f1d61dca54efc67d81f726ed60f70c1c9feff3bd583c21ccebb5d03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_77bd2fb00603016cb3646a1ccac026de46f8a6f1d2baf46d2ec930e0882b9697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bd2fb00603016cb3646a1ccac026de46f8a6f1d2baf46d2ec930e0882b9697->enter($__internal_77bd2fb00603016cb3646a1ccac026de46f8a6f1d2baf46d2ec930e0882b9697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_16af56e6f1d61dca54efc67d81f726ed60f70c1c9feff3bd583c21ccebb5d03b->leave($__internal_16af56e6f1d61dca54efc67d81f726ed60f70c1c9feff3bd583c21ccebb5d03b_prof);

        
        $__internal_77bd2fb00603016cb3646a1ccac026de46f8a6f1d2baf46d2ec930e0882b9697->leave($__internal_77bd2fb00603016cb3646a1ccac026de46f8a6f1d2baf46d2ec930e0882b9697_prof);

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
