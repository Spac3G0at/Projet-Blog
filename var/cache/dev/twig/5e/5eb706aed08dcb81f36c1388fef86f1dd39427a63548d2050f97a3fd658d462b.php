<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_7db14f83ef5a0fccb259df97232585b2fda65636e5e6c61b87cc06936bac8c2a extends Twig_Template
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
        $__internal_c28c68024c5198580bb320736338a04a59747fbbc303426b390bd871e9a8a163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28c68024c5198580bb320736338a04a59747fbbc303426b390bd871e9a8a163->enter($__internal_c28c68024c5198580bb320736338a04a59747fbbc303426b390bd871e9a8a163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4bbb5970f7315659b96066b795260cc21c6f00ff75b1ee33fa5de33bb9e1292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbb5970f7315659b96066b795260cc21c6f00ff75b1ee33fa5de33bb9e1292f->enter($__internal_4bbb5970f7315659b96066b795260cc21c6f00ff75b1ee33fa5de33bb9e1292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c28c68024c5198580bb320736338a04a59747fbbc303426b390bd871e9a8a163->leave($__internal_c28c68024c5198580bb320736338a04a59747fbbc303426b390bd871e9a8a163_prof);

        
        $__internal_4bbb5970f7315659b96066b795260cc21c6f00ff75b1ee33fa5de33bb9e1292f->leave($__internal_4bbb5970f7315659b96066b795260cc21c6f00ff75b1ee33fa5de33bb9e1292f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
