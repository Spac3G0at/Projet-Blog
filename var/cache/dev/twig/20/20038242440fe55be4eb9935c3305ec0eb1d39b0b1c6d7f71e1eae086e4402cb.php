<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_88b026f9d75bde90312f30a0ad1af36c003ff230ee33838578b375cf366a2f1c extends Twig_Template
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
        $__internal_6fb44da375794ae22543fb9beda9dd9e667810aabc022e94faad065a41b13ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb44da375794ae22543fb9beda9dd9e667810aabc022e94faad065a41b13ffd->enter($__internal_6fb44da375794ae22543fb9beda9dd9e667810aabc022e94faad065a41b13ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_a3ccaf5272586f90f5fb8e865fca5c561ca1944082b1bb46f3d522995b7e052c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3ccaf5272586f90f5fb8e865fca5c561ca1944082b1bb46f3d522995b7e052c->enter($__internal_a3ccaf5272586f90f5fb8e865fca5c561ca1944082b1bb46f3d522995b7e052c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_6fb44da375794ae22543fb9beda9dd9e667810aabc022e94faad065a41b13ffd->leave($__internal_6fb44da375794ae22543fb9beda9dd9e667810aabc022e94faad065a41b13ffd_prof);

        
        $__internal_a3ccaf5272586f90f5fb8e865fca5c561ca1944082b1bb46f3d522995b7e052c->leave($__internal_a3ccaf5272586f90f5fb8e865fca5c561ca1944082b1bb46f3d522995b7e052c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
