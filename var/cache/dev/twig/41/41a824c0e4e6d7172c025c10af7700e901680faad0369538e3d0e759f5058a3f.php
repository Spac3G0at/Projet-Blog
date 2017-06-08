<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5cbe500d19890b1168d1e51b22e172b4beed4deefd744439e99b88e8a42d8b6a extends Twig_Template
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
        $__internal_42b1550fff130ba454dc9238b26c8fe2b94e57394f4dd275e9a932cab0cb80b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b1550fff130ba454dc9238b26c8fe2b94e57394f4dd275e9a932cab0cb80b6->enter($__internal_42b1550fff130ba454dc9238b26c8fe2b94e57394f4dd275e9a932cab0cb80b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d8b334ad8ad47fc4681d376e86301059f59a9ef5209c65171bc4c2248e255211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b334ad8ad47fc4681d376e86301059f59a9ef5209c65171bc4c2248e255211->enter($__internal_d8b334ad8ad47fc4681d376e86301059f59a9ef5209c65171bc4c2248e255211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_42b1550fff130ba454dc9238b26c8fe2b94e57394f4dd275e9a932cab0cb80b6->leave($__internal_42b1550fff130ba454dc9238b26c8fe2b94e57394f4dd275e9a932cab0cb80b6_prof);

        
        $__internal_d8b334ad8ad47fc4681d376e86301059f59a9ef5209c65171bc4c2248e255211->leave($__internal_d8b334ad8ad47fc4681d376e86301059f59a9ef5209c65171bc4c2248e255211_prof);

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
