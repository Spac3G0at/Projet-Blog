<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1a5beb6b09b2656fc7c75241ac24a24c26c178ddc939076f27d537475c3824b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_8f6921eb1ef3c0635aac0e8529027e70a07fb2d3a6df6411e2c6c9108af132f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f6921eb1ef3c0635aac0e8529027e70a07fb2d3a6df6411e2c6c9108af132f3->enter($__internal_8f6921eb1ef3c0635aac0e8529027e70a07fb2d3a6df6411e2c6c9108af132f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_3e7b88a33bc32314372e0bdf04f7fc40b6772c05b6446f5a49e9e896104b9821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7b88a33bc32314372e0bdf04f7fc40b6772c05b6446f5a49e9e896104b9821->enter($__internal_3e7b88a33bc32314372e0bdf04f7fc40b6772c05b6446f5a49e9e896104b9821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f6921eb1ef3c0635aac0e8529027e70a07fb2d3a6df6411e2c6c9108af132f3->leave($__internal_8f6921eb1ef3c0635aac0e8529027e70a07fb2d3a6df6411e2c6c9108af132f3_prof);

        
        $__internal_3e7b88a33bc32314372e0bdf04f7fc40b6772c05b6446f5a49e9e896104b9821->leave($__internal_3e7b88a33bc32314372e0bdf04f7fc40b6772c05b6446f5a49e9e896104b9821_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36ec8fbac7f15c43e7a8e360097fa899bf17228512b8ca3c618c14892398e0e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ec8fbac7f15c43e7a8e360097fa899bf17228512b8ca3c618c14892398e0e6->enter($__internal_36ec8fbac7f15c43e7a8e360097fa899bf17228512b8ca3c618c14892398e0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_97598cb2e0a50241c371f329b93f7fa2dd5bdea2dbbe64d50992257f8ac5d2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97598cb2e0a50241c371f329b93f7fa2dd5bdea2dbbe64d50992257f8ac5d2c3->enter($__internal_97598cb2e0a50241c371f329b93f7fa2dd5bdea2dbbe64d50992257f8ac5d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_97598cb2e0a50241c371f329b93f7fa2dd5bdea2dbbe64d50992257f8ac5d2c3->leave($__internal_97598cb2e0a50241c371f329b93f7fa2dd5bdea2dbbe64d50992257f8ac5d2c3_prof);

        
        $__internal_36ec8fbac7f15c43e7a8e360097fa899bf17228512b8ca3c618c14892398e0e6->leave($__internal_36ec8fbac7f15c43e7a8e360097fa899bf17228512b8ca3c618c14892398e0e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
