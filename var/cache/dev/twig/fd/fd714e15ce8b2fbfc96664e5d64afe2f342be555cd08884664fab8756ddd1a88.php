<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_69b52667743f410ed39d980fbeebf8872723832e20f9bff454f81f6d044972f7 extends Twig_Template
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
        $__internal_176a1c317e5269ed5747e5ded06289f14a87fbd3704db660ed10a64fd1e9266e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176a1c317e5269ed5747e5ded06289f14a87fbd3704db660ed10a64fd1e9266e->enter($__internal_176a1c317e5269ed5747e5ded06289f14a87fbd3704db660ed10a64fd1e9266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_759f90427d83a1ce9c367f862e4542daef263aab61607d1d94d649ac35061217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759f90427d83a1ce9c367f862e4542daef263aab61607d1d94d649ac35061217->enter($__internal_759f90427d83a1ce9c367f862e4542daef263aab61607d1d94d649ac35061217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_176a1c317e5269ed5747e5ded06289f14a87fbd3704db660ed10a64fd1e9266e->leave($__internal_176a1c317e5269ed5747e5ded06289f14a87fbd3704db660ed10a64fd1e9266e_prof);

        
        $__internal_759f90427d83a1ce9c367f862e4542daef263aab61607d1d94d649ac35061217->leave($__internal_759f90427d83a1ce9c367f862e4542daef263aab61607d1d94d649ac35061217_prof);

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
