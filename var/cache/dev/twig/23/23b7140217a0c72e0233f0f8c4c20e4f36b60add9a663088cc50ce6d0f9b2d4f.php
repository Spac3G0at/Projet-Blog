<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_1efb39b36c60ce1b5a01f18094569bd2a5adbb5cf0537fb81212deeb8d63ef2e extends Twig_Template
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
        $__internal_b4f9c3fe13c9fcff1f62b4be58b38653a1882c779e6faec9968594ca3423387f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4f9c3fe13c9fcff1f62b4be58b38653a1882c779e6faec9968594ca3423387f->enter($__internal_b4f9c3fe13c9fcff1f62b4be58b38653a1882c779e6faec9968594ca3423387f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_44a3f753e7c5b0bf75ebc3f9ed75325731b886302b3d642a302d9d60e0861bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a3f753e7c5b0bf75ebc3f9ed75325731b886302b3d642a302d9d60e0861bc7->enter($__internal_44a3f753e7c5b0bf75ebc3f9ed75325731b886302b3d642a302d9d60e0861bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
\t";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 text-center")));
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
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.changePassword", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>
\t</div>
\t
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b4f9c3fe13c9fcff1f62b4be58b38653a1882c779e6faec9968594ca3423387f->leave($__internal_b4f9c3fe13c9fcff1f62b4be58b38653a1882c779e6faec9968594ca3423387f_prof);

        
        $__internal_44a3f753e7c5b0bf75ebc3f9ed75325731b886302b3d642a302d9d60e0861bc7->leave($__internal_44a3f753e7c5b0bf75ebc3f9ed75325731b886302b3d642a302d9d60e0861bc7_prof);

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
        return array (  49 => 10,  41 => 7,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

\t{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit col-xs-8 col-xs-offset-2 col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-3 text-center' } }) }}
\t{{ form_widget(form) }}
\t<div>
\t\t<input class=\"btn btn-primary center-block\" type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
\t\t<a href=\"{{ path(\"fos_user_change_password\") }}\">{{ 'profile.edit.changePassword'|trans }}</a>
\t</div>
\t
\t{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit_content.html.twig");
    }
}
