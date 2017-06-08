<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_008eae649966787d9111c4efca06a368effbc6c14ffd260232578dcc58e824c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_5fae2329da192267068604816c6b2a1ce75182ca327879cdcf8718862c0c12a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fae2329da192267068604816c6b2a1ce75182ca327879cdcf8718862c0c12a0->enter($__internal_5fae2329da192267068604816c6b2a1ce75182ca327879cdcf8718862c0c12a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_9d32cbb4c6c58a0566011666adffda0d182b9c0658a45819cdb692b930947291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d32cbb4c6c58a0566011666adffda0d182b9c0658a45819cdb692b930947291->enter($__internal_9d32cbb4c6c58a0566011666adffda0d182b9c0658a45819cdb692b930947291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fae2329da192267068604816c6b2a1ce75182ca327879cdcf8718862c0c12a0->leave($__internal_5fae2329da192267068604816c6b2a1ce75182ca327879cdcf8718862c0c12a0_prof);

        
        $__internal_9d32cbb4c6c58a0566011666adffda0d182b9c0658a45819cdb692b930947291->leave($__internal_9d32cbb4c6c58a0566011666adffda0d182b9c0658a45819cdb692b930947291_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66ab736d51bf769f43d6ec7ee6591541293dfc33881d2c756de09c46e47722b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ab736d51bf769f43d6ec7ee6591541293dfc33881d2c756de09c46e47722b0->enter($__internal_66ab736d51bf769f43d6ec7ee6591541293dfc33881d2c756de09c46e47722b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7a2bceab95ab11953242397da8fe73c76c61205f2093770548c5c490db21b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a2bceab95ab11953242397da8fe73c76c61205f2093770548c5c490db21b27->enter($__internal_e7a2bceab95ab11953242397da8fe73c76c61205f2093770548c5c490db21b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e7a2bceab95ab11953242397da8fe73c76c61205f2093770548c5c490db21b27->leave($__internal_e7a2bceab95ab11953242397da8fe73c76c61205f2093770548c5c490db21b27_prof);

        
        $__internal_66ab736d51bf769f43d6ec7ee6591541293dfc33881d2c756de09c46e47722b0->leave($__internal_66ab736d51bf769f43d6ec7ee6591541293dfc33881d2c756de09c46e47722b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
