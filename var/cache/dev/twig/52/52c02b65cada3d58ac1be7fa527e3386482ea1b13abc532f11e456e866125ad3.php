<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_7d38fcac8abc5e87f9a94db16f2bc714830f5a1a82123ed8a21be03830cd6f04 extends Twig_Template
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
        $__internal_72b5a40cf4f0ec33d857bdb36a10b7bd27336ece278b12076062370f0c8c1af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b5a40cf4f0ec33d857bdb36a10b7bd27336ece278b12076062370f0c8c1af5->enter($__internal_72b5a40cf4f0ec33d857bdb36a10b7bd27336ece278b12076062370f0c8c1af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_369142cf16ea8f57fe58f7afa38d4d5a1b30d27ced361443980a75cdfb433362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369142cf16ea8f57fe58f7afa38d4d5a1b30d27ced361443980a75cdfb433362->enter($__internal_369142cf16ea8f57fe58f7afa38d4d5a1b30d27ced361443980a75cdfb433362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_72b5a40cf4f0ec33d857bdb36a10b7bd27336ece278b12076062370f0c8c1af5->leave($__internal_72b5a40cf4f0ec33d857bdb36a10b7bd27336ece278b12076062370f0c8c1af5_prof);

        
        $__internal_369142cf16ea8f57fe58f7afa38d4d5a1b30d27ced361443980a75cdfb433362->leave($__internal_369142cf16ea8f57fe58f7afa38d4d5a1b30d27ced361443980a75cdfb433362_prof);

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
