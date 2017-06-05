<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_41aa63c8baa60fd14da40dfb49db7888e43ea6910aee3904cd19ba37e91b553d extends Twig_Template
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
        $__internal_20656aa38ada90bdff44f7bec8e5bacf5aa158bd421bf76441c1c13799bb2b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20656aa38ada90bdff44f7bec8e5bacf5aa158bd421bf76441c1c13799bb2b39->enter($__internal_20656aa38ada90bdff44f7bec8e5bacf5aa158bd421bf76441c1c13799bb2b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_24760eaeec6d6818b94138894b0a308f5bcbbf42c6366ea9e8ac55825feb2692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24760eaeec6d6818b94138894b0a308f5bcbbf42c6366ea9e8ac55825feb2692->enter($__internal_24760eaeec6d6818b94138894b0a308f5bcbbf42c6366ea9e8ac55825feb2692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_20656aa38ada90bdff44f7bec8e5bacf5aa158bd421bf76441c1c13799bb2b39->leave($__internal_20656aa38ada90bdff44f7bec8e5bacf5aa158bd421bf76441c1c13799bb2b39_prof);

        
        $__internal_24760eaeec6d6818b94138894b0a308f5bcbbf42c6366ea9e8ac55825feb2692->leave($__internal_24760eaeec6d6818b94138894b0a308f5bcbbf42c6366ea9e8ac55825feb2692_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
