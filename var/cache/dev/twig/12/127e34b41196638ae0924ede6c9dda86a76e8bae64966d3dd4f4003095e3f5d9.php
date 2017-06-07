<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e6744eeaf163b2b4c8f18e680f8ce33a000cd79e5350c960cf34f057c98e8aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_901483def541beb953dcdccf12702f6afb44313b5948ed9a9f30445cbc44cce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_901483def541beb953dcdccf12702f6afb44313b5948ed9a9f30445cbc44cce9->enter($__internal_901483def541beb953dcdccf12702f6afb44313b5948ed9a9f30445cbc44cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_fe99e54f68a4e9258901e4486afffd7db39c2561f371e0ffb86cfdaaf9c652ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe99e54f68a4e9258901e4486afffd7db39c2561f371e0ffb86cfdaaf9c652ac->enter($__internal_fe99e54f68a4e9258901e4486afffd7db39c2561f371e0ffb86cfdaaf9c652ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_901483def541beb953dcdccf12702f6afb44313b5948ed9a9f30445cbc44cce9->leave($__internal_901483def541beb953dcdccf12702f6afb44313b5948ed9a9f30445cbc44cce9_prof);

        
        $__internal_fe99e54f68a4e9258901e4486afffd7db39c2561f371e0ffb86cfdaaf9c652ac->leave($__internal_fe99e54f68a4e9258901e4486afffd7db39c2561f371e0ffb86cfdaaf9c652ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6ddb938ab83642b63e79093b19e00c1e6d9b412eb0919804ac8a5309f665b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ddb938ab83642b63e79093b19e00c1e6d9b412eb0919804ac8a5309f665b8a->enter($__internal_a6ddb938ab83642b63e79093b19e00c1e6d9b412eb0919804ac8a5309f665b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6727acfc0cec434556c19e8bf364245d003cfda960ca0c22bec3096b98339991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6727acfc0cec434556c19e8bf364245d003cfda960ca0c22bec3096b98339991->enter($__internal_6727acfc0cec434556c19e8bf364245d003cfda960ca0c22bec3096b98339991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6727acfc0cec434556c19e8bf364245d003cfda960ca0c22bec3096b98339991->leave($__internal_6727acfc0cec434556c19e8bf364245d003cfda960ca0c22bec3096b98339991_prof);

        
        $__internal_a6ddb938ab83642b63e79093b19e00c1e6d9b412eb0919804ac8a5309f665b8a->leave($__internal_a6ddb938ab83642b63e79093b19e00c1e6d9b412eb0919804ac8a5309f665b8a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
