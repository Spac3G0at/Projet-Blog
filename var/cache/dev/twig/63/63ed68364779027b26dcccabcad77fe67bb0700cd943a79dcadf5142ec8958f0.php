<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_75bb201ed62917256744625acdae42dce0448d0d4b345a0623ea2b99c8fa97d8 extends Twig_Template
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
        $__internal_1f8ab654b08bdd6d5e934a366b997764d88ed47605ad9fd1d195038931963c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8ab654b08bdd6d5e934a366b997764d88ed47605ad9fd1d195038931963c7e->enter($__internal_1f8ab654b08bdd6d5e934a366b997764d88ed47605ad9fd1d195038931963c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7c258066780e61203a89194c5336f51e4a65851320f94d716cbdda445e1bcf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c258066780e61203a89194c5336f51e4a65851320f94d716cbdda445e1bcf2c->enter($__internal_7c258066780e61203a89194c5336f51e4a65851320f94d716cbdda445e1bcf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1f8ab654b08bdd6d5e934a366b997764d88ed47605ad9fd1d195038931963c7e->leave($__internal_1f8ab654b08bdd6d5e934a366b997764d88ed47605ad9fd1d195038931963c7e_prof);

        
        $__internal_7c258066780e61203a89194c5336f51e4a65851320f94d716cbdda445e1bcf2c->leave($__internal_7c258066780e61203a89194c5336f51e4a65851320f94d716cbdda445e1bcf2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
