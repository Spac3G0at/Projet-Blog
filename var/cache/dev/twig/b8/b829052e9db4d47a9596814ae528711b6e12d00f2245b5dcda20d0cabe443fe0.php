<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6982e5f535b60b42d10d5279c1b47053b90b758dda331aab1141008e27134c91 extends Twig_Template
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
        $__internal_f07570dc0a256230266f2634a4b382fe5cb9ac423fd4b95cee30d461319c4761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f07570dc0a256230266f2634a4b382fe5cb9ac423fd4b95cee30d461319c4761->enter($__internal_f07570dc0a256230266f2634a4b382fe5cb9ac423fd4b95cee30d461319c4761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_268b701646944bdd019ca6e9ac284767ed428586b96dad0e0bb947f2b223538e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268b701646944bdd019ca6e9ac284767ed428586b96dad0e0bb947f2b223538e->enter($__internal_268b701646944bdd019ca6e9ac284767ed428586b96dad0e0bb947f2b223538e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f07570dc0a256230266f2634a4b382fe5cb9ac423fd4b95cee30d461319c4761->leave($__internal_f07570dc0a256230266f2634a4b382fe5cb9ac423fd4b95cee30d461319c4761_prof);

        
        $__internal_268b701646944bdd019ca6e9ac284767ed428586b96dad0e0bb947f2b223538e->leave($__internal_268b701646944bdd019ca6e9ac284767ed428586b96dad0e0bb947f2b223538e_prof);

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
