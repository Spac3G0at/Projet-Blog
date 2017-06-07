<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_81e965234e0cd83139de354874b120af147129a625d24249c4a324bdf0d3cbaf extends Twig_Template
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
        $__internal_9d9edc8aa99a9a72cf3780cc83a1c4888cb6a43ea526b9790c1366962d0c4e1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d9edc8aa99a9a72cf3780cc83a1c4888cb6a43ea526b9790c1366962d0c4e1b->enter($__internal_9d9edc8aa99a9a72cf3780cc83a1c4888cb6a43ea526b9790c1366962d0c4e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8fd50cab956f83fd79c6b30bc5177f0e87e818bafb29b29a0877fa7580438d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd50cab956f83fd79c6b30bc5177f0e87e818bafb29b29a0877fa7580438d6e->enter($__internal_8fd50cab956f83fd79c6b30bc5177f0e87e818bafb29b29a0877fa7580438d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9d9edc8aa99a9a72cf3780cc83a1c4888cb6a43ea526b9790c1366962d0c4e1b->leave($__internal_9d9edc8aa99a9a72cf3780cc83a1c4888cb6a43ea526b9790c1366962d0c4e1b_prof);

        
        $__internal_8fd50cab956f83fd79c6b30bc5177f0e87e818bafb29b29a0877fa7580438d6e->leave($__internal_8fd50cab956f83fd79c6b30bc5177f0e87e818bafb29b29a0877fa7580438d6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
