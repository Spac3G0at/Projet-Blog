<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_06e2c3e45798e0cc6305ce984c245dc0678de536548074115e42ae174e76596e extends Twig_Template
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
        $__internal_674250dca59e452aff653d663784cc80e874badae876807cf0cefa7c752b5ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_674250dca59e452aff653d663784cc80e874badae876807cf0cefa7c752b5ac8->enter($__internal_674250dca59e452aff653d663784cc80e874badae876807cf0cefa7c752b5ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_3ba9a739fb3d43cfc72c2df177731dd34be813092cb970399a938ff8cec39a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba9a739fb3d43cfc72c2df177731dd34be813092cb970399a938ff8cec39a3e->enter($__internal_3ba9a739fb3d43cfc72c2df177731dd34be813092cb970399a938ff8cec39a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_674250dca59e452aff653d663784cc80e874badae876807cf0cefa7c752b5ac8->leave($__internal_674250dca59e452aff653d663784cc80e874badae876807cf0cefa7c752b5ac8_prof);

        
        $__internal_3ba9a739fb3d43cfc72c2df177731dd34be813092cb970399a938ff8cec39a3e->leave($__internal_3ba9a739fb3d43cfc72c2df177731dd34be813092cb970399a938ff8cec39a3e_prof);

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
