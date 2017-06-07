<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_4f5acc3505ea5fe61cd88bf70ad5b45c6071f2920ee6c0d4995395f79b9852db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_52614dfc67d3fc5af15ba260ce5e72e53b0501caffd818a2b78a17df2649a7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52614dfc67d3fc5af15ba260ce5e72e53b0501caffd818a2b78a17df2649a7d9->enter($__internal_52614dfc67d3fc5af15ba260ce5e72e53b0501caffd818a2b78a17df2649a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_55540d3e99a73bf587d5febfffd5b737339da69434895ee74a53cb026298ee8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55540d3e99a73bf587d5febfffd5b737339da69434895ee74a53cb026298ee8d->enter($__internal_55540d3e99a73bf587d5febfffd5b737339da69434895ee74a53cb026298ee8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52614dfc67d3fc5af15ba260ce5e72e53b0501caffd818a2b78a17df2649a7d9->leave($__internal_52614dfc67d3fc5af15ba260ce5e72e53b0501caffd818a2b78a17df2649a7d9_prof);

        
        $__internal_55540d3e99a73bf587d5febfffd5b737339da69434895ee74a53cb026298ee8d->leave($__internal_55540d3e99a73bf587d5febfffd5b737339da69434895ee74a53cb026298ee8d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78d0c8abda0c8cf250fda165a1c3956811d5f3389de10d7e5dd042415a25a508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d0c8abda0c8cf250fda165a1c3956811d5f3389de10d7e5dd042415a25a508->enter($__internal_78d0c8abda0c8cf250fda165a1c3956811d5f3389de10d7e5dd042415a25a508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c1e1f07579403bbef6a7954cc6132ef428497984741b42ef06cb0c116d7d9ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e1f07579403bbef6a7954cc6132ef428497984741b42ef06cb0c116d7d9ac7->enter($__internal_c1e1f07579403bbef6a7954cc6132ef428497984741b42ef06cb0c116d7d9ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_c1e1f07579403bbef6a7954cc6132ef428497984741b42ef06cb0c116d7d9ac7->leave($__internal_c1e1f07579403bbef6a7954cc6132ef428497984741b42ef06cb0c116d7d9ac7_prof);

        
        $__internal_78d0c8abda0c8cf250fda165a1c3956811d5f3389de10d7e5dd042415a25a508->leave($__internal_78d0c8abda0c8cf250fda165a1c3956811d5f3389de10d7e5dd042415a25a508_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
