<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_cdad47e1fb4dad5a537d02a6383a827cc6585b12d61fb439335cc47d2c663f92 extends Twig_Template
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
        $__internal_a1d1c1c124d2fb938acb568224511f27aee8e05488ddf27123cbac62fd97bcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d1c1c124d2fb938acb568224511f27aee8e05488ddf27123cbac62fd97bcdd->enter($__internal_a1d1c1c124d2fb938acb568224511f27aee8e05488ddf27123cbac62fd97bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_5fe50427e4016deac859ad4aff06aeb2ba023053b7a57f63d022de86f9735fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe50427e4016deac859ad4aff06aeb2ba023053b7a57f63d022de86f9735fd0->enter($__internal_5fe50427e4016deac859ad4aff06aeb2ba023053b7a57f63d022de86f9735fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a1d1c1c124d2fb938acb568224511f27aee8e05488ddf27123cbac62fd97bcdd->leave($__internal_a1d1c1c124d2fb938acb568224511f27aee8e05488ddf27123cbac62fd97bcdd_prof);

        
        $__internal_5fe50427e4016deac859ad4aff06aeb2ba023053b7a57f63d022de86f9735fd0->leave($__internal_5fe50427e4016deac859ad4aff06aeb2ba023053b7a57f63d022de86f9735fd0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72be55f9d8515f1029957de61480d710e69d266e50aa8f205519e2b7ebc0bb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72be55f9d8515f1029957de61480d710e69d266e50aa8f205519e2b7ebc0bb63->enter($__internal_72be55f9d8515f1029957de61480d710e69d266e50aa8f205519e2b7ebc0bb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ea92b05e35d5f8dafec1b71c89d940aef710b8e8c0cd35c349e8bf7c35c5afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea92b05e35d5f8dafec1b71c89d940aef710b8e8c0cd35c349e8bf7c35c5afe->enter($__internal_3ea92b05e35d5f8dafec1b71c89d940aef710b8e8c0cd35c349e8bf7c35c5afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_3ea92b05e35d5f8dafec1b71c89d940aef710b8e8c0cd35c349e8bf7c35c5afe->leave($__internal_3ea92b05e35d5f8dafec1b71c89d940aef710b8e8c0cd35c349e8bf7c35c5afe_prof);

        
        $__internal_72be55f9d8515f1029957de61480d710e69d266e50aa8f205519e2b7ebc0bb63->leave($__internal_72be55f9d8515f1029957de61480d710e69d266e50aa8f205519e2b7ebc0bb63_prof);

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
