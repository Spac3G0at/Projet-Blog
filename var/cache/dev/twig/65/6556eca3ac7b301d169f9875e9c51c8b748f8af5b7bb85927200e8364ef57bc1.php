<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a810a398ea414731fd9aedd87996576afec89bea3c196c0ac3f4caf55197c36b extends Twig_Template
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
        $__internal_a453c5cb591ab8cc071a565128a406399a731ff29dd74a4c3aae16e9c87a98be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a453c5cb591ab8cc071a565128a406399a731ff29dd74a4c3aae16e9c87a98be->enter($__internal_a453c5cb591ab8cc071a565128a406399a731ff29dd74a4c3aae16e9c87a98be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_71ccd4108f42d4929890c85b2d9215c5193fbc1e74452399ea8193256740922e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ccd4108f42d4929890c85b2d9215c5193fbc1e74452399ea8193256740922e->enter($__internal_71ccd4108f42d4929890c85b2d9215c5193fbc1e74452399ea8193256740922e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a453c5cb591ab8cc071a565128a406399a731ff29dd74a4c3aae16e9c87a98be->leave($__internal_a453c5cb591ab8cc071a565128a406399a731ff29dd74a4c3aae16e9c87a98be_prof);

        
        $__internal_71ccd4108f42d4929890c85b2d9215c5193fbc1e74452399ea8193256740922e->leave($__internal_71ccd4108f42d4929890c85b2d9215c5193fbc1e74452399ea8193256740922e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
