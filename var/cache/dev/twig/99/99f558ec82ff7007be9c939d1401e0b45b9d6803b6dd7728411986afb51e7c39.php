<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8263b417766f6213d0fee288787135892016951902af1392fa9353c5bbdffab6 extends Twig_Template
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
        $__internal_1e00da036a8a8236a02827c53563abcedc50e8122b53569d04543d3f033ccdbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e00da036a8a8236a02827c53563abcedc50e8122b53569d04543d3f033ccdbd->enter($__internal_1e00da036a8a8236a02827c53563abcedc50e8122b53569d04543d3f033ccdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_5722c4a51f4a4bbdfe742cafebb2361ea9d43d83592f1dfe9c907dd46b9079bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5722c4a51f4a4bbdfe742cafebb2361ea9d43d83592f1dfe9c907dd46b9079bc->enter($__internal_5722c4a51f4a4bbdfe742cafebb2361ea9d43d83592f1dfe9c907dd46b9079bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1e00da036a8a8236a02827c53563abcedc50e8122b53569d04543d3f033ccdbd->leave($__internal_1e00da036a8a8236a02827c53563abcedc50e8122b53569d04543d3f033ccdbd_prof);

        
        $__internal_5722c4a51f4a4bbdfe742cafebb2361ea9d43d83592f1dfe9c907dd46b9079bc->leave($__internal_5722c4a51f4a4bbdfe742cafebb2361ea9d43d83592f1dfe9c907dd46b9079bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
