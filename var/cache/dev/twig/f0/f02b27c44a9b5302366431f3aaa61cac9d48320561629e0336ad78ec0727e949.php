<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_10c16839550c6cd579057444961476ccfd0eb7d100571bb3626f5426a605f0dd extends Twig_Template
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
        $__internal_d3c7ebd7494e3582ec438579fedb05bf6e4356be4b1de2469692ccc5c7d76dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3c7ebd7494e3582ec438579fedb05bf6e4356be4b1de2469692ccc5c7d76dd2->enter($__internal_d3c7ebd7494e3582ec438579fedb05bf6e4356be4b1de2469692ccc5c7d76dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_7b032e12627097b0f121dd197f62478a0dc26b7a9a7b71ef85fff58a56275b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b032e12627097b0f121dd197f62478a0dc26b7a9a7b71ef85fff58a56275b85->enter($__internal_7b032e12627097b0f121dd197f62478a0dc26b7a9a7b71ef85fff58a56275b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3c7ebd7494e3582ec438579fedb05bf6e4356be4b1de2469692ccc5c7d76dd2->leave($__internal_d3c7ebd7494e3582ec438579fedb05bf6e4356be4b1de2469692ccc5c7d76dd2_prof);

        
        $__internal_7b032e12627097b0f121dd197f62478a0dc26b7a9a7b71ef85fff58a56275b85->leave($__internal_7b032e12627097b0f121dd197f62478a0dc26b7a9a7b71ef85fff58a56275b85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9d73250f5f31b0653ff5ea01a8830e5712906f2296d9b16c09f5970d24cdbda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d73250f5f31b0653ff5ea01a8830e5712906f2296d9b16c09f5970d24cdbda->enter($__internal_b9d73250f5f31b0653ff5ea01a8830e5712906f2296d9b16c09f5970d24cdbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_290d0392c221515018e5ffda471675e8c56d8944ee8209afad2ae4f4fab0d528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290d0392c221515018e5ffda471675e8c56d8944ee8209afad2ae4f4fab0d528->enter($__internal_290d0392c221515018e5ffda471675e8c56d8944ee8209afad2ae4f4fab0d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_290d0392c221515018e5ffda471675e8c56d8944ee8209afad2ae4f4fab0d528->leave($__internal_290d0392c221515018e5ffda471675e8c56d8944ee8209afad2ae4f4fab0d528_prof);

        
        $__internal_b9d73250f5f31b0653ff5ea01a8830e5712906f2296d9b16c09f5970d24cdbda->leave($__internal_b9d73250f5f31b0653ff5ea01a8830e5712906f2296d9b16c09f5970d24cdbda_prof);

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
