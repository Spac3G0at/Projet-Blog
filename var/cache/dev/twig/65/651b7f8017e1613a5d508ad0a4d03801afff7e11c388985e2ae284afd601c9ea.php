<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c7723d4c03bf223860d88ed43247a64e4725cf81a98c3f31fbdd50ef6a151462 extends Twig_Template
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
        $__internal_a3e7ea1cac3d236483f914f9a33a65b2b2b39003c38581bf101f665ca5a9bee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e7ea1cac3d236483f914f9a33a65b2b2b39003c38581bf101f665ca5a9bee9->enter($__internal_a3e7ea1cac3d236483f914f9a33a65b2b2b39003c38581bf101f665ca5a9bee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_87dfe506d92df10aa7142d1af607e81740bb67a24e24e07f90b09691dc693d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dfe506d92df10aa7142d1af607e81740bb67a24e24e07f90b09691dc693d1c->enter($__internal_87dfe506d92df10aa7142d1af607e81740bb67a24e24e07f90b09691dc693d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a3e7ea1cac3d236483f914f9a33a65b2b2b39003c38581bf101f665ca5a9bee9->leave($__internal_a3e7ea1cac3d236483f914f9a33a65b2b2b39003c38581bf101f665ca5a9bee9_prof);

        
        $__internal_87dfe506d92df10aa7142d1af607e81740bb67a24e24e07f90b09691dc693d1c->leave($__internal_87dfe506d92df10aa7142d1af607e81740bb67a24e24e07f90b09691dc693d1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}