<?php

/* @FOSUser/Registration/Modal/register_content.html.twig */
class __TwigTemplate_da49c35bbbe41b772eff65392e4aed1f21309683615b94102c47f8c8d99d78e0 extends Twig_Template
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
        $__internal_89dc309713349c7016e9aa1985543babe3bf80186ac987ccc7299b732d66d45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89dc309713349c7016e9aa1985543babe3bf80186ac987ccc7299b732d66d45c->enter($__internal_89dc309713349c7016e9aa1985543babe3bf80186ac987ccc7299b732d66d45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

        $__internal_1c066986d3cff5e3500b3bee34356fb11ab6df6f2867a6d6352fa14fac9b99db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c066986d3cff5e3500b3bee34356fb11ab6df6f2867a6d6352fa14fac9b99db->enter($__internal_1c066986d3cff5e3500b3bee34356fb11ab6df6f2867a6d6352fa14fac9b99db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

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
        
        $__internal_89dc309713349c7016e9aa1985543babe3bf80186ac987ccc7299b732d66d45c->leave($__internal_89dc309713349c7016e9aa1985543babe3bf80186ac987ccc7299b732d66d45c_prof);

        
        $__internal_1c066986d3cff5e3500b3bee34356fb11ab6df6f2867a6d6352fa14fac9b99db->leave($__internal_1c066986d3cff5e3500b3bee34356fb11ab6df6f2867a6d6352fa14fac9b99db_prof);

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
