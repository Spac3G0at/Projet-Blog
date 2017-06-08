<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_accfeb27f3b120f5be62c4b67dab68389d1c89b57078fd74cd2f32f990f5d1fc extends Twig_Template
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
        $__internal_727f349256e40efbcc6eb36fc2347f6abb8a2d1c59512624ed72ded42389006b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727f349256e40efbcc6eb36fc2347f6abb8a2d1c59512624ed72ded42389006b->enter($__internal_727f349256e40efbcc6eb36fc2347f6abb8a2d1c59512624ed72ded42389006b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_be38e82e116768a7968c46bce9163eea420c2ca774c5b00f48aa6b48720621b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be38e82e116768a7968c46bce9163eea420c2ca774c5b00f48aa6b48720621b1->enter($__internal_be38e82e116768a7968c46bce9163eea420c2ca774c5b00f48aa6b48720621b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_727f349256e40efbcc6eb36fc2347f6abb8a2d1c59512624ed72ded42389006b->leave($__internal_727f349256e40efbcc6eb36fc2347f6abb8a2d1c59512624ed72ded42389006b_prof);

        
        $__internal_be38e82e116768a7968c46bce9163eea420c2ca774c5b00f48aa6b48720621b1->leave($__internal_be38e82e116768a7968c46bce9163eea420c2ca774c5b00f48aa6b48720621b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
