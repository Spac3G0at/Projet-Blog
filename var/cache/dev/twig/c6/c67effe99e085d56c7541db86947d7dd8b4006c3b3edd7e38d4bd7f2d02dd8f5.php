<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_32dbcd211c0f09db049eeeb90aa55d06304e976a8c67b5b4744feee1feb90d80 extends Twig_Template
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
        $__internal_9d020235aacae01eaea1eacc5b50fee6e9d750524f28d4e71fbc1d548a83e64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d020235aacae01eaea1eacc5b50fee6e9d750524f28d4e71fbc1d548a83e64a->enter($__internal_9d020235aacae01eaea1eacc5b50fee6e9d750524f28d4e71fbc1d548a83e64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_a786838ee33abeb65a37a101b0bf959f0d255a28383ce7da51defc420bcb0083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a786838ee33abeb65a37a101b0bf959f0d255a28383ce7da51defc420bcb0083->enter($__internal_a786838ee33abeb65a37a101b0bf959f0d255a28383ce7da51defc420bcb0083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d020235aacae01eaea1eacc5b50fee6e9d750524f28d4e71fbc1d548a83e64a->leave($__internal_9d020235aacae01eaea1eacc5b50fee6e9d750524f28d4e71fbc1d548a83e64a_prof);

        
        $__internal_a786838ee33abeb65a37a101b0bf959f0d255a28383ce7da51defc420bcb0083->leave($__internal_a786838ee33abeb65a37a101b0bf959f0d255a28383ce7da51defc420bcb0083_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05ba609c2da4d662171ed8f9ec5f07a671127b3f3a62c3442e8b83e37d513e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ba609c2da4d662171ed8f9ec5f07a671127b3f3a62c3442e8b83e37d513e29->enter($__internal_05ba609c2da4d662171ed8f9ec5f07a671127b3f3a62c3442e8b83e37d513e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0e8b9cc66dc47e006ef37f09ffd1cfe57954b2c388fbdd8b7ef3ede34b994466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8b9cc66dc47e006ef37f09ffd1cfe57954b2c388fbdd8b7ef3ede34b994466->enter($__internal_0e8b9cc66dc47e006ef37f09ffd1cfe57954b2c388fbdd8b7ef3ede34b994466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0e8b9cc66dc47e006ef37f09ffd1cfe57954b2c388fbdd8b7ef3ede34b994466->leave($__internal_0e8b9cc66dc47e006ef37f09ffd1cfe57954b2c388fbdd8b7ef3ede34b994466_prof);

        
        $__internal_05ba609c2da4d662171ed8f9ec5f07a671127b3f3a62c3442e8b83e37d513e29->leave($__internal_05ba609c2da4d662171ed8f9ec5f07a671127b3f3a62c3442e8b83e37d513e29_prof);

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
