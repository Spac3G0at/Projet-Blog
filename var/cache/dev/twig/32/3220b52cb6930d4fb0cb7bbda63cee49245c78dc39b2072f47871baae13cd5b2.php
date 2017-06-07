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
        $__internal_55076a80f30700df4d4ae91668919af73ee5a42d31dda4c9adecbd58c5826b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55076a80f30700df4d4ae91668919af73ee5a42d31dda4c9adecbd58c5826b97->enter($__internal_55076a80f30700df4d4ae91668919af73ee5a42d31dda4c9adecbd58c5826b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_1f1fde47e25140ed77076e9e92856d797fb7c20894708cc97faf315047671b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1fde47e25140ed77076e9e92856d797fb7c20894708cc97faf315047671b6c->enter($__internal_1f1fde47e25140ed77076e9e92856d797fb7c20894708cc97faf315047671b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55076a80f30700df4d4ae91668919af73ee5a42d31dda4c9adecbd58c5826b97->leave($__internal_55076a80f30700df4d4ae91668919af73ee5a42d31dda4c9adecbd58c5826b97_prof);

        
        $__internal_1f1fde47e25140ed77076e9e92856d797fb7c20894708cc97faf315047671b6c->leave($__internal_1f1fde47e25140ed77076e9e92856d797fb7c20894708cc97faf315047671b6c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33425c4af6debc60db3e9e01a5ab1c747c49ec6ab9145e622f9ef707e4c2ed38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33425c4af6debc60db3e9e01a5ab1c747c49ec6ab9145e622f9ef707e4c2ed38->enter($__internal_33425c4af6debc60db3e9e01a5ab1c747c49ec6ab9145e622f9ef707e4c2ed38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d2273cd7c95fa1af7f5d7450af6fcb3a83209f68b368430bd79b25c8bacf103c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2273cd7c95fa1af7f5d7450af6fcb3a83209f68b368430bd79b25c8bacf103c->enter($__internal_d2273cd7c95fa1af7f5d7450af6fcb3a83209f68b368430bd79b25c8bacf103c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d2273cd7c95fa1af7f5d7450af6fcb3a83209f68b368430bd79b25c8bacf103c->leave($__internal_d2273cd7c95fa1af7f5d7450af6fcb3a83209f68b368430bd79b25c8bacf103c_prof);

        
        $__internal_33425c4af6debc60db3e9e01a5ab1c747c49ec6ab9145e622f9ef707e4c2ed38->leave($__internal_33425c4af6debc60db3e9e01a5ab1c747c49ec6ab9145e622f9ef707e4c2ed38_prof);

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
