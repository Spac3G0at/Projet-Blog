<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8ad3cc5f151040532b50874c4f4f5bab1dd0538bc9b3ebd1f98eb1438c7c8b65 extends Twig_Template
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
        $__internal_7e82075b846b92def847d7a59d4cf76abab2ab39a5fe608576cc600ac2cb712a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e82075b846b92def847d7a59d4cf76abab2ab39a5fe608576cc600ac2cb712a->enter($__internal_7e82075b846b92def847d7a59d4cf76abab2ab39a5fe608576cc600ac2cb712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_79842810d1ac4fbf887005205643273ce45a79d45e946891876c5b7ad87a33d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79842810d1ac4fbf887005205643273ce45a79d45e946891876c5b7ad87a33d3->enter($__internal_79842810d1ac4fbf887005205643273ce45a79d45e946891876c5b7ad87a33d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7e82075b846b92def847d7a59d4cf76abab2ab39a5fe608576cc600ac2cb712a->leave($__internal_7e82075b846b92def847d7a59d4cf76abab2ab39a5fe608576cc600ac2cb712a_prof);

        
        $__internal_79842810d1ac4fbf887005205643273ce45a79d45e946891876c5b7ad87a33d3->leave($__internal_79842810d1ac4fbf887005205643273ce45a79d45e946891876c5b7ad87a33d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
