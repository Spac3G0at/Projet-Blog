<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_e0d75de853a97ee80dd8edfe86d91737f099aeb6952a0a251fa788b3eb54759b extends Twig_Template
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
        $__internal_4275e646abf59373a6677fdcc30b47f752ddb634bca49ac0c912eec21accf6f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4275e646abf59373a6677fdcc30b47f752ddb634bca49ac0c912eec21accf6f0->enter($__internal_4275e646abf59373a6677fdcc30b47f752ddb634bca49ac0c912eec21accf6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_906a572b3bbc0f988f1df19f028d9049259053cfb5a13c2f6b5f62a34f80f11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906a572b3bbc0f988f1df19f028d9049259053cfb5a13c2f6b5f62a34f80f11a->enter($__internal_906a572b3bbc0f988f1df19f028d9049259053cfb5a13c2f6b5f62a34f80f11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4275e646abf59373a6677fdcc30b47f752ddb634bca49ac0c912eec21accf6f0->leave($__internal_4275e646abf59373a6677fdcc30b47f752ddb634bca49ac0c912eec21accf6f0_prof);

        
        $__internal_906a572b3bbc0f988f1df19f028d9049259053cfb5a13c2f6b5f62a34f80f11a->leave($__internal_906a572b3bbc0f988f1df19f028d9049259053cfb5a13c2f6b5f62a34f80f11a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_42d3dc514c37ea3553b3375e2c2518626bedecd8d9f1dfc03879d25ea97a9c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42d3dc514c37ea3553b3375e2c2518626bedecd8d9f1dfc03879d25ea97a9c19->enter($__internal_42d3dc514c37ea3553b3375e2c2518626bedecd8d9f1dfc03879d25ea97a9c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d93121ed93ce032631e7ae45ceb719f2a83aa870effba5891bbe69892a860339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93121ed93ce032631e7ae45ceb719f2a83aa870effba5891bbe69892a860339->enter($__internal_d93121ed93ce032631e7ae45ceb719f2a83aa870effba5891bbe69892a860339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_d93121ed93ce032631e7ae45ceb719f2a83aa870effba5891bbe69892a860339->leave($__internal_d93121ed93ce032631e7ae45ceb719f2a83aa870effba5891bbe69892a860339_prof);

        
        $__internal_42d3dc514c37ea3553b3375e2c2518626bedecd8d9f1dfc03879d25ea97a9c19->leave($__internal_42d3dc514c37ea3553b3375e2c2518626bedecd8d9f1dfc03879d25ea97a9c19_prof);

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
