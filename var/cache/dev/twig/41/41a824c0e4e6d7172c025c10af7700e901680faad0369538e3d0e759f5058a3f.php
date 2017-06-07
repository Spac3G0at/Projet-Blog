<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5cbe500d19890b1168d1e51b22e172b4beed4deefd744439e99b88e8a42d8b6a extends Twig_Template
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
        $__internal_23ea2661a79ba9722f7a67fd436ad216ef405e5a21777db915b62c34fa77dc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ea2661a79ba9722f7a67fd436ad216ef405e5a21777db915b62c34fa77dc5b->enter($__internal_23ea2661a79ba9722f7a67fd436ad216ef405e5a21777db915b62c34fa77dc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_87e2b18c95cc7d04c175b7aa14f3887e90aaca538d1d60a6408f3d45092c4b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87e2b18c95cc7d04c175b7aa14f3887e90aaca538d1d60a6408f3d45092c4b67->enter($__internal_87e2b18c95cc7d04c175b7aa14f3887e90aaca538d1d60a6408f3d45092c4b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_23ea2661a79ba9722f7a67fd436ad216ef405e5a21777db915b62c34fa77dc5b->leave($__internal_23ea2661a79ba9722f7a67fd436ad216ef405e5a21777db915b62c34fa77dc5b_prof);

        
        $__internal_87e2b18c95cc7d04c175b7aa14f3887e90aaca538d1d60a6408f3d45092c4b67->leave($__internal_87e2b18c95cc7d04c175b7aa14f3887e90aaca538d1d60a6408f3d45092c4b67_prof);

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
