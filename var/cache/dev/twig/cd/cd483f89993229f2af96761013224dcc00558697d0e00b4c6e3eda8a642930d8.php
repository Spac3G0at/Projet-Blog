<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cff2133d054b99e9309229c9718be9e6b40a42063c25a05addeb5889db46e372 extends Twig_Template
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
        $__internal_3662f48e0793f16858cf70cc9585fe4ec17326d99bec8108433a49aa1fb1ec07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3662f48e0793f16858cf70cc9585fe4ec17326d99bec8108433a49aa1fb1ec07->enter($__internal_3662f48e0793f16858cf70cc9585fe4ec17326d99bec8108433a49aa1fb1ec07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0470907f6ae44d14650b8a5b6da0e4bf0882dbea9bfbb94a3328812c4351647e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0470907f6ae44d14650b8a5b6da0e4bf0882dbea9bfbb94a3328812c4351647e->enter($__internal_0470907f6ae44d14650b8a5b6da0e4bf0882dbea9bfbb94a3328812c4351647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3662f48e0793f16858cf70cc9585fe4ec17326d99bec8108433a49aa1fb1ec07->leave($__internal_3662f48e0793f16858cf70cc9585fe4ec17326d99bec8108433a49aa1fb1ec07_prof);

        
        $__internal_0470907f6ae44d14650b8a5b6da0e4bf0882dbea9bfbb94a3328812c4351647e->leave($__internal_0470907f6ae44d14650b8a5b6da0e4bf0882dbea9bfbb94a3328812c4351647e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
