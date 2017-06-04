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
        $__internal_69ec4525fa6c1c4372b77705e5df81ef0c8dce879201b49dd55870c155d16db2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ec4525fa6c1c4372b77705e5df81ef0c8dce879201b49dd55870c155d16db2->enter($__internal_69ec4525fa6c1c4372b77705e5df81ef0c8dce879201b49dd55870c155d16db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_ff5642db19523a0a024e322d3ab032cff4953e53fe051dadec33f354e7361363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5642db19523a0a024e322d3ab032cff4953e53fe051dadec33f354e7361363->enter($__internal_ff5642db19523a0a024e322d3ab032cff4953e53fe051dadec33f354e7361363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_69ec4525fa6c1c4372b77705e5df81ef0c8dce879201b49dd55870c155d16db2->leave($__internal_69ec4525fa6c1c4372b77705e5df81ef0c8dce879201b49dd55870c155d16db2_prof);

        
        $__internal_ff5642db19523a0a024e322d3ab032cff4953e53fe051dadec33f354e7361363->leave($__internal_ff5642db19523a0a024e322d3ab032cff4953e53fe051dadec33f354e7361363_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d34c7157a3f022e8152c17a8ef61d77cc5ecc75d2f10fdc8c37be70eec98b404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34c7157a3f022e8152c17a8ef61d77cc5ecc75d2f10fdc8c37be70eec98b404->enter($__internal_d34c7157a3f022e8152c17a8ef61d77cc5ecc75d2f10fdc8c37be70eec98b404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6143a016ff57c9da94c74830210225801e5bfca9af4dbea5063d882976c1732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6143a016ff57c9da94c74830210225801e5bfca9af4dbea5063d882976c1732->enter($__internal_c6143a016ff57c9da94c74830210225801e5bfca9af4dbea5063d882976c1732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_c6143a016ff57c9da94c74830210225801e5bfca9af4dbea5063d882976c1732->leave($__internal_c6143a016ff57c9da94c74830210225801e5bfca9af4dbea5063d882976c1732_prof);

        
        $__internal_d34c7157a3f022e8152c17a8ef61d77cc5ecc75d2f10fdc8c37be70eec98b404->leave($__internal_d34c7157a3f022e8152c17a8ef61d77cc5ecc75d2f10fdc8c37be70eec98b404_prof);

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
