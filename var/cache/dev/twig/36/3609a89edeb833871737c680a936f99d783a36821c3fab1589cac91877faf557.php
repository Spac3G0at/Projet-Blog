<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_699e67d01a5a813515d5831d2a7c88b73b07b40b5a48555455afac50954eb4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c0ff4dd3163042f439882208d461aa1ff5e4315a793371a0eea19ad4dee6f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0ff4dd3163042f439882208d461aa1ff5e4315a793371a0eea19ad4dee6f8d->enter($__internal_3c0ff4dd3163042f439882208d461aa1ff5e4315a793371a0eea19ad4dee6f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_2982034ac753740b9cbb185f2fbae5855f596de8e640f756dfefed4c066112be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2982034ac753740b9cbb185f2fbae5855f596de8e640f756dfefed4c066112be->enter($__internal_2982034ac753740b9cbb185f2fbae5855f596de8e640f756dfefed4c066112be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3c0ff4dd3163042f439882208d461aa1ff5e4315a793371a0eea19ad4dee6f8d->leave($__internal_3c0ff4dd3163042f439882208d461aa1ff5e4315a793371a0eea19ad4dee6f8d_prof);

        
        $__internal_2982034ac753740b9cbb185f2fbae5855f596de8e640f756dfefed4c066112be->leave($__internal_2982034ac753740b9cbb185f2fbae5855f596de8e640f756dfefed4c066112be_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8d6b0f8b7f908e38426dae074014b03dc87ac9e9ebb8856bee7f2a260001e73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d6b0f8b7f908e38426dae074014b03dc87ac9e9ebb8856bee7f2a260001e73->enter($__internal_c8d6b0f8b7f908e38426dae074014b03dc87ac9e9ebb8856bee7f2a260001e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0cce5e2f3b9479ab8d0a0863ecbfe1cb742e517c5144a5a9441e65ffb03f8499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cce5e2f3b9479ab8d0a0863ecbfe1cb742e517c5144a5a9441e65ffb03f8499->enter($__internal_0cce5e2f3b9479ab8d0a0863ecbfe1cb742e517c5144a5a9441e65ffb03f8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0cce5e2f3b9479ab8d0a0863ecbfe1cb742e517c5144a5a9441e65ffb03f8499->leave($__internal_0cce5e2f3b9479ab8d0a0863ecbfe1cb742e517c5144a5a9441e65ffb03f8499_prof);

        
        $__internal_c8d6b0f8b7f908e38426dae074014b03dc87ac9e9ebb8856bee7f2a260001e73->leave($__internal_c8d6b0f8b7f908e38426dae074014b03dc87ac9e9ebb8856bee7f2a260001e73_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
