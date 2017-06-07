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
        $__internal_32eb9f3ea577e9a0b234bd0fcae91ced414a8de97315ebfa96dd8a5ba338fc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32eb9f3ea577e9a0b234bd0fcae91ced414a8de97315ebfa96dd8a5ba338fc2b->enter($__internal_32eb9f3ea577e9a0b234bd0fcae91ced414a8de97315ebfa96dd8a5ba338fc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_3e9b364031c5c774bac41ca808f24e6c0aaea83c699b55dc97e25bca77d19a64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9b364031c5c774bac41ca808f24e6c0aaea83c699b55dc97e25bca77d19a64->enter($__internal_3e9b364031c5c774bac41ca808f24e6c0aaea83c699b55dc97e25bca77d19a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32eb9f3ea577e9a0b234bd0fcae91ced414a8de97315ebfa96dd8a5ba338fc2b->leave($__internal_32eb9f3ea577e9a0b234bd0fcae91ced414a8de97315ebfa96dd8a5ba338fc2b_prof);

        
        $__internal_3e9b364031c5c774bac41ca808f24e6c0aaea83c699b55dc97e25bca77d19a64->leave($__internal_3e9b364031c5c774bac41ca808f24e6c0aaea83c699b55dc97e25bca77d19a64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18f67232817e68acd565916fe406281f7c509ccfa1193badf332b4311d0c404c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f67232817e68acd565916fe406281f7c509ccfa1193badf332b4311d0c404c->enter($__internal_18f67232817e68acd565916fe406281f7c509ccfa1193badf332b4311d0c404c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21e7c978f6e8883e3c585c132fc8cc12ecc6fb504eacd7a3ef76e191e1b043c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e7c978f6e8883e3c585c132fc8cc12ecc6fb504eacd7a3ef76e191e1b043c9->enter($__internal_21e7c978f6e8883e3c585c132fc8cc12ecc6fb504eacd7a3ef76e191e1b043c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_21e7c978f6e8883e3c585c132fc8cc12ecc6fb504eacd7a3ef76e191e1b043c9->leave($__internal_21e7c978f6e8883e3c585c132fc8cc12ecc6fb504eacd7a3ef76e191e1b043c9_prof);

        
        $__internal_18f67232817e68acd565916fe406281f7c509ccfa1193badf332b4311d0c404c->leave($__internal_18f67232817e68acd565916fe406281f7c509ccfa1193badf332b4311d0c404c_prof);

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
