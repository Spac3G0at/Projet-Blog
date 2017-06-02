<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_8ae5ab357b89ca5418706d3fce73ebb00913e32f48640b96310f224944e28734 extends Twig_Template
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
        $__internal_5c9fccb82b4bc635f2029b3338943e8676980d167ba8ab4cb5526dfaae5558a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9fccb82b4bc635f2029b3338943e8676980d167ba8ab4cb5526dfaae5558a9->enter($__internal_5c9fccb82b4bc635f2029b3338943e8676980d167ba8ab4cb5526dfaae5558a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e9bea52fd43c972ba5362d6afcfc8b7fc8ee86d0e5f987972fe337c43f37e252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bea52fd43c972ba5362d6afcfc8b7fc8ee86d0e5f987972fe337c43f37e252->enter($__internal_e9bea52fd43c972ba5362d6afcfc8b7fc8ee86d0e5f987972fe337c43f37e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5c9fccb82b4bc635f2029b3338943e8676980d167ba8ab4cb5526dfaae5558a9->leave($__internal_5c9fccb82b4bc635f2029b3338943e8676980d167ba8ab4cb5526dfaae5558a9_prof);

        
        $__internal_e9bea52fd43c972ba5362d6afcfc8b7fc8ee86d0e5f987972fe337c43f37e252->leave($__internal_e9bea52fd43c972ba5362d6afcfc8b7fc8ee86d0e5f987972fe337c43f37e252_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
