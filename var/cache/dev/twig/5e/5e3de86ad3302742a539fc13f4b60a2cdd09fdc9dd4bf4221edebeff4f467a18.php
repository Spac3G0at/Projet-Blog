<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8645f17ea92da709316aa7db91cc7cdba14b60e2b036bd6905a6424cac255c96 extends Twig_Template
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
        $__internal_c13ace87f709d0c6f972a5c1c7ba62534c519c887f562339a129d24ef4a0f1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13ace87f709d0c6f972a5c1c7ba62534c519c887f562339a129d24ef4a0f1f6->enter($__internal_c13ace87f709d0c6f972a5c1c7ba62534c519c887f562339a129d24ef4a0f1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f47d883955eee919f5e56468f1fb33d78702c561f2aebd803206f7fe8e3dd4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47d883955eee919f5e56468f1fb33d78702c561f2aebd803206f7fe8e3dd4ee->enter($__internal_f47d883955eee919f5e56468f1fb33d78702c561f2aebd803206f7fe8e3dd4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c13ace87f709d0c6f972a5c1c7ba62534c519c887f562339a129d24ef4a0f1f6->leave($__internal_c13ace87f709d0c6f972a5c1c7ba62534c519c887f562339a129d24ef4a0f1f6_prof);

        
        $__internal_f47d883955eee919f5e56468f1fb33d78702c561f2aebd803206f7fe8e3dd4ee->leave($__internal_f47d883955eee919f5e56468f1fb33d78702c561f2aebd803206f7fe8e3dd4ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
