<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_8d704e87151fe54d5fa921da41acb92d31e062248d752dfc8bd118bb952ec905 extends Twig_Template
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
        $__internal_e51485e61f2dd77bcc3d0ad6758d5ca39aa236407fd8d551f309255136fc647a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e51485e61f2dd77bcc3d0ad6758d5ca39aa236407fd8d551f309255136fc647a->enter($__internal_e51485e61f2dd77bcc3d0ad6758d5ca39aa236407fd8d551f309255136fc647a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_adeef5e0837797a18b30b4883a6430a0e97e1e034a79b5850571da48bbb59eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adeef5e0837797a18b30b4883a6430a0e97e1e034a79b5850571da48bbb59eca->enter($__internal_adeef5e0837797a18b30b4883a6430a0e97e1e034a79b5850571da48bbb59eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_e51485e61f2dd77bcc3d0ad6758d5ca39aa236407fd8d551f309255136fc647a->leave($__internal_e51485e61f2dd77bcc3d0ad6758d5ca39aa236407fd8d551f309255136fc647a_prof);

        
        $__internal_adeef5e0837797a18b30b4883a6430a0e97e1e034a79b5850571da48bbb59eca->leave($__internal_adeef5e0837797a18b30b4883a6430a0e97e1e034a79b5850571da48bbb59eca_prof);

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
