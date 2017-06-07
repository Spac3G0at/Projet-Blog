<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_914f314f34053ad0a3ad96cba706baa061eb7b1a80a7ac6886ee30de48a75cb2 extends Twig_Template
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
        $__internal_0c3132bc6966fa3c60a7b2eab60c6c7becdf8ce8090c6d5519cf8b47602ed2f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3132bc6966fa3c60a7b2eab60c6c7becdf8ce8090c6d5519cf8b47602ed2f0->enter($__internal_0c3132bc6966fa3c60a7b2eab60c6c7becdf8ce8090c6d5519cf8b47602ed2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_078d0091f9be374db489e2002329744fdf7b88f0af1483a4fe566a1336431087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078d0091f9be374db489e2002329744fdf7b88f0af1483a4fe566a1336431087->enter($__internal_078d0091f9be374db489e2002329744fdf7b88f0af1483a4fe566a1336431087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0c3132bc6966fa3c60a7b2eab60c6c7becdf8ce8090c6d5519cf8b47602ed2f0->leave($__internal_0c3132bc6966fa3c60a7b2eab60c6c7becdf8ce8090c6d5519cf8b47602ed2f0_prof);

        
        $__internal_078d0091f9be374db489e2002329744fdf7b88f0af1483a4fe566a1336431087->leave($__internal_078d0091f9be374db489e2002329744fdf7b88f0af1483a4fe566a1336431087_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
