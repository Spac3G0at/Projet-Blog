<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_699e67d01a5a813515d5831d2a7c88b73b07b40b5a48555455afac50954eb4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cb43d5145cfa51b22bc0e1d1fe28315de68cfd67fa4bfff6513e346c6265435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb43d5145cfa51b22bc0e1d1fe28315de68cfd67fa4bfff6513e346c6265435->enter($__internal_9cb43d5145cfa51b22bc0e1d1fe28315de68cfd67fa4bfff6513e346c6265435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_81a0b4f7380ff800fee15e56cbcdbfe32c81e398ca503f7d92bbafe051cd9475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a0b4f7380ff800fee15e56cbcdbfe32c81e398ca503f7d92bbafe051cd9475->enter($__internal_81a0b4f7380ff800fee15e56cbcdbfe32c81e398ca503f7d92bbafe051cd9475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9cb43d5145cfa51b22bc0e1d1fe28315de68cfd67fa4bfff6513e346c6265435->leave($__internal_9cb43d5145cfa51b22bc0e1d1fe28315de68cfd67fa4bfff6513e346c6265435_prof);

        
        $__internal_81a0b4f7380ff800fee15e56cbcdbfe32c81e398ca503f7d92bbafe051cd9475->leave($__internal_81a0b4f7380ff800fee15e56cbcdbfe32c81e398ca503f7d92bbafe051cd9475_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_145ad80793e1959171634609fb551c9790de59667e01585a33444ef15c1895b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145ad80793e1959171634609fb551c9790de59667e01585a33444ef15c1895b2->enter($__internal_145ad80793e1959171634609fb551c9790de59667e01585a33444ef15c1895b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d4b2aa36ea70cdad6add64b5012c334ec81895934258c9df064e89bdc97cb921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4b2aa36ea70cdad6add64b5012c334ec81895934258c9df064e89bdc97cb921->enter($__internal_d4b2aa36ea70cdad6add64b5012c334ec81895934258c9df064e89bdc97cb921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d4b2aa36ea70cdad6add64b5012c334ec81895934258c9df064e89bdc97cb921->leave($__internal_d4b2aa36ea70cdad6add64b5012c334ec81895934258c9df064e89bdc97cb921_prof);

        
        $__internal_145ad80793e1959171634609fb551c9790de59667e01585a33444ef15c1895b2->leave($__internal_145ad80793e1959171634609fb551c9790de59667e01585a33444ef15c1895b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
