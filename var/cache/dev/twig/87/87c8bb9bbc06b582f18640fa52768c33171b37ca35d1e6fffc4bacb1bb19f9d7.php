<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0d2e6e63345edaa8bcca10bf8887bc2a789eef0d149d1d6e81a121c100cd30ec extends Twig_Template
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
        $__internal_cc7e50ddcc826060c028630f14118522a74e47763105183b775683b82e44dcef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7e50ddcc826060c028630f14118522a74e47763105183b775683b82e44dcef->enter($__internal_cc7e50ddcc826060c028630f14118522a74e47763105183b775683b82e44dcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d8988ffd6e4714548b8257195c8ac0524c4e4b0ab9da031fe4ebc8888de67b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8988ffd6e4714548b8257195c8ac0524c4e4b0ab9da031fe4ebc8888de67b30->enter($__internal_d8988ffd6e4714548b8257195c8ac0524c4e4b0ab9da031fe4ebc8888de67b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_cc7e50ddcc826060c028630f14118522a74e47763105183b775683b82e44dcef->leave($__internal_cc7e50ddcc826060c028630f14118522a74e47763105183b775683b82e44dcef_prof);

        
        $__internal_d8988ffd6e4714548b8257195c8ac0524c4e4b0ab9da031fe4ebc8888de67b30->leave($__internal_d8988ffd6e4714548b8257195c8ac0524c4e4b0ab9da031fe4ebc8888de67b30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
