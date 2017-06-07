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
        $__internal_7fbb9df5522437fe5b73bd7047220a9f447f51d9e8037be5bf8870c0c3548a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fbb9df5522437fe5b73bd7047220a9f447f51d9e8037be5bf8870c0c3548a02->enter($__internal_7fbb9df5522437fe5b73bd7047220a9f447f51d9e8037be5bf8870c0c3548a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_db8aa4af0fb57f81621c27b601f05098ccba46e7929200f18ad3c5e7aac00972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8aa4af0fb57f81621c27b601f05098ccba46e7929200f18ad3c5e7aac00972->enter($__internal_db8aa4af0fb57f81621c27b601f05098ccba46e7929200f18ad3c5e7aac00972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7fbb9df5522437fe5b73bd7047220a9f447f51d9e8037be5bf8870c0c3548a02->leave($__internal_7fbb9df5522437fe5b73bd7047220a9f447f51d9e8037be5bf8870c0c3548a02_prof);

        
        $__internal_db8aa4af0fb57f81621c27b601f05098ccba46e7929200f18ad3c5e7aac00972->leave($__internal_db8aa4af0fb57f81621c27b601f05098ccba46e7929200f18ad3c5e7aac00972_prof);

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
