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
        $__internal_a06bfced3919bf4d28a10d44fb7cc4d54bfc3e46d03c41324d1688c3760b7671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06bfced3919bf4d28a10d44fb7cc4d54bfc3e46d03c41324d1688c3760b7671->enter($__internal_a06bfced3919bf4d28a10d44fb7cc4d54bfc3e46d03c41324d1688c3760b7671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_06adb084be0e1c081490deb8b94cf1342ae9d473a89371da788a9f726cca4a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06adb084be0e1c081490deb8b94cf1342ae9d473a89371da788a9f726cca4a81->enter($__internal_06adb084be0e1c081490deb8b94cf1342ae9d473a89371da788a9f726cca4a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a06bfced3919bf4d28a10d44fb7cc4d54bfc3e46d03c41324d1688c3760b7671->leave($__internal_a06bfced3919bf4d28a10d44fb7cc4d54bfc3e46d03c41324d1688c3760b7671_prof);

        
        $__internal_06adb084be0e1c081490deb8b94cf1342ae9d473a89371da788a9f726cca4a81->leave($__internal_06adb084be0e1c081490deb8b94cf1342ae9d473a89371da788a9f726cca4a81_prof);

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
