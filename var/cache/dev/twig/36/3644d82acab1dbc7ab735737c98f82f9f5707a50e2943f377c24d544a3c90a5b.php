<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_31537a00fd57eda048cd43ad68c423be15e6a279970e2d49ad5201012158237e extends Twig_Template
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
        $__internal_5f94959b7af5bf15f45b9131057fc9f452ff1ade12c14ebc6cbc2db33e5200be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f94959b7af5bf15f45b9131057fc9f452ff1ade12c14ebc6cbc2db33e5200be->enter($__internal_5f94959b7af5bf15f45b9131057fc9f452ff1ade12c14ebc6cbc2db33e5200be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3d5ae3c433353ec7f9563a32e51f7dfc8dc0a8f5bfc380c8a0185d636b67767f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5ae3c433353ec7f9563a32e51f7dfc8dc0a8f5bfc380c8a0185d636b67767f->enter($__internal_3d5ae3c433353ec7f9563a32e51f7dfc8dc0a8f5bfc380c8a0185d636b67767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_5f94959b7af5bf15f45b9131057fc9f452ff1ade12c14ebc6cbc2db33e5200be->leave($__internal_5f94959b7af5bf15f45b9131057fc9f452ff1ade12c14ebc6cbc2db33e5200be_prof);

        
        $__internal_3d5ae3c433353ec7f9563a32e51f7dfc8dc0a8f5bfc380c8a0185d636b67767f->leave($__internal_3d5ae3c433353ec7f9563a32e51f7dfc8dc0a8f5bfc380c8a0185d636b67767f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
