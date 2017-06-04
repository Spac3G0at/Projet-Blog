<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_bc037492c4970148099630a5379c51b5f6173595447c6bf4f073d651c025a729 extends Twig_Template
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
        $__internal_136a3d7e27b7be9f7d9703ada01e59392044e3629143ad0038de1f476763c07a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_136a3d7e27b7be9f7d9703ada01e59392044e3629143ad0038de1f476763c07a->enter($__internal_136a3d7e27b7be9f7d9703ada01e59392044e3629143ad0038de1f476763c07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_e42b20ca36af027aa012ef30318e4bbe90b286b00e1e9a29878d1fc82d1d4a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e42b20ca36af027aa012ef30318e4bbe90b286b00e1e9a29878d1fc82d1d4a58->enter($__internal_e42b20ca36af027aa012ef30318e4bbe90b286b00e1e9a29878d1fc82d1d4a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_136a3d7e27b7be9f7d9703ada01e59392044e3629143ad0038de1f476763c07a->leave($__internal_136a3d7e27b7be9f7d9703ada01e59392044e3629143ad0038de1f476763c07a_prof);

        
        $__internal_e42b20ca36af027aa012ef30318e4bbe90b286b00e1e9a29878d1fc82d1d4a58->leave($__internal_e42b20ca36af027aa012ef30318e4bbe90b286b00e1e9a29878d1fc82d1d4a58_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9be9128e78e9503bd11535982ddb6280ab5bf4edf4b32de78fe04c36d0881db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be9128e78e9503bd11535982ddb6280ab5bf4edf4b32de78fe04c36d0881db1->enter($__internal_9be9128e78e9503bd11535982ddb6280ab5bf4edf4b32de78fe04c36d0881db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b4afc0372cd5b22f7a6050bb6e3c92ba0bb353e58de143c8cd4262d3ab7be509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4afc0372cd5b22f7a6050bb6e3c92ba0bb353e58de143c8cd4262d3ab7be509->enter($__internal_b4afc0372cd5b22f7a6050bb6e3c92ba0bb353e58de143c8cd4262d3ab7be509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b4afc0372cd5b22f7a6050bb6e3c92ba0bb353e58de143c8cd4262d3ab7be509->leave($__internal_b4afc0372cd5b22f7a6050bb6e3c92ba0bb353e58de143c8cd4262d3ab7be509_prof);

        
        $__internal_9be9128e78e9503bd11535982ddb6280ab5bf4edf4b32de78fe04c36d0881db1->leave($__internal_9be9128e78e9503bd11535982ddb6280ab5bf4edf4b32de78fe04c36d0881db1_prof);

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
