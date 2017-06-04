<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_a18c69d427a032b4bf99b93d9b1a0bb7bb820f82243805bd76ff76413960743f extends Twig_Template
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
        $__internal_eea0d6a10a13af8e1d25507d6c88f76723b4121218acf91492ae3d442913057b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea0d6a10a13af8e1d25507d6c88f76723b4121218acf91492ae3d442913057b->enter($__internal_eea0d6a10a13af8e1d25507d6c88f76723b4121218acf91492ae3d442913057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_57f3f841e18e306056087132c5342b155f6f7cb8e51a6547db75ae07063aaafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f3f841e18e306056087132c5342b155f6f7cb8e51a6547db75ae07063aaafc->enter($__internal_57f3f841e18e306056087132c5342b155f6f7cb8e51a6547db75ae07063aaafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_eea0d6a10a13af8e1d25507d6c88f76723b4121218acf91492ae3d442913057b->leave($__internal_eea0d6a10a13af8e1d25507d6c88f76723b4121218acf91492ae3d442913057b_prof);

        
        $__internal_57f3f841e18e306056087132c5342b155f6f7cb8e51a6547db75ae07063aaafc->leave($__internal_57f3f841e18e306056087132c5342b155f6f7cb8e51a6547db75ae07063aaafc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
