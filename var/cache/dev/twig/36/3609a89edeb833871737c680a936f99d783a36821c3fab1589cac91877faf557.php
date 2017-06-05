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
        $__internal_2b1e8d2a8a5067d94a786434c8788cdd9194e921396ad1af2b98a83b17956d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1e8d2a8a5067d94a786434c8788cdd9194e921396ad1af2b98a83b17956d0e->enter($__internal_2b1e8d2a8a5067d94a786434c8788cdd9194e921396ad1af2b98a83b17956d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_ff27d874ea817504249477bba02e4ac3413f59c1047b964bfc5e8d2fa376631c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff27d874ea817504249477bba02e4ac3413f59c1047b964bfc5e8d2fa376631c->enter($__internal_ff27d874ea817504249477bba02e4ac3413f59c1047b964bfc5e8d2fa376631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2b1e8d2a8a5067d94a786434c8788cdd9194e921396ad1af2b98a83b17956d0e->leave($__internal_2b1e8d2a8a5067d94a786434c8788cdd9194e921396ad1af2b98a83b17956d0e_prof);

        
        $__internal_ff27d874ea817504249477bba02e4ac3413f59c1047b964bfc5e8d2fa376631c->leave($__internal_ff27d874ea817504249477bba02e4ac3413f59c1047b964bfc5e8d2fa376631c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd0a78796d486129ac9cf6640012057bb7755d98710ad969d118bb1d5961e48c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0a78796d486129ac9cf6640012057bb7755d98710ad969d118bb1d5961e48c->enter($__internal_bd0a78796d486129ac9cf6640012057bb7755d98710ad969d118bb1d5961e48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9b685a05e351da926b242b2f03d7a62f87e20808d8e6b3d64b99a94286a6e3e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b685a05e351da926b242b2f03d7a62f87e20808d8e6b3d64b99a94286a6e3e9->enter($__internal_9b685a05e351da926b242b2f03d7a62f87e20808d8e6b3d64b99a94286a6e3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9b685a05e351da926b242b2f03d7a62f87e20808d8e6b3d64b99a94286a6e3e9->leave($__internal_9b685a05e351da926b242b2f03d7a62f87e20808d8e6b3d64b99a94286a6e3e9_prof);

        
        $__internal_bd0a78796d486129ac9cf6640012057bb7755d98710ad969d118bb1d5961e48c->leave($__internal_bd0a78796d486129ac9cf6640012057bb7755d98710ad969d118bb1d5961e48c_prof);

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
