<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_79f0b4c4c01aabfd20a84a373f375af29dee3c2045fd5c355c9c286c58cba514 extends Twig_Template
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
        $__internal_bb61cd08fbce6ea59e6dc6e883285f4ec8a0e147e420c93ff27774099cdc5831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb61cd08fbce6ea59e6dc6e883285f4ec8a0e147e420c93ff27774099cdc5831->enter($__internal_bb61cd08fbce6ea59e6dc6e883285f4ec8a0e147e420c93ff27774099cdc5831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2937fc6a9cca4974f8ce1b1c39c7624117c015531fcad21f4ac59eafed2d4b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2937fc6a9cca4974f8ce1b1c39c7624117c015531fcad21f4ac59eafed2d4b7f->enter($__internal_2937fc6a9cca4974f8ce1b1c39c7624117c015531fcad21f4ac59eafed2d4b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bb61cd08fbce6ea59e6dc6e883285f4ec8a0e147e420c93ff27774099cdc5831->leave($__internal_bb61cd08fbce6ea59e6dc6e883285f4ec8a0e147e420c93ff27774099cdc5831_prof);

        
        $__internal_2937fc6a9cca4974f8ce1b1c39c7624117c015531fcad21f4ac59eafed2d4b7f->leave($__internal_2937fc6a9cca4974f8ce1b1c39c7624117c015531fcad21f4ac59eafed2d4b7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
