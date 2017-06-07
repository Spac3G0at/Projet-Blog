<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3ce9b6a4691cae51ab4bc63ae49afb66e09ef1a0a9808725c9ba981b9a606be2 extends Twig_Template
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
        $__internal_0b2417147117a830a0d80364b372f6b8b624828ff849cf6150c18a8f8c38b7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2417147117a830a0d80364b372f6b8b624828ff849cf6150c18a8f8c38b7c0->enter($__internal_0b2417147117a830a0d80364b372f6b8b624828ff849cf6150c18a8f8c38b7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_846d0d6bf811468d6f097e66f07296f169a148263b8ba0cb972bbadcce575fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846d0d6bf811468d6f097e66f07296f169a148263b8ba0cb972bbadcce575fb1->enter($__internal_846d0d6bf811468d6f097e66f07296f169a148263b8ba0cb972bbadcce575fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0b2417147117a830a0d80364b372f6b8b624828ff849cf6150c18a8f8c38b7c0->leave($__internal_0b2417147117a830a0d80364b372f6b8b624828ff849cf6150c18a8f8c38b7c0_prof);

        
        $__internal_846d0d6bf811468d6f097e66f07296f169a148263b8ba0cb972bbadcce575fb1->leave($__internal_846d0d6bf811468d6f097e66f07296f169a148263b8ba0cb972bbadcce575fb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
