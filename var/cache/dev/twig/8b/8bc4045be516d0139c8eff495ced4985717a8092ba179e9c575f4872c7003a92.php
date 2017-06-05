<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ea01c2acf86da6a714844303ca8dc11c3eca09eba9c12e114666dcf3bea69055 extends Twig_Template
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
        $__internal_3e81366c9ba9d597d801470d64f89b2510d0fe1c50561d24b39b89322f5c46d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e81366c9ba9d597d801470d64f89b2510d0fe1c50561d24b39b89322f5c46d7->enter($__internal_3e81366c9ba9d597d801470d64f89b2510d0fe1c50561d24b39b89322f5c46d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_955092b53f9c4da68a3c9e1780e97d7f17cbc2e6ce59293a40c95e67263739f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955092b53f9c4da68a3c9e1780e97d7f17cbc2e6ce59293a40c95e67263739f9->enter($__internal_955092b53f9c4da68a3c9e1780e97d7f17cbc2e6ce59293a40c95e67263739f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e81366c9ba9d597d801470d64f89b2510d0fe1c50561d24b39b89322f5c46d7->leave($__internal_3e81366c9ba9d597d801470d64f89b2510d0fe1c50561d24b39b89322f5c46d7_prof);

        
        $__internal_955092b53f9c4da68a3c9e1780e97d7f17cbc2e6ce59293a40c95e67263739f9->leave($__internal_955092b53f9c4da68a3c9e1780e97d7f17cbc2e6ce59293a40c95e67263739f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0822ba5024650a4e1f8b7e2a001e7843b851f22ad2b81a90d9f578820ca5fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0822ba5024650a4e1f8b7e2a001e7843b851f22ad2b81a90d9f578820ca5fab->enter($__internal_e0822ba5024650a4e1f8b7e2a001e7843b851f22ad2b81a90d9f578820ca5fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e3436d262d1c1af4002b8247f87760d51645d559eea4060b9b6f8a5d335be33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3436d262d1c1af4002b8247f87760d51645d559eea4060b9b6f8a5d335be33->enter($__internal_9e3436d262d1c1af4002b8247f87760d51645d559eea4060b9b6f8a5d335be33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_9e3436d262d1c1af4002b8247f87760d51645d559eea4060b9b6f8a5d335be33->leave($__internal_9e3436d262d1c1af4002b8247f87760d51645d559eea4060b9b6f8a5d335be33_prof);

        
        $__internal_e0822ba5024650a4e1f8b7e2a001e7843b851f22ad2b81a90d9f578820ca5fab->leave($__internal_e0822ba5024650a4e1f8b7e2a001e7843b851f22ad2b81a90d9f578820ca5fab_prof);

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
