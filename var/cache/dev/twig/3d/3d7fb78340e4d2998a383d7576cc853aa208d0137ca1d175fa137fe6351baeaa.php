<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_8ed2c7242e64184718e4b1a686c8b22d04733fb2322fbc688f519655d097a73a extends Twig_Template
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
        $__internal_beb93898f1563f1b19ea15748111af21e9fd0c0fc183b22a0619a0e850d2d098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb93898f1563f1b19ea15748111af21e9fd0c0fc183b22a0619a0e850d2d098->enter($__internal_beb93898f1563f1b19ea15748111af21e9fd0c0fc183b22a0619a0e850d2d098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_80f13de3dbe4e919d816e3ca8a9db7deb1789477666c91fc50e9e33143e11ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f13de3dbe4e919d816e3ca8a9db7deb1789477666c91fc50e9e33143e11ba3->enter($__internal_80f13de3dbe4e919d816e3ca8a9db7deb1789477666c91fc50e9e33143e11ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_beb93898f1563f1b19ea15748111af21e9fd0c0fc183b22a0619a0e850d2d098->leave($__internal_beb93898f1563f1b19ea15748111af21e9fd0c0fc183b22a0619a0e850d2d098_prof);

        
        $__internal_80f13de3dbe4e919d816e3ca8a9db7deb1789477666c91fc50e9e33143e11ba3->leave($__internal_80f13de3dbe4e919d816e3ca8a9db7deb1789477666c91fc50e9e33143e11ba3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
