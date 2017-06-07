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
        $__internal_1f326d256d9558826527593ac6d0a65d028d37d36bbdc465728d1209e8794c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f326d256d9558826527593ac6d0a65d028d37d36bbdc465728d1209e8794c0e->enter($__internal_1f326d256d9558826527593ac6d0a65d028d37d36bbdc465728d1209e8794c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3cb06edfde979905c54ac0508020041656dab2130c36997f8101345d7c8ce91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb06edfde979905c54ac0508020041656dab2130c36997f8101345d7c8ce91a->enter($__internal_3cb06edfde979905c54ac0508020041656dab2130c36997f8101345d7c8ce91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_1f326d256d9558826527593ac6d0a65d028d37d36bbdc465728d1209e8794c0e->leave($__internal_1f326d256d9558826527593ac6d0a65d028d37d36bbdc465728d1209e8794c0e_prof);

        
        $__internal_3cb06edfde979905c54ac0508020041656dab2130c36997f8101345d7c8ce91a->leave($__internal_3cb06edfde979905c54ac0508020041656dab2130c36997f8101345d7c8ce91a_prof);

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
