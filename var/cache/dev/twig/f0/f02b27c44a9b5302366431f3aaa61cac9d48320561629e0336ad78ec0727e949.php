<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_10c16839550c6cd579057444961476ccfd0eb7d100571bb3626f5426a605f0dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_262b088847705f0a40c2099ce917d0c90806cdcdd9f9e4a8bbc7d47ef665eb83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262b088847705f0a40c2099ce917d0c90806cdcdd9f9e4a8bbc7d47ef665eb83->enter($__internal_262b088847705f0a40c2099ce917d0c90806cdcdd9f9e4a8bbc7d47ef665eb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2d3aa5124c17d4e4a31a6cbbfba3aa5c7dd6f4359d8985dabe9aee8d842b8159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3aa5124c17d4e4a31a6cbbfba3aa5c7dd6f4359d8985dabe9aee8d842b8159->enter($__internal_2d3aa5124c17d4e4a31a6cbbfba3aa5c7dd6f4359d8985dabe9aee8d842b8159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262b088847705f0a40c2099ce917d0c90806cdcdd9f9e4a8bbc7d47ef665eb83->leave($__internal_262b088847705f0a40c2099ce917d0c90806cdcdd9f9e4a8bbc7d47ef665eb83_prof);

        
        $__internal_2d3aa5124c17d4e4a31a6cbbfba3aa5c7dd6f4359d8985dabe9aee8d842b8159->leave($__internal_2d3aa5124c17d4e4a31a6cbbfba3aa5c7dd6f4359d8985dabe9aee8d842b8159_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_318ca98b5ecb198fe885fa75ad89cab87a8c1d77779cb608db9d8ccc6f2cb7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318ca98b5ecb198fe885fa75ad89cab87a8c1d77779cb608db9d8ccc6f2cb7bc->enter($__internal_318ca98b5ecb198fe885fa75ad89cab87a8c1d77779cb608db9d8ccc6f2cb7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_47cc0347c065b72cff90c8935333dad5928f789cbad0b79e113b74fc093450e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47cc0347c065b72cff90c8935333dad5928f789cbad0b79e113b74fc093450e8->enter($__internal_47cc0347c065b72cff90c8935333dad5928f789cbad0b79e113b74fc093450e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_47cc0347c065b72cff90c8935333dad5928f789cbad0b79e113b74fc093450e8->leave($__internal_47cc0347c065b72cff90c8935333dad5928f789cbad0b79e113b74fc093450e8_prof);

        
        $__internal_318ca98b5ecb198fe885fa75ad89cab87a8c1d77779cb608db9d8ccc6f2cb7bc->leave($__internal_318ca98b5ecb198fe885fa75ad89cab87a8c1d77779cb608db9d8ccc6f2cb7bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
