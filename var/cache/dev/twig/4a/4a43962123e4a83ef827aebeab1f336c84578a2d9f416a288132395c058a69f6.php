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
        $__internal_3928c6218f6adb1581cd6bbd8fe01aad740a87f6d2cb8671648eb69772003c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3928c6218f6adb1581cd6bbd8fe01aad740a87f6d2cb8671648eb69772003c63->enter($__internal_3928c6218f6adb1581cd6bbd8fe01aad740a87f6d2cb8671648eb69772003c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $__internal_ea8d97d4dc48ef7e0111af9dfac976cde10abe6688faf334ba98964c69d48e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8d97d4dc48ef7e0111af9dfac976cde10abe6688faf334ba98964c69d48e79->enter($__internal_ea8d97d4dc48ef7e0111af9dfac976cde10abe6688faf334ba98964c69d48e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3928c6218f6adb1581cd6bbd8fe01aad740a87f6d2cb8671648eb69772003c63->leave($__internal_3928c6218f6adb1581cd6bbd8fe01aad740a87f6d2cb8671648eb69772003c63_prof);

        
        $__internal_ea8d97d4dc48ef7e0111af9dfac976cde10abe6688faf334ba98964c69d48e79->leave($__internal_ea8d97d4dc48ef7e0111af9dfac976cde10abe6688faf334ba98964c69d48e79_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c184622eb021198abe3a19e89a4d7883d6a0c5e5f7b4e658a030a8400e8fb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c184622eb021198abe3a19e89a4d7883d6a0c5e5f7b4e658a030a8400e8fb8c->enter($__internal_7c184622eb021198abe3a19e89a4d7883d6a0c5e5f7b4e658a030a8400e8fb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d7db66250fd12782291ca958f57de405e8ef4e67f0c6375fc4c7384354b03a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7db66250fd12782291ca958f57de405e8ef4e67f0c6375fc4c7384354b03a0->enter($__internal_8d7db66250fd12782291ca958f57de405e8ef4e67f0c6375fc4c7384354b03a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8d7db66250fd12782291ca958f57de405e8ef4e67f0c6375fc4c7384354b03a0->leave($__internal_8d7db66250fd12782291ca958f57de405e8ef4e67f0c6375fc4c7384354b03a0_prof);

        
        $__internal_7c184622eb021198abe3a19e89a4d7883d6a0c5e5f7b4e658a030a8400e8fb8c->leave($__internal_7c184622eb021198abe3a19e89a4d7883d6a0c5e5f7b4e658a030a8400e8fb8c_prof);

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
