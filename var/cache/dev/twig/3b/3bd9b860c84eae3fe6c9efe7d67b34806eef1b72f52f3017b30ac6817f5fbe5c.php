<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7edc2b3c44c63edcf1860550ecdb73d4641554e93afe0de8f93c99756d47b555 extends Twig_Template
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
        $__internal_072184914ca74efcb0b823eda93560bd0c764f6ab4242b74e895703cf844f240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072184914ca74efcb0b823eda93560bd0c764f6ab4242b74e895703cf844f240->enter($__internal_072184914ca74efcb0b823eda93560bd0c764f6ab4242b74e895703cf844f240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_269f45887c3cb5b662b794526373583981ead0be072c49cfc5809298353473dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269f45887c3cb5b662b794526373583981ead0be072c49cfc5809298353473dc->enter($__internal_269f45887c3cb5b662b794526373583981ead0be072c49cfc5809298353473dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

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
        
        $__internal_072184914ca74efcb0b823eda93560bd0c764f6ab4242b74e895703cf844f240->leave($__internal_072184914ca74efcb0b823eda93560bd0c764f6ab4242b74e895703cf844f240_prof);

        
        $__internal_269f45887c3cb5b662b794526373583981ead0be072c49cfc5809298353473dc->leave($__internal_269f45887c3cb5b662b794526373583981ead0be072c49cfc5809298353473dc_prof);

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
