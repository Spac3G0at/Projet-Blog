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
        $__internal_a858d917e188a7c48f458c26c85d377c681f437d902fca365aae6682d646bc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a858d917e188a7c48f458c26c85d377c681f437d902fca365aae6682d646bc6e->enter($__internal_a858d917e188a7c48f458c26c85d377c681f437d902fca365aae6682d646bc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_43311a3891658c42c9fdf701a6f09de36f78ba1af7f3c2af4e7afc434e55124a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43311a3891658c42c9fdf701a6f09de36f78ba1af7f3c2af4e7afc434e55124a->enter($__internal_43311a3891658c42c9fdf701a6f09de36f78ba1af7f3c2af4e7afc434e55124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a858d917e188a7c48f458c26c85d377c681f437d902fca365aae6682d646bc6e->leave($__internal_a858d917e188a7c48f458c26c85d377c681f437d902fca365aae6682d646bc6e_prof);

        
        $__internal_43311a3891658c42c9fdf701a6f09de36f78ba1af7f3c2af4e7afc434e55124a->leave($__internal_43311a3891658c42c9fdf701a6f09de36f78ba1af7f3c2af4e7afc434e55124a_prof);

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
