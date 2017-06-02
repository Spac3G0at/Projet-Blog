<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_421337f1b2507b533533f4854b25dc84c8247a0109499115638de14d0487efd9 extends Twig_Template
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
        $__internal_63142e1637b44326c50e4264491b219e5484045d810ba229926746771ca70054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63142e1637b44326c50e4264491b219e5484045d810ba229926746771ca70054->enter($__internal_63142e1637b44326c50e4264491b219e5484045d810ba229926746771ca70054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e0c83d0744a5911b5853fc19d60fae0be22b228621cef0c8bc37dd31b4090da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c83d0744a5911b5853fc19d60fae0be22b228621cef0c8bc37dd31b4090da3->enter($__internal_e0c83d0744a5911b5853fc19d60fae0be22b228621cef0c8bc37dd31b4090da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_63142e1637b44326c50e4264491b219e5484045d810ba229926746771ca70054->leave($__internal_63142e1637b44326c50e4264491b219e5484045d810ba229926746771ca70054_prof);

        
        $__internal_e0c83d0744a5911b5853fc19d60fae0be22b228621cef0c8bc37dd31b4090da3->leave($__internal_e0c83d0744a5911b5853fc19d60fae0be22b228621cef0c8bc37dd31b4090da3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
