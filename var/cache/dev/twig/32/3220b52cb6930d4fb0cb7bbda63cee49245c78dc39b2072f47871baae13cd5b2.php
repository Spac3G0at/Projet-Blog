<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_0a42229d051fcaad86fa917c992ef3b55c921b91a71b33a60c43cfc2cc7cff67 extends Twig_Template
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
        $__internal_88e0571b4f53acd193f68d4a31e8da23f3c6903fa97b14c458f385f2b001ae12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e0571b4f53acd193f68d4a31e8da23f3c6903fa97b14c458f385f2b001ae12->enter($__internal_88e0571b4f53acd193f68d4a31e8da23f3c6903fa97b14c458f385f2b001ae12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e375768388699268d56461418dac0d61ffe15233d90704821a2aa88ea50a23ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e375768388699268d56461418dac0d61ffe15233d90704821a2aa88ea50a23ee->enter($__internal_e375768388699268d56461418dac0d61ffe15233d90704821a2aa88ea50a23ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e0571b4f53acd193f68d4a31e8da23f3c6903fa97b14c458f385f2b001ae12->leave($__internal_88e0571b4f53acd193f68d4a31e8da23f3c6903fa97b14c458f385f2b001ae12_prof);

        
        $__internal_e375768388699268d56461418dac0d61ffe15233d90704821a2aa88ea50a23ee->leave($__internal_e375768388699268d56461418dac0d61ffe15233d90704821a2aa88ea50a23ee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12a60dafbf5ee4ae4a5988a6470161d37663d0284f62cbf8aae0381285b71a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a60dafbf5ee4ae4a5988a6470161d37663d0284f62cbf8aae0381285b71a2c->enter($__internal_12a60dafbf5ee4ae4a5988a6470161d37663d0284f62cbf8aae0381285b71a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b1794a6ec7b1acd469e69304c05b4d7849fb0172c30ced7204476080ee4fce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b1794a6ec7b1acd469e69304c05b4d7849fb0172c30ced7204476080ee4fce0->enter($__internal_2b1794a6ec7b1acd469e69304c05b4d7849fb0172c30ced7204476080ee4fce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2b1794a6ec7b1acd469e69304c05b4d7849fb0172c30ced7204476080ee4fce0->leave($__internal_2b1794a6ec7b1acd469e69304c05b4d7849fb0172c30ced7204476080ee4fce0_prof);

        
        $__internal_12a60dafbf5ee4ae4a5988a6470161d37663d0284f62cbf8aae0381285b71a2c->leave($__internal_12a60dafbf5ee4ae4a5988a6470161d37663d0284f62cbf8aae0381285b71a2c_prof);

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
