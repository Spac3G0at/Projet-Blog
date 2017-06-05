<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_aa121431053af68f97958ffe8b99257380bddff06f0c7d05342490cafe65a0bb extends Twig_Template
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
        $__internal_07214519a27838f88e8e56b1cac1f11968cb61886b4bc1f87fc718c0c18dd479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07214519a27838f88e8e56b1cac1f11968cb61886b4bc1f87fc718c0c18dd479->enter($__internal_07214519a27838f88e8e56b1cac1f11968cb61886b4bc1f87fc718c0c18dd479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_cdd9519a229274f12264935d3f75ac863f9fd7d1692ae1def178cbc92b4e0e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd9519a229274f12264935d3f75ac863f9fd7d1692ae1def178cbc92b4e0e2e->enter($__internal_cdd9519a229274f12264935d3f75ac863f9fd7d1692ae1def178cbc92b4e0e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input class=\"btn btn-primary center-block\" type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_07214519a27838f88e8e56b1cac1f11968cb61886b4bc1f87fc718c0c18dd479->leave($__internal_07214519a27838f88e8e56b1cac1f11968cb61886b4bc1f87fc718c0c18dd479_prof);

        
        $__internal_cdd9519a229274f12264935d3f75ac863f9fd7d1692ae1def178cbc92b4e0e2e->leave($__internal_cdd9519a229274f12264935d3f75ac863f9fd7d1692ae1def178cbc92b4e0e2e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input class=\"btn btn-primary center-block\" type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
