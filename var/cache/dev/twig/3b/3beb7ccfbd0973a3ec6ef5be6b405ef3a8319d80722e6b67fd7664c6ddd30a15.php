<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_36679ab69e5ee758a019aba5727c47ae0590b55f77865a9c2344c861629a6cab extends Twig_Template
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
        $__internal_f35bd5003c6adbbe72d1613b5c4ddb982d5160f9a247dafee9312d6af426f616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35bd5003c6adbbe72d1613b5c4ddb982d5160f9a247dafee9312d6af426f616->enter($__internal_f35bd5003c6adbbe72d1613b5c4ddb982d5160f9a247dafee9312d6af426f616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_b4b168d5c8113161e5a810fdb838a4f41715e1ef011954d22854a887d87a2da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4b168d5c8113161e5a810fdb838a4f41715e1ef011954d22854a887d87a2da3->enter($__internal_b4b168d5c8113161e5a810fdb838a4f41715e1ef011954d22854a887d87a2da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f35bd5003c6adbbe72d1613b5c4ddb982d5160f9a247dafee9312d6af426f616->leave($__internal_f35bd5003c6adbbe72d1613b5c4ddb982d5160f9a247dafee9312d6af426f616_prof);

        
        $__internal_b4b168d5c8113161e5a810fdb838a4f41715e1ef011954d22854a887d87a2da3->leave($__internal_b4b168d5c8113161e5a810fdb838a4f41715e1ef011954d22854a887d87a2da3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
