<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_04d700d4fb63a5a63974fde1b7eda967dcb20dfbf1df60e1a42a023f0c3f9e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18829562b841680b72cef88b9b7d98c58ddf6eddf27dd3728fb8946e311f8f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18829562b841680b72cef88b9b7d98c58ddf6eddf27dd3728fb8946e311f8f7f->enter($__internal_18829562b841680b72cef88b9b7d98c58ddf6eddf27dd3728fb8946e311f8f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4e04cbd1465fe205c73f32ec549cb287b39c5a8d287c0d8241895f0ee39e5319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e04cbd1465fe205c73f32ec549cb287b39c5a8d287c0d8241895f0ee39e5319->enter($__internal_4e04cbd1465fe205c73f32ec549cb287b39c5a8d287c0d8241895f0ee39e5319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_18829562b841680b72cef88b9b7d98c58ddf6eddf27dd3728fb8946e311f8f7f->leave($__internal_18829562b841680b72cef88b9b7d98c58ddf6eddf27dd3728fb8946e311f8f7f_prof);

        
        $__internal_4e04cbd1465fe205c73f32ec549cb287b39c5a8d287c0d8241895f0ee39e5319->leave($__internal_4e04cbd1465fe205c73f32ec549cb287b39c5a8d287c0d8241895f0ee39e5319_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bdc236764dc47cd0b38abe6495104328a08ae02ea6ecbe3bfed790fcfda5c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdc236764dc47cd0b38abe6495104328a08ae02ea6ecbe3bfed790fcfda5c63->enter($__internal_4bdc236764dc47cd0b38abe6495104328a08ae02ea6ecbe3bfed790fcfda5c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f5c62cbf2f674a2c9a4bf7d2b00da1fb80604d8fc2c22374b1e34de736d6fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5c62cbf2f674a2c9a4bf7d2b00da1fb80604d8fc2c22374b1e34de736d6fe4->enter($__internal_4f5c62cbf2f674a2c9a4bf7d2b00da1fb80604d8fc2c22374b1e34de736d6fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f5c62cbf2f674a2c9a4bf7d2b00da1fb80604d8fc2c22374b1e34de736d6fe4->leave($__internal_4f5c62cbf2f674a2c9a4bf7d2b00da1fb80604d8fc2c22374b1e34de736d6fe4_prof);

        
        $__internal_4bdc236764dc47cd0b38abe6495104328a08ae02ea6ecbe3bfed790fcfda5c63->leave($__internal_4bdc236764dc47cd0b38abe6495104328a08ae02ea6ecbe3bfed790fcfda5c63_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
