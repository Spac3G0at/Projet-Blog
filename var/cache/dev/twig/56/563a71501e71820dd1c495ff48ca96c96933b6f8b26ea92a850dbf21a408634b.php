<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be3055ac62a5a6dec8ed19edbf65b26cc3240592535b2684221a80394b1b17eb extends Twig_Template
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
        $__internal_6d36f3a01ff551795a46d0df31e1deb95329da127d91eeb09d5a66dfc1106db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d36f3a01ff551795a46d0df31e1deb95329da127d91eeb09d5a66dfc1106db9->enter($__internal_6d36f3a01ff551795a46d0df31e1deb95329da127d91eeb09d5a66dfc1106db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_a9106b32adaa49327a44a15bd7afdc2a43eafb18804a33d3d921129638139d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9106b32adaa49327a44a15bd7afdc2a43eafb18804a33d3d921129638139d11->enter($__internal_a9106b32adaa49327a44a15bd7afdc2a43eafb18804a33d3d921129638139d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d36f3a01ff551795a46d0df31e1deb95329da127d91eeb09d5a66dfc1106db9->leave($__internal_6d36f3a01ff551795a46d0df31e1deb95329da127d91eeb09d5a66dfc1106db9_prof);

        
        $__internal_a9106b32adaa49327a44a15bd7afdc2a43eafb18804a33d3d921129638139d11->leave($__internal_a9106b32adaa49327a44a15bd7afdc2a43eafb18804a33d3d921129638139d11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c9766ccce0d9300e72401f46c5338ab47ca51ca9d320b05125c680f09e7d93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c9766ccce0d9300e72401f46c5338ab47ca51ca9d320b05125c680f09e7d93f->enter($__internal_5c9766ccce0d9300e72401f46c5338ab47ca51ca9d320b05125c680f09e7d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b1710278ebd3fb51afe8d4c4b9e259a5b83ea92ecbd81ae98936e49ea88f0703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1710278ebd3fb51afe8d4c4b9e259a5b83ea92ecbd81ae98936e49ea88f0703->enter($__internal_b1710278ebd3fb51afe8d4c4b9e259a5b83ea92ecbd81ae98936e49ea88f0703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b1710278ebd3fb51afe8d4c4b9e259a5b83ea92ecbd81ae98936e49ea88f0703->leave($__internal_b1710278ebd3fb51afe8d4c4b9e259a5b83ea92ecbd81ae98936e49ea88f0703_prof);

        
        $__internal_5c9766ccce0d9300e72401f46c5338ab47ca51ca9d320b05125c680f09e7d93f->leave($__internal_5c9766ccce0d9300e72401f46c5338ab47ca51ca9d320b05125c680f09e7d93f_prof);

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
