<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4244508d8dcf46efde5fe9ad664310b61af8cbc1b30fa1e16418c69d4514ac8f extends Twig_Template
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
        $__internal_02a2447bc4bcfa2bab6ab6eb371830a8151743d766de170bcde53b88da4da4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a2447bc4bcfa2bab6ab6eb371830a8151743d766de170bcde53b88da4da4b2->enter($__internal_02a2447bc4bcfa2bab6ab6eb371830a8151743d766de170bcde53b88da4da4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4af6289e35281da8eed907d42e1fbf0de0ad97b798833baf49e04273080d88ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af6289e35281da8eed907d42e1fbf0de0ad97b798833baf49e04273080d88ba->enter($__internal_4af6289e35281da8eed907d42e1fbf0de0ad97b798833baf49e04273080d88ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_02a2447bc4bcfa2bab6ab6eb371830a8151743d766de170bcde53b88da4da4b2->leave($__internal_02a2447bc4bcfa2bab6ab6eb371830a8151743d766de170bcde53b88da4da4b2_prof);

        
        $__internal_4af6289e35281da8eed907d42e1fbf0de0ad97b798833baf49e04273080d88ba->leave($__internal_4af6289e35281da8eed907d42e1fbf0de0ad97b798833baf49e04273080d88ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
