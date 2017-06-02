<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7be2e66bf7a260c53dcc07a6a6a71a303bd18babb5ca40aafba3a960f5e5a1d7 extends Twig_Template
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
        $__internal_ea844a6d5a7b043adada3dd97e1f5eea83a38051eae9a377559bb97fd2abbced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea844a6d5a7b043adada3dd97e1f5eea83a38051eae9a377559bb97fd2abbced->enter($__internal_ea844a6d5a7b043adada3dd97e1f5eea83a38051eae9a377559bb97fd2abbced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7c558881b82d6a1bf50d7672a2dc68cb9b338c17f48f46ed01027a6c20a1d9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c558881b82d6a1bf50d7672a2dc68cb9b338c17f48f46ed01027a6c20a1d9d5->enter($__internal_7c558881b82d6a1bf50d7672a2dc68cb9b338c17f48f46ed01027a6c20a1d9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ea844a6d5a7b043adada3dd97e1f5eea83a38051eae9a377559bb97fd2abbced->leave($__internal_ea844a6d5a7b043adada3dd97e1f5eea83a38051eae9a377559bb97fd2abbced_prof);

        
        $__internal_7c558881b82d6a1bf50d7672a2dc68cb9b338c17f48f46ed01027a6c20a1d9d5->leave($__internal_7c558881b82d6a1bf50d7672a2dc68cb9b338c17f48f46ed01027a6c20a1d9d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
