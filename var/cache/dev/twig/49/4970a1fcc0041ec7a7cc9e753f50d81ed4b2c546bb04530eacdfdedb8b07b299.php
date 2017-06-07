<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f648bab52d404952c2b45c9e9fcf1099b9c2eda6871ec50b6b50dbede7b3fbb5 extends Twig_Template
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
        $__internal_c1b8ef78fa63498e202b9b30c3e2f2363b7ba683cba9514e054b9fecb37777c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b8ef78fa63498e202b9b30c3e2f2363b7ba683cba9514e054b9fecb37777c8->enter($__internal_c1b8ef78fa63498e202b9b30c3e2f2363b7ba683cba9514e054b9fecb37777c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_07e6f8724435dd3fc0af41533b8acc0b34f2781e36b3e524ed38048bfb9aa238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e6f8724435dd3fc0af41533b8acc0b34f2781e36b3e524ed38048bfb9aa238->enter($__internal_07e6f8724435dd3fc0af41533b8acc0b34f2781e36b3e524ed38048bfb9aa238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c1b8ef78fa63498e202b9b30c3e2f2363b7ba683cba9514e054b9fecb37777c8->leave($__internal_c1b8ef78fa63498e202b9b30c3e2f2363b7ba683cba9514e054b9fecb37777c8_prof);

        
        $__internal_07e6f8724435dd3fc0af41533b8acc0b34f2781e36b3e524ed38048bfb9aa238->leave($__internal_07e6f8724435dd3fc0af41533b8acc0b34f2781e36b3e524ed38048bfb9aa238_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
