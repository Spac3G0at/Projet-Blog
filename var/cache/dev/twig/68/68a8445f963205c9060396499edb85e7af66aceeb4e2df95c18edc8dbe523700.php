<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_3afaf7aedcfba58a6684ca81eede60d2501ce49db433e5e609c8d149cf72085d extends Twig_Template
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
        $__internal_c39e121e46c64b1671852d54f07547e7d739ed6dcde56c6d018a18bbbf6f24b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39e121e46c64b1671852d54f07547e7d739ed6dcde56c6d018a18bbbf6f24b9->enter($__internal_c39e121e46c64b1671852d54f07547e7d739ed6dcde56c6d018a18bbbf6f24b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_9561fa09b610e555d2cd24bca5e8ba1d8fbfad6c21160b9e5a0db21eab50f96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9561fa09b610e555d2cd24bca5e8ba1d8fbfad6c21160b9e5a0db21eab50f96f->enter($__internal_9561fa09b610e555d2cd24bca5e8ba1d8fbfad6c21160b9e5a0db21eab50f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
\t<div>
\t\t<input class=\"btn btn-primary center-block\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Change password</a>
\t</div>
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_c39e121e46c64b1671852d54f07547e7d739ed6dcde56c6d018a18bbbf6f24b9->leave($__internal_c39e121e46c64b1671852d54f07547e7d739ed6dcde56c6d018a18bbbf6f24b9_prof);

        
        $__internal_9561fa09b610e555d2cd24bca5e8ba1d8fbfad6c21160b9e5a0db21eab50f96f->leave($__internal_9561fa09b610e555d2cd24bca5e8ba1d8fbfad6c21160b9e5a0db21eab50f96f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  41 => 7,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

\t{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
\t{{ form_widget(form) }}
\t<div>
\t\t<input class=\"btn btn-primary center-block\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
\t\t<a href=\"{{ path(\"fos_user_change_password\") }}\">Change password</a>
\t</div>
\t{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
