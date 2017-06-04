<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_be3055ac62a5a6dec8ed19edbf65b26cc3240592535b2684221a80394b1b17eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_deee3364c9de97ea149d35a0e93382e786e67fbe08cde512fbc82ec2dc8f4700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deee3364c9de97ea149d35a0e93382e786e67fbe08cde512fbc82ec2dc8f4700->enter($__internal_deee3364c9de97ea149d35a0e93382e786e67fbe08cde512fbc82ec2dc8f4700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_5651ec36c52b1d241a0b07f1a279622b0ad49d945bf22e6f20016d99f6bf171c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5651ec36c52b1d241a0b07f1a279622b0ad49d945bf22e6f20016d99f6bf171c->enter($__internal_5651ec36c52b1d241a0b07f1a279622b0ad49d945bf22e6f20016d99f6bf171c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deee3364c9de97ea149d35a0e93382e786e67fbe08cde512fbc82ec2dc8f4700->leave($__internal_deee3364c9de97ea149d35a0e93382e786e67fbe08cde512fbc82ec2dc8f4700_prof);

        
        $__internal_5651ec36c52b1d241a0b07f1a279622b0ad49d945bf22e6f20016d99f6bf171c->leave($__internal_5651ec36c52b1d241a0b07f1a279622b0ad49d945bf22e6f20016d99f6bf171c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10637954abad4c8019c45e1f5f8daa99d5a2a14155af9f9633e324e2303a7f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10637954abad4c8019c45e1f5f8daa99d5a2a14155af9f9633e324e2303a7f53->enter($__internal_10637954abad4c8019c45e1f5f8daa99d5a2a14155af9f9633e324e2303a7f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3842d23cbbf8a6a1da63519992dced39025f753bd2dc7f819539534468ec4456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3842d23cbbf8a6a1da63519992dced39025f753bd2dc7f819539534468ec4456->enter($__internal_3842d23cbbf8a6a1da63519992dced39025f753bd2dc7f819539534468ec4456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_3842d23cbbf8a6a1da63519992dced39025f753bd2dc7f819539534468ec4456->leave($__internal_3842d23cbbf8a6a1da63519992dced39025f753bd2dc7f819539534468ec4456_prof);

        
        $__internal_10637954abad4c8019c45e1f5f8daa99d5a2a14155af9f9633e324e2303a7f53->leave($__internal_10637954abad4c8019c45e1f5f8daa99d5a2a14155af9f9633e324e2303a7f53_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
