<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_56c444a33c2e879d9081b98aeadb87d3fe7dd8653bdde76a5356d29110dc75b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dfd7f1f2a737bc92a96d544803be4a568b523f88037499afaf655d88527bd9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfd7f1f2a737bc92a96d544803be4a568b523f88037499afaf655d88527bd9c->enter($__internal_6dfd7f1f2a737bc92a96d544803be4a568b523f88037499afaf655d88527bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_d054292a97948e3246d11f7b21e67d0a6910e0d8e4d00b5c18cda3c4d4039f6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d054292a97948e3246d11f7b21e67d0a6910e0d8e4d00b5c18cda3c4d4039f6f->enter($__internal_d054292a97948e3246d11f7b21e67d0a6910e0d8e4d00b5c18cda3c4d4039f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 text-center")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input class=\"btn btn-primary center-block\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_6dfd7f1f2a737bc92a96d544803be4a568b523f88037499afaf655d88527bd9c->leave($__internal_6dfd7f1f2a737bc92a96d544803be4a568b523f88037499afaf655d88527bd9c_prof);

        
        $__internal_d054292a97948e3246d11f7b21e67d0a6910e0d8e4d00b5c18cda3c4d4039f6f->leave($__internal_d054292a97948e3246d11f7b21e67d0a6910e0d8e4d00b5c18cda3c4d4039f6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 text-center'}}) }}
    {{ form_widget(form) }}
    <div>
        <input class=\"btn btn-primary center-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Registration:register_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register_content.html.twig");
    }
}
