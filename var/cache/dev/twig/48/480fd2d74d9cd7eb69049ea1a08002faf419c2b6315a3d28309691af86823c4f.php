<?php

/* FOSUserBundle:Group:new_content.html.twig */
class __TwigTemplate_aa0e52b29fd5b8defab9f4129c2103c92577ca044b257d1337c3740108cf51c4 extends Twig_Template
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
        $__internal_c68aa89bc4f8638d0abe52f799925f4ba0be1dfbd87ebc764cf1dc14bd7a8d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68aa89bc4f8638d0abe52f799925f4ba0be1dfbd87ebc764cf1dc14bd7a8d1b->enter($__internal_c68aa89bc4f8638d0abe52f799925f4ba0be1dfbd87ebc764cf1dc14bd7a8d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        $__internal_2bbdfcb0f9cfcd83ba588c76a95c88dd8bc5411b15b4deffb7d2f6eeca653b4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbdfcb0f9cfcd83ba588c76a95c88dd8bc5411b15b4deffb7d2f6eeca653b4a->enter($__internal_2bbdfcb0f9cfcd83ba588c76a95c88dd8bc5411b15b4deffb7d2f6eeca653b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c68aa89bc4f8638d0abe52f799925f4ba0be1dfbd87ebc764cf1dc14bd7a8d1b->leave($__internal_c68aa89bc4f8638d0abe52f799925f4ba0be1dfbd87ebc764cf1dc14bd7a8d1b_prof);

        
        $__internal_2bbdfcb0f9cfcd83ba588c76a95c88dd8bc5411b15b4deffb7d2f6eeca653b4a->leave($__internal_2bbdfcb0f9cfcd83ba588c76a95c88dd8bc5411b15b4deffb7d2f6eeca653b4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:new_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new_content.html.twig");
    }
}
