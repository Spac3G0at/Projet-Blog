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
        $__internal_0c84ae8d1c1ffcc4c767b283361c01294bc455ab89518e412206e262a95b4eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c84ae8d1c1ffcc4c767b283361c01294bc455ab89518e412206e262a95b4eda->enter($__internal_0c84ae8d1c1ffcc4c767b283361c01294bc455ab89518e412206e262a95b4eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_1fdcd50a97a1c3a84444f0309f454ba91332296ded131fc0191084a79b09cc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdcd50a97a1c3a84444f0309f454ba91332296ded131fc0191084a79b09cc5e->enter($__internal_1fdcd50a97a1c3a84444f0309f454ba91332296ded131fc0191084a79b09cc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_0c84ae8d1c1ffcc4c767b283361c01294bc455ab89518e412206e262a95b4eda->leave($__internal_0c84ae8d1c1ffcc4c767b283361c01294bc455ab89518e412206e262a95b4eda_prof);

        
        $__internal_1fdcd50a97a1c3a84444f0309f454ba91332296ded131fc0191084a79b09cc5e->leave($__internal_1fdcd50a97a1c3a84444f0309f454ba91332296ded131fc0191084a79b09cc5e_prof);

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
