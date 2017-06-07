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
        $__internal_e7274d8d8f0b400b971cb88cc0a7191fae306ad86a2d3f6f01872e48f852c5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7274d8d8f0b400b971cb88cc0a7191fae306ad86a2d3f6f01872e48f852c5db->enter($__internal_e7274d8d8f0b400b971cb88cc0a7191fae306ad86a2d3f6f01872e48f852c5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_b24cc298b1dc5e4a84fcdb3d4a9f538b62d4661ba89c8dd4dbcc0cc14712f5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24cc298b1dc5e4a84fcdb3d4a9f538b62d4661ba89c8dd4dbcc0cc14712f5ec->enter($__internal_b24cc298b1dc5e4a84fcdb3d4a9f538b62d4661ba89c8dd4dbcc0cc14712f5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e7274d8d8f0b400b971cb88cc0a7191fae306ad86a2d3f6f01872e48f852c5db->leave($__internal_e7274d8d8f0b400b971cb88cc0a7191fae306ad86a2d3f6f01872e48f852c5db_prof);

        
        $__internal_b24cc298b1dc5e4a84fcdb3d4a9f538b62d4661ba89c8dd4dbcc0cc14712f5ec->leave($__internal_b24cc298b1dc5e4a84fcdb3d4a9f538b62d4661ba89c8dd4dbcc0cc14712f5ec_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6915c651330c7efc5a40a4ead498ac39a38cdbbc0a28307644e9a684f8ab633c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6915c651330c7efc5a40a4ead498ac39a38cdbbc0a28307644e9a684f8ab633c->enter($__internal_6915c651330c7efc5a40a4ead498ac39a38cdbbc0a28307644e9a684f8ab633c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1e79613723c1373c0702bc41338b5342607ebaf95bba5f7d842f6a6a60a80839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e79613723c1373c0702bc41338b5342607ebaf95bba5f7d842f6a6a60a80839->enter($__internal_1e79613723c1373c0702bc41338b5342607ebaf95bba5f7d842f6a6a60a80839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_1e79613723c1373c0702bc41338b5342607ebaf95bba5f7d842f6a6a60a80839->leave($__internal_1e79613723c1373c0702bc41338b5342607ebaf95bba5f7d842f6a6a60a80839_prof);

        
        $__internal_6915c651330c7efc5a40a4ead498ac39a38cdbbc0a28307644e9a684f8ab633c->leave($__internal_6915c651330c7efc5a40a4ead498ac39a38cdbbc0a28307644e9a684f8ab633c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0f41196480b9c0bc19285cc42ebb587da2c43f32dbcd35a27bcc9627a4a3e78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f41196480b9c0bc19285cc42ebb587da2c43f32dbcd35a27bcc9627a4a3e78a->enter($__internal_0f41196480b9c0bc19285cc42ebb587da2c43f32dbcd35a27bcc9627a4a3e78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_87cbadcf1edea6d3cb935897010e4bb1a31121ea0b087e187a5ad96fc2e78c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cbadcf1edea6d3cb935897010e4bb1a31121ea0b087e187a5ad96fc2e78c95->enter($__internal_87cbadcf1edea6d3cb935897010e4bb1a31121ea0b087e187a5ad96fc2e78c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_87cbadcf1edea6d3cb935897010e4bb1a31121ea0b087e187a5ad96fc2e78c95->leave($__internal_87cbadcf1edea6d3cb935897010e4bb1a31121ea0b087e187a5ad96fc2e78c95_prof);

        
        $__internal_0f41196480b9c0bc19285cc42ebb587da2c43f32dbcd35a27bcc9627a4a3e78a->leave($__internal_0f41196480b9c0bc19285cc42ebb587da2c43f32dbcd35a27bcc9627a4a3e78a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_69296e4511375ded827f4c2725a65c69b3dc5aaec403b7208be5b227caa2ac8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69296e4511375ded827f4c2725a65c69b3dc5aaec403b7208be5b227caa2ac8f->enter($__internal_69296e4511375ded827f4c2725a65c69b3dc5aaec403b7208be5b227caa2ac8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b40f7425f1e2a3c72d8ff497c3111b84ec2897df78a02d69f538290ff74a1b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40f7425f1e2a3c72d8ff497c3111b84ec2897df78a02d69f538290ff74a1b3c->enter($__internal_b40f7425f1e2a3c72d8ff497c3111b84ec2897df78a02d69f538290ff74a1b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b40f7425f1e2a3c72d8ff497c3111b84ec2897df78a02d69f538290ff74a1b3c->leave($__internal_b40f7425f1e2a3c72d8ff497c3111b84ec2897df78a02d69f538290ff74a1b3c_prof);

        
        $__internal_69296e4511375ded827f4c2725a65c69b3dc5aaec403b7208be5b227caa2ac8f->leave($__internal_69296e4511375ded827f4c2725a65c69b3dc5aaec403b7208be5b227caa2ac8f_prof);

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
