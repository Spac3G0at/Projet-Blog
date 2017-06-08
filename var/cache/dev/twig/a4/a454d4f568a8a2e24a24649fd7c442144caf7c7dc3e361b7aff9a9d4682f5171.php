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
        $__internal_38ab5936ad90e7f2df947aa131163127a83a2bd08e647e8962e53a13e033ffec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38ab5936ad90e7f2df947aa131163127a83a2bd08e647e8962e53a13e033ffec->enter($__internal_38ab5936ad90e7f2df947aa131163127a83a2bd08e647e8962e53a13e033ffec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_3987bf6208fbbd3dbf6b892d3a3acaa8f1e01b9b4fde42301321bbebab7c0fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3987bf6208fbbd3dbf6b892d3a3acaa8f1e01b9b4fde42301321bbebab7c0fd3->enter($__internal_3987bf6208fbbd3dbf6b892d3a3acaa8f1e01b9b4fde42301321bbebab7c0fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ab5936ad90e7f2df947aa131163127a83a2bd08e647e8962e53a13e033ffec->leave($__internal_38ab5936ad90e7f2df947aa131163127a83a2bd08e647e8962e53a13e033ffec_prof);

        
        $__internal_3987bf6208fbbd3dbf6b892d3a3acaa8f1e01b9b4fde42301321bbebab7c0fd3->leave($__internal_3987bf6208fbbd3dbf6b892d3a3acaa8f1e01b9b4fde42301321bbebab7c0fd3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7165cc8ab7440d47c5b2225160271ee0e97b4de1b7771b601dd024ce32a1a226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7165cc8ab7440d47c5b2225160271ee0e97b4de1b7771b601dd024ce32a1a226->enter($__internal_7165cc8ab7440d47c5b2225160271ee0e97b4de1b7771b601dd024ce32a1a226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_27d60b2739f01d80f8daf581c4134762c31ac3938d84af32952c4c18ed359a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d60b2739f01d80f8daf581c4134762c31ac3938d84af32952c4c18ed359a68->enter($__internal_27d60b2739f01d80f8daf581c4134762c31ac3938d84af32952c4c18ed359a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_27d60b2739f01d80f8daf581c4134762c31ac3938d84af32952c4c18ed359a68->leave($__internal_27d60b2739f01d80f8daf581c4134762c31ac3938d84af32952c4c18ed359a68_prof);

        
        $__internal_7165cc8ab7440d47c5b2225160271ee0e97b4de1b7771b601dd024ce32a1a226->leave($__internal_7165cc8ab7440d47c5b2225160271ee0e97b4de1b7771b601dd024ce32a1a226_prof);

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
