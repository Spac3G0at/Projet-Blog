<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c38965df085da0992607956b9fa9a526e33c5e116ff0c982d61d6e918fdd1fd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_010981be03571f54ef0eeab15b6ac6e705eae5d2ed37dcb99ddfc71abc87df30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_010981be03571f54ef0eeab15b6ac6e705eae5d2ed37dcb99ddfc71abc87df30->enter($__internal_010981be03571f54ef0eeab15b6ac6e705eae5d2ed37dcb99ddfc71abc87df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_b00908861088d525ed765d045ae2d70046c9e371006d6e8a5da9d0ba62e7875f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00908861088d525ed765d045ae2d70046c9e371006d6e8a5da9d0ba62e7875f->enter($__internal_b00908861088d525ed765d045ae2d70046c9e371006d6e8a5da9d0ba62e7875f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010981be03571f54ef0eeab15b6ac6e705eae5d2ed37dcb99ddfc71abc87df30->leave($__internal_010981be03571f54ef0eeab15b6ac6e705eae5d2ed37dcb99ddfc71abc87df30_prof);

        
        $__internal_b00908861088d525ed765d045ae2d70046c9e371006d6e8a5da9d0ba62e7875f->leave($__internal_b00908861088d525ed765d045ae2d70046c9e371006d6e8a5da9d0ba62e7875f_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73611844600739ccf70a9a6ad1e9c4d7ba6ee3982cbec670a15775194753823e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73611844600739ccf70a9a6ad1e9c4d7ba6ee3982cbec670a15775194753823e->enter($__internal_73611844600739ccf70a9a6ad1e9c4d7ba6ee3982cbec670a15775194753823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d2f9fa4f133710ed748869543f99d0503d66d62d14f2c32d28d3104f59a2e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2f9fa4f133710ed748869543f99d0503d66d62d14f2c32d28d3104f59a2e3b->enter($__internal_5d2f9fa4f133710ed748869543f99d0503d66d62d14f2c32d28d3104f59a2e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5d2f9fa4f133710ed748869543f99d0503d66d62d14f2c32d28d3104f59a2e3b->leave($__internal_5d2f9fa4f133710ed748869543f99d0503d66d62d14f2c32d28d3104f59a2e3b_prof);

        
        $__internal_73611844600739ccf70a9a6ad1e9c4d7ba6ee3982cbec670a15775194753823e->leave($__internal_73611844600739ccf70a9a6ad1e9c4d7ba6ee3982cbec670a15775194753823e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
