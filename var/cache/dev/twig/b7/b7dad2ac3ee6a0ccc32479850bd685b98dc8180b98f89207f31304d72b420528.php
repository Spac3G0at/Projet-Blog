<?php

/* @FOSUser/Registration/Modal/register_content.html.twig */
class __TwigTemplate_875d428a4f5922a04cd8ea5bb54b9c24edc6ade0b853876ba1189bd90a8d1dfb extends Twig_Template
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
        $__internal_e595334c5951c850093abd7f919721e6bb9df8bf3ffc657267c968b884c5bbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e595334c5951c850093abd7f919721e6bb9df8bf3ffc657267c968b884c5bbc8->enter($__internal_e595334c5951c850093abd7f919721e6bb9df8bf3ffc657267c968b884c5bbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

        $__internal_4911437f44bd37ea59ffc4b2fee390953fd4afeb5e2431108784e29ac77d2d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4911437f44bd37ea59ffc4b2fee390953fd4afeb5e2431108784e29ac77d2d39->enter($__internal_4911437f44bd37ea59ffc4b2fee390953fd4afeb5e2431108784e29ac77d2d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register_content.html.twig"));

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
        
        $__internal_e595334c5951c850093abd7f919721e6bb9df8bf3ffc657267c968b884c5bbc8->leave($__internal_e595334c5951c850093abd7f919721e6bb9df8bf3ffc657267c968b884c5bbc8_prof);

        
        $__internal_4911437f44bd37ea59ffc4b2fee390953fd4afeb5e2431108784e29ac77d2d39->leave($__internal_4911437f44bd37ea59ffc4b2fee390953fd4afeb5e2431108784e29ac77d2d39_prof);

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
