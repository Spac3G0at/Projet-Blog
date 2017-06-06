<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_1bbe03c8b93e638aa4c8295f9cd73781434698185b649da0a803f3579d7498e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_41f011d6cfb75253e83a789d803cb1c84b173828bae66f12ab7de15700722ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f011d6cfb75253e83a789d803cb1c84b173828bae66f12ab7de15700722ec1->enter($__internal_41f011d6cfb75253e83a789d803cb1c84b173828bae66f12ab7de15700722ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_80a43a707bb690f208d6c09494f2df96b029e9a971958871064a53535b01febb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a43a707bb690f208d6c09494f2df96b029e9a971958871064a53535b01febb->enter($__internal_80a43a707bb690f208d6c09494f2df96b029e9a971958871064a53535b01febb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f011d6cfb75253e83a789d803cb1c84b173828bae66f12ab7de15700722ec1->leave($__internal_41f011d6cfb75253e83a789d803cb1c84b173828bae66f12ab7de15700722ec1_prof);

        
        $__internal_80a43a707bb690f208d6c09494f2df96b029e9a971958871064a53535b01febb->leave($__internal_80a43a707bb690f208d6c09494f2df96b029e9a971958871064a53535b01febb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9c12ef7e4d4f89177dc93890dc8b3df7d62ec29df05d7ed40bd01a95afa85ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c12ef7e4d4f89177dc93890dc8b3df7d62ec29df05d7ed40bd01a95afa85ea->enter($__internal_f9c12ef7e4d4f89177dc93890dc8b3df7d62ec29df05d7ed40bd01a95afa85ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d072a6707a81c33238979b65e6751e8f450bf1dd3ddc6c140fa9ba35cb759239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d072a6707a81c33238979b65e6751e8f450bf1dd3ddc6c140fa9ba35cb759239->enter($__internal_d072a6707a81c33238979b65e6751e8f450bf1dd3ddc6c140fa9ba35cb759239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d072a6707a81c33238979b65e6751e8f450bf1dd3ddc6c140fa9ba35cb759239->leave($__internal_d072a6707a81c33238979b65e6751e8f450bf1dd3ddc6c140fa9ba35cb759239_prof);

        
        $__internal_f9c12ef7e4d4f89177dc93890dc8b3df7d62ec29df05d7ed40bd01a95afa85ea->leave($__internal_f9c12ef7e4d4f89177dc93890dc8b3df7d62ec29df05d7ed40bd01a95afa85ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
", "@FOSUser/Registration/confirmed.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
