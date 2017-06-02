<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3c1f95b3e7ccb9d37f76f4ed2c710f9bb41f6d5c2d0bd21f0e803d43890120dd extends Twig_Template
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
        $__internal_2db74f9a36e164d419015f84b438bda39d6a153a57830ddacc4e701f63129f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2db74f9a36e164d419015f84b438bda39d6a153a57830ddacc4e701f63129f1c->enter($__internal_2db74f9a36e164d419015f84b438bda39d6a153a57830ddacc4e701f63129f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_0c6b7cb9c7b016092b9c48dbf2ee4f5d3a23fa784a150696c7c59f81f24e3dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6b7cb9c7b016092b9c48dbf2ee4f5d3a23fa784a150696c7c59f81f24e3dd7->enter($__internal_0c6b7cb9c7b016092b9c48dbf2ee4f5d3a23fa784a150696c7c59f81f24e3dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2db74f9a36e164d419015f84b438bda39d6a153a57830ddacc4e701f63129f1c->leave($__internal_2db74f9a36e164d419015f84b438bda39d6a153a57830ddacc4e701f63129f1c_prof);

        
        $__internal_0c6b7cb9c7b016092b9c48dbf2ee4f5d3a23fa784a150696c7c59f81f24e3dd7->leave($__internal_0c6b7cb9c7b016092b9c48dbf2ee4f5d3a23fa784a150696c7c59f81f24e3dd7_prof);

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
