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
        $__internal_1858712eb4a8503fe71a6fe33f887247eb280bbc80ee3ed0a250b1e4f8df2b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1858712eb4a8503fe71a6fe33f887247eb280bbc80ee3ed0a250b1e4f8df2b47->enter($__internal_1858712eb4a8503fe71a6fe33f887247eb280bbc80ee3ed0a250b1e4f8df2b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_93a7bfbf3f319706d36ddf0b21928ab71f63a4fdba4eb7a62419b496ae1e7917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93a7bfbf3f319706d36ddf0b21928ab71f63a4fdba4eb7a62419b496ae1e7917->enter($__internal_93a7bfbf3f319706d36ddf0b21928ab71f63a4fdba4eb7a62419b496ae1e7917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1858712eb4a8503fe71a6fe33f887247eb280bbc80ee3ed0a250b1e4f8df2b47->leave($__internal_1858712eb4a8503fe71a6fe33f887247eb280bbc80ee3ed0a250b1e4f8df2b47_prof);

        
        $__internal_93a7bfbf3f319706d36ddf0b21928ab71f63a4fdba4eb7a62419b496ae1e7917->leave($__internal_93a7bfbf3f319706d36ddf0b21928ab71f63a4fdba4eb7a62419b496ae1e7917_prof);

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
