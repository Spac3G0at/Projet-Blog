<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_507ca3e7f351ef7340bd0392056f583c25c56ccc1d7794b29586b8d63f76b44f extends Twig_Template
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
        $__internal_84cc4515fc692eee4d54c154bf2ebdc9ef4235d9182ca589326c7c46c73f5e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84cc4515fc692eee4d54c154bf2ebdc9ef4235d9182ca589326c7c46c73f5e9e->enter($__internal_84cc4515fc692eee4d54c154bf2ebdc9ef4235d9182ca589326c7c46c73f5e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_729213261cd1117e40f54aa0d1723ce94c145a96e5a31fa3700e1e412a1557ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729213261cd1117e40f54aa0d1723ce94c145a96e5a31fa3700e1e412a1557ce->enter($__internal_729213261cd1117e40f54aa0d1723ce94c145a96e5a31fa3700e1e412a1557ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
    ";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "
    <form class=\"form-group text-center center-block\" action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 11
        echo "<!-- lg md sm xs -->
<div class=\"row\">
        <div class=\"col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
            <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input class=\"form-control center-block\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </div>
</div>


<div class=\"row\">
        <div class=\"col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
            <label class=\"\" for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input class=\"form-control center-block\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        </div>

    </div>

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <br>
        <input id=\"submit-login\" class=\"btn btn-primary form-control center-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
";
        
        $__internal_84cc4515fc692eee4d54c154bf2ebdc9ef4235d9182ca589326c7c46c73f5e9e->leave($__internal_84cc4515fc692eee4d54c154bf2ebdc9ef4235d9182ca589326c7c46c73f5e9e_prof);

        
        $__internal_729213261cd1117e40f54aa0d1723ce94c145a96e5a31fa3700e1e412a1557ce->leave($__internal_729213261cd1117e40f54aa0d1723ce94c145a96e5a31fa3700e1e412a1557ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  80 => 29,  70 => 22,  60 => 15,  56 => 14,  51 => 11,  45 => 9,  43 => 8,  39 => 7,  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
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

    <form class=\"form-group text-center center-block\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
<!-- lg md sm xs -->
<div class=\"row\">
        <div class=\"col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
            <label for=\"username\">{{ 'security.login.username'|trans }}</label>
            <input class=\"form-control center-block\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
        </div>
</div>


<div class=\"row\">
        <div class=\"col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3\">
            <label class=\"\" for=\"password\">{{ 'security.login.password'|trans }}</label>
            <input class=\"form-control center-block\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
        </div>

    </div>

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
        <br>
        <input id=\"submit-login\" class=\"btn btn-primary form-control center-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
    </form>
", "@FOSUser/Security/login_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
