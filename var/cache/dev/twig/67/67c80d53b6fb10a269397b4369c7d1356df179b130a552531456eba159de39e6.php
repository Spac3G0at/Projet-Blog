<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_349a653fb1ae6c8da087b996f9f4c609fa00a762d2ec03f996a02cf2bbb5a2e3 extends Twig_Template
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
        $__internal_5e68fbc05819225317a8a7e5ae7a8d6f01012fc31afb3b943a2b8ea19f04dafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e68fbc05819225317a8a7e5ae7a8d6f01012fc31afb3b943a2b8ea19f04dafd->enter($__internal_5e68fbc05819225317a8a7e5ae7a8d6f01012fc31afb3b943a2b8ea19f04dafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_4e982fc5a777d2d1d50b783745b35d6bcb6833b71952762969a62e55f00f1eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e982fc5a777d2d1d50b783745b35d6bcb6833b71952762969a62e55f00f1eab->enter($__internal_4e982fc5a777d2d1d50b783745b35d6bcb6833b71952762969a62e55f00f1eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_5e68fbc05819225317a8a7e5ae7a8d6f01012fc31afb3b943a2b8ea19f04dafd->leave($__internal_5e68fbc05819225317a8a7e5ae7a8d6f01012fc31afb3b943a2b8ea19f04dafd_prof);

        
        $__internal_4e982fc5a777d2d1d50b783745b35d6bcb6833b71952762969a62e55f00f1eab->leave($__internal_4e982fc5a777d2d1d50b783745b35d6bcb6833b71952762969a62e55f00f1eab_prof);

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
