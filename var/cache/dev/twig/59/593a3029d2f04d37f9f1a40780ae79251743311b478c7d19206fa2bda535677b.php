<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bcbd077de8c671f0821c17a9d330b0f359b842ee55a078606d76fdcc205f34af extends Twig_Template
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
        $__internal_b8500edea1c4118a961d45d657c6f66fe5b5af2a91e60c844c2ad4e64b23bfcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8500edea1c4118a961d45d657c6f66fe5b5af2a91e60c844c2ad4e64b23bfcd->enter($__internal_b8500edea1c4118a961d45d657c6f66fe5b5af2a91e60c844c2ad4e64b23bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_50ba870bf58a8735ba8820f25953bc63a38596ff3dc7ff57c1b0b6af34c20a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ba870bf58a8735ba8820f25953bc63a38596ff3dc7ff57c1b0b6af34c20a91->enter($__internal_50ba870bf58a8735ba8820f25953bc63a38596ff3dc7ff57c1b0b6af34c20a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b8500edea1c4118a961d45d657c6f66fe5b5af2a91e60c844c2ad4e64b23bfcd->leave($__internal_b8500edea1c4118a961d45d657c6f66fe5b5af2a91e60c844c2ad4e64b23bfcd_prof);

        
        $__internal_50ba870bf58a8735ba8820f25953bc63a38596ff3dc7ff57c1b0b6af34c20a91->leave($__internal_50ba870bf58a8735ba8820f25953bc63a38596ff3dc7ff57c1b0b6af34c20a91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
