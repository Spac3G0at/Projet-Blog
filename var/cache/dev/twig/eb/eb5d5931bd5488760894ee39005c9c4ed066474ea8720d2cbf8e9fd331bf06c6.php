<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_31dd8a8fd916bac1e307543261449b84b5eaf5d607fc9fd5175f6af632d14184 extends Twig_Template
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
        $__internal_4aa4d6c1b3f5383effc06eea5d0bfe46db52994c36bc0c74a093a0278a0d859c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa4d6c1b3f5383effc06eea5d0bfe46db52994c36bc0c74a093a0278a0d859c->enter($__internal_4aa4d6c1b3f5383effc06eea5d0bfe46db52994c36bc0c74a093a0278a0d859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b11314ecaffe54a11f84549d6b52e21b821312c36471ece0d2ad7167cf18a40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b11314ecaffe54a11f84549d6b52e21b821312c36471ece0d2ad7167cf18a40e->enter($__internal_b11314ecaffe54a11f84549d6b52e21b821312c36471ece0d2ad7167cf18a40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4aa4d6c1b3f5383effc06eea5d0bfe46db52994c36bc0c74a093a0278a0d859c->leave($__internal_4aa4d6c1b3f5383effc06eea5d0bfe46db52994c36bc0c74a093a0278a0d859c_prof);

        
        $__internal_b11314ecaffe54a11f84549d6b52e21b821312c36471ece0d2ad7167cf18a40e->leave($__internal_b11314ecaffe54a11f84549d6b52e21b821312c36471ece0d2ad7167cf18a40e_prof);

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
