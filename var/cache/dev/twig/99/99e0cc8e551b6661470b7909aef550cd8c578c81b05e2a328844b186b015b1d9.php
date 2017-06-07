<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9404db38d9d0d0b105f0ff80d0cb34fbb1734268df89b3eaa41b836543c0b8c6 extends Twig_Template
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
        $__internal_e4daf51d3a0f7e97cbf15230d3f89c83f51cf2b2fc8e32ba5b0afcf43d4a318d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4daf51d3a0f7e97cbf15230d3f89c83f51cf2b2fc8e32ba5b0afcf43d4a318d->enter($__internal_e4daf51d3a0f7e97cbf15230d3f89c83f51cf2b2fc8e32ba5b0afcf43d4a318d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_985ca9b54cfed3a922c3101a99ed68126275f10d7f21f06eea78d8561890ab38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985ca9b54cfed3a922c3101a99ed68126275f10d7f21f06eea78d8561890ab38->enter($__internal_985ca9b54cfed3a922c3101a99ed68126275f10d7f21f06eea78d8561890ab38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e4daf51d3a0f7e97cbf15230d3f89c83f51cf2b2fc8e32ba5b0afcf43d4a318d->leave($__internal_e4daf51d3a0f7e97cbf15230d3f89c83f51cf2b2fc8e32ba5b0afcf43d4a318d_prof);

        
        $__internal_985ca9b54cfed3a922c3101a99ed68126275f10d7f21f06eea78d8561890ab38->leave($__internal_985ca9b54cfed3a922c3101a99ed68126275f10d7f21f06eea78d8561890ab38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
