<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6bd69cfa1bab5db1c8d335a76ca0fc517b8d5f4e7fc9d1fcf40273503750cc4a extends Twig_Template
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
        $__internal_740555c83962a246ae1c552a53441bb6bc58587704758ac3b91e978d1959f714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740555c83962a246ae1c552a53441bb6bc58587704758ac3b91e978d1959f714->enter($__internal_740555c83962a246ae1c552a53441bb6bc58587704758ac3b91e978d1959f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_485a31b155e0a37cf0eeba82130b0783e78fb70b1b8a8645c4085973fa4559a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485a31b155e0a37cf0eeba82130b0783e78fb70b1b8a8645c4085973fa4559a2->enter($__internal_485a31b155e0a37cf0eeba82130b0783e78fb70b1b8a8645c4085973fa4559a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_740555c83962a246ae1c552a53441bb6bc58587704758ac3b91e978d1959f714->leave($__internal_740555c83962a246ae1c552a53441bb6bc58587704758ac3b91e978d1959f714_prof);

        
        $__internal_485a31b155e0a37cf0eeba82130b0783e78fb70b1b8a8645c4085973fa4559a2->leave($__internal_485a31b155e0a37cf0eeba82130b0783e78fb70b1b8a8645c4085973fa4559a2_prof);

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
