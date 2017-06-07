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
        $__internal_04e69bb2143698d77d6e4e7bbbb1e92d58edfae4075923816c5bfaf1f23d2abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e69bb2143698d77d6e4e7bbbb1e92d58edfae4075923816c5bfaf1f23d2abe->enter($__internal_04e69bb2143698d77d6e4e7bbbb1e92d58edfae4075923816c5bfaf1f23d2abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_659f8141116fc100229269b4a7b0d904181ec2365e04ebddd5d3bb6fcfebf6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659f8141116fc100229269b4a7b0d904181ec2365e04ebddd5d3bb6fcfebf6dd->enter($__internal_659f8141116fc100229269b4a7b0d904181ec2365e04ebddd5d3bb6fcfebf6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_04e69bb2143698d77d6e4e7bbbb1e92d58edfae4075923816c5bfaf1f23d2abe->leave($__internal_04e69bb2143698d77d6e4e7bbbb1e92d58edfae4075923816c5bfaf1f23d2abe_prof);

        
        $__internal_659f8141116fc100229269b4a7b0d904181ec2365e04ebddd5d3bb6fcfebf6dd->leave($__internal_659f8141116fc100229269b4a7b0d904181ec2365e04ebddd5d3bb6fcfebf6dd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_730229c00d573859b45932d4892945b1be23f94d7d61a3e0668d503cd560dedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730229c00d573859b45932d4892945b1be23f94d7d61a3e0668d503cd560dedc->enter($__internal_730229c00d573859b45932d4892945b1be23f94d7d61a3e0668d503cd560dedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00ca3b0c21dc684bb41fd830f41429788c06c49f58f704506597214f115b5f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ca3b0c21dc684bb41fd830f41429788c06c49f58f704506597214f115b5f8d->enter($__internal_00ca3b0c21dc684bb41fd830f41429788c06c49f58f704506597214f115b5f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_00ca3b0c21dc684bb41fd830f41429788c06c49f58f704506597214f115b5f8d->leave($__internal_00ca3b0c21dc684bb41fd830f41429788c06c49f58f704506597214f115b5f8d_prof);

        
        $__internal_730229c00d573859b45932d4892945b1be23f94d7d61a3e0668d503cd560dedc->leave($__internal_730229c00d573859b45932d4892945b1be23f94d7d61a3e0668d503cd560dedc_prof);

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
