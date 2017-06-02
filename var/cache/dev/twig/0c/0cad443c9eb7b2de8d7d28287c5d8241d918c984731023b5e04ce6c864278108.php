<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_efdffd766710cb68103d299b63c5847536fecf18a2d27075900ad0372628fc40 extends Twig_Template
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
        $__internal_fb92dd9628ff0f2dd5511cee295474428eda990ddd0037729d768185b19ced40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb92dd9628ff0f2dd5511cee295474428eda990ddd0037729d768185b19ced40->enter($__internal_fb92dd9628ff0f2dd5511cee295474428eda990ddd0037729d768185b19ced40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5233aea21242dc2f6807e75e0ce319e4cb36e76acc1a8e2d1f21c55860ebc28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5233aea21242dc2f6807e75e0ce319e4cb36e76acc1a8e2d1f21c55860ebc28d->enter($__internal_5233aea21242dc2f6807e75e0ce319e4cb36e76acc1a8e2d1f21c55860ebc28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fb92dd9628ff0f2dd5511cee295474428eda990ddd0037729d768185b19ced40->leave($__internal_fb92dd9628ff0f2dd5511cee295474428eda990ddd0037729d768185b19ced40_prof);

        
        $__internal_5233aea21242dc2f6807e75e0ce319e4cb36e76acc1a8e2d1f21c55860ebc28d->leave($__internal_5233aea21242dc2f6807e75e0ce319e4cb36e76acc1a8e2d1f21c55860ebc28d_prof);

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
