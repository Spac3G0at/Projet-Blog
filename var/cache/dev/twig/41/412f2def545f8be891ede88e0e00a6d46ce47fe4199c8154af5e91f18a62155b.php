<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_edff58f094915862ed44fcd9415f62653f3e12bbd49bc59e06fc315c554ec6d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_497924465f8d6f533805c407357caec56cc8328a32323cb5213a496afa8c488e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497924465f8d6f533805c407357caec56cc8328a32323cb5213a496afa8c488e->enter($__internal_497924465f8d6f533805c407357caec56cc8328a32323cb5213a496afa8c488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d5d0f75b17ffcbd81f419eea35aa20daacaf940f6323b5ae2fe308af2f4f04b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d0f75b17ffcbd81f419eea35aa20daacaf940f6323b5ae2fe308af2f4f04b2->enter($__internal_d5d0f75b17ffcbd81f419eea35aa20daacaf940f6323b5ae2fe308af2f4f04b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_497924465f8d6f533805c407357caec56cc8328a32323cb5213a496afa8c488e->leave($__internal_497924465f8d6f533805c407357caec56cc8328a32323cb5213a496afa8c488e_prof);

        
        $__internal_d5d0f75b17ffcbd81f419eea35aa20daacaf940f6323b5ae2fe308af2f4f04b2->leave($__internal_d5d0f75b17ffcbd81f419eea35aa20daacaf940f6323b5ae2fe308af2f4f04b2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f24a0d27a5a2f3ca30864f7b1ea570912fd2e676f5bc3ba35b2030e593ef23b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f24a0d27a5a2f3ca30864f7b1ea570912fd2e676f5bc3ba35b2030e593ef23b->enter($__internal_5f24a0d27a5a2f3ca30864f7b1ea570912fd2e676f5bc3ba35b2030e593ef23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db0ceccf41f86a91a6e54eb7cffba87753c1a613c51a570c5a6c3705673f6ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db0ceccf41f86a91a6e54eb7cffba87753c1a613c51a570c5a6c3705673f6ac3->enter($__internal_db0ceccf41f86a91a6e54eb7cffba87753c1a613c51a570c5a6c3705673f6ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db0ceccf41f86a91a6e54eb7cffba87753c1a613c51a570c5a6c3705673f6ac3->leave($__internal_db0ceccf41f86a91a6e54eb7cffba87753c1a613c51a570c5a6c3705673f6ac3_prof);

        
        $__internal_5f24a0d27a5a2f3ca30864f7b1ea570912fd2e676f5bc3ba35b2030e593ef23b->leave($__internal_5f24a0d27a5a2f3ca30864f7b1ea570912fd2e676f5bc3ba35b2030e593ef23b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24e52761076ce04f4a8560de1fbd42cf400dd5217b91747f8b74fc269f4c1c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24e52761076ce04f4a8560de1fbd42cf400dd5217b91747f8b74fc269f4c1c98->enter($__internal_24e52761076ce04f4a8560de1fbd42cf400dd5217b91747f8b74fc269f4c1c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_775b26c0a54436f53a7565196debfe31044c480c855f1c8ad0d1e3659fff1fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775b26c0a54436f53a7565196debfe31044c480c855f1c8ad0d1e3659fff1fd4->enter($__internal_775b26c0a54436f53a7565196debfe31044c480c855f1c8ad0d1e3659fff1fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_775b26c0a54436f53a7565196debfe31044c480c855f1c8ad0d1e3659fff1fd4->leave($__internal_775b26c0a54436f53a7565196debfe31044c480c855f1c8ad0d1e3659fff1fd4_prof);

        
        $__internal_24e52761076ce04f4a8560de1fbd42cf400dd5217b91747f8b74fc269f4c1c98->leave($__internal_24e52761076ce04f4a8560de1fbd42cf400dd5217b91747f8b74fc269f4c1c98_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de44b5369286731dc2490f480a9e0e208b3f039d045a7dfb712a3b26d168a726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de44b5369286731dc2490f480a9e0e208b3f039d045a7dfb712a3b26d168a726->enter($__internal_de44b5369286731dc2490f480a9e0e208b3f039d045a7dfb712a3b26d168a726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_73f74af6fe3132a9f837064b3ae5e67000e62bb266767e771f316c8155f88bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f74af6fe3132a9f837064b3ae5e67000e62bb266767e771f316c8155f88bcb->enter($__internal_73f74af6fe3132a9f837064b3ae5e67000e62bb266767e771f316c8155f88bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73f74af6fe3132a9f837064b3ae5e67000e62bb266767e771f316c8155f88bcb->leave($__internal_73f74af6fe3132a9f837064b3ae5e67000e62bb266767e771f316c8155f88bcb_prof);

        
        $__internal_de44b5369286731dc2490f480a9e0e208b3f039d045a7dfb712a3b26d168a726->leave($__internal_de44b5369286731dc2490f480a9e0e208b3f039d045a7dfb712a3b26d168a726_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
