<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54b220587afcb11d94e2d645132729fd8ac988346f81b80c826e7ed2b9914ded extends Twig_Template
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
        $__internal_f433f70c30c3bbe096e7d3aec97a6750cdb45223a0e2a4bd093b93025bb19d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f433f70c30c3bbe096e7d3aec97a6750cdb45223a0e2a4bd093b93025bb19d77->enter($__internal_f433f70c30c3bbe096e7d3aec97a6750cdb45223a0e2a4bd093b93025bb19d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_59cbda1cbf0b6dc0286e515ff894e8c8f0668d88f35783f52cb252ce52b01dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cbda1cbf0b6dc0286e515ff894e8c8f0668d88f35783f52cb252ce52b01dca->enter($__internal_59cbda1cbf0b6dc0286e515ff894e8c8f0668d88f35783f52cb252ce52b01dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f433f70c30c3bbe096e7d3aec97a6750cdb45223a0e2a4bd093b93025bb19d77->leave($__internal_f433f70c30c3bbe096e7d3aec97a6750cdb45223a0e2a4bd093b93025bb19d77_prof);

        
        $__internal_59cbda1cbf0b6dc0286e515ff894e8c8f0668d88f35783f52cb252ce52b01dca->leave($__internal_59cbda1cbf0b6dc0286e515ff894e8c8f0668d88f35783f52cb252ce52b01dca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
