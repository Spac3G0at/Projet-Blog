<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_c4573ef71992498a698d61c3a5de8e7dfba65a082cc8dc485db44ad0a257890e extends Twig_Template
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
        $__internal_97cc2aa71ba03dfa3f4575257f80f8b92652385a42b15b8e0ca109bcfa9bfbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cc2aa71ba03dfa3f4575257f80f8b92652385a42b15b8e0ca109bcfa9bfbd5->enter($__internal_97cc2aa71ba03dfa3f4575257f80f8b92652385a42b15b8e0ca109bcfa9bfbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_bcfabc9ce44f7a2793ca3400f09c1e115e7eb2622eeecf26468c1035c7ad00da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcfabc9ce44f7a2793ca3400f09c1e115e7eb2622eeecf26468c1035c7ad00da->enter($__internal_bcfabc9ce44f7a2793ca3400f09c1e115e7eb2622eeecf26468c1035c7ad00da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_97cc2aa71ba03dfa3f4575257f80f8b92652385a42b15b8e0ca109bcfa9bfbd5->leave($__internal_97cc2aa71ba03dfa3f4575257f80f8b92652385a42b15b8e0ca109bcfa9bfbd5_prof);

        
        $__internal_bcfabc9ce44f7a2793ca3400f09c1e115e7eb2622eeecf26468c1035c7ad00da->leave($__internal_bcfabc9ce44f7a2793ca3400f09c1e115e7eb2622eeecf26468c1035c7ad00da_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_68d8848102be664ec30fae5cc4499251329ceb04606d012385b64043073ce5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d8848102be664ec30fae5cc4499251329ceb04606d012385b64043073ce5b7->enter($__internal_68d8848102be664ec30fae5cc4499251329ceb04606d012385b64043073ce5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f6a889cef413d66af01295353c2698ef5b295ca2df58623a69e213f7214c8df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6a889cef413d66af01295353c2698ef5b295ca2df58623a69e213f7214c8df0->enter($__internal_f6a889cef413d66af01295353c2698ef5b295ca2df58623a69e213f7214c8df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_f6a889cef413d66af01295353c2698ef5b295ca2df58623a69e213f7214c8df0->leave($__internal_f6a889cef413d66af01295353c2698ef5b295ca2df58623a69e213f7214c8df0_prof);

        
        $__internal_68d8848102be664ec30fae5cc4499251329ceb04606d012385b64043073ce5b7->leave($__internal_68d8848102be664ec30fae5cc4499251329ceb04606d012385b64043073ce5b7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register.html.twig";
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
{% include \"@FOSUser/Registration/Modal/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/Modal/register.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
