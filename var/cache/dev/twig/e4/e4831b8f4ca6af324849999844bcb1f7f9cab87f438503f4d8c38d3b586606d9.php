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
        $__internal_d0ad01ce83a80ec4c4f3941b15c943b3fd4b867570bd3ef110a2dd110e7dad8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ad01ce83a80ec4c4f3941b15c943b3fd4b867570bd3ef110a2dd110e7dad8a->enter($__internal_d0ad01ce83a80ec4c4f3941b15c943b3fd4b867570bd3ef110a2dd110e7dad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6d0dce7d7bb16136eab951a1f690da6d2b133a44f572bca5bd567b39ff3a8e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d0dce7d7bb16136eab951a1f690da6d2b133a44f572bca5bd567b39ff3a8e1d->enter($__internal_6d0dce7d7bb16136eab951a1f690da6d2b133a44f572bca5bd567b39ff3a8e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d0ad01ce83a80ec4c4f3941b15c943b3fd4b867570bd3ef110a2dd110e7dad8a->leave($__internal_d0ad01ce83a80ec4c4f3941b15c943b3fd4b867570bd3ef110a2dd110e7dad8a_prof);

        
        $__internal_6d0dce7d7bb16136eab951a1f690da6d2b133a44f572bca5bd567b39ff3a8e1d->leave($__internal_6d0dce7d7bb16136eab951a1f690da6d2b133a44f572bca5bd567b39ff3a8e1d_prof);

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
