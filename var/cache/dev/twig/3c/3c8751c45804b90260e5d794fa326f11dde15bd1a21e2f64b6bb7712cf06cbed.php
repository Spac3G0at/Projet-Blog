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
        $__internal_a649b18e027db4e3b784c035041f52f5a94b4011950bc59e371eccbca21c177a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a649b18e027db4e3b784c035041f52f5a94b4011950bc59e371eccbca21c177a->enter($__internal_a649b18e027db4e3b784c035041f52f5a94b4011950bc59e371eccbca21c177a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b0e962982823ed7898b740efd27f0c4682052e98fab86a9039576616ada17ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e962982823ed7898b740efd27f0c4682052e98fab86a9039576616ada17ceb->enter($__internal_b0e962982823ed7898b740efd27f0c4682052e98fab86a9039576616ada17ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a649b18e027db4e3b784c035041f52f5a94b4011950bc59e371eccbca21c177a->leave($__internal_a649b18e027db4e3b784c035041f52f5a94b4011950bc59e371eccbca21c177a_prof);

        
        $__internal_b0e962982823ed7898b740efd27f0c4682052e98fab86a9039576616ada17ceb->leave($__internal_b0e962982823ed7898b740efd27f0c4682052e98fab86a9039576616ada17ceb_prof);

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
