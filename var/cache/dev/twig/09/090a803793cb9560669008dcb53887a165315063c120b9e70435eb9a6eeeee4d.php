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
        $__internal_d9e13afb50e8e2c23db30889ba1ca027c9c1ab9d5397ee0f75f6012a9da3cb18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e13afb50e8e2c23db30889ba1ca027c9c1ab9d5397ee0f75f6012a9da3cb18->enter($__internal_d9e13afb50e8e2c23db30889ba1ca027c9c1ab9d5397ee0f75f6012a9da3cb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_c9704af891a7af8a00a63dfbfa906da21f5556b55256a2deb976518145c0df49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9704af891a7af8a00a63dfbfa906da21f5556b55256a2deb976518145c0df49->enter($__internal_c9704af891a7af8a00a63dfbfa906da21f5556b55256a2deb976518145c0df49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_d9e13afb50e8e2c23db30889ba1ca027c9c1ab9d5397ee0f75f6012a9da3cb18->leave($__internal_d9e13afb50e8e2c23db30889ba1ca027c9c1ab9d5397ee0f75f6012a9da3cb18_prof);

        
        $__internal_c9704af891a7af8a00a63dfbfa906da21f5556b55256a2deb976518145c0df49->leave($__internal_c9704af891a7af8a00a63dfbfa906da21f5556b55256a2deb976518145c0df49_prof);

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
