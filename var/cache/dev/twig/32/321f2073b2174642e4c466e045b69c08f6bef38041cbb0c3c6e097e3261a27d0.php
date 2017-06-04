<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_df9c7efa81ce8de92114538c9d9beb14acdb47bd0377361c73f6586cf55112cd extends Twig_Template
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
        $__internal_903473d8d1e8c1ed3a86449b04d55b51fa3d83104083af18a02c5b0316fea218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_903473d8d1e8c1ed3a86449b04d55b51fa3d83104083af18a02c5b0316fea218->enter($__internal_903473d8d1e8c1ed3a86449b04d55b51fa3d83104083af18a02c5b0316fea218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9948a7aff4e402d6787c5dd00e7caf806c26b68685fd2a98064292da48b98246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9948a7aff4e402d6787c5dd00e7caf806c26b68685fd2a98064292da48b98246->enter($__internal_9948a7aff4e402d6787c5dd00e7caf806c26b68685fd2a98064292da48b98246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_903473d8d1e8c1ed3a86449b04d55b51fa3d83104083af18a02c5b0316fea218->leave($__internal_903473d8d1e8c1ed3a86449b04d55b51fa3d83104083af18a02c5b0316fea218_prof);

        
        $__internal_9948a7aff4e402d6787c5dd00e7caf806c26b68685fd2a98064292da48b98246->leave($__internal_9948a7aff4e402d6787c5dd00e7caf806c26b68685fd2a98064292da48b98246_prof);

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
