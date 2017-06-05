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
        $__internal_c8e2d0fb87cf20850cd051b838aa5b6a9038eae39b7d5e9a4f42312f210750b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e2d0fb87cf20850cd051b838aa5b6a9038eae39b7d5e9a4f42312f210750b7->enter($__internal_c8e2d0fb87cf20850cd051b838aa5b6a9038eae39b7d5e9a4f42312f210750b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e026b6c891fdbc3ee4b4740f8806772ac63779931508edcf2b1800ceff007e48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e026b6c891fdbc3ee4b4740f8806772ac63779931508edcf2b1800ceff007e48->enter($__internal_e026b6c891fdbc3ee4b4740f8806772ac63779931508edcf2b1800ceff007e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c8e2d0fb87cf20850cd051b838aa5b6a9038eae39b7d5e9a4f42312f210750b7->leave($__internal_c8e2d0fb87cf20850cd051b838aa5b6a9038eae39b7d5e9a4f42312f210750b7_prof);

        
        $__internal_e026b6c891fdbc3ee4b4740f8806772ac63779931508edcf2b1800ceff007e48->leave($__internal_e026b6c891fdbc3ee4b4740f8806772ac63779931508edcf2b1800ceff007e48_prof);

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
