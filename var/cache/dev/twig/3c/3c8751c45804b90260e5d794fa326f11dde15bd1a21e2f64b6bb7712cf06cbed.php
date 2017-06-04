<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_412c48671823f2955e073c97d524b25337909d963573943b63e54a871f0003b6 extends Twig_Template
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
        $__internal_6246822072f290f45533fe697403e232349dc5f09ed361e15e2a4d379a05dae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6246822072f290f45533fe697403e232349dc5f09ed361e15e2a4d379a05dae7->enter($__internal_6246822072f290f45533fe697403e232349dc5f09ed361e15e2a4d379a05dae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a0cd35f6f34a65544590978fd665cea090e59ff64bea9e7db23c033a68125410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cd35f6f34a65544590978fd665cea090e59ff64bea9e7db23c033a68125410->enter($__internal_a0cd35f6f34a65544590978fd665cea090e59ff64bea9e7db23c033a68125410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6246822072f290f45533fe697403e232349dc5f09ed361e15e2a4d379a05dae7->leave($__internal_6246822072f290f45533fe697403e232349dc5f09ed361e15e2a4d379a05dae7_prof);

        
        $__internal_a0cd35f6f34a65544590978fd665cea090e59ff64bea9e7db23c033a68125410->leave($__internal_a0cd35f6f34a65544590978fd665cea090e59ff64bea9e7db23c033a68125410_prof);

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
