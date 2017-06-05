<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8645f17ea92da709316aa7db91cc7cdba14b60e2b036bd6905a6424cac255c96 extends Twig_Template
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
        $__internal_8cc94b02ec7e05757738ec2353e307781cd2cd8ca50ce915f09b25ceae169b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc94b02ec7e05757738ec2353e307781cd2cd8ca50ce915f09b25ceae169b87->enter($__internal_8cc94b02ec7e05757738ec2353e307781cd2cd8ca50ce915f09b25ceae169b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ca9a6225390ba7b43899be594f46212a5b1089241567712148d0c135ad097862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9a6225390ba7b43899be594f46212a5b1089241567712148d0c135ad097862->enter($__internal_ca9a6225390ba7b43899be594f46212a5b1089241567712148d0c135ad097862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8cc94b02ec7e05757738ec2353e307781cd2cd8ca50ce915f09b25ceae169b87->leave($__internal_8cc94b02ec7e05757738ec2353e307781cd2cd8ca50ce915f09b25ceae169b87_prof);

        
        $__internal_ca9a6225390ba7b43899be594f46212a5b1089241567712148d0c135ad097862->leave($__internal_ca9a6225390ba7b43899be594f46212a5b1089241567712148d0c135ad097862_prof);

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
