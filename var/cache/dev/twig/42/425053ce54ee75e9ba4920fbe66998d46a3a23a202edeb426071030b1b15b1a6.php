<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_8f7441b12dcfb2bed989b212de96c220fb247641b6f7133969906925ffdda541 extends Twig_Template
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
        $__internal_771187fc6abed85e3b41599fd3f07d46372668d440a3f3221d55b354a0b826e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771187fc6abed85e3b41599fd3f07d46372668d440a3f3221d55b354a0b826e9->enter($__internal_771187fc6abed85e3b41599fd3f07d46372668d440a3f3221d55b354a0b826e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_37f24256e86109ae52cc96915b52eaa6bbb752902be4bc820a548e9883d5f92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f24256e86109ae52cc96915b52eaa6bbb752902be4bc820a548e9883d5f92f->enter($__internal_37f24256e86109ae52cc96915b52eaa6bbb752902be4bc820a548e9883d5f92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_771187fc6abed85e3b41599fd3f07d46372668d440a3f3221d55b354a0b826e9->leave($__internal_771187fc6abed85e3b41599fd3f07d46372668d440a3f3221d55b354a0b826e9_prof);

        
        $__internal_37f24256e86109ae52cc96915b52eaa6bbb752902be4bc820a548e9883d5f92f->leave($__internal_37f24256e86109ae52cc96915b52eaa6bbb752902be4bc820a548e9883d5f92f_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
