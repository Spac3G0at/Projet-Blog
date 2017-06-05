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
        $__internal_2d6a4fca78e08ddf4c5b5b204108aa8a990c4a280f02ff21b34732ea516bef34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6a4fca78e08ddf4c5b5b204108aa8a990c4a280f02ff21b34732ea516bef34->enter($__internal_2d6a4fca78e08ddf4c5b5b204108aa8a990c4a280f02ff21b34732ea516bef34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_1677e1a8b6d3f9c7b4fb41bcb674c2648618dceb8ffa7374a0a9650c734723c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1677e1a8b6d3f9c7b4fb41bcb674c2648618dceb8ffa7374a0a9650c734723c8->enter($__internal_1677e1a8b6d3f9c7b4fb41bcb674c2648618dceb8ffa7374a0a9650c734723c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6a4fca78e08ddf4c5b5b204108aa8a990c4a280f02ff21b34732ea516bef34->leave($__internal_2d6a4fca78e08ddf4c5b5b204108aa8a990c4a280f02ff21b34732ea516bef34_prof);

        
        $__internal_1677e1a8b6d3f9c7b4fb41bcb674c2648618dceb8ffa7374a0a9650c734723c8->leave($__internal_1677e1a8b6d3f9c7b4fb41bcb674c2648618dceb8ffa7374a0a9650c734723c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c89dae947c66f8f747b635b41a635400c78c8c12d8d27f15bc9cb41b093620d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c89dae947c66f8f747b635b41a635400c78c8c12d8d27f15bc9cb41b093620d1->enter($__internal_c89dae947c66f8f747b635b41a635400c78c8c12d8d27f15bc9cb41b093620d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_529105b3e7dd3e2925b6d1fe06ade816ca2c4422e90dc8922a47f471a759ffbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_529105b3e7dd3e2925b6d1fe06ade816ca2c4422e90dc8922a47f471a759ffbe->enter($__internal_529105b3e7dd3e2925b6d1fe06ade816ca2c4422e90dc8922a47f471a759ffbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_529105b3e7dd3e2925b6d1fe06ade816ca2c4422e90dc8922a47f471a759ffbe->leave($__internal_529105b3e7dd3e2925b6d1fe06ade816ca2c4422e90dc8922a47f471a759ffbe_prof);

        
        $__internal_c89dae947c66f8f747b635b41a635400c78c8c12d8d27f15bc9cb41b093620d1->leave($__internal_c89dae947c66f8f747b635b41a635400c78c8c12d8d27f15bc9cb41b093620d1_prof);

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
