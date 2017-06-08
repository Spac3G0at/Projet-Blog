<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8ad3cc5f151040532b50874c4f4f5bab1dd0538bc9b3ebd1f98eb1438c7c8b65 extends Twig_Template
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
        $__internal_57cfab7084b82ebcd12b3f1c9e8fe88fa2b2dde18c3f8c8025e7bb838b118b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cfab7084b82ebcd12b3f1c9e8fe88fa2b2dde18c3f8c8025e7bb838b118b0b->enter($__internal_57cfab7084b82ebcd12b3f1c9e8fe88fa2b2dde18c3f8c8025e7bb838b118b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_59055b19f82d2570c9ce22eba4a671f7c359e7230af592dbbc76050a8d0b6546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59055b19f82d2570c9ce22eba4a671f7c359e7230af592dbbc76050a8d0b6546->enter($__internal_59055b19f82d2570c9ce22eba4a671f7c359e7230af592dbbc76050a8d0b6546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_57cfab7084b82ebcd12b3f1c9e8fe88fa2b2dde18c3f8c8025e7bb838b118b0b->leave($__internal_57cfab7084b82ebcd12b3f1c9e8fe88fa2b2dde18c3f8c8025e7bb838b118b0b_prof);

        
        $__internal_59055b19f82d2570c9ce22eba4a671f7c359e7230af592dbbc76050a8d0b6546->leave($__internal_59055b19f82d2570c9ce22eba4a671f7c359e7230af592dbbc76050a8d0b6546_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
