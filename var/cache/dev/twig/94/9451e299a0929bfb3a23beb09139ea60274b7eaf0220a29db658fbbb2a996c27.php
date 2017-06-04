<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9706713c25c363cdea73b0ec30a3b2637f99dec1d3fa7ad5fb22981b06024285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_30f851411e85c188aee5259143818ae4ad2f54658e43c627967f884649415419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f851411e85c188aee5259143818ae4ad2f54658e43c627967f884649415419->enter($__internal_30f851411e85c188aee5259143818ae4ad2f54658e43c627967f884649415419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_8c412a6a29e0ce0ff690d859e1a581f11e607da50810bc5f13df1455a4cc23fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c412a6a29e0ce0ff690d859e1a581f11e607da50810bc5f13df1455a4cc23fd->enter($__internal_8c412a6a29e0ce0ff690d859e1a581f11e607da50810bc5f13df1455a4cc23fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f851411e85c188aee5259143818ae4ad2f54658e43c627967f884649415419->leave($__internal_30f851411e85c188aee5259143818ae4ad2f54658e43c627967f884649415419_prof);

        
        $__internal_8c412a6a29e0ce0ff690d859e1a581f11e607da50810bc5f13df1455a4cc23fd->leave($__internal_8c412a6a29e0ce0ff690d859e1a581f11e607da50810bc5f13df1455a4cc23fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca529cfc44815a99c9e0673f897ede5a7dd66290695f5550d1169cd2a18581da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca529cfc44815a99c9e0673f897ede5a7dd66290695f5550d1169cd2a18581da->enter($__internal_ca529cfc44815a99c9e0673f897ede5a7dd66290695f5550d1169cd2a18581da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba15d5419a20e447545563f833ed0383f1dd1764c1dd30aebd4bce002bb8f2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba15d5419a20e447545563f833ed0383f1dd1764c1dd30aebd4bce002bb8f2c5->enter($__internal_ba15d5419a20e447545563f833ed0383f1dd1764c1dd30aebd4bce002bb8f2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ba15d5419a20e447545563f833ed0383f1dd1764c1dd30aebd4bce002bb8f2c5->leave($__internal_ba15d5419a20e447545563f833ed0383f1dd1764c1dd30aebd4bce002bb8f2c5_prof);

        
        $__internal_ca529cfc44815a99c9e0673f897ede5a7dd66290695f5550d1169cd2a18581da->leave($__internal_ca529cfc44815a99c9e0673f897ede5a7dd66290695f5550d1169cd2a18581da_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
