<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8925ee7b43431181fd060423f50f675495c89c1c882121a25dfa11e5d3b5f0b9 extends Twig_Template
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
        $__internal_55128493d15b834676411595d259ef13bae59b541779008007d0d08904392190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55128493d15b834676411595d259ef13bae59b541779008007d0d08904392190->enter($__internal_55128493d15b834676411595d259ef13bae59b541779008007d0d08904392190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_a1cb5edc08c0f46cf39f5a89a28eab551f675309f7a67d8776e417cb78e0818d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cb5edc08c0f46cf39f5a89a28eab551f675309f7a67d8776e417cb78e0818d->enter($__internal_a1cb5edc08c0f46cf39f5a89a28eab551f675309f7a67d8776e417cb78e0818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_55128493d15b834676411595d259ef13bae59b541779008007d0d08904392190->leave($__internal_55128493d15b834676411595d259ef13bae59b541779008007d0d08904392190_prof);

        
        $__internal_a1cb5edc08c0f46cf39f5a89a28eab551f675309f7a67d8776e417cb78e0818d->leave($__internal_a1cb5edc08c0f46cf39f5a89a28eab551f675309f7a67d8776e417cb78e0818d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
