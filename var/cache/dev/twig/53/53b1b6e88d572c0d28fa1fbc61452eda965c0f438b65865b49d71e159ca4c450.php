<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_622e39f72f10999feda4a739c44578c7a43bef32c4e39d1223e1e32d4fec341d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d74243ccc79f68ab2c8ea9a0c5845bf7b540040442bb867b37dc969c612669d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74243ccc79f68ab2c8ea9a0c5845bf7b540040442bb867b37dc969c612669d0->enter($__internal_d74243ccc79f68ab2c8ea9a0c5845bf7b540040442bb867b37dc969c612669d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_440db77ce0f9ffdd6f469d10c33374c704c34e44462c4e5c3ff343f5988c6400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440db77ce0f9ffdd6f469d10c33374c704c34e44462c4e5c3ff343f5988c6400->enter($__internal_440db77ce0f9ffdd6f469d10c33374c704c34e44462c4e5c3ff343f5988c6400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d74243ccc79f68ab2c8ea9a0c5845bf7b540040442bb867b37dc969c612669d0->leave($__internal_d74243ccc79f68ab2c8ea9a0c5845bf7b540040442bb867b37dc969c612669d0_prof);

        
        $__internal_440db77ce0f9ffdd6f469d10c33374c704c34e44462c4e5c3ff343f5988c6400->leave($__internal_440db77ce0f9ffdd6f469d10c33374c704c34e44462c4e5c3ff343f5988c6400_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d5f0f0ed91374be504daee65416e33b1fc6ab308f54a34dc2901bffe83436bea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f0f0ed91374be504daee65416e33b1fc6ab308f54a34dc2901bffe83436bea->enter($__internal_d5f0f0ed91374be504daee65416e33b1fc6ab308f54a34dc2901bffe83436bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_6cbaffaf114735772dd2ef99f593073d608bb637f2736eefde7ac97c1083f758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbaffaf114735772dd2ef99f593073d608bb637f2736eefde7ac97c1083f758->enter($__internal_6cbaffaf114735772dd2ef99f593073d608bb637f2736eefde7ac97c1083f758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_6cbaffaf114735772dd2ef99f593073d608bb637f2736eefde7ac97c1083f758->leave($__internal_6cbaffaf114735772dd2ef99f593073d608bb637f2736eefde7ac97c1083f758_prof);

        
        $__internal_d5f0f0ed91374be504daee65416e33b1fc6ab308f54a34dc2901bffe83436bea->leave($__internal_d5f0f0ed91374be504daee65416e33b1fc6ab308f54a34dc2901bffe83436bea_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_636b61f4077a65623fe8bdc54d6707cbda433cacc33767869b3fc6cb826da893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_636b61f4077a65623fe8bdc54d6707cbda433cacc33767869b3fc6cb826da893->enter($__internal_636b61f4077a65623fe8bdc54d6707cbda433cacc33767869b3fc6cb826da893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_153286e99757c91b4d155853af45a91ec03334201e58224257a9bce7ed8f1127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_153286e99757c91b4d155853af45a91ec03334201e58224257a9bce7ed8f1127->enter($__internal_153286e99757c91b4d155853af45a91ec03334201e58224257a9bce7ed8f1127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_153286e99757c91b4d155853af45a91ec03334201e58224257a9bce7ed8f1127->leave($__internal_153286e99757c91b4d155853af45a91ec03334201e58224257a9bce7ed8f1127_prof);

        
        $__internal_636b61f4077a65623fe8bdc54d6707cbda433cacc33767869b3fc6cb826da893->leave($__internal_636b61f4077a65623fe8bdc54d6707cbda433cacc33767869b3fc6cb826da893_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d7926965b7ad9e9a760a1067031fef4051fa98e84dc0c695c52cd29cc5de2ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7926965b7ad9e9a760a1067031fef4051fa98e84dc0c695c52cd29cc5de2ee1->enter($__internal_d7926965b7ad9e9a760a1067031fef4051fa98e84dc0c695c52cd29cc5de2ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c57c01c55618794c3100bdc66082f9511802afd2b1f3c9d5d9a391de3743bd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57c01c55618794c3100bdc66082f9511802afd2b1f3c9d5d9a391de3743bd9a->enter($__internal_c57c01c55618794c3100bdc66082f9511802afd2b1f3c9d5d9a391de3743bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c57c01c55618794c3100bdc66082f9511802afd2b1f3c9d5d9a391de3743bd9a->leave($__internal_c57c01c55618794c3100bdc66082f9511802afd2b1f3c9d5d9a391de3743bd9a_prof);

        
        $__internal_d7926965b7ad9e9a760a1067031fef4051fa98e84dc0c695c52cd29cc5de2ee1->leave($__internal_d7926965b7ad9e9a760a1067031fef4051fa98e84dc0c695c52cd29cc5de2ee1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
