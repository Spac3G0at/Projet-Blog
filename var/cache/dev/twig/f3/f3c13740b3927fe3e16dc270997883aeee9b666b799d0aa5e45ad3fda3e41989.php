<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_577778cee589ee6200010be1aeee621cbad6505f24b10b54e6cb5b58bbbeafb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_68a5ef8e3b29a60194885c4a7e6a740ff6a38a88dc29dd3abff5f90b5a87a144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a5ef8e3b29a60194885c4a7e6a740ff6a38a88dc29dd3abff5f90b5a87a144->enter($__internal_68a5ef8e3b29a60194885c4a7e6a740ff6a38a88dc29dd3abff5f90b5a87a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_c99f80faa74964247e82be2f1fd4810187db66bc46c96e9ba9e77a5d6f8c92ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99f80faa74964247e82be2f1fd4810187db66bc46c96e9ba9e77a5d6f8c92ec->enter($__internal_c99f80faa74964247e82be2f1fd4810187db66bc46c96e9ba9e77a5d6f8c92ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a5ef8e3b29a60194885c4a7e6a740ff6a38a88dc29dd3abff5f90b5a87a144->leave($__internal_68a5ef8e3b29a60194885c4a7e6a740ff6a38a88dc29dd3abff5f90b5a87a144_prof);

        
        $__internal_c99f80faa74964247e82be2f1fd4810187db66bc46c96e9ba9e77a5d6f8c92ec->leave($__internal_c99f80faa74964247e82be2f1fd4810187db66bc46c96e9ba9e77a5d6f8c92ec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5bfd09c37caec55dfa71cbda42f2a562ba410c0863cc97a76974e8fd67e70945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfd09c37caec55dfa71cbda42f2a562ba410c0863cc97a76974e8fd67e70945->enter($__internal_5bfd09c37caec55dfa71cbda42f2a562ba410c0863cc97a76974e8fd67e70945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b8480ad350b9d21fe641032ae3e8a134ec603f26e15495567ae61f72830462f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8480ad350b9d21fe641032ae3e8a134ec603f26e15495567ae61f72830462f8->enter($__internal_b8480ad350b9d21fe641032ae3e8a134ec603f26e15495567ae61f72830462f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_b8480ad350b9d21fe641032ae3e8a134ec603f26e15495567ae61f72830462f8->leave($__internal_b8480ad350b9d21fe641032ae3e8a134ec603f26e15495567ae61f72830462f8_prof);

        
        $__internal_5bfd09c37caec55dfa71cbda42f2a562ba410c0863cc97a76974e8fd67e70945->leave($__internal_5bfd09c37caec55dfa71cbda42f2a562ba410c0863cc97a76974e8fd67e70945_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
