<?php

/* FOSUserBundle:Registration/Modal:email.txt.twig */
class __TwigTemplate_4a4a496ea99fa822463b74767d6fa17f9ee5030b72b2c9051707e071bc51de43 extends Twig_Template
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
        $__internal_e3db69206600aae4c27577f8fa34adebc87ffe52a9936ddb893227552184c1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3db69206600aae4c27577f8fa34adebc87ffe52a9936ddb893227552184c1ef->enter($__internal_e3db69206600aae4c27577f8fa34adebc87ffe52a9936ddb893227552184c1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        $__internal_cf449ed43ada1248cf6a2f991ec16ec0fdc2039893138c450a44aac3798400c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf449ed43ada1248cf6a2f991ec16ec0fdc2039893138c450a44aac3798400c5->enter($__internal_cf449ed43ada1248cf6a2f991ec16ec0fdc2039893138c450a44aac3798400c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e3db69206600aae4c27577f8fa34adebc87ffe52a9936ddb893227552184c1ef->leave($__internal_e3db69206600aae4c27577f8fa34adebc87ffe52a9936ddb893227552184c1ef_prof);

        
        $__internal_cf449ed43ada1248cf6a2f991ec16ec0fdc2039893138c450a44aac3798400c5->leave($__internal_cf449ed43ada1248cf6a2f991ec16ec0fdc2039893138c450a44aac3798400c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_29a3c54b979c28c796d5f333f089b4053db6670109600ae1860e49a107f2a525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29a3c54b979c28c796d5f333f089b4053db6670109600ae1860e49a107f2a525->enter($__internal_29a3c54b979c28c796d5f333f089b4053db6670109600ae1860e49a107f2a525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_85c24bbb9b08a3285fc6b6b733ed2884eded9487f63e5edd5b93d943bb8be4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c24bbb9b08a3285fc6b6b733ed2884eded9487f63e5edd5b93d943bb8be4e4->enter($__internal_85c24bbb9b08a3285fc6b6b733ed2884eded9487f63e5edd5b93d943bb8be4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_85c24bbb9b08a3285fc6b6b733ed2884eded9487f63e5edd5b93d943bb8be4e4->leave($__internal_85c24bbb9b08a3285fc6b6b733ed2884eded9487f63e5edd5b93d943bb8be4e4_prof);

        
        $__internal_29a3c54b979c28c796d5f333f089b4053db6670109600ae1860e49a107f2a525->leave($__internal_29a3c54b979c28c796d5f333f089b4053db6670109600ae1860e49a107f2a525_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c1c9ad377300ea2fe34c598f37d8fcfc588b4fbe500bdafc4fe00ede535fc4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c9ad377300ea2fe34c598f37d8fcfc588b4fbe500bdafc4fe00ede535fc4d9->enter($__internal_c1c9ad377300ea2fe34c598f37d8fcfc588b4fbe500bdafc4fe00ede535fc4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b1fbae8614ef92b21c876e118a76754526e50f69ed754f836288756acc03ef97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fbae8614ef92b21c876e118a76754526e50f69ed754f836288756acc03ef97->enter($__internal_b1fbae8614ef92b21c876e118a76754526e50f69ed754f836288756acc03ef97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b1fbae8614ef92b21c876e118a76754526e50f69ed754f836288756acc03ef97->leave($__internal_b1fbae8614ef92b21c876e118a76754526e50f69ed754f836288756acc03ef97_prof);

        
        $__internal_c1c9ad377300ea2fe34c598f37d8fcfc588b4fbe500bdafc4fe00ede535fc4d9->leave($__internal_c1c9ad377300ea2fe34c598f37d8fcfc588b4fbe500bdafc4fe00ede535fc4d9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_684c1ea35a6687372fb5e5b245691fb4ffd2191fdd52b8203f97d42354314fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684c1ea35a6687372fb5e5b245691fb4ffd2191fdd52b8203f97d42354314fdb->enter($__internal_684c1ea35a6687372fb5e5b245691fb4ffd2191fdd52b8203f97d42354314fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a8ff3c496cafb7445c5cba97bf041ff885076fff2921d80935a1c18792f34e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ff3c496cafb7445c5cba97bf041ff885076fff2921d80935a1c18792f34e8d->enter($__internal_a8ff3c496cafb7445c5cba97bf041ff885076fff2921d80935a1c18792f34e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a8ff3c496cafb7445c5cba97bf041ff885076fff2921d80935a1c18792f34e8d->leave($__internal_a8ff3c496cafb7445c5cba97bf041ff885076fff2921d80935a1c18792f34e8d_prof);

        
        $__internal_684c1ea35a6687372fb5e5b245691fb4ffd2191fdd52b8203f97d42354314fdb->leave($__internal_684c1ea35a6687372fb5e5b245691fb4ffd2191fdd52b8203f97d42354314fdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:email.txt.twig";
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
", "FOSUserBundle:Registration/Modal:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/email.txt.twig");
    }
}
