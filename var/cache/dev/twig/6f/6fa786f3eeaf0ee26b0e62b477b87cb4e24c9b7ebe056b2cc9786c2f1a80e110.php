<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_54c34766c2c15b698a50863541995bed8a209106981fc74485f878bc6f74413d extends Twig_Template
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
        $__internal_8cc7756284714d099f3bb40ae5de4254b563c4b17ff89497245f78c58173981b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc7756284714d099f3bb40ae5de4254b563c4b17ff89497245f78c58173981b->enter($__internal_8cc7756284714d099f3bb40ae5de4254b563c4b17ff89497245f78c58173981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f2eca5ab8d9856a2b1736ad38f88d3e71798efe9b3b6ed097d8da819f62bc7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2eca5ab8d9856a2b1736ad38f88d3e71798efe9b3b6ed097d8da819f62bc7c2->enter($__internal_f2eca5ab8d9856a2b1736ad38f88d3e71798efe9b3b6ed097d8da819f62bc7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8cc7756284714d099f3bb40ae5de4254b563c4b17ff89497245f78c58173981b->leave($__internal_8cc7756284714d099f3bb40ae5de4254b563c4b17ff89497245f78c58173981b_prof);

        
        $__internal_f2eca5ab8d9856a2b1736ad38f88d3e71798efe9b3b6ed097d8da819f62bc7c2->leave($__internal_f2eca5ab8d9856a2b1736ad38f88d3e71798efe9b3b6ed097d8da819f62bc7c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
