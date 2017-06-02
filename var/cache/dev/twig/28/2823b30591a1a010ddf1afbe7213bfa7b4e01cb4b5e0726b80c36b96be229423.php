<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9696e287673c955e3b6f18af37b07218473eb12df5cb166be89641d73ec82098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_528edd93033ee4db31ca8b3598e46be84206c8e1038a0e1ed5be97862cf8bac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528edd93033ee4db31ca8b3598e46be84206c8e1038a0e1ed5be97862cf8bac6->enter($__internal_528edd93033ee4db31ca8b3598e46be84206c8e1038a0e1ed5be97862cf8bac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_0cb4adef22a15b0136bb2f8f5da71ed6d96f10eb8ff785ee10d91c07ec930037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb4adef22a15b0136bb2f8f5da71ed6d96f10eb8ff785ee10d91c07ec930037->enter($__internal_0cb4adef22a15b0136bb2f8f5da71ed6d96f10eb8ff785ee10d91c07ec930037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528edd93033ee4db31ca8b3598e46be84206c8e1038a0e1ed5be97862cf8bac6->leave($__internal_528edd93033ee4db31ca8b3598e46be84206c8e1038a0e1ed5be97862cf8bac6_prof);

        
        $__internal_0cb4adef22a15b0136bb2f8f5da71ed6d96f10eb8ff785ee10d91c07ec930037->leave($__internal_0cb4adef22a15b0136bb2f8f5da71ed6d96f10eb8ff785ee10d91c07ec930037_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b8ded1d4ba67f4d3d97b9e4c420296dd24c428f53f12572b10b7ae97ee97586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8ded1d4ba67f4d3d97b9e4c420296dd24c428f53f12572b10b7ae97ee97586->enter($__internal_6b8ded1d4ba67f4d3d97b9e4c420296dd24c428f53f12572b10b7ae97ee97586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_379de3dcac078fa3d6e335dc638f9e0072cee82a973bcf9d93df74b445c079ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379de3dcac078fa3d6e335dc638f9e0072cee82a973bcf9d93df74b445c079ab->enter($__internal_379de3dcac078fa3d6e335dc638f9e0072cee82a973bcf9d93df74b445c079ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_379de3dcac078fa3d6e335dc638f9e0072cee82a973bcf9d93df74b445c079ab->leave($__internal_379de3dcac078fa3d6e335dc638f9e0072cee82a973bcf9d93df74b445c079ab_prof);

        
        $__internal_6b8ded1d4ba67f4d3d97b9e4c420296dd24c428f53f12572b10b7ae97ee97586->leave($__internal_6b8ded1d4ba67f4d3d97b9e4c420296dd24c428f53f12572b10b7ae97ee97586_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
", "@FOSUser/Registration/register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
