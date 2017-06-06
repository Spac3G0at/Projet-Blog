<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_c4573ef71992498a698d61c3a5de8e7dfba65a082cc8dc485db44ad0a257890e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_885a8b46374dfc1a051e37043cfe44552f52a4d135da02eeae4cb25b16f6e745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885a8b46374dfc1a051e37043cfe44552f52a4d135da02eeae4cb25b16f6e745->enter($__internal_885a8b46374dfc1a051e37043cfe44552f52a4d135da02eeae4cb25b16f6e745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_c0909b5c08d3179b2708e2177ace005a1a6eef98f38ba8a42f38587dcfe14cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0909b5c08d3179b2708e2177ace005a1a6eef98f38ba8a42f38587dcfe14cef->enter($__internal_c0909b5c08d3179b2708e2177ace005a1a6eef98f38ba8a42f38587dcfe14cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_885a8b46374dfc1a051e37043cfe44552f52a4d135da02eeae4cb25b16f6e745->leave($__internal_885a8b46374dfc1a051e37043cfe44552f52a4d135da02eeae4cb25b16f6e745_prof);

        
        $__internal_c0909b5c08d3179b2708e2177ace005a1a6eef98f38ba8a42f38587dcfe14cef->leave($__internal_c0909b5c08d3179b2708e2177ace005a1a6eef98f38ba8a42f38587dcfe14cef_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d0ff71a44a67eeecaa2e06fa82bbbc5392a04a85d12224f2b3c51dab08cf8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0ff71a44a67eeecaa2e06fa82bbbc5392a04a85d12224f2b3c51dab08cf8da->enter($__internal_6d0ff71a44a67eeecaa2e06fa82bbbc5392a04a85d12224f2b3c51dab08cf8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc0964f82f3d43f57d3409fd2b67d6fb0cd9e73752d25506c0b2152426736a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0964f82f3d43f57d3409fd2b67d6fb0cd9e73752d25506c0b2152426736a87->enter($__internal_fc0964f82f3d43f57d3409fd2b67d6fb0cd9e73752d25506c0b2152426736a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_fc0964f82f3d43f57d3409fd2b67d6fb0cd9e73752d25506c0b2152426736a87->leave($__internal_fc0964f82f3d43f57d3409fd2b67d6fb0cd9e73752d25506c0b2152426736a87_prof);

        
        $__internal_6d0ff71a44a67eeecaa2e06fa82bbbc5392a04a85d12224f2b3c51dab08cf8da->leave($__internal_6d0ff71a44a67eeecaa2e06fa82bbbc5392a04a85d12224f2b3c51dab08cf8da_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/Modal/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/Modal/register.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
