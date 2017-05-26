<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2917f21754f9b8ae4667a828147d27c5a9118f8b6aabe9baddc5c91d1ec56022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2917f21754f9b8ae4667a828147d27c5a9118f8b6aabe9baddc5c91d1ec56022->enter($__internal_2917f21754f9b8ae4667a828147d27c5a9118f8b6aabe9baddc5c91d1ec56022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9f46da3faaca9ecfe82113432896feb58ab840effb45a9ebe1a30af16a48354a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f46da3faaca9ecfe82113432896feb58ab840effb45a9ebe1a30af16a48354a->enter($__internal_9f46da3faaca9ecfe82113432896feb58ab840effb45a9ebe1a30af16a48354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2917f21754f9b8ae4667a828147d27c5a9118f8b6aabe9baddc5c91d1ec56022->leave($__internal_2917f21754f9b8ae4667a828147d27c5a9118f8b6aabe9baddc5c91d1ec56022_prof);

        
        $__internal_9f46da3faaca9ecfe82113432896feb58ab840effb45a9ebe1a30af16a48354a->leave($__internal_9f46da3faaca9ecfe82113432896feb58ab840effb45a9ebe1a30af16a48354a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5bc9b947531dba67155698883979ce6de809a10ade85a1db9365d75563c79fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc9b947531dba67155698883979ce6de809a10ade85a1db9365d75563c79fbf->enter($__internal_5bc9b947531dba67155698883979ce6de809a10ade85a1db9365d75563c79fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0869bc638a13422bae05dfec4a1c273d11591059f3bd90d7a95b77341711e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0869bc638a13422bae05dfec4a1c273d11591059f3bd90d7a95b77341711e6a->enter($__internal_e0869bc638a13422bae05dfec4a1c273d11591059f3bd90d7a95b77341711e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e0869bc638a13422bae05dfec4a1c273d11591059f3bd90d7a95b77341711e6a->leave($__internal_e0869bc638a13422bae05dfec4a1c273d11591059f3bd90d7a95b77341711e6a_prof);

        
        $__internal_5bc9b947531dba67155698883979ce6de809a10ade85a1db9365d75563c79fbf->leave($__internal_5bc9b947531dba67155698883979ce6de809a10ade85a1db9365d75563c79fbf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d5a976165ff591039ab3a88ddbf04db02544c0a7c2748f5962ae3bdc5ed7880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5a976165ff591039ab3a88ddbf04db02544c0a7c2748f5962ae3bdc5ed7880->enter($__internal_6d5a976165ff591039ab3a88ddbf04db02544c0a7c2748f5962ae3bdc5ed7880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bcd0ef06487dea0222f882801cfdfa332d774e93fa00dc39059671e09799cce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd0ef06487dea0222f882801cfdfa332d774e93fa00dc39059671e09799cce3->enter($__internal_bcd0ef06487dea0222f882801cfdfa332d774e93fa00dc39059671e09799cce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bcd0ef06487dea0222f882801cfdfa332d774e93fa00dc39059671e09799cce3->leave($__internal_bcd0ef06487dea0222f882801cfdfa332d774e93fa00dc39059671e09799cce3_prof);

        
        $__internal_6d5a976165ff591039ab3a88ddbf04db02544c0a7c2748f5962ae3bdc5ed7880->leave($__internal_6d5a976165ff591039ab3a88ddbf04db02544c0a7c2748f5962ae3bdc5ed7880_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_301543b0b19b2007ddc505082333b399a3b8b05a6e909acd3ddd1329d41eec7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_301543b0b19b2007ddc505082333b399a3b8b05a6e909acd3ddd1329d41eec7e->enter($__internal_301543b0b19b2007ddc505082333b399a3b8b05a6e909acd3ddd1329d41eec7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fca16f14894b0529d9b27b5afcc46c9d1f786695dc97cbaa614466e5a785a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fca16f14894b0529d9b27b5afcc46c9d1f786695dc97cbaa614466e5a785a07->enter($__internal_1fca16f14894b0529d9b27b5afcc46c9d1f786695dc97cbaa614466e5a785a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1fca16f14894b0529d9b27b5afcc46c9d1f786695dc97cbaa614466e5a785a07->leave($__internal_1fca16f14894b0529d9b27b5afcc46c9d1f786695dc97cbaa614466e5a785a07_prof);

        
        $__internal_301543b0b19b2007ddc505082333b399a3b8b05a6e909acd3ddd1329d41eec7e->leave($__internal_301543b0b19b2007ddc505082333b399a3b8b05a6e909acd3ddd1329d41eec7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b119e3651c5b15525c2e1e25ddb5c95d22d82e1f06f5d8ef0e0f415c0d0e667a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b119e3651c5b15525c2e1e25ddb5c95d22d82e1f06f5d8ef0e0f415c0d0e667a->enter($__internal_b119e3651c5b15525c2e1e25ddb5c95d22d82e1f06f5d8ef0e0f415c0d0e667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0c3d950024309ada604872a9451251b34061b5b0ec2100a8d846cc9c58bda846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3d950024309ada604872a9451251b34061b5b0ec2100a8d846cc9c58bda846->enter($__internal_0c3d950024309ada604872a9451251b34061b5b0ec2100a8d846cc9c58bda846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0c3d950024309ada604872a9451251b34061b5b0ec2100a8d846cc9c58bda846->leave($__internal_0c3d950024309ada604872a9451251b34061b5b0ec2100a8d846cc9c58bda846_prof);

        
        $__internal_b119e3651c5b15525c2e1e25ddb5c95d22d82e1f06f5d8ef0e0f415c0d0e667a->leave($__internal_b119e3651c5b15525c2e1e25ddb5c95d22d82e1f06f5d8ef0e0f415c0d0e667a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/base.html.twig");
    }
}
