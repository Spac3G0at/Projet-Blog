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
        $__internal_cc60af1cb7cd74a10867e8cd8c825ad740f3bb470bc4d0fd24e7b6bf61166aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc60af1cb7cd74a10867e8cd8c825ad740f3bb470bc4d0fd24e7b6bf61166aba->enter($__internal_cc60af1cb7cd74a10867e8cd8c825ad740f3bb470bc4d0fd24e7b6bf61166aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_72134397ce562023f2de3f6b18084f96efd289f15499662f3da600d1170ed29e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72134397ce562023f2de3f6b18084f96efd289f15499662f3da600d1170ed29e->enter($__internal_72134397ce562023f2de3f6b18084f96efd289f15499662f3da600d1170ed29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_cc60af1cb7cd74a10867e8cd8c825ad740f3bb470bc4d0fd24e7b6bf61166aba->leave($__internal_cc60af1cb7cd74a10867e8cd8c825ad740f3bb470bc4d0fd24e7b6bf61166aba_prof);

        
        $__internal_72134397ce562023f2de3f6b18084f96efd289f15499662f3da600d1170ed29e->leave($__internal_72134397ce562023f2de3f6b18084f96efd289f15499662f3da600d1170ed29e_prof);

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
