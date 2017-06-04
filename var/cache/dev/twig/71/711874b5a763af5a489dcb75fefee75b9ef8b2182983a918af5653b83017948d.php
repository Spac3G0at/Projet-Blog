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
        $__internal_3ffc6566eff2dbbc86e29c7d6f252f4193ef5039496b6b57a70995d353d9be0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ffc6566eff2dbbc86e29c7d6f252f4193ef5039496b6b57a70995d353d9be0b->enter($__internal_3ffc6566eff2dbbc86e29c7d6f252f4193ef5039496b6b57a70995d353d9be0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_6349560d46fe0e4fdfce602fb3454ff3305e53b929ec1c08d0535b69166a4a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6349560d46fe0e4fdfce602fb3454ff3305e53b929ec1c08d0535b69166a4a7c->enter($__internal_6349560d46fe0e4fdfce602fb3454ff3305e53b929ec1c08d0535b69166a4a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ffc6566eff2dbbc86e29c7d6f252f4193ef5039496b6b57a70995d353d9be0b->leave($__internal_3ffc6566eff2dbbc86e29c7d6f252f4193ef5039496b6b57a70995d353d9be0b_prof);

        
        $__internal_6349560d46fe0e4fdfce602fb3454ff3305e53b929ec1c08d0535b69166a4a7c->leave($__internal_6349560d46fe0e4fdfce602fb3454ff3305e53b929ec1c08d0535b69166a4a7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0bca2b174bc539be46cbf7f21ba40bf658da109b8caf432657b36deeb24c4d1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bca2b174bc539be46cbf7f21ba40bf658da109b8caf432657b36deeb24c4d1c->enter($__internal_0bca2b174bc539be46cbf7f21ba40bf658da109b8caf432657b36deeb24c4d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0000314da6037c95e454515cc0480ebb6605baef58748e347029807a0a250cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0000314da6037c95e454515cc0480ebb6605baef58748e347029807a0a250cc2->enter($__internal_0000314da6037c95e454515cc0480ebb6605baef58748e347029807a0a250cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_0000314da6037c95e454515cc0480ebb6605baef58748e347029807a0a250cc2->leave($__internal_0000314da6037c95e454515cc0480ebb6605baef58748e347029807a0a250cc2_prof);

        
        $__internal_0bca2b174bc539be46cbf7f21ba40bf658da109b8caf432657b36deeb24c4d1c->leave($__internal_0bca2b174bc539be46cbf7f21ba40bf658da109b8caf432657b36deeb24c4d1c_prof);

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
