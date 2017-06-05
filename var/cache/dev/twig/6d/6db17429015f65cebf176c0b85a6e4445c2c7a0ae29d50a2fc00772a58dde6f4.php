<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f4bcc6c8ad77ce7b3ac9109f8db09bc0ee74ffbfd1397f02fb46db9dff384589 extends Twig_Template
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
        $__internal_1898d25b5da00a73ba86f022e79f22a883019d6d94265d46d74c7f9477656459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1898d25b5da00a73ba86f022e79f22a883019d6d94265d46d74c7f9477656459->enter($__internal_1898d25b5da00a73ba86f022e79f22a883019d6d94265d46d74c7f9477656459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8268f13d4faf85a31a5e2f965b58574ea9a08206253cc4dd4c9288dd0a79eb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8268f13d4faf85a31a5e2f965b58574ea9a08206253cc4dd4c9288dd0a79eb6d->enter($__internal_8268f13d4faf85a31a5e2f965b58574ea9a08206253cc4dd4c9288dd0a79eb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1898d25b5da00a73ba86f022e79f22a883019d6d94265d46d74c7f9477656459->leave($__internal_1898d25b5da00a73ba86f022e79f22a883019d6d94265d46d74c7f9477656459_prof);

        
        $__internal_8268f13d4faf85a31a5e2f965b58574ea9a08206253cc4dd4c9288dd0a79eb6d->leave($__internal_8268f13d4faf85a31a5e2f965b58574ea9a08206253cc4dd4c9288dd0a79eb6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
