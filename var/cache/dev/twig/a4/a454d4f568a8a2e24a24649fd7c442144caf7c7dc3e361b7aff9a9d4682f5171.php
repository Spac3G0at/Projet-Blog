<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_af091b161f6153daaeca2467b2f9df0642eda0c1089b10800d8a1f825942b80d extends Twig_Template
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
        $__internal_838fcb280b3ff65434c2c099b0ebe0ed3bcb88d4700537f60852b61a5f5285f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838fcb280b3ff65434c2c099b0ebe0ed3bcb88d4700537f60852b61a5f5285f2->enter($__internal_838fcb280b3ff65434c2c099b0ebe0ed3bcb88d4700537f60852b61a5f5285f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_640d2447f8ce402110eca5f95bee821798ed3c82faf22ead6c00dca71be0db4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640d2447f8ce402110eca5f95bee821798ed3c82faf22ead6c00dca71be0db4a->enter($__internal_640d2447f8ce402110eca5f95bee821798ed3c82faf22ead6c00dca71be0db4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838fcb280b3ff65434c2c099b0ebe0ed3bcb88d4700537f60852b61a5f5285f2->leave($__internal_838fcb280b3ff65434c2c099b0ebe0ed3bcb88d4700537f60852b61a5f5285f2_prof);

        
        $__internal_640d2447f8ce402110eca5f95bee821798ed3c82faf22ead6c00dca71be0db4a->leave($__internal_640d2447f8ce402110eca5f95bee821798ed3c82faf22ead6c00dca71be0db4a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_13515af3bd3c0375d69a816f8965864841cb134db2d4bc6f204001b691601ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13515af3bd3c0375d69a816f8965864841cb134db2d4bc6f204001b691601ebf->enter($__internal_13515af3bd3c0375d69a816f8965864841cb134db2d4bc6f204001b691601ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_864ab8cd5047f9c1d169b4e6d36823aca5de247e96b6566c0637ab04b622e3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_864ab8cd5047f9c1d169b4e6d36823aca5de247e96b6566c0637ab04b622e3cd->enter($__internal_864ab8cd5047f9c1d169b4e6d36823aca5de247e96b6566c0637ab04b622e3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_864ab8cd5047f9c1d169b4e6d36823aca5de247e96b6566c0637ab04b622e3cd->leave($__internal_864ab8cd5047f9c1d169b4e6d36823aca5de247e96b6566c0637ab04b622e3cd_prof);

        
        $__internal_13515af3bd3c0375d69a816f8965864841cb134db2d4bc6f204001b691601ebf->leave($__internal_13515af3bd3c0375d69a816f8965864841cb134db2d4bc6f204001b691601ebf_prof);

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
