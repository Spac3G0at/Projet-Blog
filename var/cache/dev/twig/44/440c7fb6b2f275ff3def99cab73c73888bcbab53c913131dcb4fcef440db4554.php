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
        $__internal_90e340d7479c95f5f489cffbd575038c1cd63d974316779d8a09ec8a063f63a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90e340d7479c95f5f489cffbd575038c1cd63d974316779d8a09ec8a063f63a4->enter($__internal_90e340d7479c95f5f489cffbd575038c1cd63d974316779d8a09ec8a063f63a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_affdd92a0de5eed2abf723593fbd5992f14c1b1f5ce92592d9232d6cf5321173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_affdd92a0de5eed2abf723593fbd5992f14c1b1f5ce92592d9232d6cf5321173->enter($__internal_affdd92a0de5eed2abf723593fbd5992f14c1b1f5ce92592d9232d6cf5321173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_90e340d7479c95f5f489cffbd575038c1cd63d974316779d8a09ec8a063f63a4->leave($__internal_90e340d7479c95f5f489cffbd575038c1cd63d974316779d8a09ec8a063f63a4_prof);

        
        $__internal_affdd92a0de5eed2abf723593fbd5992f14c1b1f5ce92592d9232d6cf5321173->leave($__internal_affdd92a0de5eed2abf723593fbd5992f14c1b1f5ce92592d9232d6cf5321173_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_02c8ca3b5faa80b6e9ff3c8454909cd02ae506bd3fa4b4f5e0e62a2c7f5e365e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c8ca3b5faa80b6e9ff3c8454909cd02ae506bd3fa4b4f5e0e62a2c7f5e365e->enter($__internal_02c8ca3b5faa80b6e9ff3c8454909cd02ae506bd3fa4b4f5e0e62a2c7f5e365e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_233cc6fff884606d218741cfaacc22b036f2d36e2377b70ee43861d4f4577a9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233cc6fff884606d218741cfaacc22b036f2d36e2377b70ee43861d4f4577a9c->enter($__internal_233cc6fff884606d218741cfaacc22b036f2d36e2377b70ee43861d4f4577a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_233cc6fff884606d218741cfaacc22b036f2d36e2377b70ee43861d4f4577a9c->leave($__internal_233cc6fff884606d218741cfaacc22b036f2d36e2377b70ee43861d4f4577a9c_prof);

        
        $__internal_02c8ca3b5faa80b6e9ff3c8454909cd02ae506bd3fa4b4f5e0e62a2c7f5e365e->leave($__internal_02c8ca3b5faa80b6e9ff3c8454909cd02ae506bd3fa4b4f5e0e62a2c7f5e365e_prof);

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
