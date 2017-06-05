<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_c570ccc9263c0548482afafafd6fcd4d733bb9092540b0337e550ad3e754c4c1 extends Twig_Template
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
        $__internal_27e042c5e99d06c5a796c29ee6a88052f031d015dffd071abc856be4abee35f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e042c5e99d06c5a796c29ee6a88052f031d015dffd071abc856be4abee35f5->enter($__internal_27e042c5e99d06c5a796c29ee6a88052f031d015dffd071abc856be4abee35f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_3261dab2701cdbc6faa14c9052eea20f469bdb6da4c2155e1cf51a7972875f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3261dab2701cdbc6faa14c9052eea20f469bdb6da4c2155e1cf51a7972875f53->enter($__internal_3261dab2701cdbc6faa14c9052eea20f469bdb6da4c2155e1cf51a7972875f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_27e042c5e99d06c5a796c29ee6a88052f031d015dffd071abc856be4abee35f5->leave($__internal_27e042c5e99d06c5a796c29ee6a88052f031d015dffd071abc856be4abee35f5_prof);

        
        $__internal_3261dab2701cdbc6faa14c9052eea20f469bdb6da4c2155e1cf51a7972875f53->leave($__internal_3261dab2701cdbc6faa14c9052eea20f469bdb6da4c2155e1cf51a7972875f53_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dcb2733bbccb3c2371d35d3985a55b9ca1543026aeda6dad954c5bf67817ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dcb2733bbccb3c2371d35d3985a55b9ca1543026aeda6dad954c5bf67817ead->enter($__internal_5dcb2733bbccb3c2371d35d3985a55b9ca1543026aeda6dad954c5bf67817ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0d2d01f6233c6007a44f9696b022da4d1e86bfac0f9583743559f4ae978cd608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2d01f6233c6007a44f9696b022da4d1e86bfac0f9583743559f4ae978cd608->enter($__internal_0d2d01f6233c6007a44f9696b022da4d1e86bfac0f9583743559f4ae978cd608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_0d2d01f6233c6007a44f9696b022da4d1e86bfac0f9583743559f4ae978cd608->leave($__internal_0d2d01f6233c6007a44f9696b022da4d1e86bfac0f9583743559f4ae978cd608_prof);

        
        $__internal_5dcb2733bbccb3c2371d35d3985a55b9ca1543026aeda6dad954c5bf67817ead->leave($__internal_5dcb2733bbccb3c2371d35d3985a55b9ca1543026aeda6dad954c5bf67817ead_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/Modal/login.html.twig";
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
    {{ include('@FOSUser/Security/Modal/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/Modal/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login.html.twig");
    }
}
