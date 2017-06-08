<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_c4573ef71992498a698d61c3a5de8e7dfba65a082cc8dc485db44ad0a257890e extends Twig_Template
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
        $__internal_c0bfcd60eaf8145f32a91f75d8cd85c9ce5e1e24b56fa15c399eab6f98cb2754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bfcd60eaf8145f32a91f75d8cd85c9ce5e1e24b56fa15c399eab6f98cb2754->enter($__internal_c0bfcd60eaf8145f32a91f75d8cd85c9ce5e1e24b56fa15c399eab6f98cb2754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_6ff73df98ed8251acac23fc64cf5fada9ab1b493bbae7c9e3a751e8e1996846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff73df98ed8251acac23fc64cf5fada9ab1b493bbae7c9e3a751e8e1996846a->enter($__internal_6ff73df98ed8251acac23fc64cf5fada9ab1b493bbae7c9e3a751e8e1996846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c0bfcd60eaf8145f32a91f75d8cd85c9ce5e1e24b56fa15c399eab6f98cb2754->leave($__internal_c0bfcd60eaf8145f32a91f75d8cd85c9ce5e1e24b56fa15c399eab6f98cb2754_prof);

        
        $__internal_6ff73df98ed8251acac23fc64cf5fada9ab1b493bbae7c9e3a751e8e1996846a->leave($__internal_6ff73df98ed8251acac23fc64cf5fada9ab1b493bbae7c9e3a751e8e1996846a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ea353118688d9368fab3efebec9b6045c99810fc26e34757ad6cc8c5b34fbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea353118688d9368fab3efebec9b6045c99810fc26e34757ad6cc8c5b34fbeb->enter($__internal_1ea353118688d9368fab3efebec9b6045c99810fc26e34757ad6cc8c5b34fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21c5187f3cc5dd464e5272b23ea84b1a5e516f913d8ee30b50589cbf16380d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c5187f3cc5dd464e5272b23ea84b1a5e516f913d8ee30b50589cbf16380d29->enter($__internal_21c5187f3cc5dd464e5272b23ea84b1a5e516f913d8ee30b50589cbf16380d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_21c5187f3cc5dd464e5272b23ea84b1a5e516f913d8ee30b50589cbf16380d29->leave($__internal_21c5187f3cc5dd464e5272b23ea84b1a5e516f913d8ee30b50589cbf16380d29_prof);

        
        $__internal_1ea353118688d9368fab3efebec9b6045c99810fc26e34757ad6cc8c5b34fbeb->leave($__internal_1ea353118688d9368fab3efebec9b6045c99810fc26e34757ad6cc8c5b34fbeb_prof);

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
