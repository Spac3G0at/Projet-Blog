<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_bbafbc15aa2802e3e50fab1adeb9200088614cad1d8b4231f2dc6632616e89a1 extends Twig_Template
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
        $__internal_5e7690f6f419be541572004e25d99685eaa98bb789933c1e27d9dd87883c8965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7690f6f419be541572004e25d99685eaa98bb789933c1e27d9dd87883c8965->enter($__internal_5e7690f6f419be541572004e25d99685eaa98bb789933c1e27d9dd87883c8965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8b095cffafd1d3239a40114d304516bf0a7f0e3d8f7645b187fbaf2c494ff39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b095cffafd1d3239a40114d304516bf0a7f0e3d8f7645b187fbaf2c494ff39b->enter($__internal_8b095cffafd1d3239a40114d304516bf0a7f0e3d8f7645b187fbaf2c494ff39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e7690f6f419be541572004e25d99685eaa98bb789933c1e27d9dd87883c8965->leave($__internal_5e7690f6f419be541572004e25d99685eaa98bb789933c1e27d9dd87883c8965_prof);

        
        $__internal_8b095cffafd1d3239a40114d304516bf0a7f0e3d8f7645b187fbaf2c494ff39b->leave($__internal_8b095cffafd1d3239a40114d304516bf0a7f0e3d8f7645b187fbaf2c494ff39b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
