<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_553946c43c59a04323385a671604a35dc39e294f3cb0d4c32b6443f2dc5d3b86 extends Twig_Template
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
        $__internal_0b88bec8aa7206b634957883b1093f5bc6ba7c9f7714769b4ac3f9c8dc0b18fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b88bec8aa7206b634957883b1093f5bc6ba7c9f7714769b4ac3f9c8dc0b18fb->enter($__internal_0b88bec8aa7206b634957883b1093f5bc6ba7c9f7714769b4ac3f9c8dc0b18fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_79fac95f577b041157b74529da1ee876df981582070c17f44250ab2cdee6b30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79fac95f577b041157b74529da1ee876df981582070c17f44250ab2cdee6b30b->enter($__internal_79fac95f577b041157b74529da1ee876df981582070c17f44250ab2cdee6b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0b88bec8aa7206b634957883b1093f5bc6ba7c9f7714769b4ac3f9c8dc0b18fb->leave($__internal_0b88bec8aa7206b634957883b1093f5bc6ba7c9f7714769b4ac3f9c8dc0b18fb_prof);

        
        $__internal_79fac95f577b041157b74529da1ee876df981582070c17f44250ab2cdee6b30b->leave($__internal_79fac95f577b041157b74529da1ee876df981582070c17f44250ab2cdee6b30b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
