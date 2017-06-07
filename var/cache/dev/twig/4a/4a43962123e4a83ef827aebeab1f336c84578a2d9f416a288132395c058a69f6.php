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
        $__internal_a9f3aff2197505fa5f5f4822af22f52bae00b0c8e7189e1ef298094a9c2241f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f3aff2197505fa5f5f4822af22f52bae00b0c8e7189e1ef298094a9c2241f5->enter($__internal_a9f3aff2197505fa5f5f4822af22f52bae00b0c8e7189e1ef298094a9c2241f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $__internal_03d6cc768875393d1d009abbccefe5ef831c611908d049c8ff92b762f97d17b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d6cc768875393d1d009abbccefe5ef831c611908d049c8ff92b762f97d17b9->enter($__internal_03d6cc768875393d1d009abbccefe5ef831c611908d049c8ff92b762f97d17b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f3aff2197505fa5f5f4822af22f52bae00b0c8e7189e1ef298094a9c2241f5->leave($__internal_a9f3aff2197505fa5f5f4822af22f52bae00b0c8e7189e1ef298094a9c2241f5_prof);

        
        $__internal_03d6cc768875393d1d009abbccefe5ef831c611908d049c8ff92b762f97d17b9->leave($__internal_03d6cc768875393d1d009abbccefe5ef831c611908d049c8ff92b762f97d17b9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5473fc98967d1543217ef717c3cb4647769ec59f724dccafd6b6e259fcdd5e34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5473fc98967d1543217ef717c3cb4647769ec59f724dccafd6b6e259fcdd5e34->enter($__internal_5473fc98967d1543217ef717c3cb4647769ec59f724dccafd6b6e259fcdd5e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d182607cac03cc1aedf9218f755708f82ab3bc0e0f73ebd1e73f56bc6402e625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d182607cac03cc1aedf9218f755708f82ab3bc0e0f73ebd1e73f56bc6402e625->enter($__internal_d182607cac03cc1aedf9218f755708f82ab3bc0e0f73ebd1e73f56bc6402e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d182607cac03cc1aedf9218f755708f82ab3bc0e0f73ebd1e73f56bc6402e625->leave($__internal_d182607cac03cc1aedf9218f755708f82ab3bc0e0f73ebd1e73f56bc6402e625_prof);

        
        $__internal_5473fc98967d1543217ef717c3cb4647769ec59f724dccafd6b6e259fcdd5e34->leave($__internal_5473fc98967d1543217ef717c3cb4647769ec59f724dccafd6b6e259fcdd5e34_prof);

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
