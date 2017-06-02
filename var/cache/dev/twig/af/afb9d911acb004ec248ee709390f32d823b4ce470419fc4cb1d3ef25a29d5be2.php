<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5e5be51c609401123cae6127626649899803155e28901db2cf5f1dce16fea278 extends Twig_Template
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
        $__internal_a00334b24bc100e0b5575c277a4f1d8da2788620116348f971d20bf7e749470c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00334b24bc100e0b5575c277a4f1d8da2788620116348f971d20bf7e749470c->enter($__internal_a00334b24bc100e0b5575c277a4f1d8da2788620116348f971d20bf7e749470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3215113871f011ac502424e036ded6327b21d31c8ff3647b5c31935a3372477f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3215113871f011ac502424e036ded6327b21d31c8ff3647b5c31935a3372477f->enter($__internal_3215113871f011ac502424e036ded6327b21d31c8ff3647b5c31935a3372477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a00334b24bc100e0b5575c277a4f1d8da2788620116348f971d20bf7e749470c->leave($__internal_a00334b24bc100e0b5575c277a4f1d8da2788620116348f971d20bf7e749470c_prof);

        
        $__internal_3215113871f011ac502424e036ded6327b21d31c8ff3647b5c31935a3372477f->leave($__internal_3215113871f011ac502424e036ded6327b21d31c8ff3647b5c31935a3372477f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
