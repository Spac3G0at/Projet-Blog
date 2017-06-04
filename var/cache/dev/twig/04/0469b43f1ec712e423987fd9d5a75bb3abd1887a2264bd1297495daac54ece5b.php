<?php

/* @FOSUser/Security/Modal/login_content.html.twig */
class __TwigTemplate_a8bc2aef823016eb5367c1727ebb73a6b757027755fc57ab2177a69c82a88efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b79d2866fa91b6e779a9e0de4b8340de3feb4661bc057ee0df3433ea30a88ac7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79d2866fa91b6e779a9e0de4b8340de3feb4661bc057ee0df3433ea30a88ac7->enter($__internal_b79d2866fa91b6e779a9e0de4b8340de3feb4661bc057ee0df3433ea30a88ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login_content.html.twig"));

        $__internal_686ee9a736aefceff74f338fdfcd1306ff6d83820c570ced8f472658747b9f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686ee9a736aefceff74f338fdfcd1306ff6d83820c570ced8f472658747b9f51->enter($__internal_686ee9a736aefceff74f338fdfcd1306ff6d83820c570ced8f472658747b9f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form class=\"form-group\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "    <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <br>
    <input id=\"submit-login\" class=\"btn btn-primary form-control center-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_b79d2866fa91b6e779a9e0de4b8340de3feb4661bc057ee0df3433ea30a88ac7->leave($__internal_b79d2866fa91b6e779a9e0de4b8340de3feb4661bc057ee0df3433ea30a88ac7_prof);

        
        $__internal_686ee9a736aefceff74f338fdfcd1306ff6d83820c570ced8f472658747b9f51->leave($__internal_686ee9a736aefceff74f338fdfcd1306ff6d83820c570ced8f472658747b9f51_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/Modal/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  68 => 18,  61 => 14,  56 => 12,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form class=\"form-group\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
    <label for=\"username\">{{ 'security.login.username'|trans }}</label>
    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">{{ 'security.login.password'|trans }}</label>
    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
    <br>
    <input id=\"submit-login\" class=\"btn btn-primary form-control center-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>
", "@FOSUser/Security/Modal/login_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login_content.html.twig");
    }
}
