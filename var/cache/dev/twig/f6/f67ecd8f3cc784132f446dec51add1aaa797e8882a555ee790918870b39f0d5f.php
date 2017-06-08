<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_3b10c9bcaccd9d50b835d4b15b807ca780a0cdfeeca40fc777aefe5f2bcb0937 extends Twig_Template
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
        $__internal_83aa32f94ece683d99af7172d838626289b9e3fc6f817fa49e60ca38343f59f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83aa32f94ece683d99af7172d838626289b9e3fc6f817fa49e60ca38343f59f3->enter($__internal_83aa32f94ece683d99af7172d838626289b9e3fc6f817fa49e60ca38343f59f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_d054c73aaf8206e5618e6f4b2c8a4beea1f254fdcd24f08a569f856c6964527b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d054c73aaf8206e5618e6f4b2c8a4beea1f254fdcd24f08a569f856c6964527b->enter($__internal_d054c73aaf8206e5618e6f4b2c8a4beea1f254fdcd24f08a569f856c6964527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_83aa32f94ece683d99af7172d838626289b9e3fc6f817fa49e60ca38343f59f3->leave($__internal_83aa32f94ece683d99af7172d838626289b9e3fc6f817fa49e60ca38343f59f3_prof);

        
        $__internal_d054c73aaf8206e5618e6f4b2c8a4beea1f254fdcd24f08a569f856c6964527b->leave($__internal_d054c73aaf8206e5618e6f4b2c8a4beea1f254fdcd24f08a569f856c6964527b_prof);

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
