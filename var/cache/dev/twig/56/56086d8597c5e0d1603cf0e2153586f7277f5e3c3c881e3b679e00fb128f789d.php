<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_e1142ced0fc5b854f71f213c120194fb6309b1663b6de7401fecc4b66bb276e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_dc12f48f45bd7e6dcad7cf6dc103ea4ffe11406c3b7064f1f7cc8e82d93d78d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc12f48f45bd7e6dcad7cf6dc103ea4ffe11406c3b7064f1f7cc8e82d93d78d4->enter($__internal_dc12f48f45bd7e6dcad7cf6dc103ea4ffe11406c3b7064f1f7cc8e82d93d78d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_c0cee89bd0626b95b24f25b57ebe4c044e049dccb06d14a54e8afc10b9c313d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cee89bd0626b95b24f25b57ebe4c044e049dccb06d14a54e8afc10b9c313d5->enter($__internal_c0cee89bd0626b95b24f25b57ebe4c044e049dccb06d14a54e8afc10b9c313d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc12f48f45bd7e6dcad7cf6dc103ea4ffe11406c3b7064f1f7cc8e82d93d78d4->leave($__internal_dc12f48f45bd7e6dcad7cf6dc103ea4ffe11406c3b7064f1f7cc8e82d93d78d4_prof);

        
        $__internal_c0cee89bd0626b95b24f25b57ebe4c044e049dccb06d14a54e8afc10b9c313d5->leave($__internal_c0cee89bd0626b95b24f25b57ebe4c044e049dccb06d14a54e8afc10b9c313d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_161f5c3bd1215910872c5a1dec6ef705bd1b51f3bbc428df5676eec2534750db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161f5c3bd1215910872c5a1dec6ef705bd1b51f3bbc428df5676eec2534750db->enter($__internal_161f5c3bd1215910872c5a1dec6ef705bd1b51f3bbc428df5676eec2534750db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4b9d02a093270e49b2a437bf3b61b0152b1ff7ec7ab2d0811e843e888985b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b9d02a093270e49b2a437bf3b61b0152b1ff7ec7ab2d0811e843e888985b8a->enter($__internal_c4b9d02a093270e49b2a437bf3b61b0152b1ff7ec7ab2d0811e843e888985b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_c4b9d02a093270e49b2a437bf3b61b0152b1ff7ec7ab2d0811e843e888985b8a->leave($__internal_c4b9d02a093270e49b2a437bf3b61b0152b1ff7ec7ab2d0811e843e888985b8a_prof);

        
        $__internal_161f5c3bd1215910872c5a1dec6ef705bd1b51f3bbc428df5676eec2534750db->leave($__internal_161f5c3bd1215910872c5a1dec6ef705bd1b51f3bbc428df5676eec2534750db_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
