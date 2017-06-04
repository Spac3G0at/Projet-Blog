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
        $__internal_749d7ea1c03427747768421bf215f39d87632aa89f36f1ee619134fcc8e094d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749d7ea1c03427747768421bf215f39d87632aa89f36f1ee619134fcc8e094d8->enter($__internal_749d7ea1c03427747768421bf215f39d87632aa89f36f1ee619134fcc8e094d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_3462e3723e2f17ee20b117f493bab2bbd19a66f1b757a5e33ecaae510ed3001e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3462e3723e2f17ee20b117f493bab2bbd19a66f1b757a5e33ecaae510ed3001e->enter($__internal_3462e3723e2f17ee20b117f493bab2bbd19a66f1b757a5e33ecaae510ed3001e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_749d7ea1c03427747768421bf215f39d87632aa89f36f1ee619134fcc8e094d8->leave($__internal_749d7ea1c03427747768421bf215f39d87632aa89f36f1ee619134fcc8e094d8_prof);

        
        $__internal_3462e3723e2f17ee20b117f493bab2bbd19a66f1b757a5e33ecaae510ed3001e->leave($__internal_3462e3723e2f17ee20b117f493bab2bbd19a66f1b757a5e33ecaae510ed3001e_prof);

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
