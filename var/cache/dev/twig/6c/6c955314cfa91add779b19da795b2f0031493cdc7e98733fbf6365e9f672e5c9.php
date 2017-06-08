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
        $__internal_ce1a3fd2229b2c2eb5256b1e8799a53fdeec7a0fa649719552915d9f71b951d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1a3fd2229b2c2eb5256b1e8799a53fdeec7a0fa649719552915d9f71b951d6->enter($__internal_ce1a3fd2229b2c2eb5256b1e8799a53fdeec7a0fa649719552915d9f71b951d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_46e2556aedfd4cd3fcbe9b914580dd1992bed79859dae92b0274e5b296fbfd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e2556aedfd4cd3fcbe9b914580dd1992bed79859dae92b0274e5b296fbfd50->enter($__internal_46e2556aedfd4cd3fcbe9b914580dd1992bed79859dae92b0274e5b296fbfd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ce1a3fd2229b2c2eb5256b1e8799a53fdeec7a0fa649719552915d9f71b951d6->leave($__internal_ce1a3fd2229b2c2eb5256b1e8799a53fdeec7a0fa649719552915d9f71b951d6_prof);

        
        $__internal_46e2556aedfd4cd3fcbe9b914580dd1992bed79859dae92b0274e5b296fbfd50->leave($__internal_46e2556aedfd4cd3fcbe9b914580dd1992bed79859dae92b0274e5b296fbfd50_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_763e3fb8a18b9c7c88eb57dc9adcdb43beae910c22907d48605eb906d31dc695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763e3fb8a18b9c7c88eb57dc9adcdb43beae910c22907d48605eb906d31dc695->enter($__internal_763e3fb8a18b9c7c88eb57dc9adcdb43beae910c22907d48605eb906d31dc695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2910d45d0a413b0541f4827a9dabcb6b830dee264284c16630d40e6886832436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2910d45d0a413b0541f4827a9dabcb6b830dee264284c16630d40e6886832436->enter($__internal_2910d45d0a413b0541f4827a9dabcb6b830dee264284c16630d40e6886832436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_2910d45d0a413b0541f4827a9dabcb6b830dee264284c16630d40e6886832436->leave($__internal_2910d45d0a413b0541f4827a9dabcb6b830dee264284c16630d40e6886832436_prof);

        
        $__internal_763e3fb8a18b9c7c88eb57dc9adcdb43beae910c22907d48605eb906d31dc695->leave($__internal_763e3fb8a18b9c7c88eb57dc9adcdb43beae910c22907d48605eb906d31dc695_prof);

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
