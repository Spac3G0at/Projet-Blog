<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_e0d75de853a97ee80dd8edfe86d91737f099aeb6952a0a251fa788b3eb54759b extends Twig_Template
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
        $__internal_263bfd674fb99de88861cc60c12bfc63fe89523cf7065673ff1a9b078954cf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263bfd674fb99de88861cc60c12bfc63fe89523cf7065673ff1a9b078954cf4a->enter($__internal_263bfd674fb99de88861cc60c12bfc63fe89523cf7065673ff1a9b078954cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_127318293e3bd162994e69a3bd761bccd4025d7ec657ff19918aa32972eb8c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127318293e3bd162994e69a3bd761bccd4025d7ec657ff19918aa32972eb8c4b->enter($__internal_127318293e3bd162994e69a3bd761bccd4025d7ec657ff19918aa32972eb8c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_263bfd674fb99de88861cc60c12bfc63fe89523cf7065673ff1a9b078954cf4a->leave($__internal_263bfd674fb99de88861cc60c12bfc63fe89523cf7065673ff1a9b078954cf4a_prof);

        
        $__internal_127318293e3bd162994e69a3bd761bccd4025d7ec657ff19918aa32972eb8c4b->leave($__internal_127318293e3bd162994e69a3bd761bccd4025d7ec657ff19918aa32972eb8c4b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b473afbb3ffcb0e50e594769d747a360f498e9a14646ec46e06c2ac5e172131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b473afbb3ffcb0e50e594769d747a360f498e9a14646ec46e06c2ac5e172131->enter($__internal_4b473afbb3ffcb0e50e594769d747a360f498e9a14646ec46e06c2ac5e172131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0faf50b38be5fb5bf942357dd209abe07dba4ef9559cd8093d68520ac3984ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0faf50b38be5fb5bf942357dd209abe07dba4ef9559cd8093d68520ac3984ff6->enter($__internal_0faf50b38be5fb5bf942357dd209abe07dba4ef9559cd8093d68520ac3984ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_0faf50b38be5fb5bf942357dd209abe07dba4ef9559cd8093d68520ac3984ff6->leave($__internal_0faf50b38be5fb5bf942357dd209abe07dba4ef9559cd8093d68520ac3984ff6_prof);

        
        $__internal_4b473afbb3ffcb0e50e594769d747a360f498e9a14646ec46e06c2ac5e172131->leave($__internal_4b473afbb3ffcb0e50e594769d747a360f498e9a14646ec46e06c2ac5e172131_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/Modal/login.html.twig";
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
    {{ include('@FOSUser/Security/Modal/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/Modal/login.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login.html.twig");
    }
}
