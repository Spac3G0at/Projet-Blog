<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_78ea7682410c82f11a53f68624d7f5de4da22e689be40b284b614b366ab6d00a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e4f9429810536ea2e86212824ea74c6b62f8552f85ab1bd8a464456552fc5b21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f9429810536ea2e86212824ea74c6b62f8552f85ab1bd8a464456552fc5b21->enter($__internal_e4f9429810536ea2e86212824ea74c6b62f8552f85ab1bd8a464456552fc5b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b979725c429f3684208723b8976ab5efbac191a9fcb6643d2ea7d6e1868cc319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b979725c429f3684208723b8976ab5efbac191a9fcb6643d2ea7d6e1868cc319->enter($__internal_b979725c429f3684208723b8976ab5efbac191a9fcb6643d2ea7d6e1868cc319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f9429810536ea2e86212824ea74c6b62f8552f85ab1bd8a464456552fc5b21->leave($__internal_e4f9429810536ea2e86212824ea74c6b62f8552f85ab1bd8a464456552fc5b21_prof);

        
        $__internal_b979725c429f3684208723b8976ab5efbac191a9fcb6643d2ea7d6e1868cc319->leave($__internal_b979725c429f3684208723b8976ab5efbac191a9fcb6643d2ea7d6e1868cc319_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdb19b7ccf33dc2a509b7e6daceee37e3bb87023f539b7821a15f95d240affbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb19b7ccf33dc2a509b7e6daceee37e3bb87023f539b7821a15f95d240affbf->enter($__internal_cdb19b7ccf33dc2a509b7e6daceee37e3bb87023f539b7821a15f95d240affbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c597f7b32956abc0fd8f553360165aa69befb8807f6e822eae22747e8c2e8cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c597f7b32956abc0fd8f553360165aa69befb8807f6e822eae22747e8c2e8cfd->enter($__internal_c597f7b32956abc0fd8f553360165aa69befb8807f6e822eae22747e8c2e8cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c597f7b32956abc0fd8f553360165aa69befb8807f6e822eae22747e8c2e8cfd->leave($__internal_c597f7b32956abc0fd8f553360165aa69befb8807f6e822eae22747e8c2e8cfd_prof);

        
        $__internal_cdb19b7ccf33dc2a509b7e6daceee37e3bb87023f539b7821a15f95d240affbf->leave($__internal_cdb19b7ccf33dc2a509b7e6daceee37e3bb87023f539b7821a15f95d240affbf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
