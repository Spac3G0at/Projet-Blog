<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_41d90099327a516971795598b01124cf656dbe5de56161a4d9c69c0e2833e313 extends Twig_Template
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
        $__internal_2ac2d5a60e69711c85b18879a41e7ca9704bc1120f0dea257cb977da36255222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac2d5a60e69711c85b18879a41e7ca9704bc1120f0dea257cb977da36255222->enter($__internal_2ac2d5a60e69711c85b18879a41e7ca9704bc1120f0dea257cb977da36255222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_40802dceb1d99cd570c12d1fd975e6d65581ea14c634077f18b4f8b0578e71dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40802dceb1d99cd570c12d1fd975e6d65581ea14c634077f18b4f8b0578e71dc->enter($__internal_40802dceb1d99cd570c12d1fd975e6d65581ea14c634077f18b4f8b0578e71dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2ac2d5a60e69711c85b18879a41e7ca9704bc1120f0dea257cb977da36255222->leave($__internal_2ac2d5a60e69711c85b18879a41e7ca9704bc1120f0dea257cb977da36255222_prof);

        
        $__internal_40802dceb1d99cd570c12d1fd975e6d65581ea14c634077f18b4f8b0578e71dc->leave($__internal_40802dceb1d99cd570c12d1fd975e6d65581ea14c634077f18b4f8b0578e71dc_prof);

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
