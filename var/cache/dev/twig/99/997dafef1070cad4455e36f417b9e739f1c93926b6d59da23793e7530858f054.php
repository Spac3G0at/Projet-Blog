<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4e9e70d4b5a40e9b6a7c5b27fabed121a92bc983ddf5f1217597d730a0dda8ce extends Twig_Template
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
        $__internal_d3fa6003e91fc3315c7037b4e331aa5fb80388d66d02159d089f77516c3dc97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3fa6003e91fc3315c7037b4e331aa5fb80388d66d02159d089f77516c3dc97c->enter($__internal_d3fa6003e91fc3315c7037b4e331aa5fb80388d66d02159d089f77516c3dc97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_50cfc5831698e3b7c982d4b64e3a42d6a01a2949f7382a44c38f8349d87c3678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50cfc5831698e3b7c982d4b64e3a42d6a01a2949f7382a44c38f8349d87c3678->enter($__internal_50cfc5831698e3b7c982d4b64e3a42d6a01a2949f7382a44c38f8349d87c3678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d3fa6003e91fc3315c7037b4e331aa5fb80388d66d02159d089f77516c3dc97c->leave($__internal_d3fa6003e91fc3315c7037b4e331aa5fb80388d66d02159d089f77516c3dc97c_prof);

        
        $__internal_50cfc5831698e3b7c982d4b64e3a42d6a01a2949f7382a44c38f8349d87c3678->leave($__internal_50cfc5831698e3b7c982d4b64e3a42d6a01a2949f7382a44c38f8349d87c3678_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_75f738146337357dc814cfe9a9287a4af56abb6ae7327e3006a46a623dfc99e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f738146337357dc814cfe9a9287a4af56abb6ae7327e3006a46a623dfc99e6->enter($__internal_75f738146337357dc814cfe9a9287a4af56abb6ae7327e3006a46a623dfc99e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_89aef626f941eaa2d3f39c3bf6e31dcf9182e4975e5197fab9a16a917eeba754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89aef626f941eaa2d3f39c3bf6e31dcf9182e4975e5197fab9a16a917eeba754->enter($__internal_89aef626f941eaa2d3f39c3bf6e31dcf9182e4975e5197fab9a16a917eeba754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_89aef626f941eaa2d3f39c3bf6e31dcf9182e4975e5197fab9a16a917eeba754->leave($__internal_89aef626f941eaa2d3f39c3bf6e31dcf9182e4975e5197fab9a16a917eeba754_prof);

        
        $__internal_75f738146337357dc814cfe9a9287a4af56abb6ae7327e3006a46a623dfc99e6->leave($__internal_75f738146337357dc814cfe9a9287a4af56abb6ae7327e3006a46a623dfc99e6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_233be6011c07871636c387ee9e0c1ab4460990ffc81813622ea10b5e251024a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_233be6011c07871636c387ee9e0c1ab4460990ffc81813622ea10b5e251024a3->enter($__internal_233be6011c07871636c387ee9e0c1ab4460990ffc81813622ea10b5e251024a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_75c36843ec309af6a0584becd8a1b23df39d4df5f575eb3d201b7162cf934ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c36843ec309af6a0584becd8a1b23df39d4df5f575eb3d201b7162cf934ed2->enter($__internal_75c36843ec309af6a0584becd8a1b23df39d4df5f575eb3d201b7162cf934ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_75c36843ec309af6a0584becd8a1b23df39d4df5f575eb3d201b7162cf934ed2->leave($__internal_75c36843ec309af6a0584becd8a1b23df39d4df5f575eb3d201b7162cf934ed2_prof);

        
        $__internal_233be6011c07871636c387ee9e0c1ab4460990ffc81813622ea10b5e251024a3->leave($__internal_233be6011c07871636c387ee9e0c1ab4460990ffc81813622ea10b5e251024a3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ee7ba2d28bd32a272c1b27e644759b27edf50d5f120b7fbcc5ee1b391494f402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7ba2d28bd32a272c1b27e644759b27edf50d5f120b7fbcc5ee1b391494f402->enter($__internal_ee7ba2d28bd32a272c1b27e644759b27edf50d5f120b7fbcc5ee1b391494f402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ddae5a36433022485ecfc612c5efec79f917214f9b4785ff860d8889ea3198e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddae5a36433022485ecfc612c5efec79f917214f9b4785ff860d8889ea3198e4->enter($__internal_ddae5a36433022485ecfc612c5efec79f917214f9b4785ff860d8889ea3198e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ddae5a36433022485ecfc612c5efec79f917214f9b4785ff860d8889ea3198e4->leave($__internal_ddae5a36433022485ecfc612c5efec79f917214f9b4785ff860d8889ea3198e4_prof);

        
        $__internal_ee7ba2d28bd32a272c1b27e644759b27edf50d5f120b7fbcc5ee1b391494f402->leave($__internal_ee7ba2d28bd32a272c1b27e644759b27edf50d5f120b7fbcc5ee1b391494f402_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
