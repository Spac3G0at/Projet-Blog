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
        $__internal_c890bf95942d978bdd12dd14ec38c3235c7a6f283455c2223cbeaf88a8b8c040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c890bf95942d978bdd12dd14ec38c3235c7a6f283455c2223cbeaf88a8b8c040->enter($__internal_c890bf95942d978bdd12dd14ec38c3235c7a6f283455c2223cbeaf88a8b8c040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_108cdf2094df0ec0b96bebd0a0ff6db9b400c0beb2cca577bf7095e26bed1b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108cdf2094df0ec0b96bebd0a0ff6db9b400c0beb2cca577bf7095e26bed1b2b->enter($__internal_108cdf2094df0ec0b96bebd0a0ff6db9b400c0beb2cca577bf7095e26bed1b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c890bf95942d978bdd12dd14ec38c3235c7a6f283455c2223cbeaf88a8b8c040->leave($__internal_c890bf95942d978bdd12dd14ec38c3235c7a6f283455c2223cbeaf88a8b8c040_prof);

        
        $__internal_108cdf2094df0ec0b96bebd0a0ff6db9b400c0beb2cca577bf7095e26bed1b2b->leave($__internal_108cdf2094df0ec0b96bebd0a0ff6db9b400c0beb2cca577bf7095e26bed1b2b_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c467bfa8bf8e4c1037795aff6cdf939e1b90f19732c1251d188323767ee9728c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c467bfa8bf8e4c1037795aff6cdf939e1b90f19732c1251d188323767ee9728c->enter($__internal_c467bfa8bf8e4c1037795aff6cdf939e1b90f19732c1251d188323767ee9728c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5f42968a3fdb930d0249b00431732c3c5f72bd0e919af6871b64699cdc1b64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f42968a3fdb930d0249b00431732c3c5f72bd0e919af6871b64699cdc1b64d->enter($__internal_b5f42968a3fdb930d0249b00431732c3c5f72bd0e919af6871b64699cdc1b64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_b5f42968a3fdb930d0249b00431732c3c5f72bd0e919af6871b64699cdc1b64d->leave($__internal_b5f42968a3fdb930d0249b00431732c3c5f72bd0e919af6871b64699cdc1b64d_prof);

        
        $__internal_c467bfa8bf8e4c1037795aff6cdf939e1b90f19732c1251d188323767ee9728c->leave($__internal_c467bfa8bf8e4c1037795aff6cdf939e1b90f19732c1251d188323767ee9728c_prof);

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
