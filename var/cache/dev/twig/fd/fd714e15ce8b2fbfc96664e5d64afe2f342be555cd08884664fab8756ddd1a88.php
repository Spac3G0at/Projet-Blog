<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_69b52667743f410ed39d980fbeebf8872723832e20f9bff454f81f6d044972f7 extends Twig_Template
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
        $__internal_447cd92abbd4616d10e591d0eb9320084d8e66f58a54198493ad74b1b53d5986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_447cd92abbd4616d10e591d0eb9320084d8e66f58a54198493ad74b1b53d5986->enter($__internal_447cd92abbd4616d10e591d0eb9320084d8e66f58a54198493ad74b1b53d5986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_35b8737ab2769e7c39dae2554c249d4fc4f5ad80563c637f0b692acc1a176186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b8737ab2769e7c39dae2554c249d4fc4f5ad80563c637f0b692acc1a176186->enter($__internal_35b8737ab2769e7c39dae2554c249d4fc4f5ad80563c637f0b692acc1a176186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_447cd92abbd4616d10e591d0eb9320084d8e66f58a54198493ad74b1b53d5986->leave($__internal_447cd92abbd4616d10e591d0eb9320084d8e66f58a54198493ad74b1b53d5986_prof);

        
        $__internal_35b8737ab2769e7c39dae2554c249d4fc4f5ad80563c637f0b692acc1a176186->leave($__internal_35b8737ab2769e7c39dae2554c249d4fc4f5ad80563c637f0b692acc1a176186_prof);

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
