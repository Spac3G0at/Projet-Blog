<?php

/* FOSUserBundle:Registration/Modal:email.txt.twig */
class __TwigTemplate_d15ea9f5ef05aeab38ccebc501d03729b4eb29924db7542260a32d0b061bdb10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_998cf516dac888b7d7417c06310e571e4dbf75b8f45b14bbd3a5aba0a5243807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_998cf516dac888b7d7417c06310e571e4dbf75b8f45b14bbd3a5aba0a5243807->enter($__internal_998cf516dac888b7d7417c06310e571e4dbf75b8f45b14bbd3a5aba0a5243807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        $__internal_78316ed3b05daf6ca3009b9bed741f7d373929fcb826b890b7cf4184f9cf9673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78316ed3b05daf6ca3009b9bed741f7d373929fcb826b890b7cf4184f9cf9673->enter($__internal_78316ed3b05daf6ca3009b9bed741f7d373929fcb826b890b7cf4184f9cf9673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration/Modal:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_998cf516dac888b7d7417c06310e571e4dbf75b8f45b14bbd3a5aba0a5243807->leave($__internal_998cf516dac888b7d7417c06310e571e4dbf75b8f45b14bbd3a5aba0a5243807_prof);

        
        $__internal_78316ed3b05daf6ca3009b9bed741f7d373929fcb826b890b7cf4184f9cf9673->leave($__internal_78316ed3b05daf6ca3009b9bed741f7d373929fcb826b890b7cf4184f9cf9673_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b0040bef4e355b6c54463dc77d9db93ccb602b51b945e41a9ecc17b8bdbe1432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0040bef4e355b6c54463dc77d9db93ccb602b51b945e41a9ecc17b8bdbe1432->enter($__internal_b0040bef4e355b6c54463dc77d9db93ccb602b51b945e41a9ecc17b8bdbe1432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_7059d233ab2daf6219145376332c7d9c34dc6ab22aa0424390aa8ab9e2149f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7059d233ab2daf6219145376332c7d9c34dc6ab22aa0424390aa8ab9e2149f11->enter($__internal_7059d233ab2daf6219145376332c7d9c34dc6ab22aa0424390aa8ab9e2149f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_7059d233ab2daf6219145376332c7d9c34dc6ab22aa0424390aa8ab9e2149f11->leave($__internal_7059d233ab2daf6219145376332c7d9c34dc6ab22aa0424390aa8ab9e2149f11_prof);

        
        $__internal_b0040bef4e355b6c54463dc77d9db93ccb602b51b945e41a9ecc17b8bdbe1432->leave($__internal_b0040bef4e355b6c54463dc77d9db93ccb602b51b945e41a9ecc17b8bdbe1432_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bf9701a0d25c9cec391bc8ad94ad677081f5d11d8de0b6b57c432470a1fd9312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9701a0d25c9cec391bc8ad94ad677081f5d11d8de0b6b57c432470a1fd9312->enter($__internal_bf9701a0d25c9cec391bc8ad94ad677081f5d11d8de0b6b57c432470a1fd9312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_a48d2b23fdad3278c36b6e74ef4f203baf73ea79b986e5fdb6c352a114f8639c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48d2b23fdad3278c36b6e74ef4f203baf73ea79b986e5fdb6c352a114f8639c->enter($__internal_a48d2b23fdad3278c36b6e74ef4f203baf73ea79b986e5fdb6c352a114f8639c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a48d2b23fdad3278c36b6e74ef4f203baf73ea79b986e5fdb6c352a114f8639c->leave($__internal_a48d2b23fdad3278c36b6e74ef4f203baf73ea79b986e5fdb6c352a114f8639c_prof);

        
        $__internal_bf9701a0d25c9cec391bc8ad94ad677081f5d11d8de0b6b57c432470a1fd9312->leave($__internal_bf9701a0d25c9cec391bc8ad94ad677081f5d11d8de0b6b57c432470a1fd9312_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a60ce42bbfdd11da93d55bf5b5b749374db4c66dc1a09ddf01996aff787eab42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60ce42bbfdd11da93d55bf5b5b749374db4c66dc1a09ddf01996aff787eab42->enter($__internal_a60ce42bbfdd11da93d55bf5b5b749374db4c66dc1a09ddf01996aff787eab42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f20f6e7840190a57d08eeb8a968b6ccc9f18eda05cf4adab5a5201dcd2e4513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20f6e7840190a57d08eeb8a968b6ccc9f18eda05cf4adab5a5201dcd2e4513e->enter($__internal_f20f6e7840190a57d08eeb8a968b6ccc9f18eda05cf4adab5a5201dcd2e4513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f20f6e7840190a57d08eeb8a968b6ccc9f18eda05cf4adab5a5201dcd2e4513e->leave($__internal_f20f6e7840190a57d08eeb8a968b6ccc9f18eda05cf4adab5a5201dcd2e4513e_prof);

        
        $__internal_a60ce42bbfdd11da93d55bf5b5b749374db4c66dc1a09ddf01996aff787eab42->leave($__internal_a60ce42bbfdd11da93d55bf5b5b749374db4c66dc1a09ddf01996aff787eab42_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration/Modal:email.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/email.txt.twig");
    }
}
