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
        $__internal_9aab5608845fb5bff7bd03fa0f83ab035980a5e6345abcc5e384bf7ef5260458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aab5608845fb5bff7bd03fa0f83ab035980a5e6345abcc5e384bf7ef5260458->enter($__internal_9aab5608845fb5bff7bd03fa0f83ab035980a5e6345abcc5e384bf7ef5260458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_531071072ec99fd415cc3a1a911183c731c9a10e7eeb1506ec64a490fcb9af02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_531071072ec99fd415cc3a1a911183c731c9a10e7eeb1506ec64a490fcb9af02->enter($__internal_531071072ec99fd415cc3a1a911183c731c9a10e7eeb1506ec64a490fcb9af02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9aab5608845fb5bff7bd03fa0f83ab035980a5e6345abcc5e384bf7ef5260458->leave($__internal_9aab5608845fb5bff7bd03fa0f83ab035980a5e6345abcc5e384bf7ef5260458_prof);

        
        $__internal_531071072ec99fd415cc3a1a911183c731c9a10e7eeb1506ec64a490fcb9af02->leave($__internal_531071072ec99fd415cc3a1a911183c731c9a10e7eeb1506ec64a490fcb9af02_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1e380ce86a6cc5e0dbeea36e6f615a1c352193eaa71dbd03f87cea4cab86a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e380ce86a6cc5e0dbeea36e6f615a1c352193eaa71dbd03f87cea4cab86a91->enter($__internal_c1e380ce86a6cc5e0dbeea36e6f615a1c352193eaa71dbd03f87cea4cab86a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4c33bab6adc5d9548b167640ce628b8f39d4f1033e67edc507edbc08a963289b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c33bab6adc5d9548b167640ce628b8f39d4f1033e67edc507edbc08a963289b->enter($__internal_4c33bab6adc5d9548b167640ce628b8f39d4f1033e67edc507edbc08a963289b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_4c33bab6adc5d9548b167640ce628b8f39d4f1033e67edc507edbc08a963289b->leave($__internal_4c33bab6adc5d9548b167640ce628b8f39d4f1033e67edc507edbc08a963289b_prof);

        
        $__internal_c1e380ce86a6cc5e0dbeea36e6f615a1c352193eaa71dbd03f87cea4cab86a91->leave($__internal_c1e380ce86a6cc5e0dbeea36e6f615a1c352193eaa71dbd03f87cea4cab86a91_prof);

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
", "@FOSUser/Registration/Modal/register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
