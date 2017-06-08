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
        $__internal_8dc1679ec595e243c8825e24256b943798685f66d6f173bdbc8086403999ab33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc1679ec595e243c8825e24256b943798685f66d6f173bdbc8086403999ab33->enter($__internal_8dc1679ec595e243c8825e24256b943798685f66d6f173bdbc8086403999ab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_d3b743e9bac2c9406904e4742273214771313d011141f0748115574b130f3eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b743e9bac2c9406904e4742273214771313d011141f0748115574b130f3eaa->enter($__internal_d3b743e9bac2c9406904e4742273214771313d011141f0748115574b130f3eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8dc1679ec595e243c8825e24256b943798685f66d6f173bdbc8086403999ab33->leave($__internal_8dc1679ec595e243c8825e24256b943798685f66d6f173bdbc8086403999ab33_prof);

        
        $__internal_d3b743e9bac2c9406904e4742273214771313d011141f0748115574b130f3eaa->leave($__internal_d3b743e9bac2c9406904e4742273214771313d011141f0748115574b130f3eaa_prof);

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
