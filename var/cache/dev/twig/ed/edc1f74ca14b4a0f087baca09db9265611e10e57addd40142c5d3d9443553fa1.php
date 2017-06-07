<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3d723a7492266f519e27384fb9b575a46934cf6c6301906608dcaa8728e2842d extends Twig_Template
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
        $__internal_df7eb036e48cd366dc929ed6c7e8cf864f7e1d9d83b8ef00ba7d99902073e097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7eb036e48cd366dc929ed6c7e8cf864f7e1d9d83b8ef00ba7d99902073e097->enter($__internal_df7eb036e48cd366dc929ed6c7e8cf864f7e1d9d83b8ef00ba7d99902073e097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_23e1323eb13b1af7c7c769fed878c37bbda8cd420acbc90ee5463e7d5ec72680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23e1323eb13b1af7c7c769fed878c37bbda8cd420acbc90ee5463e7d5ec72680->enter($__internal_23e1323eb13b1af7c7c769fed878c37bbda8cd420acbc90ee5463e7d5ec72680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_df7eb036e48cd366dc929ed6c7e8cf864f7e1d9d83b8ef00ba7d99902073e097->leave($__internal_df7eb036e48cd366dc929ed6c7e8cf864f7e1d9d83b8ef00ba7d99902073e097_prof);

        
        $__internal_23e1323eb13b1af7c7c769fed878c37bbda8cd420acbc90ee5463e7d5ec72680->leave($__internal_23e1323eb13b1af7c7c769fed878c37bbda8cd420acbc90ee5463e7d5ec72680_prof);

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
