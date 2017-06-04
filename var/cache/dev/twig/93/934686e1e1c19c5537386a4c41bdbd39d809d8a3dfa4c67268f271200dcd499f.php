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
        $__internal_ce130a28f1f45cf3960a6f9366f8cb8bf23bf6540c94121dbbce34d9459aa5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce130a28f1f45cf3960a6f9366f8cb8bf23bf6540c94121dbbce34d9459aa5ff->enter($__internal_ce130a28f1f45cf3960a6f9366f8cb8bf23bf6540c94121dbbce34d9459aa5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

        $__internal_51435ffd60931d33281b4210d2a2684bd51892a9c86eb4851d7b600d56739e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51435ffd60931d33281b4210d2a2684bd51892a9c86eb4851d7b600d56739e28->enter($__internal_51435ffd60931d33281b4210d2a2684bd51892a9c86eb4851d7b600d56739e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

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
        
        $__internal_ce130a28f1f45cf3960a6f9366f8cb8bf23bf6540c94121dbbce34d9459aa5ff->leave($__internal_ce130a28f1f45cf3960a6f9366f8cb8bf23bf6540c94121dbbce34d9459aa5ff_prof);

        
        $__internal_51435ffd60931d33281b4210d2a2684bd51892a9c86eb4851d7b600d56739e28->leave($__internal_51435ffd60931d33281b4210d2a2684bd51892a9c86eb4851d7b600d56739e28_prof);

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
