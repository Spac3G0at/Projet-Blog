<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c190603f6ea2e0bd1825b46f59f46b9dcfe46ddf5516cb9727d1c4f99eb15f8a extends Twig_Template
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
        $__internal_88b8c25ce9e2429876aebbe2516953efb32930089aaff07827a952a192760c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b8c25ce9e2429876aebbe2516953efb32930089aaff07827a952a192760c45->enter($__internal_88b8c25ce9e2429876aebbe2516953efb32930089aaff07827a952a192760c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2a9f9c0151952cfa9355e97198e8a743f740ea8a255c6e1ab194d4860f760c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9f9c0151952cfa9355e97198e8a743f740ea8a255c6e1ab194d4860f760c13->enter($__internal_2a9f9c0151952cfa9355e97198e8a743f740ea8a255c6e1ab194d4860f760c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_88b8c25ce9e2429876aebbe2516953efb32930089aaff07827a952a192760c45->leave($__internal_88b8c25ce9e2429876aebbe2516953efb32930089aaff07827a952a192760c45_prof);

        
        $__internal_2a9f9c0151952cfa9355e97198e8a743f740ea8a255c6e1ab194d4860f760c13->leave($__internal_2a9f9c0151952cfa9355e97198e8a743f740ea8a255c6e1ab194d4860f760c13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
