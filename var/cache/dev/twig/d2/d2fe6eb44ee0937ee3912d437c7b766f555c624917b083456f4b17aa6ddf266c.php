<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea9333fd7888156b515c0c95b3a3891e95506cc7ae5d2638be9f321154a0b5c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbf57f535d61972ee59ab197a55de1f31f83498a91f27c17d8232bb344241378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf57f535d61972ee59ab197a55de1f31f83498a91f27c17d8232bb344241378->enter($__internal_fbf57f535d61972ee59ab197a55de1f31f83498a91f27c17d8232bb344241378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8a3e7f747d25c2186ddf946548fee2684c48b902cd074f8169a9258fe64cdcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a3e7f747d25c2186ddf946548fee2684c48b902cd074f8169a9258fe64cdcd3->enter($__internal_8a3e7f747d25c2186ddf946548fee2684c48b902cd074f8169a9258fe64cdcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fbf57f535d61972ee59ab197a55de1f31f83498a91f27c17d8232bb344241378->leave($__internal_fbf57f535d61972ee59ab197a55de1f31f83498a91f27c17d8232bb344241378_prof);

        
        $__internal_8a3e7f747d25c2186ddf946548fee2684c48b902cd074f8169a9258fe64cdcd3->leave($__internal_8a3e7f747d25c2186ddf946548fee2684c48b902cd074f8169a9258fe64cdcd3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ffa4c4c503a6dbcc12df2f9efc691f6e09993549c7db0c57f6bcd81e10d9f19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ffa4c4c503a6dbcc12df2f9efc691f6e09993549c7db0c57f6bcd81e10d9f19->enter($__internal_0ffa4c4c503a6dbcc12df2f9efc691f6e09993549c7db0c57f6bcd81e10d9f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_37115da46623bc9a2caeb3f145f4dfb55aad5025a71bca6a42c5ad4ff86e4f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37115da46623bc9a2caeb3f145f4dfb55aad5025a71bca6a42c5ad4ff86e4f7a->enter($__internal_37115da46623bc9a2caeb3f145f4dfb55aad5025a71bca6a42c5ad4ff86e4f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_37115da46623bc9a2caeb3f145f4dfb55aad5025a71bca6a42c5ad4ff86e4f7a->leave($__internal_37115da46623bc9a2caeb3f145f4dfb55aad5025a71bca6a42c5ad4ff86e4f7a_prof);

        
        $__internal_0ffa4c4c503a6dbcc12df2f9efc691f6e09993549c7db0c57f6bcd81e10d9f19->leave($__internal_0ffa4c4c503a6dbcc12df2f9efc691f6e09993549c7db0c57f6bcd81e10d9f19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
