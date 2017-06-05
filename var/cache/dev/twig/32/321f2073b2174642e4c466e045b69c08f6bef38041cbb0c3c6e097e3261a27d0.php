<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_df9c7efa81ce8de92114538c9d9beb14acdb47bd0377361c73f6586cf55112cd extends Twig_Template
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
        $__internal_7eba1fd05ddefa57be02bdd50c0317e5ba2929e802aeb4fa11726b25f38b823a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eba1fd05ddefa57be02bdd50c0317e5ba2929e802aeb4fa11726b25f38b823a->enter($__internal_7eba1fd05ddefa57be02bdd50c0317e5ba2929e802aeb4fa11726b25f38b823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_bbf5c5ad9942b752ce8a9c935cb0c281e0cfba11d92139ce237bc5bd814ea30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf5c5ad9942b752ce8a9c935cb0c281e0cfba11d92139ce237bc5bd814ea30b->enter($__internal_bbf5c5ad9942b752ce8a9c935cb0c281e0cfba11d92139ce237bc5bd814ea30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7eba1fd05ddefa57be02bdd50c0317e5ba2929e802aeb4fa11726b25f38b823a->leave($__internal_7eba1fd05ddefa57be02bdd50c0317e5ba2929e802aeb4fa11726b25f38b823a_prof);

        
        $__internal_bbf5c5ad9942b752ce8a9c935cb0c281e0cfba11d92139ce237bc5bd814ea30b->leave($__internal_bbf5c5ad9942b752ce8a9c935cb0c281e0cfba11d92139ce237bc5bd814ea30b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
