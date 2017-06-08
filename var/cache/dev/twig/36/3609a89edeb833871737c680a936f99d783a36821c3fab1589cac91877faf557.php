<?php

/* FOSUserBundle:Profile:show.html.twig */
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
        $__internal_1296259918ad70e6f72cfdcf92cd0fd3e15b2ca4844ac40e88d44abcf52f6e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1296259918ad70e6f72cfdcf92cd0fd3e15b2ca4844ac40e88d44abcf52f6e94->enter($__internal_1296259918ad70e6f72cfdcf92cd0fd3e15b2ca4844ac40e88d44abcf52f6e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_6dd7da49cdd4824b174bf27ce470bf56f39c27b556873b6cc805a4b14d2cd5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd7da49cdd4824b174bf27ce470bf56f39c27b556873b6cc805a4b14d2cd5bc->enter($__internal_6dd7da49cdd4824b174bf27ce470bf56f39c27b556873b6cc805a4b14d2cd5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1296259918ad70e6f72cfdcf92cd0fd3e15b2ca4844ac40e88d44abcf52f6e94->leave($__internal_1296259918ad70e6f72cfdcf92cd0fd3e15b2ca4844ac40e88d44abcf52f6e94_prof);

        
        $__internal_6dd7da49cdd4824b174bf27ce470bf56f39c27b556873b6cc805a4b14d2cd5bc->leave($__internal_6dd7da49cdd4824b174bf27ce470bf56f39c27b556873b6cc805a4b14d2cd5bc_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e54b12b7e2c69b55f7a4a45d994a2792f01f9026a3314ece7017cbbfd7069f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54b12b7e2c69b55f7a4a45d994a2792f01f9026a3314ece7017cbbfd7069f0c->enter($__internal_e54b12b7e2c69b55f7a4a45d994a2792f01f9026a3314ece7017cbbfd7069f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1e346d97e84308bf2d4cd61377d0c473f14ca097271e9433d75d9b3920ba83ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e346d97e84308bf2d4cd61377d0c473f14ca097271e9433d75d9b3920ba83ee->enter($__internal_1e346d97e84308bf2d4cd61377d0c473f14ca097271e9433d75d9b3920ba83ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1e346d97e84308bf2d4cd61377d0c473f14ca097271e9433d75d9b3920ba83ee->leave($__internal_1e346d97e84308bf2d4cd61377d0c473f14ca097271e9433d75d9b3920ba83ee_prof);

        
        $__internal_e54b12b7e2c69b55f7a4a45d994a2792f01f9026a3314ece7017cbbfd7069f0c->leave($__internal_e54b12b7e2c69b55f7a4a45d994a2792f01f9026a3314ece7017cbbfd7069f0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
", "FOSUserBundle:Profile:show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
