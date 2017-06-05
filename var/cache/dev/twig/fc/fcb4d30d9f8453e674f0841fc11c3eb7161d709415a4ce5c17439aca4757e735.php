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
        $__internal_ba0621d1dd16f58a05c4c4f0527f6bbfdc1b89aa38cd7fd9e226a7d905668a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0621d1dd16f58a05c4c4f0527f6bbfdc1b89aa38cd7fd9e226a7d905668a1d->enter($__internal_ba0621d1dd16f58a05c4c4f0527f6bbfdc1b89aa38cd7fd9e226a7d905668a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_b72cd5b42ac01349dcd1fcf56f36f4ed64b4eff5b1a786b8c3ab356635cae1b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72cd5b42ac01349dcd1fcf56f36f4ed64b4eff5b1a786b8c3ab356635cae1b6->enter($__internal_b72cd5b42ac01349dcd1fcf56f36f4ed64b4eff5b1a786b8c3ab356635cae1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_ba0621d1dd16f58a05c4c4f0527f6bbfdc1b89aa38cd7fd9e226a7d905668a1d->leave($__internal_ba0621d1dd16f58a05c4c4f0527f6bbfdc1b89aa38cd7fd9e226a7d905668a1d_prof);

        
        $__internal_b72cd5b42ac01349dcd1fcf56f36f4ed64b4eff5b1a786b8c3ab356635cae1b6->leave($__internal_b72cd5b42ac01349dcd1fcf56f36f4ed64b4eff5b1a786b8c3ab356635cae1b6_prof);

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
