<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9d72c691ac29038994c6e9718eb1012da021e54cb0b1380c83978488c377ad6d extends Twig_Template
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
        $__internal_c37333de60fd66c8ad3bd01f2afa6ab112af78aa010ebf903d737732a08f1f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37333de60fd66c8ad3bd01f2afa6ab112af78aa010ebf903d737732a08f1f08->enter($__internal_c37333de60fd66c8ad3bd01f2afa6ab112af78aa010ebf903d737732a08f1f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6851fc9588539b7535573bb56cbc24f4e2ee50465c706a05f3774c2cb8200bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6851fc9588539b7535573bb56cbc24f4e2ee50465c706a05f3774c2cb8200bb1->enter($__internal_6851fc9588539b7535573bb56cbc24f4e2ee50465c706a05f3774c2cb8200bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37333de60fd66c8ad3bd01f2afa6ab112af78aa010ebf903d737732a08f1f08->leave($__internal_c37333de60fd66c8ad3bd01f2afa6ab112af78aa010ebf903d737732a08f1f08_prof);

        
        $__internal_6851fc9588539b7535573bb56cbc24f4e2ee50465c706a05f3774c2cb8200bb1->leave($__internal_6851fc9588539b7535573bb56cbc24f4e2ee50465c706a05f3774c2cb8200bb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bb5340ed247ef9c9712d527365f00b2aabcbcd9f33c9aceab365ebee7611419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb5340ed247ef9c9712d527365f00b2aabcbcd9f33c9aceab365ebee7611419->enter($__internal_0bb5340ed247ef9c9712d527365f00b2aabcbcd9f33c9aceab365ebee7611419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fc3b2a865030c0d7c21c9e24e90946d689b68fcfb004912f1bd112b0fe422498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3b2a865030c0d7c21c9e24e90946d689b68fcfb004912f1bd112b0fe422498->enter($__internal_fc3b2a865030c0d7c21c9e24e90946d689b68fcfb004912f1bd112b0fe422498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fc3b2a865030c0d7c21c9e24e90946d689b68fcfb004912f1bd112b0fe422498->leave($__internal_fc3b2a865030c0d7c21c9e24e90946d689b68fcfb004912f1bd112b0fe422498_prof);

        
        $__internal_0bb5340ed247ef9c9712d527365f00b2aabcbcd9f33c9aceab365ebee7611419->leave($__internal_0bb5340ed247ef9c9712d527365f00b2aabcbcd9f33c9aceab365ebee7611419_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_83dbce4d021a52dcef5f0b256ced107e8a499feeda095728c3f76c1ef1764dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dbce4d021a52dcef5f0b256ced107e8a499feeda095728c3f76c1ef1764dbb->enter($__internal_83dbce4d021a52dcef5f0b256ced107e8a499feeda095728c3f76c1ef1764dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22292fa44aa727d2557d76c7c1348f36f515d912223706e081fcfb1a1a4c37aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22292fa44aa727d2557d76c7c1348f36f515d912223706e081fcfb1a1a4c37aa->enter($__internal_22292fa44aa727d2557d76c7c1348f36f515d912223706e081fcfb1a1a4c37aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_22292fa44aa727d2557d76c7c1348f36f515d912223706e081fcfb1a1a4c37aa->leave($__internal_22292fa44aa727d2557d76c7c1348f36f515d912223706e081fcfb1a1a4c37aa_prof);

        
        $__internal_83dbce4d021a52dcef5f0b256ced107e8a499feeda095728c3f76c1ef1764dbb->leave($__internal_83dbce4d021a52dcef5f0b256ced107e8a499feeda095728c3f76c1ef1764dbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b8fc8f53bf703bf41c3417f88f985644e6974f2bf1b7c427b60c1b4b5050c36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fc8f53bf703bf41c3417f88f985644e6974f2bf1b7c427b60c1b4b5050c36c->enter($__internal_b8fc8f53bf703bf41c3417f88f985644e6974f2bf1b7c427b60c1b4b5050c36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4d3d47be2c5a9408b86ddad8e90fea57278848fef35d6a4c250a3dccbd22641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d3d47be2c5a9408b86ddad8e90fea57278848fef35d6a4c250a3dccbd22641->enter($__internal_f4d3d47be2c5a9408b86ddad8e90fea57278848fef35d6a4c250a3dccbd22641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4d3d47be2c5a9408b86ddad8e90fea57278848fef35d6a4c250a3dccbd22641->leave($__internal_f4d3d47be2c5a9408b86ddad8e90fea57278848fef35d6a4c250a3dccbd22641_prof);

        
        $__internal_b8fc8f53bf703bf41c3417f88f985644e6974f2bf1b7c427b60c1b4b5050c36c->leave($__internal_b8fc8f53bf703bf41c3417f88f985644e6974f2bf1b7c427b60c1b4b5050c36c_prof);

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
