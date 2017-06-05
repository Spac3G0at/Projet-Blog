<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_72505b851e81c48f2730c6f47707f325af60d53d6c81c09bd25d95a0abb0637e extends Twig_Template
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
        $__internal_b4c6b3e1ac40b9e96b0fa4eee15d92576a3bbfa11770f212a158e429b2e33565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c6b3e1ac40b9e96b0fa4eee15d92576a3bbfa11770f212a158e429b2e33565->enter($__internal_b4c6b3e1ac40b9e96b0fa4eee15d92576a3bbfa11770f212a158e429b2e33565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0c078c11a010e4516aa95899c9a1dda1b212cd29d0ceac4e23079ef1b2dbf3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c078c11a010e4516aa95899c9a1dda1b212cd29d0ceac4e23079ef1b2dbf3df->enter($__internal_0c078c11a010e4516aa95899c9a1dda1b212cd29d0ceac4e23079ef1b2dbf3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b4c6b3e1ac40b9e96b0fa4eee15d92576a3bbfa11770f212a158e429b2e33565->leave($__internal_b4c6b3e1ac40b9e96b0fa4eee15d92576a3bbfa11770f212a158e429b2e33565_prof);

        
        $__internal_0c078c11a010e4516aa95899c9a1dda1b212cd29d0ceac4e23079ef1b2dbf3df->leave($__internal_0c078c11a010e4516aa95899c9a1dda1b212cd29d0ceac4e23079ef1b2dbf3df_prof);

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
