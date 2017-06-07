<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_94580d824feda7766a59f2e3c8d3cd12e746acdd381566f1213a324f04c4962d extends Twig_Template
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
        $__internal_5e1e3eef65ac505fd7a15e9e7d7d05e76cb7ef1718de7099fb9dcae69c748860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1e3eef65ac505fd7a15e9e7d7d05e76cb7ef1718de7099fb9dcae69c748860->enter($__internal_5e1e3eef65ac505fd7a15e9e7d7d05e76cb7ef1718de7099fb9dcae69c748860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e91890e0691571df6d0d143e1e4bceb6c9c89e987c72b6c4b9902d713c309e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91890e0691571df6d0d143e1e4bceb6c9c89e987c72b6c4b9902d713c309e0e->enter($__internal_e91890e0691571df6d0d143e1e4bceb6c9c89e987c72b6c4b9902d713c309e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5e1e3eef65ac505fd7a15e9e7d7d05e76cb7ef1718de7099fb9dcae69c748860->leave($__internal_5e1e3eef65ac505fd7a15e9e7d7d05e76cb7ef1718de7099fb9dcae69c748860_prof);

        
        $__internal_e91890e0691571df6d0d143e1e4bceb6c9c89e987c72b6c4b9902d713c309e0e->leave($__internal_e91890e0691571df6d0d143e1e4bceb6c9c89e987c72b6c4b9902d713c309e0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
