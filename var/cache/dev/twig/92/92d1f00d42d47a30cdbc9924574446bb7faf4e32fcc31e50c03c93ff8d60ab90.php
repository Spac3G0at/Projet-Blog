<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_c570ccc9263c0548482afafafd6fcd4d733bb9092540b0337e550ad3e754c4c1 extends Twig_Template
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
        $__internal_1fc56bf1a1ae14a88542caea35166cfd2c48fa7eec2e8ae45e44530ac5931572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc56bf1a1ae14a88542caea35166cfd2c48fa7eec2e8ae45e44530ac5931572->enter($__internal_1fc56bf1a1ae14a88542caea35166cfd2c48fa7eec2e8ae45e44530ac5931572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_9857a17748199129ff5fcda1b79476ea70592af54d9a94cb77f28ed60066dd51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9857a17748199129ff5fcda1b79476ea70592af54d9a94cb77f28ed60066dd51->enter($__internal_9857a17748199129ff5fcda1b79476ea70592af54d9a94cb77f28ed60066dd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1fc56bf1a1ae14a88542caea35166cfd2c48fa7eec2e8ae45e44530ac5931572->leave($__internal_1fc56bf1a1ae14a88542caea35166cfd2c48fa7eec2e8ae45e44530ac5931572_prof);

        
        $__internal_9857a17748199129ff5fcda1b79476ea70592af54d9a94cb77f28ed60066dd51->leave($__internal_9857a17748199129ff5fcda1b79476ea70592af54d9a94cb77f28ed60066dd51_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a398b426f2d14cf45c8a9021a8de3b2ff749cf12a4d3b9763c1de3b39a07b144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a398b426f2d14cf45c8a9021a8de3b2ff749cf12a4d3b9763c1de3b39a07b144->enter($__internal_a398b426f2d14cf45c8a9021a8de3b2ff749cf12a4d3b9763c1de3b39a07b144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a2cb46c665f1e347d51345ac2ba59fdc7329345c00f99a7bd6d8d7470d7f5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2cb46c665f1e347d51345ac2ba59fdc7329345c00f99a7bd6d8d7470d7f5c2->enter($__internal_2a2cb46c665f1e347d51345ac2ba59fdc7329345c00f99a7bd6d8d7470d7f5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_2a2cb46c665f1e347d51345ac2ba59fdc7329345c00f99a7bd6d8d7470d7f5c2->leave($__internal_2a2cb46c665f1e347d51345ac2ba59fdc7329345c00f99a7bd6d8d7470d7f5c2_prof);

        
        $__internal_a398b426f2d14cf45c8a9021a8de3b2ff749cf12a4d3b9763c1de3b39a07b144->leave($__internal_a398b426f2d14cf45c8a9021a8de3b2ff749cf12a4d3b9763c1de3b39a07b144_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/Modal/login.html.twig";
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
    {{ include('@FOSUser/Security/Modal/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/Modal/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login.html.twig");
    }
}
