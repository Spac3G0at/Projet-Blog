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
        $__internal_1cb5e11a108a20d9c3afe20e1d528c4a42a57b1d91b7fbbaf3b2bec90dd6b907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb5e11a108a20d9c3afe20e1d528c4a42a57b1d91b7fbbaf3b2bec90dd6b907->enter($__internal_1cb5e11a108a20d9c3afe20e1d528c4a42a57b1d91b7fbbaf3b2bec90dd6b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_9e729b803565faa9354604ab484913be297bb4bc734a1fb6ec96fa956073eb91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e729b803565faa9354604ab484913be297bb4bc734a1fb6ec96fa956073eb91->enter($__internal_9e729b803565faa9354604ab484913be297bb4bc734a1fb6ec96fa956073eb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_1cb5e11a108a20d9c3afe20e1d528c4a42a57b1d91b7fbbaf3b2bec90dd6b907->leave($__internal_1cb5e11a108a20d9c3afe20e1d528c4a42a57b1d91b7fbbaf3b2bec90dd6b907_prof);

        
        $__internal_9e729b803565faa9354604ab484913be297bb4bc734a1fb6ec96fa956073eb91->leave($__internal_9e729b803565faa9354604ab484913be297bb4bc734a1fb6ec96fa956073eb91_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee3885ebdd6eca41afd77b66384efaebe5d004272851f5b3032c13ea57c141bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3885ebdd6eca41afd77b66384efaebe5d004272851f5b3032c13ea57c141bc->enter($__internal_ee3885ebdd6eca41afd77b66384efaebe5d004272851f5b3032c13ea57c141bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2845d1ead7fc210cda2091a6689d114b56de09cde7e12ecf49a89cbd000a0666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2845d1ead7fc210cda2091a6689d114b56de09cde7e12ecf49a89cbd000a0666->enter($__internal_2845d1ead7fc210cda2091a6689d114b56de09cde7e12ecf49a89cbd000a0666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_2845d1ead7fc210cda2091a6689d114b56de09cde7e12ecf49a89cbd000a0666->leave($__internal_2845d1ead7fc210cda2091a6689d114b56de09cde7e12ecf49a89cbd000a0666_prof);

        
        $__internal_ee3885ebdd6eca41afd77b66384efaebe5d004272851f5b3032c13ea57c141bc->leave($__internal_ee3885ebdd6eca41afd77b66384efaebe5d004272851f5b3032c13ea57c141bc_prof);

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
", "@FOSUser/Security/Modal/login.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login.html.twig");
    }
}
