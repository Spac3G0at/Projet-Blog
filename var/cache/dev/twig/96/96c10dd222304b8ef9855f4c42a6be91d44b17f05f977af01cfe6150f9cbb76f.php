<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_5961d3cdd12061db55cb8477d5898be8fde78df435ea68f37de62cd091b6a411 extends Twig_Template
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
        $__internal_e51e1ebdcc3c6e9743b3b596a815870bb0beec0ea0f9afbcb3da881c39fb209f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51e1ebdcc3c6e9743b3b596a815870bb0beec0ea0f9afbcb3da881c39fb209f->enter($__internal_e51e1ebdcc3c6e9743b3b596a815870bb0beec0ea0f9afbcb3da881c39fb209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_503c6a0b50dda41b179a58a06f4937564e6ba0fa778f0c988e8a7db5048814f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503c6a0b50dda41b179a58a06f4937564e6ba0fa778f0c988e8a7db5048814f6->enter($__internal_503c6a0b50dda41b179a58a06f4937564e6ba0fa778f0c988e8a7db5048814f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e51e1ebdcc3c6e9743b3b596a815870bb0beec0ea0f9afbcb3da881c39fb209f->leave($__internal_e51e1ebdcc3c6e9743b3b596a815870bb0beec0ea0f9afbcb3da881c39fb209f_prof);

        
        $__internal_503c6a0b50dda41b179a58a06f4937564e6ba0fa778f0c988e8a7db5048814f6->leave($__internal_503c6a0b50dda41b179a58a06f4937564e6ba0fa778f0c988e8a7db5048814f6_prof);

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
