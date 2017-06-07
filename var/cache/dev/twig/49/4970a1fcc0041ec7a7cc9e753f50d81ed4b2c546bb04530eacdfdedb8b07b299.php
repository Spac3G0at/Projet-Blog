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
        $__internal_8f71842e50289cd853d1a79a7d278803e06314ec5ef760aeb462fca538b3ec60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f71842e50289cd853d1a79a7d278803e06314ec5ef760aeb462fca538b3ec60->enter($__internal_8f71842e50289cd853d1a79a7d278803e06314ec5ef760aeb462fca538b3ec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_14801567cc587982ad3bbf93a2951c042387061345f2263e729891ba83efd5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14801567cc587982ad3bbf93a2951c042387061345f2263e729891ba83efd5ff->enter($__internal_14801567cc587982ad3bbf93a2951c042387061345f2263e729891ba83efd5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8f71842e50289cd853d1a79a7d278803e06314ec5ef760aeb462fca538b3ec60->leave($__internal_8f71842e50289cd853d1a79a7d278803e06314ec5ef760aeb462fca538b3ec60_prof);

        
        $__internal_14801567cc587982ad3bbf93a2951c042387061345f2263e729891ba83efd5ff->leave($__internal_14801567cc587982ad3bbf93a2951c042387061345f2263e729891ba83efd5ff_prof);

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
