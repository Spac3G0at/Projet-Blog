<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_34222555ac9b4c78fec755a18aeb18db523fc11db90243d92ac609612447b38e extends Twig_Template
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
        $__internal_f2c8085bbc5a4d893bfad6e4f51a83f03d182d72b5bd99e6f0f06862d8c0c1f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c8085bbc5a4d893bfad6e4f51a83f03d182d72b5bd99e6f0f06862d8c0c1f1->enter($__internal_f2c8085bbc5a4d893bfad6e4f51a83f03d182d72b5bd99e6f0f06862d8c0c1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_0ec7b60b0b10dbaa48eddcde472b22ec44c1cd95c9a9529a13bdbf7e6e52a3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec7b60b0b10dbaa48eddcde472b22ec44c1cd95c9a9529a13bdbf7e6e52a3db->enter($__internal_0ec7b60b0b10dbaa48eddcde472b22ec44c1cd95c9a9529a13bdbf7e6e52a3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f2c8085bbc5a4d893bfad6e4f51a83f03d182d72b5bd99e6f0f06862d8c0c1f1->leave($__internal_f2c8085bbc5a4d893bfad6e4f51a83f03d182d72b5bd99e6f0f06862d8c0c1f1_prof);

        
        $__internal_0ec7b60b0b10dbaa48eddcde472b22ec44c1cd95c9a9529a13bdbf7e6e52a3db->leave($__internal_0ec7b60b0b10dbaa48eddcde472b22ec44c1cd95c9a9529a13bdbf7e6e52a3db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}