<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_369f79e352de4d964d60f60da3109a787b97950572e40e50365b49ccea05bfdb extends Twig_Template
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
        $__internal_eba4c68c0268b205327b7522698e06dace311cdf93d57bf53a671247a74dbdb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba4c68c0268b205327b7522698e06dace311cdf93d57bf53a671247a74dbdb5->enter($__internal_eba4c68c0268b205327b7522698e06dace311cdf93d57bf53a671247a74dbdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_01c9c53fecff318e61387bc30574794a31dbda9a332468134fb3a719437c8857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c9c53fecff318e61387bc30574794a31dbda9a332468134fb3a719437c8857->enter($__internal_01c9c53fecff318e61387bc30574794a31dbda9a332468134fb3a719437c8857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_eba4c68c0268b205327b7522698e06dace311cdf93d57bf53a671247a74dbdb5->leave($__internal_eba4c68c0268b205327b7522698e06dace311cdf93d57bf53a671247a74dbdb5_prof);

        
        $__internal_01c9c53fecff318e61387bc30574794a31dbda9a332468134fb3a719437c8857->leave($__internal_01c9c53fecff318e61387bc30574794a31dbda9a332468134fb3a719437c8857_prof);

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
