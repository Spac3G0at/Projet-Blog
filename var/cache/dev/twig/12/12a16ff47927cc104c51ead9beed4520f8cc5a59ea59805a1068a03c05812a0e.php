<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0a5a4cd85abb269f3d351ba4386d4f6a657516fc31af3f052ad5294f86316033 extends Twig_Template
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
        $__internal_ec1a058072b95b1754b0823ba85852133bad60cb5e3cf8f8bffaae53b8092c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1a058072b95b1754b0823ba85852133bad60cb5e3cf8f8bffaae53b8092c38->enter($__internal_ec1a058072b95b1754b0823ba85852133bad60cb5e3cf8f8bffaae53b8092c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_630e5c72275b3affc8bfc8f962f698fab84b4c48c308bec453387cd57a339b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_630e5c72275b3affc8bfc8f962f698fab84b4c48c308bec453387cd57a339b1f->enter($__internal_630e5c72275b3affc8bfc8f962f698fab84b4c48c308bec453387cd57a339b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ec1a058072b95b1754b0823ba85852133bad60cb5e3cf8f8bffaae53b8092c38->leave($__internal_ec1a058072b95b1754b0823ba85852133bad60cb5e3cf8f8bffaae53b8092c38_prof);

        
        $__internal_630e5c72275b3affc8bfc8f962f698fab84b4c48c308bec453387cd57a339b1f->leave($__internal_630e5c72275b3affc8bfc8f962f698fab84b4c48c308bec453387cd57a339b1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
