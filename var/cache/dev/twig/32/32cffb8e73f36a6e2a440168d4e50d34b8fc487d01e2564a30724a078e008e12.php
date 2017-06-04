<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3f7e18646c8ffd5c72b754f66eaa72a7423c60714c386b96b9c2eac1adb48c79 extends Twig_Template
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
        $__internal_5541140a199154bbe3a4632cf5fd84bb529f8b395d52d0fefd56d60dc23898e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5541140a199154bbe3a4632cf5fd84bb529f8b395d52d0fefd56d60dc23898e2->enter($__internal_5541140a199154bbe3a4632cf5fd84bb529f8b395d52d0fefd56d60dc23898e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_465834a6cf2aecece2d24c593b94e199b3d22463906d3b91b1e4d07c0002f73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465834a6cf2aecece2d24c593b94e199b3d22463906d3b91b1e4d07c0002f73a->enter($__internal_465834a6cf2aecece2d24c593b94e199b3d22463906d3b91b1e4d07c0002f73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_5541140a199154bbe3a4632cf5fd84bb529f8b395d52d0fefd56d60dc23898e2->leave($__internal_5541140a199154bbe3a4632cf5fd84bb529f8b395d52d0fefd56d60dc23898e2_prof);

        
        $__internal_465834a6cf2aecece2d24c593b94e199b3d22463906d3b91b1e4d07c0002f73a->leave($__internal_465834a6cf2aecece2d24c593b94e199b3d22463906d3b91b1e4d07c0002f73a_prof);

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
