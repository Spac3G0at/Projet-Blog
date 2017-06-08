<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f81fc3eca5f9b2ad928ab43d5c760775bbac29aaf8f5fe36910f6ba6efc5efce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_779f621d4945a888d26e02820d5b628463a3426370299057be1da2dcb6811325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779f621d4945a888d26e02820d5b628463a3426370299057be1da2dcb6811325->enter($__internal_779f621d4945a888d26e02820d5b628463a3426370299057be1da2dcb6811325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_92e8ec5143a78ecc972434d515276f94a277aa727fae3ae33adc855fa20305f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e8ec5143a78ecc972434d515276f94a277aa727fae3ae33adc855fa20305f2->enter($__internal_92e8ec5143a78ecc972434d515276f94a277aa727fae3ae33adc855fa20305f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_779f621d4945a888d26e02820d5b628463a3426370299057be1da2dcb6811325->leave($__internal_779f621d4945a888d26e02820d5b628463a3426370299057be1da2dcb6811325_prof);

        
        $__internal_92e8ec5143a78ecc972434d515276f94a277aa727fae3ae33adc855fa20305f2->leave($__internal_92e8ec5143a78ecc972434d515276f94a277aa727fae3ae33adc855fa20305f2_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3db3d0b375b34e13778e5972e1329688fb731bacc67e6dbdc6bbfffeb3d39a82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db3d0b375b34e13778e5972e1329688fb731bacc67e6dbdc6bbfffeb3d39a82->enter($__internal_3db3d0b375b34e13778e5972e1329688fb731bacc67e6dbdc6bbfffeb3d39a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef809667b2188b902733aeaf271e2ec00c97b824f0a749af6f414d40913c5a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef809667b2188b902733aeaf271e2ec00c97b824f0a749af6f414d40913c5a25->enter($__internal_ef809667b2188b902733aeaf271e2ec00c97b824f0a749af6f414d40913c5a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ef809667b2188b902733aeaf271e2ec00c97b824f0a749af6f414d40913c5a25->leave($__internal_ef809667b2188b902733aeaf271e2ec00c97b824f0a749af6f414d40913c5a25_prof);

        
        $__internal_3db3d0b375b34e13778e5972e1329688fb731bacc67e6dbdc6bbfffeb3d39a82->leave($__internal_3db3d0b375b34e13778e5972e1329688fb731bacc67e6dbdc6bbfffeb3d39a82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
