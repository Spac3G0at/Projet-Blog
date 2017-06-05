<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_78ea7682410c82f11a53f68624d7f5de4da22e689be40b284b614b366ab6d00a extends Twig_Template
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
        $__internal_0ec5eeefb3f8d745bca9dac8fd8927f361f4d571900880af1fb1aa247c8d80d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec5eeefb3f8d745bca9dac8fd8927f361f4d571900880af1fb1aa247c8d80d1->enter($__internal_0ec5eeefb3f8d745bca9dac8fd8927f361f4d571900880af1fb1aa247c8d80d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_76434f886511d58b23c3782a9de1c586f39e45fda07584227a258a89d4598067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76434f886511d58b23c3782a9de1c586f39e45fda07584227a258a89d4598067->enter($__internal_76434f886511d58b23c3782a9de1c586f39e45fda07584227a258a89d4598067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec5eeefb3f8d745bca9dac8fd8927f361f4d571900880af1fb1aa247c8d80d1->leave($__internal_0ec5eeefb3f8d745bca9dac8fd8927f361f4d571900880af1fb1aa247c8d80d1_prof);

        
        $__internal_76434f886511d58b23c3782a9de1c586f39e45fda07584227a258a89d4598067->leave($__internal_76434f886511d58b23c3782a9de1c586f39e45fda07584227a258a89d4598067_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_655b31ca0a310a7d61e547000330ab18c7bee50772187f226cb64a65fa8e20a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655b31ca0a310a7d61e547000330ab18c7bee50772187f226cb64a65fa8e20a2->enter($__internal_655b31ca0a310a7d61e547000330ab18c7bee50772187f226cb64a65fa8e20a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_61518522b083cfd22c2797e2af0094cf7afc51b103cdff72865a3a9f166b5e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61518522b083cfd22c2797e2af0094cf7afc51b103cdff72865a3a9f166b5e00->enter($__internal_61518522b083cfd22c2797e2af0094cf7afc51b103cdff72865a3a9f166b5e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_61518522b083cfd22c2797e2af0094cf7afc51b103cdff72865a3a9f166b5e00->leave($__internal_61518522b083cfd22c2797e2af0094cf7afc51b103cdff72865a3a9f166b5e00_prof);

        
        $__internal_655b31ca0a310a7d61e547000330ab18c7bee50772187f226cb64a65fa8e20a2->leave($__internal_655b31ca0a310a7d61e547000330ab18c7bee50772187f226cb64a65fa8e20a2_prof);

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
