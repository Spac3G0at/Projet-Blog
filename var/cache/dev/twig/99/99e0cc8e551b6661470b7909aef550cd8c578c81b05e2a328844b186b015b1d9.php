<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_9404db38d9d0d0b105f0ff80d0cb34fbb1734268df89b3eaa41b836543c0b8c6 extends Twig_Template
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
        $__internal_4e93a82467f9452fb3f75d64bc69ee7e5ea8d26388438710b3855a1ab8e97654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e93a82467f9452fb3f75d64bc69ee7e5ea8d26388438710b3855a1ab8e97654->enter($__internal_4e93a82467f9452fb3f75d64bc69ee7e5ea8d26388438710b3855a1ab8e97654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_05b5dd69df2d4541fc64baf2cc3e230971c520339982ab03d5f60656ae7d8eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b5dd69df2d4541fc64baf2cc3e230971c520339982ab03d5f60656ae7d8eae->enter($__internal_05b5dd69df2d4541fc64baf2cc3e230971c520339982ab03d5f60656ae7d8eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_4e93a82467f9452fb3f75d64bc69ee7e5ea8d26388438710b3855a1ab8e97654->leave($__internal_4e93a82467f9452fb3f75d64bc69ee7e5ea8d26388438710b3855a1ab8e97654_prof);

        
        $__internal_05b5dd69df2d4541fc64baf2cc3e230971c520339982ab03d5f60656ae7d8eae->leave($__internal_05b5dd69df2d4541fc64baf2cc3e230971c520339982ab03d5f60656ae7d8eae_prof);

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
