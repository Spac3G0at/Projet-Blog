<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f81fc3eca5f9b2ad928ab43d5c760775bbac29aaf8f5fe36910f6ba6efc5efce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c5e6752583f193ff9826ec8a98f37c33e374fa81ecf0f00fb759b9ad49e501ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e6752583f193ff9826ec8a98f37c33e374fa81ecf0f00fb759b9ad49e501ac->enter($__internal_c5e6752583f193ff9826ec8a98f37c33e374fa81ecf0f00fb759b9ad49e501ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_9bb9c0f57e94afcc7b97b3aafae150feac4b9593b875fefc77004585e84bff3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb9c0f57e94afcc7b97b3aafae150feac4b9593b875fefc77004585e84bff3c->enter($__internal_9bb9c0f57e94afcc7b97b3aafae150feac4b9593b875fefc77004585e84bff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e6752583f193ff9826ec8a98f37c33e374fa81ecf0f00fb759b9ad49e501ac->leave($__internal_c5e6752583f193ff9826ec8a98f37c33e374fa81ecf0f00fb759b9ad49e501ac_prof);

        
        $__internal_9bb9c0f57e94afcc7b97b3aafae150feac4b9593b875fefc77004585e84bff3c->leave($__internal_9bb9c0f57e94afcc7b97b3aafae150feac4b9593b875fefc77004585e84bff3c_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_304ddf803e65f2b5a4505868a271c5cf0b850e78fdb2149aacd7298b4f8b051b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_304ddf803e65f2b5a4505868a271c5cf0b850e78fdb2149aacd7298b4f8b051b->enter($__internal_304ddf803e65f2b5a4505868a271c5cf0b850e78fdb2149aacd7298b4f8b051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c80463bfc5fb1d20ebe8f0aecd63456402a110337f4df4c3ca27abb8ab665bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80463bfc5fb1d20ebe8f0aecd63456402a110337f4df4c3ca27abb8ab665bf2->enter($__internal_c80463bfc5fb1d20ebe8f0aecd63456402a110337f4df4c3ca27abb8ab665bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_c80463bfc5fb1d20ebe8f0aecd63456402a110337f4df4c3ca27abb8ab665bf2->leave($__internal_c80463bfc5fb1d20ebe8f0aecd63456402a110337f4df4c3ca27abb8ab665bf2_prof);

        
        $__internal_304ddf803e65f2b5a4505868a271c5cf0b850e78fdb2149aacd7298b4f8b051b->leave($__internal_304ddf803e65f2b5a4505868a271c5cf0b850e78fdb2149aacd7298b4f8b051b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
