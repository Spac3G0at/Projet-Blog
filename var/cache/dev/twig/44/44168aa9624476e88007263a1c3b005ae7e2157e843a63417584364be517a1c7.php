<?php

/* FOSUserBundle:Registration/Modal:confirmed.html.twig */
class __TwigTemplate_8bab47eeed8a6f61d0d42938812c8d9c7b0ed860e9cf87ac83f7aa2525fa8ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration/Modal:confirmed.html.twig", 1);
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
        $__internal_200b4211a63ab12d549c44cc7b2ee672468bfb9b4829fad883c89f81864a3124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_200b4211a63ab12d549c44cc7b2ee672468bfb9b4829fad883c89f81864a3124->enter($__internal_200b4211a63ab12d549c44cc7b2ee672468bfb9b4829fad883c89f81864a3124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $__internal_d00d901f26486c482fc16039e0a412adfa334a6d366892faa98fb64c38cd7ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d00d901f26486c482fc16039e0a412adfa334a6d366892faa98fb64c38cd7ab3->enter($__internal_d00d901f26486c482fc16039e0a412adfa334a6d366892faa98fb64c38cd7ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_200b4211a63ab12d549c44cc7b2ee672468bfb9b4829fad883c89f81864a3124->leave($__internal_200b4211a63ab12d549c44cc7b2ee672468bfb9b4829fad883c89f81864a3124_prof);

        
        $__internal_d00d901f26486c482fc16039e0a412adfa334a6d366892faa98fb64c38cd7ab3->leave($__internal_d00d901f26486c482fc16039e0a412adfa334a6d366892faa98fb64c38cd7ab3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3848ef9b30eba5561a734ebf31addd5a2cca5262445a70f129e093319cd221d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3848ef9b30eba5561a734ebf31addd5a2cca5262445a70f129e093319cd221d1->enter($__internal_3848ef9b30eba5561a734ebf31addd5a2cca5262445a70f129e093319cd221d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0139fbdb1600f9134c110e81e104f967ec82b4432a0eed79228881f0087f4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0139fbdb1600f9134c110e81e104f967ec82b4432a0eed79228881f0087f4b1->enter($__internal_d0139fbdb1600f9134c110e81e104f967ec82b4432a0eed79228881f0087f4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_d0139fbdb1600f9134c110e81e104f967ec82b4432a0eed79228881f0087f4b1->leave($__internal_d0139fbdb1600f9134c110e81e104f967ec82b4432a0eed79228881f0087f4b1_prof);

        
        $__internal_3848ef9b30eba5561a734ebf31addd5a2cca5262445a70f129e093319cd221d1->leave($__internal_3848ef9b30eba5561a734ebf31addd5a2cca5262445a70f129e093319cd221d1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration/Modal:confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/confirmed.html.twig");
    }
}
