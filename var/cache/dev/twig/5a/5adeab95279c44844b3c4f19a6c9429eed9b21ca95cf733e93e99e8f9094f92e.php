<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4d576851984b740ab2b3074c977b0490757429cb20df1d219c75ecdd7aa67f7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1ff0f33396891bb808f484182ed89a912f4f7a63649bd045347eefb07c13dcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ff0f33396891bb808f484182ed89a912f4f7a63649bd045347eefb07c13dcf->enter($__internal_a1ff0f33396891bb808f484182ed89a912f4f7a63649bd045347eefb07c13dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_456047927e5beafb0bb2973affce3f42e4ecada50ba356b2c35f5f7f0ad43306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456047927e5beafb0bb2973affce3f42e4ecada50ba356b2c35f5f7f0ad43306->enter($__internal_456047927e5beafb0bb2973affce3f42e4ecada50ba356b2c35f5f7f0ad43306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1ff0f33396891bb808f484182ed89a912f4f7a63649bd045347eefb07c13dcf->leave($__internal_a1ff0f33396891bb808f484182ed89a912f4f7a63649bd045347eefb07c13dcf_prof);

        
        $__internal_456047927e5beafb0bb2973affce3f42e4ecada50ba356b2c35f5f7f0ad43306->leave($__internal_456047927e5beafb0bb2973affce3f42e4ecada50ba356b2c35f5f7f0ad43306_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe6f9ceb39b3f67636834daa781ea3a7bba916fadf5f97052b9389bd7cc16157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6f9ceb39b3f67636834daa781ea3a7bba916fadf5f97052b9389bd7cc16157->enter($__internal_fe6f9ceb39b3f67636834daa781ea3a7bba916fadf5f97052b9389bd7cc16157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_03d5a3238fb3efa968851e708ea2ba62c2a48f15a7be17f2dd9a5421736cfb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d5a3238fb3efa968851e708ea2ba62c2a48f15a7be17f2dd9a5421736cfb28->enter($__internal_03d5a3238fb3efa968851e708ea2ba62c2a48f15a7be17f2dd9a5421736cfb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_03d5a3238fb3efa968851e708ea2ba62c2a48f15a7be17f2dd9a5421736cfb28->leave($__internal_03d5a3238fb3efa968851e708ea2ba62c2a48f15a7be17f2dd9a5421736cfb28_prof);

        
        $__internal_fe6f9ceb39b3f67636834daa781ea3a7bba916fadf5f97052b9389bd7cc16157->leave($__internal_fe6f9ceb39b3f67636834daa781ea3a7bba916fadf5f97052b9389bd7cc16157_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
