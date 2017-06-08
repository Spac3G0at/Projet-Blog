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
        $__internal_76218bfd9b4c20785f2430c590dcad0bef6b81f72eb6a7b0bfd25e4d7f29f423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76218bfd9b4c20785f2430c590dcad0bef6b81f72eb6a7b0bfd25e4d7f29f423->enter($__internal_76218bfd9b4c20785f2430c590dcad0bef6b81f72eb6a7b0bfd25e4d7f29f423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_3bfcb5898489e906c64f5aded607791c3f306cfa9a96b201b7fb07ba56793daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfcb5898489e906c64f5aded607791c3f306cfa9a96b201b7fb07ba56793daa->enter($__internal_3bfcb5898489e906c64f5aded607791c3f306cfa9a96b201b7fb07ba56793daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_76218bfd9b4c20785f2430c590dcad0bef6b81f72eb6a7b0bfd25e4d7f29f423->leave($__internal_76218bfd9b4c20785f2430c590dcad0bef6b81f72eb6a7b0bfd25e4d7f29f423_prof);

        
        $__internal_3bfcb5898489e906c64f5aded607791c3f306cfa9a96b201b7fb07ba56793daa->leave($__internal_3bfcb5898489e906c64f5aded607791c3f306cfa9a96b201b7fb07ba56793daa_prof);

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
