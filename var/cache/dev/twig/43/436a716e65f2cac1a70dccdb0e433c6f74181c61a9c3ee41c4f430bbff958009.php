<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_478c20b91c0e7b3a9f065e980b2ca99235b188969c99899f631e0c21fd94f0ea extends Twig_Template
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
        $__internal_03290d9671dd62bc5079baf1f19356b152a09953f2cf11a50a9b338e4d3bf287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03290d9671dd62bc5079baf1f19356b152a09953f2cf11a50a9b338e4d3bf287->enter($__internal_03290d9671dd62bc5079baf1f19356b152a09953f2cf11a50a9b338e4d3bf287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_45fa3c481a1ea7b634c0b9e27d5dd95069998fee3930fb429c123605bc62aa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fa3c481a1ea7b634c0b9e27d5dd95069998fee3930fb429c123605bc62aa3e->enter($__internal_45fa3c481a1ea7b634c0b9e27d5dd95069998fee3930fb429c123605bc62aa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_03290d9671dd62bc5079baf1f19356b152a09953f2cf11a50a9b338e4d3bf287->leave($__internal_03290d9671dd62bc5079baf1f19356b152a09953f2cf11a50a9b338e4d3bf287_prof);

        
        $__internal_45fa3c481a1ea7b634c0b9e27d5dd95069998fee3930fb429c123605bc62aa3e->leave($__internal_45fa3c481a1ea7b634c0b9e27d5dd95069998fee3930fb429c123605bc62aa3e_prof);

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
