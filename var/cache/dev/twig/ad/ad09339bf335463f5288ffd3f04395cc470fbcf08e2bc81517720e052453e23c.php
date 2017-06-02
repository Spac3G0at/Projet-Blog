<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_1f882910ec11871d8f9f1a65aa4fc08559a466c565f9cc2524d3b39365628e70 extends Twig_Template
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
        $__internal_3093fce1488a1ec6fdbb79aa99892729c972675edbaecb28612f854bbf074c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3093fce1488a1ec6fdbb79aa99892729c972675edbaecb28612f854bbf074c98->enter($__internal_3093fce1488a1ec6fdbb79aa99892729c972675edbaecb28612f854bbf074c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_d23dab08862bf2193e01a95d1d66d93ab82e75690cf5870843ab667644c4a2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23dab08862bf2193e01a95d1d66d93ab82e75690cf5870843ab667644c4a2b3->enter($__internal_d23dab08862bf2193e01a95d1d66d93ab82e75690cf5870843ab667644c4a2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_3093fce1488a1ec6fdbb79aa99892729c972675edbaecb28612f854bbf074c98->leave($__internal_3093fce1488a1ec6fdbb79aa99892729c972675edbaecb28612f854bbf074c98_prof);

        
        $__internal_d23dab08862bf2193e01a95d1d66d93ab82e75690cf5870843ab667644c4a2b3->leave($__internal_d23dab08862bf2193e01a95d1d66d93ab82e75690cf5870843ab667644c4a2b3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58ae8f337f930924b9b23950e4529180ca1bae4f192e12d626420e4dac22d4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ae8f337f930924b9b23950e4529180ca1bae4f192e12d626420e4dac22d4ce->enter($__internal_58ae8f337f930924b9b23950e4529180ca1bae4f192e12d626420e4dac22d4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b6d908a3643482baf0fa0920f5f1013458f23921faca69058aeedea3fcc0f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6d908a3643482baf0fa0920f5f1013458f23921faca69058aeedea3fcc0f57->enter($__internal_2b6d908a3643482baf0fa0920f5f1013458f23921faca69058aeedea3fcc0f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_2b6d908a3643482baf0fa0920f5f1013458f23921faca69058aeedea3fcc0f57->leave($__internal_2b6d908a3643482baf0fa0920f5f1013458f23921faca69058aeedea3fcc0f57_prof);

        
        $__internal_58ae8f337f930924b9b23950e4529180ca1bae4f192e12d626420e4dac22d4ce->leave($__internal_58ae8f337f930924b9b23950e4529180ca1bae4f192e12d626420e4dac22d4ce_prof);

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
