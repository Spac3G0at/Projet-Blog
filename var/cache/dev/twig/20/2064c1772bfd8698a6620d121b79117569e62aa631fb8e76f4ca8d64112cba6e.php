<?php

/* FOSUserBundle:Registration/Modal:check_email.html.twig */
class __TwigTemplate_8061304d18e9df2d51a702f3809ef5585f4befa4195a2dee12d90fe17c84de09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration/Modal:check_email.html.twig", 1);
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
        $__internal_2fe868702a0635e4b943f7b78e46e8f1ec4e521c6d0fae957db69cd393eddc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe868702a0635e4b943f7b78e46e8f1ec4e521c6d0fae957db69cd393eddc84->enter($__internal_2fe868702a0635e4b943f7b78e46e8f1ec4e521c6d0fae957db69cd393eddc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $__internal_fc6ec18ee6546020d32002a48af5e29f1d82f8eb82674386c78b622d98f38f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6ec18ee6546020d32002a48af5e29f1d82f8eb82674386c78b622d98f38f10->enter($__internal_fc6ec18ee6546020d32002a48af5e29f1d82f8eb82674386c78b622d98f38f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fe868702a0635e4b943f7b78e46e8f1ec4e521c6d0fae957db69cd393eddc84->leave($__internal_2fe868702a0635e4b943f7b78e46e8f1ec4e521c6d0fae957db69cd393eddc84_prof);

        
        $__internal_fc6ec18ee6546020d32002a48af5e29f1d82f8eb82674386c78b622d98f38f10->leave($__internal_fc6ec18ee6546020d32002a48af5e29f1d82f8eb82674386c78b622d98f38f10_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdbe3fcf7705bdc074910ffdfb03b5f7736f4548002ec2dad9288fbaef45f625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbe3fcf7705bdc074910ffdfb03b5f7736f4548002ec2dad9288fbaef45f625->enter($__internal_bdbe3fcf7705bdc074910ffdfb03b5f7736f4548002ec2dad9288fbaef45f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4977241c528c2dbc8483fff52af498f5cd0b1dfa8a273fd5e2ac63685f6592a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4977241c528c2dbc8483fff52af498f5cd0b1dfa8a273fd5e2ac63685f6592a1->enter($__internal_4977241c528c2dbc8483fff52af498f5cd0b1dfa8a273fd5e2ac63685f6592a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4977241c528c2dbc8483fff52af498f5cd0b1dfa8a273fd5e2ac63685f6592a1->leave($__internal_4977241c528c2dbc8483fff52af498f5cd0b1dfa8a273fd5e2ac63685f6592a1_prof);

        
        $__internal_bdbe3fcf7705bdc074910ffdfb03b5f7736f4548002ec2dad9288fbaef45f625->leave($__internal_bdbe3fcf7705bdc074910ffdfb03b5f7736f4548002ec2dad9288fbaef45f625_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration/Modal:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/check_email.html.twig");
    }
}
