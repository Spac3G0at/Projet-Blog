<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_5cec58c88904cb790ca309cb11ff267b44db2ca529362d7aa464e365cd55b572 extends Twig_Template
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
        $__internal_6fed259776c203885e38f4696719d5b29ee3a2f25fa5c49bbbcd6c6d471096d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fed259776c203885e38f4696719d5b29ee3a2f25fa5c49bbbcd6c6d471096d4->enter($__internal_6fed259776c203885e38f4696719d5b29ee3a2f25fa5c49bbbcd6c6d471096d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e068fca805e2fb259b78f88f6b8d35a5859c76ad9c28d34ccfcf6cd5bf64e4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e068fca805e2fb259b78f88f6b8d35a5859c76ad9c28d34ccfcf6cd5bf64e4aa->enter($__internal_e068fca805e2fb259b78f88f6b8d35a5859c76ad9c28d34ccfcf6cd5bf64e4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6fed259776c203885e38f4696719d5b29ee3a2f25fa5c49bbbcd6c6d471096d4->leave($__internal_6fed259776c203885e38f4696719d5b29ee3a2f25fa5c49bbbcd6c6d471096d4_prof);

        
        $__internal_e068fca805e2fb259b78f88f6b8d35a5859c76ad9c28d34ccfcf6cd5bf64e4aa->leave($__internal_e068fca805e2fb259b78f88f6b8d35a5859c76ad9c28d34ccfcf6cd5bf64e4aa_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_06769aa8b3698db895b5bf63660873d2512925ac822c8785f98f897a33a0af96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06769aa8b3698db895b5bf63660873d2512925ac822c8785f98f897a33a0af96->enter($__internal_06769aa8b3698db895b5bf63660873d2512925ac822c8785f98f897a33a0af96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_65972c8bffc53a56526dbe35c6d1d257c490255909bbe6c9e2424b99725c74eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65972c8bffc53a56526dbe35c6d1d257c490255909bbe6c9e2424b99725c74eb->enter($__internal_65972c8bffc53a56526dbe35c6d1d257c490255909bbe6c9e2424b99725c74eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_65972c8bffc53a56526dbe35c6d1d257c490255909bbe6c9e2424b99725c74eb->leave($__internal_65972c8bffc53a56526dbe35c6d1d257c490255909bbe6c9e2424b99725c74eb_prof);

        
        $__internal_06769aa8b3698db895b5bf63660873d2512925ac822c8785f98f897a33a0af96->leave($__internal_06769aa8b3698db895b5bf63660873d2512925ac822c8785f98f897a33a0af96_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7ba286dd2ff5f505a26a83ab7e1dc157361c46ddf0eeeca1f6beb863ab3d2146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba286dd2ff5f505a26a83ab7e1dc157361c46ddf0eeeca1f6beb863ab3d2146->enter($__internal_7ba286dd2ff5f505a26a83ab7e1dc157361c46ddf0eeeca1f6beb863ab3d2146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_48c9ef6b6596181c64668a78811ec18958554d0024b3c3f14582539491062e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c9ef6b6596181c64668a78811ec18958554d0024b3c3f14582539491062e14->enter($__internal_48c9ef6b6596181c64668a78811ec18958554d0024b3c3f14582539491062e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_48c9ef6b6596181c64668a78811ec18958554d0024b3c3f14582539491062e14->leave($__internal_48c9ef6b6596181c64668a78811ec18958554d0024b3c3f14582539491062e14_prof);

        
        $__internal_7ba286dd2ff5f505a26a83ab7e1dc157361c46ddf0eeeca1f6beb863ab3d2146->leave($__internal_7ba286dd2ff5f505a26a83ab7e1dc157361c46ddf0eeeca1f6beb863ab3d2146_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ee229a3b2248ad4534059c67f6534c695e8714d375d98b5f17342b64edaba3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee229a3b2248ad4534059c67f6534c695e8714d375d98b5f17342b64edaba3e5->enter($__internal_ee229a3b2248ad4534059c67f6534c695e8714d375d98b5f17342b64edaba3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_51c9045201c95edd18adb52d12f4b68e221e7f072f75bb214ed15d303890ed74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c9045201c95edd18adb52d12f4b68e221e7f072f75bb214ed15d303890ed74->enter($__internal_51c9045201c95edd18adb52d12f4b68e221e7f072f75bb214ed15d303890ed74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51c9045201c95edd18adb52d12f4b68e221e7f072f75bb214ed15d303890ed74->leave($__internal_51c9045201c95edd18adb52d12f4b68e221e7f072f75bb214ed15d303890ed74_prof);

        
        $__internal_ee229a3b2248ad4534059c67f6534c695e8714d375d98b5f17342b64edaba3e5->leave($__internal_ee229a3b2248ad4534059c67f6534c695e8714d375d98b5f17342b64edaba3e5_prof);

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
