<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_0bf80af9d2f90d7bccf9eb4f4e20b075078b8d898d96306aa677907d67ad4901 extends Twig_Template
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
        $__internal_cf9a84134123e2d86e74825b5f2e34bf9041c9a06ebad9060d268e63ec0a9ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9a84134123e2d86e74825b5f2e34bf9041c9a06ebad9060d268e63ec0a9ef4->enter($__internal_cf9a84134123e2d86e74825b5f2e34bf9041c9a06ebad9060d268e63ec0a9ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8a47a5f2193fde07a531e57c7c12d863003013228ccd8eff4fec05ed54618141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a47a5f2193fde07a531e57c7c12d863003013228ccd8eff4fec05ed54618141->enter($__internal_8a47a5f2193fde07a531e57c7c12d863003013228ccd8eff4fec05ed54618141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_cf9a84134123e2d86e74825b5f2e34bf9041c9a06ebad9060d268e63ec0a9ef4->leave($__internal_cf9a84134123e2d86e74825b5f2e34bf9041c9a06ebad9060d268e63ec0a9ef4_prof);

        
        $__internal_8a47a5f2193fde07a531e57c7c12d863003013228ccd8eff4fec05ed54618141->leave($__internal_8a47a5f2193fde07a531e57c7c12d863003013228ccd8eff4fec05ed54618141_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
