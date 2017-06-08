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
        $__internal_80cc3f63c4f0a466d57ee8e585dff5cb3ac98f73afe20e7723289d125b3aaf82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cc3f63c4f0a466d57ee8e585dff5cb3ac98f73afe20e7723289d125b3aaf82->enter($__internal_80cc3f63c4f0a466d57ee8e585dff5cb3ac98f73afe20e7723289d125b3aaf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c9674844da3f99e248ed65d53ff8384e5a69288c33637af546fb8cab36799749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9674844da3f99e248ed65d53ff8384e5a69288c33637af546fb8cab36799749->enter($__internal_c9674844da3f99e248ed65d53ff8384e5a69288c33637af546fb8cab36799749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_80cc3f63c4f0a466d57ee8e585dff5cb3ac98f73afe20e7723289d125b3aaf82->leave($__internal_80cc3f63c4f0a466d57ee8e585dff5cb3ac98f73afe20e7723289d125b3aaf82_prof);

        
        $__internal_c9674844da3f99e248ed65d53ff8384e5a69288c33637af546fb8cab36799749->leave($__internal_c9674844da3f99e248ed65d53ff8384e5a69288c33637af546fb8cab36799749_prof);

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
