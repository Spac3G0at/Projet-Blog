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
        $__internal_4ec6710c4ccf1dfbba85154dfe1956fd0a8c2bb73db36380bdddade1c58b85db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec6710c4ccf1dfbba85154dfe1956fd0a8c2bb73db36380bdddade1c58b85db->enter($__internal_4ec6710c4ccf1dfbba85154dfe1956fd0a8c2bb73db36380bdddade1c58b85db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_66c45bb511a761a52a71fbacd22218e03b4a40fdf36b7ef1d017096815a0ac8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c45bb511a761a52a71fbacd22218e03b4a40fdf36b7ef1d017096815a0ac8b->enter($__internal_66c45bb511a761a52a71fbacd22218e03b4a40fdf36b7ef1d017096815a0ac8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_4ec6710c4ccf1dfbba85154dfe1956fd0a8c2bb73db36380bdddade1c58b85db->leave($__internal_4ec6710c4ccf1dfbba85154dfe1956fd0a8c2bb73db36380bdddade1c58b85db_prof);

        
        $__internal_66c45bb511a761a52a71fbacd22218e03b4a40fdf36b7ef1d017096815a0ac8b->leave($__internal_66c45bb511a761a52a71fbacd22218e03b4a40fdf36b7ef1d017096815a0ac8b_prof);

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
