<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_37dae4c2210ffcf22ca46f85144d8ce23210f7b7f16cfb1b574a936d02fb3cd2 extends Twig_Template
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
        $__internal_405006a38a760dd37dc1ac4984a246b055516190e937475eedfb2098b5e88e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405006a38a760dd37dc1ac4984a246b055516190e937475eedfb2098b5e88e2c->enter($__internal_405006a38a760dd37dc1ac4984a246b055516190e937475eedfb2098b5e88e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_28a69d7169928b8cd240c1daf146d2deef338611b25e8f3a7b8aae1c991e908e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a69d7169928b8cd240c1daf146d2deef338611b25e8f3a7b8aae1c991e908e->enter($__internal_28a69d7169928b8cd240c1daf146d2deef338611b25e8f3a7b8aae1c991e908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_405006a38a760dd37dc1ac4984a246b055516190e937475eedfb2098b5e88e2c->leave($__internal_405006a38a760dd37dc1ac4984a246b055516190e937475eedfb2098b5e88e2c_prof);

        
        $__internal_28a69d7169928b8cd240c1daf146d2deef338611b25e8f3a7b8aae1c991e908e->leave($__internal_28a69d7169928b8cd240c1daf146d2deef338611b25e8f3a7b8aae1c991e908e_prof);

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
