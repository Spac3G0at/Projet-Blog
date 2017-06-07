<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_911571dbb48ba8a9ffe167fff4193cdf7f2229b11f4bdfb1adc7a5b42c479e98 extends Twig_Template
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
        $__internal_cfcd8d2769b64538ae3854000c4a9d9af98bc75d6991001816545e52163a5a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcd8d2769b64538ae3854000c4a9d9af98bc75d6991001816545e52163a5a7e->enter($__internal_cfcd8d2769b64538ae3854000c4a9d9af98bc75d6991001816545e52163a5a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_e5cd2d76f6be66676ea72376934757061549f68199a31746ce4227a0a6fea2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5cd2d76f6be66676ea72376934757061549f68199a31746ce4227a0a6fea2ec->enter($__internal_e5cd2d76f6be66676ea72376934757061549f68199a31746ce4227a0a6fea2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcd8d2769b64538ae3854000c4a9d9af98bc75d6991001816545e52163a5a7e->leave($__internal_cfcd8d2769b64538ae3854000c4a9d9af98bc75d6991001816545e52163a5a7e_prof);

        
        $__internal_e5cd2d76f6be66676ea72376934757061549f68199a31746ce4227a0a6fea2ec->leave($__internal_e5cd2d76f6be66676ea72376934757061549f68199a31746ce4227a0a6fea2ec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54e67629ad5b80bb9981f725d6a120800c601828b9f2a0e5dd66bfb5bb56f148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54e67629ad5b80bb9981f725d6a120800c601828b9f2a0e5dd66bfb5bb56f148->enter($__internal_54e67629ad5b80bb9981f725d6a120800c601828b9f2a0e5dd66bfb5bb56f148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1da69b849d386bda529bb6a46c904e337f3f640a93a194066c5bd941340e51f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1da69b849d386bda529bb6a46c904e337f3f640a93a194066c5bd941340e51f9->enter($__internal_1da69b849d386bda529bb6a46c904e337f3f640a93a194066c5bd941340e51f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1da69b849d386bda529bb6a46c904e337f3f640a93a194066c5bd941340e51f9->leave($__internal_1da69b849d386bda529bb6a46c904e337f3f640a93a194066c5bd941340e51f9_prof);

        
        $__internal_54e67629ad5b80bb9981f725d6a120800c601828b9f2a0e5dd66bfb5bb56f148->leave($__internal_54e67629ad5b80bb9981f725d6a120800c601828b9f2a0e5dd66bfb5bb56f148_prof);

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
