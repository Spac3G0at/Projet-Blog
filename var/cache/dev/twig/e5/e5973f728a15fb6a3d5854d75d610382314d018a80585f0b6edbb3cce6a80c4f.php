<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ecd71349e4a75272c6031efad6c591fb32b022d0d703ff04af52746480490478 extends Twig_Template
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
        $__internal_add4a5cd7674cbda529b822d69370fb9d24c4b3e551ab6ca4a2c834888a96727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add4a5cd7674cbda529b822d69370fb9d24c4b3e551ab6ca4a2c834888a96727->enter($__internal_add4a5cd7674cbda529b822d69370fb9d24c4b3e551ab6ca4a2c834888a96727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fcd5f6cf1afcdb3e7ee5a8f611e8d23b21b9ebdc63278d1412a00009b74b1665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd5f6cf1afcdb3e7ee5a8f611e8d23b21b9ebdc63278d1412a00009b74b1665->enter($__internal_fcd5f6cf1afcdb3e7ee5a8f611e8d23b21b9ebdc63278d1412a00009b74b1665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_add4a5cd7674cbda529b822d69370fb9d24c4b3e551ab6ca4a2c834888a96727->leave($__internal_add4a5cd7674cbda529b822d69370fb9d24c4b3e551ab6ca4a2c834888a96727_prof);

        
        $__internal_fcd5f6cf1afcdb3e7ee5a8f611e8d23b21b9ebdc63278d1412a00009b74b1665->leave($__internal_fcd5f6cf1afcdb3e7ee5a8f611e8d23b21b9ebdc63278d1412a00009b74b1665_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
