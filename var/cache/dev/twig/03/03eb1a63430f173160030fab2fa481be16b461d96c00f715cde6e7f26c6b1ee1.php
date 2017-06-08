<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_33cb6c6787cb86a2147150fb8aaf40532c2552e71879fbef35afff6e14e65e16 extends Twig_Template
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
        $__internal_daadd92400a3a2f55b8a9d1beb56780d93dd958f8022436baf12f010ed3b4c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daadd92400a3a2f55b8a9d1beb56780d93dd958f8022436baf12f010ed3b4c3e->enter($__internal_daadd92400a3a2f55b8a9d1beb56780d93dd958f8022436baf12f010ed3b4c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ea2b8faf1ef0180b23f84781679d9c824c6c493ab1ce3e8249ac2afc80245cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2b8faf1ef0180b23f84781679d9c824c6c493ab1ce3e8249ac2afc80245cb7->enter($__internal_ea2b8faf1ef0180b23f84781679d9c824c6c493ab1ce3e8249ac2afc80245cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_daadd92400a3a2f55b8a9d1beb56780d93dd958f8022436baf12f010ed3b4c3e->leave($__internal_daadd92400a3a2f55b8a9d1beb56780d93dd958f8022436baf12f010ed3b4c3e_prof);

        
        $__internal_ea2b8faf1ef0180b23f84781679d9c824c6c493ab1ce3e8249ac2afc80245cb7->leave($__internal_ea2b8faf1ef0180b23f84781679d9c824c6c493ab1ce3e8249ac2afc80245cb7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
