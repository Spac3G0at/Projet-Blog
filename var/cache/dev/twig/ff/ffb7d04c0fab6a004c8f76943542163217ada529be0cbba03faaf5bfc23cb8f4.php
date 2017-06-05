<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_64b1ede4ed281512dce7d4b1ef51d95350fcf7f099bce54f6f4eeeeabcf954ca extends Twig_Template
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
        $__internal_18ad3f52baa5013de3d3686eba71956157e295d7ba5a9b73df015f81e36cf887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ad3f52baa5013de3d3686eba71956157e295d7ba5a9b73df015f81e36cf887->enter($__internal_18ad3f52baa5013de3d3686eba71956157e295d7ba5a9b73df015f81e36cf887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_6acaa6bb03ada97a816dfb953b6f80173ba9c16c5eb3e3de6e19fbaaa2844204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acaa6bb03ada97a816dfb953b6f80173ba9c16c5eb3e3de6e19fbaaa2844204->enter($__internal_6acaa6bb03ada97a816dfb953b6f80173ba9c16c5eb3e3de6e19fbaaa2844204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_18ad3f52baa5013de3d3686eba71956157e295d7ba5a9b73df015f81e36cf887->leave($__internal_18ad3f52baa5013de3d3686eba71956157e295d7ba5a9b73df015f81e36cf887_prof);

        
        $__internal_6acaa6bb03ada97a816dfb953b6f80173ba9c16c5eb3e3de6e19fbaaa2844204->leave($__internal_6acaa6bb03ada97a816dfb953b6f80173ba9c16c5eb3e3de6e19fbaaa2844204_prof);

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
