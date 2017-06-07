<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ba2ea60f139e17e326461f688d757519c92d0c275c475bc07a50dfa7d55f337a extends Twig_Template
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
        $__internal_4960bdd574d9d0ac95ab449633b91eada5f0651027f080a54a654b7c9d5682d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4960bdd574d9d0ac95ab449633b91eada5f0651027f080a54a654b7c9d5682d5->enter($__internal_4960bdd574d9d0ac95ab449633b91eada5f0651027f080a54a654b7c9d5682d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c7982a676dbcbcbb148863aa8a49b81fa9ef4058abe32df51734d81f40616a0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7982a676dbcbcbb148863aa8a49b81fa9ef4058abe32df51734d81f40616a0c->enter($__internal_c7982a676dbcbcbb148863aa8a49b81fa9ef4058abe32df51734d81f40616a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4960bdd574d9d0ac95ab449633b91eada5f0651027f080a54a654b7c9d5682d5->leave($__internal_4960bdd574d9d0ac95ab449633b91eada5f0651027f080a54a654b7c9d5682d5_prof);

        
        $__internal_c7982a676dbcbcbb148863aa8a49b81fa9ef4058abe32df51734d81f40616a0c->leave($__internal_c7982a676dbcbcbb148863aa8a49b81fa9ef4058abe32df51734d81f40616a0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
