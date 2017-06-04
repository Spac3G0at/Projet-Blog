<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_16ae05b337724c80d4df1c5492393d057988ecd0358bd333e8e4af7c2c9a1612 extends Twig_Template
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
        $__internal_44f97cf0c91df3492d9647a7076e8fe790788ac8dfa43ec9514047504a27d52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44f97cf0c91df3492d9647a7076e8fe790788ac8dfa43ec9514047504a27d52f->enter($__internal_44f97cf0c91df3492d9647a7076e8fe790788ac8dfa43ec9514047504a27d52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_59be8066ce14cef47cda2cb376f1444ab331fd6ac741ccad1dfeeb541783c5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59be8066ce14cef47cda2cb376f1444ab331fd6ac741ccad1dfeeb541783c5bd->enter($__internal_59be8066ce14cef47cda2cb376f1444ab331fd6ac741ccad1dfeeb541783c5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44f97cf0c91df3492d9647a7076e8fe790788ac8dfa43ec9514047504a27d52f->leave($__internal_44f97cf0c91df3492d9647a7076e8fe790788ac8dfa43ec9514047504a27d52f_prof);

        
        $__internal_59be8066ce14cef47cda2cb376f1444ab331fd6ac741ccad1dfeeb541783c5bd->leave($__internal_59be8066ce14cef47cda2cb376f1444ab331fd6ac741ccad1dfeeb541783c5bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_482cb1e36122748cee00aecdcfa21e3f2f26536c90bee77a56d4ce886c91b428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482cb1e36122748cee00aecdcfa21e3f2f26536c90bee77a56d4ce886c91b428->enter($__internal_482cb1e36122748cee00aecdcfa21e3f2f26536c90bee77a56d4ce886c91b428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_140e6bbc249fde7c1568317e7ad068d8a5ee27b48ade5f7862345e4a13000fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140e6bbc249fde7c1568317e7ad068d8a5ee27b48ade5f7862345e4a13000fbf->enter($__internal_140e6bbc249fde7c1568317e7ad068d8a5ee27b48ade5f7862345e4a13000fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_140e6bbc249fde7c1568317e7ad068d8a5ee27b48ade5f7862345e4a13000fbf->leave($__internal_140e6bbc249fde7c1568317e7ad068d8a5ee27b48ade5f7862345e4a13000fbf_prof);

        
        $__internal_482cb1e36122748cee00aecdcfa21e3f2f26536c90bee77a56d4ce886c91b428->leave($__internal_482cb1e36122748cee00aecdcfa21e3f2f26536c90bee77a56d4ce886c91b428_prof);

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
