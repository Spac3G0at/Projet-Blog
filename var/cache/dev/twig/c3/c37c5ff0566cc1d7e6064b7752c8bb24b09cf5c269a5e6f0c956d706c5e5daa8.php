<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1482f816118c76768a5e18c9dc8b6dc6d73e28f01224ab86b35e1c443bfed215 extends Twig_Template
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
        $__internal_8b6d9d50f02b2d113dac3b949c644ece545723c8494f2899cb00aa902897aa1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b6d9d50f02b2d113dac3b949c644ece545723c8494f2899cb00aa902897aa1f->enter($__internal_8b6d9d50f02b2d113dac3b949c644ece545723c8494f2899cb00aa902897aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_7535258df36efb9590754473c67172f9eb0abd743a233dc56e3fe9b457081f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7535258df36efb9590754473c67172f9eb0abd743a233dc56e3fe9b457081f38->enter($__internal_7535258df36efb9590754473c67172f9eb0abd743a233dc56e3fe9b457081f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8b6d9d50f02b2d113dac3b949c644ece545723c8494f2899cb00aa902897aa1f->leave($__internal_8b6d9d50f02b2d113dac3b949c644ece545723c8494f2899cb00aa902897aa1f_prof);

        
        $__internal_7535258df36efb9590754473c67172f9eb0abd743a233dc56e3fe9b457081f38->leave($__internal_7535258df36efb9590754473c67172f9eb0abd743a233dc56e3fe9b457081f38_prof);

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
