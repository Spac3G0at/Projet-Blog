<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_558c8c843a482a2be17d40fefbc2b386de40e0b440558e514a380eca8f2b2fd1 extends Twig_Template
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
        $__internal_7d6ea5474288afc827265a4fccfc433e1b9a4945e19a4ba92f822a90c0b25bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6ea5474288afc827265a4fccfc433e1b9a4945e19a4ba92f822a90c0b25bd7->enter($__internal_7d6ea5474288afc827265a4fccfc433e1b9a4945e19a4ba92f822a90c0b25bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6465541fe734794d60efebc6ff5006739198756266a8c3352296f52caa386972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6465541fe734794d60efebc6ff5006739198756266a8c3352296f52caa386972->enter($__internal_6465541fe734794d60efebc6ff5006739198756266a8c3352296f52caa386972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7d6ea5474288afc827265a4fccfc433e1b9a4945e19a4ba92f822a90c0b25bd7->leave($__internal_7d6ea5474288afc827265a4fccfc433e1b9a4945e19a4ba92f822a90c0b25bd7_prof);

        
        $__internal_6465541fe734794d60efebc6ff5006739198756266a8c3352296f52caa386972->leave($__internal_6465541fe734794d60efebc6ff5006739198756266a8c3352296f52caa386972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
