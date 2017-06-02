<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_30689f5074b82ef91e9dbd7a8fb18d5fd4404508e91b44ff01f018e43dd55bc9 extends Twig_Template
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
        $__internal_1486b479223635285e9bcdf92f4516823e781d65378de58f457532af5f6a7cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1486b479223635285e9bcdf92f4516823e781d65378de58f457532af5f6a7cb3->enter($__internal_1486b479223635285e9bcdf92f4516823e781d65378de58f457532af5f6a7cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_474091c357d03a7fbf11fe71f072f35d0eb3d4bf1753a616fc7af3acac4e4d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474091c357d03a7fbf11fe71f072f35d0eb3d4bf1753a616fc7af3acac4e4d37->enter($__internal_474091c357d03a7fbf11fe71f072f35d0eb3d4bf1753a616fc7af3acac4e4d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_1486b479223635285e9bcdf92f4516823e781d65378de58f457532af5f6a7cb3->leave($__internal_1486b479223635285e9bcdf92f4516823e781d65378de58f457532af5f6a7cb3_prof);

        
        $__internal_474091c357d03a7fbf11fe71f072f35d0eb3d4bf1753a616fc7af3acac4e4d37->leave($__internal_474091c357d03a7fbf11fe71f072f35d0eb3d4bf1753a616fc7af3acac4e4d37_prof);

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
