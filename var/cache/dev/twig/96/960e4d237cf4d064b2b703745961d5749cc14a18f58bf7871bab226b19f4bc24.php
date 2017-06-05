<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0ae28cf7911f0ed20a0011eeb87b0415361bd11e29500c4e72d1da95d03e51d8 extends Twig_Template
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
        $__internal_d94bded737127fa123200a404dcb2a0c05633ac49241346cb108890057459575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d94bded737127fa123200a404dcb2a0c05633ac49241346cb108890057459575->enter($__internal_d94bded737127fa123200a404dcb2a0c05633ac49241346cb108890057459575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3ca6671909c53823296a7e3dabe0580278c7583d1f16e04212a70f1834ed7f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca6671909c53823296a7e3dabe0580278c7583d1f16e04212a70f1834ed7f5e->enter($__internal_3ca6671909c53823296a7e3dabe0580278c7583d1f16e04212a70f1834ed7f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d94bded737127fa123200a404dcb2a0c05633ac49241346cb108890057459575->leave($__internal_d94bded737127fa123200a404dcb2a0c05633ac49241346cb108890057459575_prof);

        
        $__internal_3ca6671909c53823296a7e3dabe0580278c7583d1f16e04212a70f1834ed7f5e->leave($__internal_3ca6671909c53823296a7e3dabe0580278c7583d1f16e04212a70f1834ed7f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
