<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_1e22f1756bf1780a41d06260cb71ec3b0b77d3c3b2cee49a379178f1a5af113e extends Twig_Template
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
        $__internal_f421b4fb4e8471f73f1e03ef1b33943c8b9a51c3958b4e8479abab4fa4063440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f421b4fb4e8471f73f1e03ef1b33943c8b9a51c3958b4e8479abab4fa4063440->enter($__internal_f421b4fb4e8471f73f1e03ef1b33943c8b9a51c3958b4e8479abab4fa4063440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_a7ae4b7ff13486968bfba05335c6ef02a9bf8909923f59809c89bd5324fe090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ae4b7ff13486968bfba05335c6ef02a9bf8909923f59809c89bd5324fe090e->enter($__internal_a7ae4b7ff13486968bfba05335c6ef02a9bf8909923f59809c89bd5324fe090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f421b4fb4e8471f73f1e03ef1b33943c8b9a51c3958b4e8479abab4fa4063440->leave($__internal_f421b4fb4e8471f73f1e03ef1b33943c8b9a51c3958b4e8479abab4fa4063440_prof);

        
        $__internal_a7ae4b7ff13486968bfba05335c6ef02a9bf8909923f59809c89bd5324fe090e->leave($__internal_a7ae4b7ff13486968bfba05335c6ef02a9bf8909923f59809c89bd5324fe090e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25855390e1c19becb58a22922b1382f052c6bc5c48e66012039e76d285b58543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25855390e1c19becb58a22922b1382f052c6bc5c48e66012039e76d285b58543->enter($__internal_25855390e1c19becb58a22922b1382f052c6bc5c48e66012039e76d285b58543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11fa5b984d6b30beabcc5a35b12b5a595199c3235cd2fa0ab2811adebe1b538b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fa5b984d6b30beabcc5a35b12b5a595199c3235cd2fa0ab2811adebe1b538b->enter($__internal_11fa5b984d6b30beabcc5a35b12b5a595199c3235cd2fa0ab2811adebe1b538b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_11fa5b984d6b30beabcc5a35b12b5a595199c3235cd2fa0ab2811adebe1b538b->leave($__internal_11fa5b984d6b30beabcc5a35b12b5a595199c3235cd2fa0ab2811adebe1b538b_prof);

        
        $__internal_25855390e1c19becb58a22922b1382f052c6bc5c48e66012039e76d285b58543->leave($__internal_25855390e1c19becb58a22922b1382f052c6bc5c48e66012039e76d285b58543_prof);

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
