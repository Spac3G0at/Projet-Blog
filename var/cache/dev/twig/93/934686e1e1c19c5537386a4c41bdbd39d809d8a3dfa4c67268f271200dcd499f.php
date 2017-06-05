<?php

/* @FOSUser/Registration/Modal/register_content.html.twig */
class __TwigTemplate_2de0d2961e1f964d8913dd5e5d1bf2cc60ad086bb822862edb2c6489093ad5ca extends Twig_Template
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
        $__internal_1b973096f0cbda631352fa90c25d93cc399e8e900357b3c91ceaaf1d1074b1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b973096f0cbda631352fa90c25d93cc399e8e900357b3c91ceaaf1d1074b1b7->enter($__internal_1b973096f0cbda631352fa90c25d93cc399e8e900357b3c91ceaaf1d1074b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

        $__internal_67d8d9e9e38b04c9f5e91092941c4da6f450db59d97e607ea1a3339a0f6eec87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d8d9e9e38b04c9f5e91092941c4da6f450db59d97e607ea1a3339a0f6eec87->enter($__internal_67d8d9e9e38b04c9f5e91092941c4da6f450db59d97e607ea1a3339a0f6eec87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
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
        
        $__internal_1b973096f0cbda631352fa90c25d93cc399e8e900357b3c91ceaaf1d1074b1b7->leave($__internal_1b973096f0cbda631352fa90c25d93cc399e8e900357b3c91ceaaf1d1074b1b7_prof);

        
        $__internal_67d8d9e9e38b04c9f5e91092941c4da6f450db59d97e607ea1a3339a0f6eec87->leave($__internal_67d8d9e9e38b04c9f5e91092941c4da6f450db59d97e607ea1a3339a0f6eec87_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input class=\"btn btn-primary center-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/Modal/register_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register_content.html.twig");
    }
}
