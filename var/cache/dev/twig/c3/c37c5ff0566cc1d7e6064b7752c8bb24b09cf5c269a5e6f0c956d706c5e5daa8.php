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
        $__internal_59d525a7e8cdd23513376715151195a50f0bdbf182c5e0f58c715ebd5fde56af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d525a7e8cdd23513376715151195a50f0bdbf182c5e0f58c715ebd5fde56af->enter($__internal_59d525a7e8cdd23513376715151195a50f0bdbf182c5e0f58c715ebd5fde56af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ad7f7a35ba3efd0add3f6faef177a001a515d6bcabfe3e930369c27908bab4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7f7a35ba3efd0add3f6faef177a001a515d6bcabfe3e930369c27908bab4e0->enter($__internal_ad7f7a35ba3efd0add3f6faef177a001a515d6bcabfe3e930369c27908bab4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_59d525a7e8cdd23513376715151195a50f0bdbf182c5e0f58c715ebd5fde56af->leave($__internal_59d525a7e8cdd23513376715151195a50f0bdbf182c5e0f58c715ebd5fde56af_prof);

        
        $__internal_ad7f7a35ba3efd0add3f6faef177a001a515d6bcabfe3e930369c27908bab4e0->leave($__internal_ad7f7a35ba3efd0add3f6faef177a001a515d6bcabfe3e930369c27908bab4e0_prof);

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
