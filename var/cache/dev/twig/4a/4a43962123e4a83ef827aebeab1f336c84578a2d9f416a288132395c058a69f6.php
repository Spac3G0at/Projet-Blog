<?php

/* FOSUserBundle:Registration/Modal:check_email.html.twig */
class __TwigTemplate_15ac48d343c88955ae6c0959de11aabdd75009cef2b6ef04bfa679f03c13e852 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration/Modal:check_email.html.twig", 1);
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
        $__internal_2e8d4455b0b4613090eed7f78c13c0c60ec9a90b29ede75d53d3317f1b4b799a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8d4455b0b4613090eed7f78c13c0c60ec9a90b29ede75d53d3317f1b4b799a->enter($__internal_2e8d4455b0b4613090eed7f78c13c0c60ec9a90b29ede75d53d3317f1b4b799a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $__internal_9cebd59382cf1a12eb82b2ce8f255d05f40db44df419e081ef850cc3ea3b7be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cebd59382cf1a12eb82b2ce8f255d05f40db44df419e081ef850cc3ea3b7be6->enter($__internal_9cebd59382cf1a12eb82b2ce8f255d05f40db44df419e081ef850cc3ea3b7be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e8d4455b0b4613090eed7f78c13c0c60ec9a90b29ede75d53d3317f1b4b799a->leave($__internal_2e8d4455b0b4613090eed7f78c13c0c60ec9a90b29ede75d53d3317f1b4b799a_prof);

        
        $__internal_9cebd59382cf1a12eb82b2ce8f255d05f40db44df419e081ef850cc3ea3b7be6->leave($__internal_9cebd59382cf1a12eb82b2ce8f255d05f40db44df419e081ef850cc3ea3b7be6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a52b60bf149f6d2d625403d60e82c4c88f6e8aeb07c338fcbe4033eed3243ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a52b60bf149f6d2d625403d60e82c4c88f6e8aeb07c338fcbe4033eed3243ca->enter($__internal_3a52b60bf149f6d2d625403d60e82c4c88f6e8aeb07c338fcbe4033eed3243ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61a482d0b2d6f9e857af691df4ee9d08850393495d8801ee34a0d3f3e928b790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a482d0b2d6f9e857af691df4ee9d08850393495d8801ee34a0d3f3e928b790->enter($__internal_61a482d0b2d6f9e857af691df4ee9d08850393495d8801ee34a0d3f3e928b790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_61a482d0b2d6f9e857af691df4ee9d08850393495d8801ee34a0d3f3e928b790->leave($__internal_61a482d0b2d6f9e857af691df4ee9d08850393495d8801ee34a0d3f3e928b790_prof);

        
        $__internal_3a52b60bf149f6d2d625403d60e82c4c88f6e8aeb07c338fcbe4033eed3243ca->leave($__internal_3a52b60bf149f6d2d625403d60e82c4c88f6e8aeb07c338fcbe4033eed3243ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration/Modal:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/check_email.html.twig");
    }
}
