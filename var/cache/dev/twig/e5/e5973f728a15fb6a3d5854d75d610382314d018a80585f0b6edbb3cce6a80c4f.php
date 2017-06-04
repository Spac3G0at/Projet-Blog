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
        $__internal_3eb30034498c5629ad45681cd80f1aefac9edc1f79046bf8b60905b6414e60f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb30034498c5629ad45681cd80f1aefac9edc1f79046bf8b60905b6414e60f7->enter($__internal_3eb30034498c5629ad45681cd80f1aefac9edc1f79046bf8b60905b6414e60f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8dc58872d1732a1fd80d84ef6ab886a54503d6d34867c89eb762b4c16d72688d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc58872d1732a1fd80d84ef6ab886a54503d6d34867c89eb762b4c16d72688d->enter($__internal_8dc58872d1732a1fd80d84ef6ab886a54503d6d34867c89eb762b4c16d72688d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3eb30034498c5629ad45681cd80f1aefac9edc1f79046bf8b60905b6414e60f7->leave($__internal_3eb30034498c5629ad45681cd80f1aefac9edc1f79046bf8b60905b6414e60f7_prof);

        
        $__internal_8dc58872d1732a1fd80d84ef6ab886a54503d6d34867c89eb762b4c16d72688d->leave($__internal_8dc58872d1732a1fd80d84ef6ab886a54503d6d34867c89eb762b4c16d72688d_prof);

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
