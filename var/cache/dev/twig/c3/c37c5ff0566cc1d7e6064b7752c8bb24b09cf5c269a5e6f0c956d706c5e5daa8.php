<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1482f816118c76768a5e18c9dc8b6dc6d73e28f01224ab86b35e1c443bfed215 extends Twig_Template
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
        $__internal_e500528e8397031f8373a0b9b1f1f13b2a7374460f050a8989b092d2515b0856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e500528e8397031f8373a0b9b1f1f13b2a7374460f050a8989b092d2515b0856->enter($__internal_e500528e8397031f8373a0b9b1f1f13b2a7374460f050a8989b092d2515b0856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b73682c32c9791f08380957738c1410c5d72fc8682240a6ba73e532cf38f398a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b73682c32c9791f08380957738c1410c5d72fc8682240a6ba73e532cf38f398a->enter($__internal_b73682c32c9791f08380957738c1410c5d72fc8682240a6ba73e532cf38f398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e500528e8397031f8373a0b9b1f1f13b2a7374460f050a8989b092d2515b0856->leave($__internal_e500528e8397031f8373a0b9b1f1f13b2a7374460f050a8989b092d2515b0856_prof);

        
        $__internal_b73682c32c9791f08380957738c1410c5d72fc8682240a6ba73e532cf38f398a->leave($__internal_b73682c32c9791f08380957738c1410c5d72fc8682240a6ba73e532cf38f398a_prof);

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
