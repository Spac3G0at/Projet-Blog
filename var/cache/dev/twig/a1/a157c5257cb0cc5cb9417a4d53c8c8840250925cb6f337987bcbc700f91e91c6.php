<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_7915ca6531085e54d488f5ed1fc25c802219e6a8a41e6b6171c95e814cf69e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/Profile/edit.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d9f65ba437d253826ebbef551bb167e97100d885de1d99455047106c715013d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d9f65ba437d253826ebbef551bb167e97100d885de1d99455047106c715013d->enter($__internal_8d9f65ba437d253826ebbef551bb167e97100d885de1d99455047106c715013d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_f313aafee95c29dd743f927370338909eb9e65e323b711bfe54809d808ede0c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f313aafee95c29dd743f927370338909eb9e65e323b711bfe54809d808ede0c8->enter($__internal_f313aafee95c29dd743f927370338909eb9e65e323b711bfe54809d808ede0c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d9f65ba437d253826ebbef551bb167e97100d885de1d99455047106c715013d->leave($__internal_8d9f65ba437d253826ebbef551bb167e97100d885de1d99455047106c715013d_prof);

        
        $__internal_f313aafee95c29dd743f927370338909eb9e65e323b711bfe54809d808ede0c8->leave($__internal_f313aafee95c29dd743f927370338909eb9e65e323b711bfe54809d808ede0c8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecbde6c967e1bed268469390895c417e010b8005ee3a12e3eaf3272e8b71b2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbde6c967e1bed268469390895c417e010b8005ee3a12e3eaf3272e8b71b2bc->enter($__internal_ecbde6c967e1bed268469390895c417e010b8005ee3a12e3eaf3272e8b71b2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab41f6993f2140815dc6188307d2bbd404cd50cb7bc2b724b2181277d0743951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab41f6993f2140815dc6188307d2bbd404cd50cb7bc2b724b2181277d0743951->enter($__internal_ab41f6993f2140815dc6188307d2bbd404cd50cb7bc2b724b2181277d0743951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_ab41f6993f2140815dc6188307d2bbd404cd50cb7bc2b724b2181277d0743951->leave($__internal_ab41f6993f2140815dc6188307d2bbd404cd50cb7bc2b724b2181277d0743951_prof);

        
        $__internal_ecbde6c967e1bed268469390895c417e010b8005ee3a12e3eaf3272e8b71b2bc->leave($__internal_ecbde6c967e1bed268469390895c417e010b8005ee3a12e3eaf3272e8b71b2bc_prof);

    }

    // line 7
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53bc7a0fc24a8bd6bc7e26435da21260a1e5885d5bf0a5986d071038c42e6809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bc7a0fc24a8bd6bc7e26435da21260a1e5885d5bf0a5986d071038c42e6809->enter($__internal_53bc7a0fc24a8bd6bc7e26435da21260a1e5885d5bf0a5986d071038c42e6809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f79991da78a9b967ebb582652b8080853b5a5fba9bac2f415faeb8877782ee80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79991da78a9b967ebb582652b8080853b5a5fba9bac2f415faeb8877782ee80->enter($__internal_f79991da78a9b967ebb582652b8080853b5a5fba9bac2f415faeb8877782ee80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 8
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 8)->display($context);
        
        $__internal_f79991da78a9b967ebb582652b8080853b5a5fba9bac2f415faeb8877782ee80->leave($__internal_f79991da78a9b967ebb582652b8080853b5a5fba9bac2f415faeb8877782ee80_prof);

        
        $__internal_53bc7a0fc24a8bd6bc7e26435da21260a1e5885d5bf0a5986d071038c42e6809->leave($__internal_53bc7a0fc24a8bd6bc7e26435da21260a1e5885d5bf0a5986d071038c42e6809_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 8,  66 => 7,  55 => 10,  53 => 7,  50 => 6,  41 => 5,  11 => 3,);
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

{% extends 'base.html.twig' %}

{% block body %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}

{% endblock %}", "@FOSUser/Profile/edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
