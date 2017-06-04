<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_79330166f93f1456678af78254ca5ac68f4f4b60ec2b1be153dff513ded5666a extends Twig_Template
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
        $__internal_2071efecdab8f618822383b958419226dbc878ceabd46a3fe6355b2370f78233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2071efecdab8f618822383b958419226dbc878ceabd46a3fe6355b2370f78233->enter($__internal_2071efecdab8f618822383b958419226dbc878ceabd46a3fe6355b2370f78233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_58156a977cf76eadf5e25fa646182160896e343420e5d15ecdceac5a24410686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58156a977cf76eadf5e25fa646182160896e343420e5d15ecdceac5a24410686->enter($__internal_58156a977cf76eadf5e25fa646182160896e343420e5d15ecdceac5a24410686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2071efecdab8f618822383b958419226dbc878ceabd46a3fe6355b2370f78233->leave($__internal_2071efecdab8f618822383b958419226dbc878ceabd46a3fe6355b2370f78233_prof);

        
        $__internal_58156a977cf76eadf5e25fa646182160896e343420e5d15ecdceac5a24410686->leave($__internal_58156a977cf76eadf5e25fa646182160896e343420e5d15ecdceac5a24410686_prof);

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
