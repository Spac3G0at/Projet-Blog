<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_f81fc3eca5f9b2ad928ab43d5c760775bbac29aaf8f5fe36910f6ba6efc5efce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_bc393f0503b408f15ad0436db0282d8876228d1da68a9641254f68ad977401c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc393f0503b408f15ad0436db0282d8876228d1da68a9641254f68ad977401c2->enter($__internal_bc393f0503b408f15ad0436db0282d8876228d1da68a9641254f68ad977401c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7bfe00e710ec1fad046f1874b7c7128d05f2090102c63d95456d6ff9ac783f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfe00e710ec1fad046f1874b7c7128d05f2090102c63d95456d6ff9ac783f5c->enter($__internal_7bfe00e710ec1fad046f1874b7c7128d05f2090102c63d95456d6ff9ac783f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc393f0503b408f15ad0436db0282d8876228d1da68a9641254f68ad977401c2->leave($__internal_bc393f0503b408f15ad0436db0282d8876228d1da68a9641254f68ad977401c2_prof);

        
        $__internal_7bfe00e710ec1fad046f1874b7c7128d05f2090102c63d95456d6ff9ac783f5c->leave($__internal_7bfe00e710ec1fad046f1874b7c7128d05f2090102c63d95456d6ff9ac783f5c_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4ff89ee8b6d009505224c12ce5c9fa35df8c25d961f954db32e773333b4c0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ff89ee8b6d009505224c12ce5c9fa35df8c25d961f954db32e773333b4c0d7->enter($__internal_f4ff89ee8b6d009505224c12ce5c9fa35df8c25d961f954db32e773333b4c0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce4e668fca7aea0a41832d7b4b369c1668a2b56b3c19624be9a3763fc560840b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4e668fca7aea0a41832d7b4b369c1668a2b56b3c19624be9a3763fc560840b->enter($__internal_ce4e668fca7aea0a41832d7b4b369c1668a2b56b3c19624be9a3763fc560840b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ce4e668fca7aea0a41832d7b4b369c1668a2b56b3c19624be9a3763fc560840b->leave($__internal_ce4e668fca7aea0a41832d7b4b369c1668a2b56b3c19624be9a3763fc560840b_prof);

        
        $__internal_f4ff89ee8b6d009505224c12ce5c9fa35df8c25d961f954db32e773333b4c0d7->leave($__internal_f4ff89ee8b6d009505224c12ce5c9fa35df8c25d961f954db32e773333b4c0d7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
", "@FOSUser/Security/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
