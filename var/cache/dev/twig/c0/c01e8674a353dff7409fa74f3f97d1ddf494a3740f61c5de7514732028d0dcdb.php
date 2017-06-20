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
        $__internal_0b089271ca44185b9f2bbb048ea9618e434342ee9f2dfec84568a9d17fada67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b089271ca44185b9f2bbb048ea9618e434342ee9f2dfec84568a9d17fada67d->enter($__internal_0b089271ca44185b9f2bbb048ea9618e434342ee9f2dfec84568a9d17fada67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_5755627318601679ceba4caad186f673fabe923a0941d8e410eae58f31434e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5755627318601679ceba4caad186f673fabe923a0941d8e410eae58f31434e16->enter($__internal_5755627318601679ceba4caad186f673fabe923a0941d8e410eae58f31434e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_0b089271ca44185b9f2bbb048ea9618e434342ee9f2dfec84568a9d17fada67d->leave($__internal_0b089271ca44185b9f2bbb048ea9618e434342ee9f2dfec84568a9d17fada67d_prof);

        
        $__internal_5755627318601679ceba4caad186f673fabe923a0941d8e410eae58f31434e16->leave($__internal_5755627318601679ceba4caad186f673fabe923a0941d8e410eae58f31434e16_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e48b1b3e2f9764262e2c599a6dcfd2b7eaf06f7200218a454cbb7b95679dd27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48b1b3e2f9764262e2c599a6dcfd2b7eaf06f7200218a454cbb7b95679dd27e->enter($__internal_e48b1b3e2f9764262e2c599a6dcfd2b7eaf06f7200218a454cbb7b95679dd27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_48b746fe761c95e48a7f1a2e78c62c74d27517c7c09e0c45fa7b12e7dc0f30fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b746fe761c95e48a7f1a2e78c62c74d27517c7c09e0c45fa7b12e7dc0f30fc->enter($__internal_48b746fe761c95e48a7f1a2e78c62c74d27517c7c09e0c45fa7b12e7dc0f30fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_48b746fe761c95e48a7f1a2e78c62c74d27517c7c09e0c45fa7b12e7dc0f30fc->leave($__internal_48b746fe761c95e48a7f1a2e78c62c74d27517c7c09e0c45fa7b12e7dc0f30fc_prof);

        
        $__internal_e48b1b3e2f9764262e2c599a6dcfd2b7eaf06f7200218a454cbb7b95679dd27e->leave($__internal_e48b1b3e2f9764262e2c599a6dcfd2b7eaf06f7200218a454cbb7b95679dd27e_prof);

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
