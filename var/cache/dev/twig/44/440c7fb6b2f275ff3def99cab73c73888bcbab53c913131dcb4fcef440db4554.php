<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_a545381239605b5749df495f9529b6998baf4a125732fb00fcb1c31493feeeed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91edf69ad370cecf5a2bf917ce20b558cf19bf7f44d7432762869e3d9e8d282a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91edf69ad370cecf5a2bf917ce20b558cf19bf7f44d7432762869e3d9e8d282a->enter($__internal_91edf69ad370cecf5a2bf917ce20b558cf19bf7f44d7432762869e3d9e8d282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_4b96a0e7d7cb1f34756978e444f54e992e8fc4e88ad6d8bf5c4e510868204bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b96a0e7d7cb1f34756978e444f54e992e8fc4e88ad6d8bf5c4e510868204bba->enter($__internal_4b96a0e7d7cb1f34756978e444f54e992e8fc4e88ad6d8bf5c4e510868204bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_91edf69ad370cecf5a2bf917ce20b558cf19bf7f44d7432762869e3d9e8d282a->leave($__internal_91edf69ad370cecf5a2bf917ce20b558cf19bf7f44d7432762869e3d9e8d282a_prof);

        
        $__internal_4b96a0e7d7cb1f34756978e444f54e992e8fc4e88ad6d8bf5c4e510868204bba->leave($__internal_4b96a0e7d7cb1f34756978e444f54e992e8fc4e88ad6d8bf5c4e510868204bba_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebd0c67aab03594ce95ad478a7f945d6c315235f139a85806a415f9f18aa9d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd0c67aab03594ce95ad478a7f945d6c315235f139a85806a415f9f18aa9d9e->enter($__internal_ebd0c67aab03594ce95ad478a7f945d6c315235f139a85806a415f9f18aa9d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a8e8b57d48e18b8178493fa5bd8edf79f8e16e8d6c98bcc6c9c0dc6fd7552ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e8b57d48e18b8178493fa5bd8edf79f8e16e8d6c98bcc6c9c0dc6fd7552ef0->enter($__internal_a8e8b57d48e18b8178493fa5bd8edf79f8e16e8d6c98bcc6c9c0dc6fd7552ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_a8e8b57d48e18b8178493fa5bd8edf79f8e16e8d6c98bcc6c9c0dc6fd7552ef0->leave($__internal_a8e8b57d48e18b8178493fa5bd8edf79f8e16e8d6c98bcc6c9c0dc6fd7552ef0_prof);

        
        $__internal_ebd0c67aab03594ce95ad478a7f945d6c315235f139a85806a415f9f18aa9d9e->leave($__internal_ebd0c67aab03594ce95ad478a7f945d6c315235f139a85806a415f9f18aa9d9e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/Modal/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/Modal/register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
