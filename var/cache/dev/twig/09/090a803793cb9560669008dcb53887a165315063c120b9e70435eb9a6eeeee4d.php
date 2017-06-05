<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_a30ea28da95af9ff5b1bc43cfc38ffdcafe305e7b48a5a33552d580e23d0e90d extends Twig_Template
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
        $__internal_a33132d4d6536ef48c75a6df97a80b02d719762f1b465d53759681aa04fff735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33132d4d6536ef48c75a6df97a80b02d719762f1b465d53759681aa04fff735->enter($__internal_a33132d4d6536ef48c75a6df97a80b02d719762f1b465d53759681aa04fff735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_891d136418c00fed61aa926357fa03433d2157b3462f753975faf902d0109399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891d136418c00fed61aa926357fa03433d2157b3462f753975faf902d0109399->enter($__internal_891d136418c00fed61aa926357fa03433d2157b3462f753975faf902d0109399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_a33132d4d6536ef48c75a6df97a80b02d719762f1b465d53759681aa04fff735->leave($__internal_a33132d4d6536ef48c75a6df97a80b02d719762f1b465d53759681aa04fff735_prof);

        
        $__internal_891d136418c00fed61aa926357fa03433d2157b3462f753975faf902d0109399->leave($__internal_891d136418c00fed61aa926357fa03433d2157b3462f753975faf902d0109399_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
