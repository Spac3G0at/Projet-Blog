<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fd61c4cc2289013959f22d63a1e1ec254b94b44d12cde5a971c3e68113ae1c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_1aa68a9f8252ee97245d80fa51ad3931aba8bff6b9893a0ba780b639eda5b817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa68a9f8252ee97245d80fa51ad3931aba8bff6b9893a0ba780b639eda5b817->enter($__internal_1aa68a9f8252ee97245d80fa51ad3931aba8bff6b9893a0ba780b639eda5b817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_3815f31cc226f3dc1c3b4a485df6ffa68e53c2cff3e262479a6a3953f94b536f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3815f31cc226f3dc1c3b4a485df6ffa68e53c2cff3e262479a6a3953f94b536f->enter($__internal_3815f31cc226f3dc1c3b4a485df6ffa68e53c2cff3e262479a6a3953f94b536f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa68a9f8252ee97245d80fa51ad3931aba8bff6b9893a0ba780b639eda5b817->leave($__internal_1aa68a9f8252ee97245d80fa51ad3931aba8bff6b9893a0ba780b639eda5b817_prof);

        
        $__internal_3815f31cc226f3dc1c3b4a485df6ffa68e53c2cff3e262479a6a3953f94b536f->leave($__internal_3815f31cc226f3dc1c3b4a485df6ffa68e53c2cff3e262479a6a3953f94b536f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fa514d430ecba253a19d2b48b884981d26f3c2b06ac040c730afc0a04546e6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa514d430ecba253a19d2b48b884981d26f3c2b06ac040c730afc0a04546e6e5->enter($__internal_fa514d430ecba253a19d2b48b884981d26f3c2b06ac040c730afc0a04546e6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e7744c4c776d35a2154d74accd93494f1f2535c2f54460e3a9f3c3d6dea60049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7744c4c776d35a2154d74accd93494f1f2535c2f54460e3a9f3c3d6dea60049->enter($__internal_e7744c4c776d35a2154d74accd93494f1f2535c2f54460e3a9f3c3d6dea60049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e7744c4c776d35a2154d74accd93494f1f2535c2f54460e3a9f3c3d6dea60049->leave($__internal_e7744c4c776d35a2154d74accd93494f1f2535c2f54460e3a9f3c3d6dea60049_prof);

        
        $__internal_fa514d430ecba253a19d2b48b884981d26f3c2b06ac040c730afc0a04546e6e5->leave($__internal_fa514d430ecba253a19d2b48b884981d26f3c2b06ac040c730afc0a04546e6e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
