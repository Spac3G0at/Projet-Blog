<?php

/* FOSUserBundle:Registration/Modal:check_email.html.twig */
class __TwigTemplate_9124a94e36e6327bd4264cad7bba7775a46cf735379ecd6bcc4c1ee811a58dac extends Twig_Template
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
        $__internal_1d995a15ec971478acb86cde17843429a4a52d518d131a8a9e22f7816cc71d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d995a15ec971478acb86cde17843429a4a52d518d131a8a9e22f7816cc71d62->enter($__internal_1d995a15ec971478acb86cde17843429a4a52d518d131a8a9e22f7816cc71d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $__internal_0fa6b7d8a3e1b842b0693212dbf86bdc7aa4b7f9af5f71fbeeb07b8e6cb6d80b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa6b7d8a3e1b842b0693212dbf86bdc7aa4b7f9af5f71fbeeb07b8e6cb6d80b->enter($__internal_0fa6b7d8a3e1b842b0693212dbf86bdc7aa4b7f9af5f71fbeeb07b8e6cb6d80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d995a15ec971478acb86cde17843429a4a52d518d131a8a9e22f7816cc71d62->leave($__internal_1d995a15ec971478acb86cde17843429a4a52d518d131a8a9e22f7816cc71d62_prof);

        
        $__internal_0fa6b7d8a3e1b842b0693212dbf86bdc7aa4b7f9af5f71fbeeb07b8e6cb6d80b->leave($__internal_0fa6b7d8a3e1b842b0693212dbf86bdc7aa4b7f9af5f71fbeeb07b8e6cb6d80b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb0d5b8fa20cdebefa60414c5294a39b316a493865904f30eda226448526a668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0d5b8fa20cdebefa60414c5294a39b316a493865904f30eda226448526a668->enter($__internal_fb0d5b8fa20cdebefa60414c5294a39b316a493865904f30eda226448526a668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1704dd8ed567040f2b9f7b5220f0019bd6f8b1f694528375833f1f640bf96a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1704dd8ed567040f2b9f7b5220f0019bd6f8b1f694528375833f1f640bf96a90->enter($__internal_1704dd8ed567040f2b9f7b5220f0019bd6f8b1f694528375833f1f640bf96a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1704dd8ed567040f2b9f7b5220f0019bd6f8b1f694528375833f1f640bf96a90->leave($__internal_1704dd8ed567040f2b9f7b5220f0019bd6f8b1f694528375833f1f640bf96a90_prof);

        
        $__internal_fb0d5b8fa20cdebefa60414c5294a39b316a493865904f30eda226448526a668->leave($__internal_fb0d5b8fa20cdebefa60414c5294a39b316a493865904f30eda226448526a668_prof);

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
