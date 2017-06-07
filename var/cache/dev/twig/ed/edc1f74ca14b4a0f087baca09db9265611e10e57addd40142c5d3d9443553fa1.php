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
        $__internal_67cb733026e2c6b885d7583423d0c82ca740e56098e832ad7c3f224a30e9d5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cb733026e2c6b885d7583423d0c82ca740e56098e832ad7c3f224a30e9d5c0->enter($__internal_67cb733026e2c6b885d7583423d0c82ca740e56098e832ad7c3f224a30e9d5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6624ac5295b5b6f380886a5d2f8ce7a986ccaf258d63513e714e41bbba8b1799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6624ac5295b5b6f380886a5d2f8ce7a986ccaf258d63513e714e41bbba8b1799->enter($__internal_6624ac5295b5b6f380886a5d2f8ce7a986ccaf258d63513e714e41bbba8b1799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_67cb733026e2c6b885d7583423d0c82ca740e56098e832ad7c3f224a30e9d5c0->leave($__internal_67cb733026e2c6b885d7583423d0c82ca740e56098e832ad7c3f224a30e9d5c0_prof);

        
        $__internal_6624ac5295b5b6f380886a5d2f8ce7a986ccaf258d63513e714e41bbba8b1799->leave($__internal_6624ac5295b5b6f380886a5d2f8ce7a986ccaf258d63513e714e41bbba8b1799_prof);

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
