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
        $__internal_4cdfc3692be4f8bdff3fc3a7f6ce6f5a58b2a2395ac26d8b1f70397336ad13cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cdfc3692be4f8bdff3fc3a7f6ce6f5a58b2a2395ac26d8b1f70397336ad13cd->enter($__internal_4cdfc3692be4f8bdff3fc3a7f6ce6f5a58b2a2395ac26d8b1f70397336ad13cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_5ecda6139d7237645f6d66a76e5791298c2c5c448a39e03d8325d724925517c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecda6139d7237645f6d66a76e5791298c2c5c448a39e03d8325d724925517c2->enter($__internal_5ecda6139d7237645f6d66a76e5791298c2c5c448a39e03d8325d724925517c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdfc3692be4f8bdff3fc3a7f6ce6f5a58b2a2395ac26d8b1f70397336ad13cd->leave($__internal_4cdfc3692be4f8bdff3fc3a7f6ce6f5a58b2a2395ac26d8b1f70397336ad13cd_prof);

        
        $__internal_5ecda6139d7237645f6d66a76e5791298c2c5c448a39e03d8325d724925517c2->leave($__internal_5ecda6139d7237645f6d66a76e5791298c2c5c448a39e03d8325d724925517c2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaab24bca25a7938506b8ba63e88de614ffaca50a7f142fe90476ee0e5eae0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaab24bca25a7938506b8ba63e88de614ffaca50a7f142fe90476ee0e5eae0cc->enter($__internal_eaab24bca25a7938506b8ba63e88de614ffaca50a7f142fe90476ee0e5eae0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_149fef78d376a2162ddc31c2da5401238c9cfb1164f17b87d508ad3b3083de5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149fef78d376a2162ddc31c2da5401238c9cfb1164f17b87d508ad3b3083de5b->enter($__internal_149fef78d376a2162ddc31c2da5401238c9cfb1164f17b87d508ad3b3083de5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_149fef78d376a2162ddc31c2da5401238c9cfb1164f17b87d508ad3b3083de5b->leave($__internal_149fef78d376a2162ddc31c2da5401238c9cfb1164f17b87d508ad3b3083de5b_prof);

        
        $__internal_eaab24bca25a7938506b8ba63e88de614ffaca50a7f142fe90476ee0e5eae0cc->leave($__internal_eaab24bca25a7938506b8ba63e88de614ffaca50a7f142fe90476ee0e5eae0cc_prof);

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
