<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_946a6bf20e65f0591c64f0f52e332b76a90aef78ff5f67c227a1fd1648263f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e368404b08e2daaa727a85d23a11cdd18fc7ee260e06d12ff09d0fc7586c16b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e368404b08e2daaa727a85d23a11cdd18fc7ee260e06d12ff09d0fc7586c16b8->enter($__internal_e368404b08e2daaa727a85d23a11cdd18fc7ee260e06d12ff09d0fc7586c16b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1ccb66f97d31940265cb6a0d3f28bd1837c21b4df3a56f679340c2299b74f78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccb66f97d31940265cb6a0d3f28bd1837c21b4df3a56f679340c2299b74f78d->enter($__internal_1ccb66f97d31940265cb6a0d3f28bd1837c21b4df3a56f679340c2299b74f78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e368404b08e2daaa727a85d23a11cdd18fc7ee260e06d12ff09d0fc7586c16b8->leave($__internal_e368404b08e2daaa727a85d23a11cdd18fc7ee260e06d12ff09d0fc7586c16b8_prof);

        
        $__internal_1ccb66f97d31940265cb6a0d3f28bd1837c21b4df3a56f679340c2299b74f78d->leave($__internal_1ccb66f97d31940265cb6a0d3f28bd1837c21b4df3a56f679340c2299b74f78d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1c4948037c9568697879a7e5d0b78cf7219a53a7fddf15b2d7ab68869477fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c4948037c9568697879a7e5d0b78cf7219a53a7fddf15b2d7ab68869477fcf->enter($__internal_a1c4948037c9568697879a7e5d0b78cf7219a53a7fddf15b2d7ab68869477fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_286097c821360327fc221cfb7dc0335a10a18256499f0d7d53bf57489dc99f3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286097c821360327fc221cfb7dc0335a10a18256499f0d7d53bf57489dc99f3d->enter($__internal_286097c821360327fc221cfb7dc0335a10a18256499f0d7d53bf57489dc99f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_286097c821360327fc221cfb7dc0335a10a18256499f0d7d53bf57489dc99f3d->leave($__internal_286097c821360327fc221cfb7dc0335a10a18256499f0d7d53bf57489dc99f3d_prof);

        
        $__internal_a1c4948037c9568697879a7e5d0b78cf7219a53a7fddf15b2d7ab68869477fcf->leave($__internal_a1c4948037c9568697879a7e5d0b78cf7219a53a7fddf15b2d7ab68869477fcf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}