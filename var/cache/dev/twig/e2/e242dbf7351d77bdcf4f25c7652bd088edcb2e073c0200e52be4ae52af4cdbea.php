<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_58295f4be7798145a30f6ad84c3d0341a9b68c423f0cc83157994819db580f11 extends Twig_Template
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
        $__internal_9064aa2cfca336a1daea6a4d755b1a140db495ff45ba04f10ebf1bd714120d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9064aa2cfca336a1daea6a4d755b1a140db495ff45ba04f10ebf1bd714120d92->enter($__internal_9064aa2cfca336a1daea6a4d755b1a140db495ff45ba04f10ebf1bd714120d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_02fc1f453e9aeb1cd46b4d1d24ddeb5a40377b0e792f98de10dff9769908d069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02fc1f453e9aeb1cd46b4d1d24ddeb5a40377b0e792f98de10dff9769908d069->enter($__internal_02fc1f453e9aeb1cd46b4d1d24ddeb5a40377b0e792f98de10dff9769908d069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9064aa2cfca336a1daea6a4d755b1a140db495ff45ba04f10ebf1bd714120d92->leave($__internal_9064aa2cfca336a1daea6a4d755b1a140db495ff45ba04f10ebf1bd714120d92_prof);

        
        $__internal_02fc1f453e9aeb1cd46b4d1d24ddeb5a40377b0e792f98de10dff9769908d069->leave($__internal_02fc1f453e9aeb1cd46b4d1d24ddeb5a40377b0e792f98de10dff9769908d069_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9434663587ba24ac80f78ec8358073667cb70d7258a9e7bdd7af576d9b3853a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9434663587ba24ac80f78ec8358073667cb70d7258a9e7bdd7af576d9b3853a->enter($__internal_e9434663587ba24ac80f78ec8358073667cb70d7258a9e7bdd7af576d9b3853a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a81e022c523455d33eeaf226dd0bac0b91aa63f7d2c211c56866ec1f196ee9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81e022c523455d33eeaf226dd0bac0b91aa63f7d2c211c56866ec1f196ee9d5->enter($__internal_a81e022c523455d33eeaf226dd0bac0b91aa63f7d2c211c56866ec1f196ee9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a81e022c523455d33eeaf226dd0bac0b91aa63f7d2c211c56866ec1f196ee9d5->leave($__internal_a81e022c523455d33eeaf226dd0bac0b91aa63f7d2c211c56866ec1f196ee9d5_prof);

        
        $__internal_e9434663587ba24ac80f78ec8358073667cb70d7258a9e7bdd7af576d9b3853a->leave($__internal_e9434663587ba24ac80f78ec8358073667cb70d7258a9e7bdd7af576d9b3853a_prof);

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
