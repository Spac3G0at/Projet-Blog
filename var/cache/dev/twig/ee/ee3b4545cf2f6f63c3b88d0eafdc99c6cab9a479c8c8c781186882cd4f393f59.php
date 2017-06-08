<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1a5beb6b09b2656fc7c75241ac24a24c26c178ddc939076f27d537475c3824b4 extends Twig_Template
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
        $__internal_f95703ad257e90abe91e12477501a4752612f203d2d4371aa3695479766857ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95703ad257e90abe91e12477501a4752612f203d2d4371aa3695479766857ac->enter($__internal_f95703ad257e90abe91e12477501a4752612f203d2d4371aa3695479766857ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_1475d940219ba46221b2b86b1eb88025cbf37cd5376d5b99278c8fb8cf71c1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1475d940219ba46221b2b86b1eb88025cbf37cd5376d5b99278c8fb8cf71c1b4->enter($__internal_1475d940219ba46221b2b86b1eb88025cbf37cd5376d5b99278c8fb8cf71c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95703ad257e90abe91e12477501a4752612f203d2d4371aa3695479766857ac->leave($__internal_f95703ad257e90abe91e12477501a4752612f203d2d4371aa3695479766857ac_prof);

        
        $__internal_1475d940219ba46221b2b86b1eb88025cbf37cd5376d5b99278c8fb8cf71c1b4->leave($__internal_1475d940219ba46221b2b86b1eb88025cbf37cd5376d5b99278c8fb8cf71c1b4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8d6672e741914830bccd3d94cfeb441215875071217ca2365a99cdc632a23ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d6672e741914830bccd3d94cfeb441215875071217ca2365a99cdc632a23ee->enter($__internal_d8d6672e741914830bccd3d94cfeb441215875071217ca2365a99cdc632a23ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1258ca83dd7f8b6fbbb76301565de8c3162fdb006273d721776bb37fc46d653d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1258ca83dd7f8b6fbbb76301565de8c3162fdb006273d721776bb37fc46d653d->enter($__internal_1258ca83dd7f8b6fbbb76301565de8c3162fdb006273d721776bb37fc46d653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1258ca83dd7f8b6fbbb76301565de8c3162fdb006273d721776bb37fc46d653d->leave($__internal_1258ca83dd7f8b6fbbb76301565de8c3162fdb006273d721776bb37fc46d653d_prof);

        
        $__internal_d8d6672e741914830bccd3d94cfeb441215875071217ca2365a99cdc632a23ee->leave($__internal_d8d6672e741914830bccd3d94cfeb441215875071217ca2365a99cdc632a23ee_prof);

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
