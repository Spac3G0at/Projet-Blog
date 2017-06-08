<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_598c92f3e47ec5e1ab84a5121da46429ee6fd137a63007e053b7c3c539ce5fb9 extends Twig_Template
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
        $__internal_33f291d69f458c2d7436e849d65c7d98fba0216e09c5fb1b0989778e154817fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f291d69f458c2d7436e849d65c7d98fba0216e09c5fb1b0989778e154817fd->enter($__internal_33f291d69f458c2d7436e849d65c7d98fba0216e09c5fb1b0989778e154817fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e75c94e4870e92d16fdc2c4635145a2bf72b300901f654ed4e76212cdc61e8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75c94e4870e92d16fdc2c4635145a2bf72b300901f654ed4e76212cdc61e8eb->enter($__internal_e75c94e4870e92d16fdc2c4635145a2bf72b300901f654ed4e76212cdc61e8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_33f291d69f458c2d7436e849d65c7d98fba0216e09c5fb1b0989778e154817fd->leave($__internal_33f291d69f458c2d7436e849d65c7d98fba0216e09c5fb1b0989778e154817fd_prof);

        
        $__internal_e75c94e4870e92d16fdc2c4635145a2bf72b300901f654ed4e76212cdc61e8eb->leave($__internal_e75c94e4870e92d16fdc2c4635145a2bf72b300901f654ed4e76212cdc61e8eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
