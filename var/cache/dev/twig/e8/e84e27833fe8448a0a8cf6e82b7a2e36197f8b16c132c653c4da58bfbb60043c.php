<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_0a485739b327bbfe3d7df375f539ab2469784bc082dea8e7a5dbabd971ac1582 extends Twig_Template
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
        $__internal_55f0baf7d60035cfd4aad2f768b5ed37f50a4ea914e6aa955688b089ea3fd67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f0baf7d60035cfd4aad2f768b5ed37f50a4ea914e6aa955688b089ea3fd67d->enter($__internal_55f0baf7d60035cfd4aad2f768b5ed37f50a4ea914e6aa955688b089ea3fd67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_53debd5e08fd2e011d8a7c9f657783174ebd3b8a358322cb8427a9a95b537a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53debd5e08fd2e011d8a7c9f657783174ebd3b8a358322cb8427a9a95b537a45->enter($__internal_53debd5e08fd2e011d8a7c9f657783174ebd3b8a358322cb8427a9a95b537a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_55f0baf7d60035cfd4aad2f768b5ed37f50a4ea914e6aa955688b089ea3fd67d->leave($__internal_55f0baf7d60035cfd4aad2f768b5ed37f50a4ea914e6aa955688b089ea3fd67d_prof);

        
        $__internal_53debd5e08fd2e011d8a7c9f657783174ebd3b8a358322cb8427a9a95b537a45->leave($__internal_53debd5e08fd2e011d8a7c9f657783174ebd3b8a358322cb8427a9a95b537a45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
