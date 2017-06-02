<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0a4915361585b9598110e5e5c263ce69eb586d150e7d29b089c80a8b58f7106a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_39c69dc17fc48e2d02c3be9bc4e8c26e405867a1553153a69bb3fe1458f3dac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39c69dc17fc48e2d02c3be9bc4e8c26e405867a1553153a69bb3fe1458f3dac5->enter($__internal_39c69dc17fc48e2d02c3be9bc4e8c26e405867a1553153a69bb3fe1458f3dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_a7775cf79e0b55b711a02a3acedbc4906fc057690c4d2b142db5e39f3a681f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7775cf79e0b55b711a02a3acedbc4906fc057690c4d2b142db5e39f3a681f47->enter($__internal_a7775cf79e0b55b711a02a3acedbc4906fc057690c4d2b142db5e39f3a681f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39c69dc17fc48e2d02c3be9bc4e8c26e405867a1553153a69bb3fe1458f3dac5->leave($__internal_39c69dc17fc48e2d02c3be9bc4e8c26e405867a1553153a69bb3fe1458f3dac5_prof);

        
        $__internal_a7775cf79e0b55b711a02a3acedbc4906fc057690c4d2b142db5e39f3a681f47->leave($__internal_a7775cf79e0b55b711a02a3acedbc4906fc057690c4d2b142db5e39f3a681f47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3b69a262f7cd9f5659719449642e1f9ebf90d529b914ad290fcb64de2a01243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b69a262f7cd9f5659719449642e1f9ebf90d529b914ad290fcb64de2a01243->enter($__internal_f3b69a262f7cd9f5659719449642e1f9ebf90d529b914ad290fcb64de2a01243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1cc4773d9bf4293cc36503d46609b67d4bd3042d241d5f3d08358c14fe87c8ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc4773d9bf4293cc36503d46609b67d4bd3042d241d5f3d08358c14fe87c8ee->enter($__internal_1cc4773d9bf4293cc36503d46609b67d4bd3042d241d5f3d08358c14fe87c8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_1cc4773d9bf4293cc36503d46609b67d4bd3042d241d5f3d08358c14fe87c8ee->leave($__internal_1cc4773d9bf4293cc36503d46609b67d4bd3042d241d5f3d08358c14fe87c8ee_prof);

        
        $__internal_f3b69a262f7cd9f5659719449642e1f9ebf90d529b914ad290fcb64de2a01243->leave($__internal_f3b69a262f7cd9f5659719449642e1f9ebf90d529b914ad290fcb64de2a01243_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
