<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4c1f9ef962bf8efc2eb1a5300ad663b84285dc1f85d02ac753dd1923d91fef06 extends Twig_Template
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
        $__internal_8f584331436517734a29200162a0d72922887e8f7ac8f934e9ee07270a1f7c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f584331436517734a29200162a0d72922887e8f7ac8f934e9ee07270a1f7c4f->enter($__internal_8f584331436517734a29200162a0d72922887e8f7ac8f934e9ee07270a1f7c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_b5d907e26d45769c327ccff145a85732a076e43e7fd36b445359a36a748ab004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d907e26d45769c327ccff145a85732a076e43e7fd36b445359a36a748ab004->enter($__internal_b5d907e26d45769c327ccff145a85732a076e43e7fd36b445359a36a748ab004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8f584331436517734a29200162a0d72922887e8f7ac8f934e9ee07270a1f7c4f->leave($__internal_8f584331436517734a29200162a0d72922887e8f7ac8f934e9ee07270a1f7c4f_prof);

        
        $__internal_b5d907e26d45769c327ccff145a85732a076e43e7fd36b445359a36a748ab004->leave($__internal_b5d907e26d45769c327ccff145a85732a076e43e7fd36b445359a36a748ab004_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
