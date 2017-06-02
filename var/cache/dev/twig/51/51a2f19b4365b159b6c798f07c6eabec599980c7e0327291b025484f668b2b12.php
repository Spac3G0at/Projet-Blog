<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4504e553a5d5fdec6fcc75b6c99753b4e26182cd30f7668f1b768d465acd0d9e extends Twig_Template
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
        $__internal_54f5521f3fd5af59909239658c5172d161593d725cbb756b8d9f3e6008429b4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f5521f3fd5af59909239658c5172d161593d725cbb756b8d9f3e6008429b4f->enter($__internal_54f5521f3fd5af59909239658c5172d161593d725cbb756b8d9f3e6008429b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_1f80eaee9d678b979fd2f82c80740f0ed89e4e9979294e5134d8acbad8b46d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f80eaee9d678b979fd2f82c80740f0ed89e4e9979294e5134d8acbad8b46d58->enter($__internal_1f80eaee9d678b979fd2f82c80740f0ed89e4e9979294e5134d8acbad8b46d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_54f5521f3fd5af59909239658c5172d161593d725cbb756b8d9f3e6008429b4f->leave($__internal_54f5521f3fd5af59909239658c5172d161593d725cbb756b8d9f3e6008429b4f_prof);

        
        $__internal_1f80eaee9d678b979fd2f82c80740f0ed89e4e9979294e5134d8acbad8b46d58->leave($__internal_1f80eaee9d678b979fd2f82c80740f0ed89e4e9979294e5134d8acbad8b46d58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
