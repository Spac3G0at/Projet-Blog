<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_79330166f93f1456678af78254ca5ac68f4f4b60ec2b1be153dff513ded5666a extends Twig_Template
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
        $__internal_d1758205372be79fef7d0cfb4e82356a87783e927880582a2ce583a8521900dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1758205372be79fef7d0cfb4e82356a87783e927880582a2ce583a8521900dd->enter($__internal_d1758205372be79fef7d0cfb4e82356a87783e927880582a2ce583a8521900dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b1bd2807b9b0509ebabd614ab8d5d001d5110177cda75900ca8c3b7335c40443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bd2807b9b0509ebabd614ab8d5d001d5110177cda75900ca8c3b7335c40443->enter($__internal_b1bd2807b9b0509ebabd614ab8d5d001d5110177cda75900ca8c3b7335c40443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d1758205372be79fef7d0cfb4e82356a87783e927880582a2ce583a8521900dd->leave($__internal_d1758205372be79fef7d0cfb4e82356a87783e927880582a2ce583a8521900dd_prof);

        
        $__internal_b1bd2807b9b0509ebabd614ab8d5d001d5110177cda75900ca8c3b7335c40443->leave($__internal_b1bd2807b9b0509ebabd614ab8d5d001d5110177cda75900ca8c3b7335c40443_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
