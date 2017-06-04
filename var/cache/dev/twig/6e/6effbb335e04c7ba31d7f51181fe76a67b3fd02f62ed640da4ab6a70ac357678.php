<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_cc6a3652ce94077997855e5d602896fc9cb72b79d9648678e86a2821296bb750 extends Twig_Template
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
        $__internal_b4512e62042253051b69f973b2550c6f477a459b79472357b6d441f1ff0274bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4512e62042253051b69f973b2550c6f477a459b79472357b6d441f1ff0274bd->enter($__internal_b4512e62042253051b69f973b2550c6f477a459b79472357b6d441f1ff0274bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_64503b8d34c70e9c55053e2ef7b7b7678dc25f3ed5cc30fffd20ba8b06d2520a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64503b8d34c70e9c55053e2ef7b7b7678dc25f3ed5cc30fffd20ba8b06d2520a->enter($__internal_64503b8d34c70e9c55053e2ef7b7b7678dc25f3ed5cc30fffd20ba8b06d2520a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b4512e62042253051b69f973b2550c6f477a459b79472357b6d441f1ff0274bd->leave($__internal_b4512e62042253051b69f973b2550c6f477a459b79472357b6d441f1ff0274bd_prof);

        
        $__internal_64503b8d34c70e9c55053e2ef7b7b7678dc25f3ed5cc30fffd20ba8b06d2520a->leave($__internal_64503b8d34c70e9c55053e2ef7b7b7678dc25f3ed5cc30fffd20ba8b06d2520a_prof);

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
