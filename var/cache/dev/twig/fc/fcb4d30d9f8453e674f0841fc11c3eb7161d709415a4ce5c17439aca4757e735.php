<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_3703620058f98960deeeabdafe8236078243346baddb46a417e00527e59e6774 extends Twig_Template
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
        $__internal_818cb7e014aed568856055a70654fb45292ffd7582681e84df91e6497d90a053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818cb7e014aed568856055a70654fb45292ffd7582681e84df91e6497d90a053->enter($__internal_818cb7e014aed568856055a70654fb45292ffd7582681e84df91e6497d90a053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_460f6d42142bd36ffec8c5d34005b313c38b379cdbf6ba281689aeafbfa6cc95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460f6d42142bd36ffec8c5d34005b313c38b379cdbf6ba281689aeafbfa6cc95->enter($__internal_460f6d42142bd36ffec8c5d34005b313c38b379cdbf6ba281689aeafbfa6cc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_818cb7e014aed568856055a70654fb45292ffd7582681e84df91e6497d90a053->leave($__internal_818cb7e014aed568856055a70654fb45292ffd7582681e84df91e6497d90a053_prof);

        
        $__internal_460f6d42142bd36ffec8c5d34005b313c38b379cdbf6ba281689aeafbfa6cc95->leave($__internal_460f6d42142bd36ffec8c5d34005b313c38b379cdbf6ba281689aeafbfa6cc95_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
