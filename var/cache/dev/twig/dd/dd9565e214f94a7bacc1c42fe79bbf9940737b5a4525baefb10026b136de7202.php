<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_de2f5f17cd7f0798aa232ce8644812c65e9297c5e1b666d1ef4cd9fee5157961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a52c1fb20fd830e99507f22c1629a054df2b529b0a32c3be15cb7b294545bb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a52c1fb20fd830e99507f22c1629a054df2b529b0a32c3be15cb7b294545bb0d->enter($__internal_a52c1fb20fd830e99507f22c1629a054df2b529b0a32c3be15cb7b294545bb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_5db3e229f78982d7efec7b7368a78adb7245bcc94f1f202e6d0cbc62c888ac91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db3e229f78982d7efec7b7368a78adb7245bcc94f1f202e6d0cbc62c888ac91->enter($__internal_5db3e229f78982d7efec7b7368a78adb7245bcc94f1f202e6d0cbc62c888ac91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a52c1fb20fd830e99507f22c1629a054df2b529b0a32c3be15cb7b294545bb0d->leave($__internal_a52c1fb20fd830e99507f22c1629a054df2b529b0a32c3be15cb7b294545bb0d_prof);

        
        $__internal_5db3e229f78982d7efec7b7368a78adb7245bcc94f1f202e6d0cbc62c888ac91->leave($__internal_5db3e229f78982d7efec7b7368a78adb7245bcc94f1f202e6d0cbc62c888ac91_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1504a0c93674608e238047cecb96d2f7db5bed239bdce977ad4c3b5820e9f8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1504a0c93674608e238047cecb96d2f7db5bed239bdce977ad4c3b5820e9f8c6->enter($__internal_1504a0c93674608e238047cecb96d2f7db5bed239bdce977ad4c3b5820e9f8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8434ef2cc8a5303233a61d3204bbec05335478d3a660622a0e7108c0c90fb414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8434ef2cc8a5303233a61d3204bbec05335478d3a660622a0e7108c0c90fb414->enter($__internal_8434ef2cc8a5303233a61d3204bbec05335478d3a660622a0e7108c0c90fb414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8434ef2cc8a5303233a61d3204bbec05335478d3a660622a0e7108c0c90fb414->leave($__internal_8434ef2cc8a5303233a61d3204bbec05335478d3a660622a0e7108c0c90fb414_prof);

        
        $__internal_1504a0c93674608e238047cecb96d2f7db5bed239bdce977ad4c3b5820e9f8c6->leave($__internal_1504a0c93674608e238047cecb96d2f7db5bed239bdce977ad4c3b5820e9f8c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
