<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_81e965234e0cd83139de354874b120af147129a625d24249c4a324bdf0d3cbaf extends Twig_Template
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
        $__internal_333a38f52bb392fd8790279f2459b2115e32788c9a0c06dc10b205e98ef86092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_333a38f52bb392fd8790279f2459b2115e32788c9a0c06dc10b205e98ef86092->enter($__internal_333a38f52bb392fd8790279f2459b2115e32788c9a0c06dc10b205e98ef86092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c029f2e7f920d4bb8b45d1cd8db14c7b4bc1be0112d2718be0a7dc9dbe4cc2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c029f2e7f920d4bb8b45d1cd8db14c7b4bc1be0112d2718be0a7dc9dbe4cc2f6->enter($__internal_c029f2e7f920d4bb8b45d1cd8db14c7b4bc1be0112d2718be0a7dc9dbe4cc2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_333a38f52bb392fd8790279f2459b2115e32788c9a0c06dc10b205e98ef86092->leave($__internal_333a38f52bb392fd8790279f2459b2115e32788c9a0c06dc10b205e98ef86092_prof);

        
        $__internal_c029f2e7f920d4bb8b45d1cd8db14c7b4bc1be0112d2718be0a7dc9dbe4cc2f6->leave($__internal_c029f2e7f920d4bb8b45d1cd8db14c7b4bc1be0112d2718be0a7dc9dbe4cc2f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
