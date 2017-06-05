<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f9719300c1757eeab2870d72d0cd4cc54a0cba9b9378ac1b863557f04faa6509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_7def09bfd6548c449456a16ca065fd1590ca394e2b17f8cf489d6cd75fca3af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7def09bfd6548c449456a16ca065fd1590ca394e2b17f8cf489d6cd75fca3af5->enter($__internal_7def09bfd6548c449456a16ca065fd1590ca394e2b17f8cf489d6cd75fca3af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_8403806ea465e1565812f628f2d1cfe073f045ce6a700ad710bfc8ae31d38c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8403806ea465e1565812f628f2d1cfe073f045ce6a700ad710bfc8ae31d38c41->enter($__internal_8403806ea465e1565812f628f2d1cfe073f045ce6a700ad710bfc8ae31d38c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7def09bfd6548c449456a16ca065fd1590ca394e2b17f8cf489d6cd75fca3af5->leave($__internal_7def09bfd6548c449456a16ca065fd1590ca394e2b17f8cf489d6cd75fca3af5_prof);

        
        $__internal_8403806ea465e1565812f628f2d1cfe073f045ce6a700ad710bfc8ae31d38c41->leave($__internal_8403806ea465e1565812f628f2d1cfe073f045ce6a700ad710bfc8ae31d38c41_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58a47a0983f7a8f068b58db35e23fa4f8147088832c079b4bb6efc6d7b7abb13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a47a0983f7a8f068b58db35e23fa4f8147088832c079b4bb6efc6d7b7abb13->enter($__internal_58a47a0983f7a8f068b58db35e23fa4f8147088832c079b4bb6efc6d7b7abb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2ca6e21f1380e065eaf89b96d0df2d452a5c1128228850dd8530b8e18ca96f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ca6e21f1380e065eaf89b96d0df2d452a5c1128228850dd8530b8e18ca96f9->enter($__internal_f2ca6e21f1380e065eaf89b96d0df2d452a5c1128228850dd8530b8e18ca96f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f2ca6e21f1380e065eaf89b96d0df2d452a5c1128228850dd8530b8e18ca96f9->leave($__internal_f2ca6e21f1380e065eaf89b96d0df2d452a5c1128228850dd8530b8e18ca96f9_prof);

        
        $__internal_58a47a0983f7a8f068b58db35e23fa4f8147088832c079b4bb6efc6d7b7abb13->leave($__internal_58a47a0983f7a8f068b58db35e23fa4f8147088832c079b4bb6efc6d7b7abb13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
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
", "FOSUserBundle:Registration:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
