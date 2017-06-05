<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_6c40651fe9a173c65a649db385b1380091e0f533b142bfe752c50e9bf5859ebe extends Twig_Template
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
        $__internal_ac52aefdedc88389a7aa3e0033322f7eaa71f1718af6da8838197d41494410aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac52aefdedc88389a7aa3e0033322f7eaa71f1718af6da8838197d41494410aa->enter($__internal_ac52aefdedc88389a7aa3e0033322f7eaa71f1718af6da8838197d41494410aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4f572bfa91770b5fb27c85d8dba8d53e0737d915edc7a764cbd55ec378a0bbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f572bfa91770b5fb27c85d8dba8d53e0737d915edc7a764cbd55ec378a0bbd3->enter($__internal_4f572bfa91770b5fb27c85d8dba8d53e0737d915edc7a764cbd55ec378a0bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ac52aefdedc88389a7aa3e0033322f7eaa71f1718af6da8838197d41494410aa->leave($__internal_ac52aefdedc88389a7aa3e0033322f7eaa71f1718af6da8838197d41494410aa_prof);

        
        $__internal_4f572bfa91770b5fb27c85d8dba8d53e0737d915edc7a764cbd55ec378a0bbd3->leave($__internal_4f572bfa91770b5fb27c85d8dba8d53e0737d915edc7a764cbd55ec378a0bbd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
