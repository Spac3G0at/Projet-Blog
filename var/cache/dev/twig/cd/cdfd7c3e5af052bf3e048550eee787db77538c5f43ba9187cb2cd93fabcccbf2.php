<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd61c4cc2289013959f22d63a1e1ec254b94b44d12cde5a971c3e68113ae1c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_6fb68a6dea91edb413373f3764a3147334fede5812c26a39bd9a8a08e9a74426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb68a6dea91edb413373f3764a3147334fede5812c26a39bd9a8a08e9a74426->enter($__internal_6fb68a6dea91edb413373f3764a3147334fede5812c26a39bd9a8a08e9a74426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_5f3fd6df30733e0a647e51fcbfc4e213b40032ea80416fdc071e2aa183853f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3fd6df30733e0a647e51fcbfc4e213b40032ea80416fdc071e2aa183853f70->enter($__internal_5f3fd6df30733e0a647e51fcbfc4e213b40032ea80416fdc071e2aa183853f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb68a6dea91edb413373f3764a3147334fede5812c26a39bd9a8a08e9a74426->leave($__internal_6fb68a6dea91edb413373f3764a3147334fede5812c26a39bd9a8a08e9a74426_prof);

        
        $__internal_5f3fd6df30733e0a647e51fcbfc4e213b40032ea80416fdc071e2aa183853f70->leave($__internal_5f3fd6df30733e0a647e51fcbfc4e213b40032ea80416fdc071e2aa183853f70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e251b1689b754e1743eab0bed14d977a5a7ef323a3749a0001a3cfb515bb507c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e251b1689b754e1743eab0bed14d977a5a7ef323a3749a0001a3cfb515bb507c->enter($__internal_e251b1689b754e1743eab0bed14d977a5a7ef323a3749a0001a3cfb515bb507c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c084b160d192a664160d8c331cad392afce3233964cdeccd1a13e20d75e6f57d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c084b160d192a664160d8c331cad392afce3233964cdeccd1a13e20d75e6f57d->enter($__internal_c084b160d192a664160d8c331cad392afce3233964cdeccd1a13e20d75e6f57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c084b160d192a664160d8c331cad392afce3233964cdeccd1a13e20d75e6f57d->leave($__internal_c084b160d192a664160d8c331cad392afce3233964cdeccd1a13e20d75e6f57d_prof);

        
        $__internal_e251b1689b754e1743eab0bed14d977a5a7ef323a3749a0001a3cfb515bb507c->leave($__internal_e251b1689b754e1743eab0bed14d977a5a7ef323a3749a0001a3cfb515bb507c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
