<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_39e9bcb8c977b8e303bc877c9972e086ad3b1456c676f3f9f19e2bfcc2e1a0ac extends Twig_Template
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
        $__internal_fd1c6bb2b2598bb5355617597e84f3356e42c99339f8054a3d5febce6e8b5690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1c6bb2b2598bb5355617597e84f3356e42c99339f8054a3d5febce6e8b5690->enter($__internal_fd1c6bb2b2598bb5355617597e84f3356e42c99339f8054a3d5febce6e8b5690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_5acb01d36bd4244f01f0cdebb164d1a2092fcace73ac01b5a8cee9adcb1dd9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5acb01d36bd4244f01f0cdebb164d1a2092fcace73ac01b5a8cee9adcb1dd9ef->enter($__internal_5acb01d36bd4244f01f0cdebb164d1a2092fcace73ac01b5a8cee9adcb1dd9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fd1c6bb2b2598bb5355617597e84f3356e42c99339f8054a3d5febce6e8b5690->leave($__internal_fd1c6bb2b2598bb5355617597e84f3356e42c99339f8054a3d5febce6e8b5690_prof);

        
        $__internal_5acb01d36bd4244f01f0cdebb164d1a2092fcace73ac01b5a8cee9adcb1dd9ef->leave($__internal_5acb01d36bd4244f01f0cdebb164d1a2092fcace73ac01b5a8cee9adcb1dd9ef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b71f7b2648e1a36cd18483a995de1cabe394a5205dfa5753c5cabd72f83f17b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71f7b2648e1a36cd18483a995de1cabe394a5205dfa5753c5cabd72f83f17b6->enter($__internal_b71f7b2648e1a36cd18483a995de1cabe394a5205dfa5753c5cabd72f83f17b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9e646af9f145a522c52596730f8327ba5cbddf8a347122f2ee25ebb2c2a1d2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e646af9f145a522c52596730f8327ba5cbddf8a347122f2ee25ebb2c2a1d2cb->enter($__internal_9e646af9f145a522c52596730f8327ba5cbddf8a347122f2ee25ebb2c2a1d2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9e646af9f145a522c52596730f8327ba5cbddf8a347122f2ee25ebb2c2a1d2cb->leave($__internal_9e646af9f145a522c52596730f8327ba5cbddf8a347122f2ee25ebb2c2a1d2cb_prof);

        
        $__internal_b71f7b2648e1a36cd18483a995de1cabe394a5205dfa5753c5cabd72f83f17b6->leave($__internal_b71f7b2648e1a36cd18483a995de1cabe394a5205dfa5753c5cabd72f83f17b6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_135c9ffc4c9571fd6e6541bab72e07467ec0afbb343cf703e63fa7e8951212e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135c9ffc4c9571fd6e6541bab72e07467ec0afbb343cf703e63fa7e8951212e3->enter($__internal_135c9ffc4c9571fd6e6541bab72e07467ec0afbb343cf703e63fa7e8951212e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_4463925c834ad12d225c64f08b9cf1fb09d2d604b4bc47ce7c10a28e4ef1defe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4463925c834ad12d225c64f08b9cf1fb09d2d604b4bc47ce7c10a28e4ef1defe->enter($__internal_4463925c834ad12d225c64f08b9cf1fb09d2d604b4bc47ce7c10a28e4ef1defe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4463925c834ad12d225c64f08b9cf1fb09d2d604b4bc47ce7c10a28e4ef1defe->leave($__internal_4463925c834ad12d225c64f08b9cf1fb09d2d604b4bc47ce7c10a28e4ef1defe_prof);

        
        $__internal_135c9ffc4c9571fd6e6541bab72e07467ec0afbb343cf703e63fa7e8951212e3->leave($__internal_135c9ffc4c9571fd6e6541bab72e07467ec0afbb343cf703e63fa7e8951212e3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f7e7a6dc6862345407a0033b13def8a923add89fc29bb948cdb72579117c894c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e7a6dc6862345407a0033b13def8a923add89fc29bb948cdb72579117c894c->enter($__internal_f7e7a6dc6862345407a0033b13def8a923add89fc29bb948cdb72579117c894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_127c4e6451f91d11ecbfc3e4576145131df460b40eb7731392fd41bf41cecca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127c4e6451f91d11ecbfc3e4576145131df460b40eb7731392fd41bf41cecca4->enter($__internal_127c4e6451f91d11ecbfc3e4576145131df460b40eb7731392fd41bf41cecca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_127c4e6451f91d11ecbfc3e4576145131df460b40eb7731392fd41bf41cecca4->leave($__internal_127c4e6451f91d11ecbfc3e4576145131df460b40eb7731392fd41bf41cecca4_prof);

        
        $__internal_f7e7a6dc6862345407a0033b13def8a923add89fc29bb948cdb72579117c894c->leave($__internal_f7e7a6dc6862345407a0033b13def8a923add89fc29bb948cdb72579117c894c_prof);

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
