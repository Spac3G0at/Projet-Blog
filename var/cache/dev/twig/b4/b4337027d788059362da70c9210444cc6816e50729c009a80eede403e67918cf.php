<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_cc5d5f525393b828248e2660af3ca3e1d7217bea479a1f5a03f4bc713485819a extends Twig_Template
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
        $__internal_da7d2c6c8bbf533a46f11b6f0b2d013e1c6889e0240d7295f934f37928474d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7d2c6c8bbf533a46f11b6f0b2d013e1c6889e0240d7295f934f37928474d46->enter($__internal_da7d2c6c8bbf533a46f11b6f0b2d013e1c6889e0240d7295f934f37928474d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1090e8b273df56e0c96f3be56da50ae6c9eb08fd559ccd7469dae35341a25d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1090e8b273df56e0c96f3be56da50ae6c9eb08fd559ccd7469dae35341a25d25->enter($__internal_1090e8b273df56e0c96f3be56da50ae6c9eb08fd559ccd7469dae35341a25d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_da7d2c6c8bbf533a46f11b6f0b2d013e1c6889e0240d7295f934f37928474d46->leave($__internal_da7d2c6c8bbf533a46f11b6f0b2d013e1c6889e0240d7295f934f37928474d46_prof);

        
        $__internal_1090e8b273df56e0c96f3be56da50ae6c9eb08fd559ccd7469dae35341a25d25->leave($__internal_1090e8b273df56e0c96f3be56da50ae6c9eb08fd559ccd7469dae35341a25d25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
