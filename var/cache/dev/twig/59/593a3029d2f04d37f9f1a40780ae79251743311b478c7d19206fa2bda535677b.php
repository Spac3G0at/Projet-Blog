<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bcbd077de8c671f0821c17a9d330b0f359b842ee55a078606d76fdcc205f34af extends Twig_Template
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
        $__internal_c036b259f7e4cb0d365d0cf03f95b2cc9e82b68b0981e442c24c564397020202 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c036b259f7e4cb0d365d0cf03f95b2cc9e82b68b0981e442c24c564397020202->enter($__internal_c036b259f7e4cb0d365d0cf03f95b2cc9e82b68b0981e442c24c564397020202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b35483cd045503fa83943d8a4415f9963cead36ae187bbb7fb9d0ef11f17635a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35483cd045503fa83943d8a4415f9963cead36ae187bbb7fb9d0ef11f17635a->enter($__internal_b35483cd045503fa83943d8a4415f9963cead36ae187bbb7fb9d0ef11f17635a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c036b259f7e4cb0d365d0cf03f95b2cc9e82b68b0981e442c24c564397020202->leave($__internal_c036b259f7e4cb0d365d0cf03f95b2cc9e82b68b0981e442c24c564397020202_prof);

        
        $__internal_b35483cd045503fa83943d8a4415f9963cead36ae187bbb7fb9d0ef11f17635a->leave($__internal_b35483cd045503fa83943d8a4415f9963cead36ae187bbb7fb9d0ef11f17635a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
