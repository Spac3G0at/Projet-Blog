<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_a545381239605b5749df495f9529b6998baf4a125732fb00fcb1c31493feeeed extends Twig_Template
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
        $__internal_5aca9dc3fad97dc0791be417abef2bf43aaf18b4287f1e29181d42cfd11cf505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aca9dc3fad97dc0791be417abef2bf43aaf18b4287f1e29181d42cfd11cf505->enter($__internal_5aca9dc3fad97dc0791be417abef2bf43aaf18b4287f1e29181d42cfd11cf505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_f2c2a17642146d4a8d472fe399d55fa42dc44524d45da45220dc66761ebdaa9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c2a17642146d4a8d472fe399d55fa42dc44524d45da45220dc66761ebdaa9d->enter($__internal_f2c2a17642146d4a8d472fe399d55fa42dc44524d45da45220dc66761ebdaa9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_5aca9dc3fad97dc0791be417abef2bf43aaf18b4287f1e29181d42cfd11cf505->leave($__internal_5aca9dc3fad97dc0791be417abef2bf43aaf18b4287f1e29181d42cfd11cf505_prof);

        
        $__internal_f2c2a17642146d4a8d472fe399d55fa42dc44524d45da45220dc66761ebdaa9d->leave($__internal_f2c2a17642146d4a8d472fe399d55fa42dc44524d45da45220dc66761ebdaa9d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_224d5c8d7de1b683652adb305ce5c1e3cc3f43f403620a75c87b057f57af668d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224d5c8d7de1b683652adb305ce5c1e3cc3f43f403620a75c87b057f57af668d->enter($__internal_224d5c8d7de1b683652adb305ce5c1e3cc3f43f403620a75c87b057f57af668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2cc5b06d71276ac39a9d55dd73efe850a68a09f086c3386469c54eb300a1a8cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc5b06d71276ac39a9d55dd73efe850a68a09f086c3386469c54eb300a1a8cf->enter($__internal_2cc5b06d71276ac39a9d55dd73efe850a68a09f086c3386469c54eb300a1a8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_2cc5b06d71276ac39a9d55dd73efe850a68a09f086c3386469c54eb300a1a8cf->leave($__internal_2cc5b06d71276ac39a9d55dd73efe850a68a09f086c3386469c54eb300a1a8cf_prof);

        
        $__internal_224d5c8d7de1b683652adb305ce5c1e3cc3f43f403620a75c87b057f57af668d->leave($__internal_224d5c8d7de1b683652adb305ce5c1e3cc3f43f403620a75c87b057f57af668d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register.html.twig";
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
{% include \"@FOSUser/Registration/Modal/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/Modal/register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
