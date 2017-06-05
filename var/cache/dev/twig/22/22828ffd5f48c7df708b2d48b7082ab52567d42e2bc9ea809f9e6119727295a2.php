<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ae4dd936e16e727f952d535b309903d1416e38298d7de15c20645359925d7b14 extends Twig_Template
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
        $__internal_ae088c1c955ecda8030a943f44d465b45d4a1c48a0c71c52d809ac921bd9f652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae088c1c955ecda8030a943f44d465b45d4a1c48a0c71c52d809ac921bd9f652->enter($__internal_ae088c1c955ecda8030a943f44d465b45d4a1c48a0c71c52d809ac921bd9f652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_ed69bdf7fba8ffbf9f576e331ac53f9c3d3a8dd4bd342e6c7023d1f55e2e2fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed69bdf7fba8ffbf9f576e331ac53f9c3d3a8dd4bd342e6c7023d1f55e2e2fd9->enter($__internal_ed69bdf7fba8ffbf9f576e331ac53f9c3d3a8dd4bd342e6c7023d1f55e2e2fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_ae088c1c955ecda8030a943f44d465b45d4a1c48a0c71c52d809ac921bd9f652->leave($__internal_ae088c1c955ecda8030a943f44d465b45d4a1c48a0c71c52d809ac921bd9f652_prof);

        
        $__internal_ed69bdf7fba8ffbf9f576e331ac53f9c3d3a8dd4bd342e6c7023d1f55e2e2fd9->leave($__internal_ed69bdf7fba8ffbf9f576e331ac53f9c3d3a8dd4bd342e6c7023d1f55e2e2fd9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
