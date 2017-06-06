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
        $__internal_f2ffaf3609680c9e147c743d84f0c13c71224aa1be6a883079270236c395cd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2ffaf3609680c9e147c743d84f0c13c71224aa1be6a883079270236c395cd01->enter($__internal_f2ffaf3609680c9e147c743d84f0c13c71224aa1be6a883079270236c395cd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_0c9424a0dc045a8265435176a46bf672489c300a239e51230ff1c7d3405085d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9424a0dc045a8265435176a46bf672489c300a239e51230ff1c7d3405085d2->enter($__internal_0c9424a0dc045a8265435176a46bf672489c300a239e51230ff1c7d3405085d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2ffaf3609680c9e147c743d84f0c13c71224aa1be6a883079270236c395cd01->leave($__internal_f2ffaf3609680c9e147c743d84f0c13c71224aa1be6a883079270236c395cd01_prof);

        
        $__internal_0c9424a0dc045a8265435176a46bf672489c300a239e51230ff1c7d3405085d2->leave($__internal_0c9424a0dc045a8265435176a46bf672489c300a239e51230ff1c7d3405085d2_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d951baf64fcea264fe1e6dcd1ebc72303e384c8eca957722fcabca5e4d57dc96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d951baf64fcea264fe1e6dcd1ebc72303e384c8eca957722fcabca5e4d57dc96->enter($__internal_d951baf64fcea264fe1e6dcd1ebc72303e384c8eca957722fcabca5e4d57dc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ea1f30e4eb0697dc7b3e07f989c213bfb53f41f0ad1251116a5d0269187e7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea1f30e4eb0697dc7b3e07f989c213bfb53f41f0ad1251116a5d0269187e7c8->enter($__internal_3ea1f30e4eb0697dc7b3e07f989c213bfb53f41f0ad1251116a5d0269187e7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_3ea1f30e4eb0697dc7b3e07f989c213bfb53f41f0ad1251116a5d0269187e7c8->leave($__internal_3ea1f30e4eb0697dc7b3e07f989c213bfb53f41f0ad1251116a5d0269187e7c8_prof);

        
        $__internal_d951baf64fcea264fe1e6dcd1ebc72303e384c8eca957722fcabca5e4d57dc96->leave($__internal_d951baf64fcea264fe1e6dcd1ebc72303e384c8eca957722fcabca5e4d57dc96_prof);

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
", "@FOSUser/Security/login.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
