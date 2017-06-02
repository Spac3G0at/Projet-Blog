<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_fd026a015c68069b67db1ee6b82d85915fd67d31ef7737ce23c472f26f63226c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_88f65e7bc0edbd3ec3d0225cf148a585bbc641279bc65d757442df554e431915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88f65e7bc0edbd3ec3d0225cf148a585bbc641279bc65d757442df554e431915->enter($__internal_88f65e7bc0edbd3ec3d0225cf148a585bbc641279bc65d757442df554e431915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_29e16faad6ea4a2e13b60cd3060cf507a2b9f3512ae57b4499c8a434a8fd5ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e16faad6ea4a2e13b60cd3060cf507a2b9f3512ae57b4499c8a434a8fd5ced->enter($__internal_29e16faad6ea4a2e13b60cd3060cf507a2b9f3512ae57b4499c8a434a8fd5ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88f65e7bc0edbd3ec3d0225cf148a585bbc641279bc65d757442df554e431915->leave($__internal_88f65e7bc0edbd3ec3d0225cf148a585bbc641279bc65d757442df554e431915_prof);

        
        $__internal_29e16faad6ea4a2e13b60cd3060cf507a2b9f3512ae57b4499c8a434a8fd5ced->leave($__internal_29e16faad6ea4a2e13b60cd3060cf507a2b9f3512ae57b4499c8a434a8fd5ced_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f86c917f3e27aec4ab7f0f820dbb65915c5daba27302756c2c08b4a3d7d7de1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86c917f3e27aec4ab7f0f820dbb65915c5daba27302756c2c08b4a3d7d7de1c->enter($__internal_f86c917f3e27aec4ab7f0f820dbb65915c5daba27302756c2c08b4a3d7d7de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1df31e021fae80bdaef7a84912d24eeb060d0c0ca9d0972a2769d361154efdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df31e021fae80bdaef7a84912d24eeb060d0c0ca9d0972a2769d361154efdcf->enter($__internal_1df31e021fae80bdaef7a84912d24eeb060d0c0ca9d0972a2769d361154efdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_1df31e021fae80bdaef7a84912d24eeb060d0c0ca9d0972a2769d361154efdcf->leave($__internal_1df31e021fae80bdaef7a84912d24eeb060d0c0ca9d0972a2769d361154efdcf_prof);

        
        $__internal_f86c917f3e27aec4ab7f0f820dbb65915c5daba27302756c2c08b4a3d7d7de1c->leave($__internal_f86c917f3e27aec4ab7f0f820dbb65915c5daba27302756c2c08b4a3d7d7de1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
