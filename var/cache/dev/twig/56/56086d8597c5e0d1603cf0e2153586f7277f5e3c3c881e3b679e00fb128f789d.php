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
        $__internal_d5571c84a0422da88ee9ea33e1b07d97f87e5ad13a0f6d6e016847a215fb42d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5571c84a0422da88ee9ea33e1b07d97f87e5ad13a0f6d6e016847a215fb42d3->enter($__internal_d5571c84a0422da88ee9ea33e1b07d97f87e5ad13a0f6d6e016847a215fb42d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_90f35da71d775847a3dbd7d296d8211d967037f2ae0182c0860b0fc0984242c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f35da71d775847a3dbd7d296d8211d967037f2ae0182c0860b0fc0984242c4->enter($__internal_90f35da71d775847a3dbd7d296d8211d967037f2ae0182c0860b0fc0984242c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5571c84a0422da88ee9ea33e1b07d97f87e5ad13a0f6d6e016847a215fb42d3->leave($__internal_d5571c84a0422da88ee9ea33e1b07d97f87e5ad13a0f6d6e016847a215fb42d3_prof);

        
        $__internal_90f35da71d775847a3dbd7d296d8211d967037f2ae0182c0860b0fc0984242c4->leave($__internal_90f35da71d775847a3dbd7d296d8211d967037f2ae0182c0860b0fc0984242c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da8d7f47b198fc4e91fbec8ab89b697e649a6b946bbcf9d821bd9e7b3135e85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8d7f47b198fc4e91fbec8ab89b697e649a6b946bbcf9d821bd9e7b3135e85d->enter($__internal_da8d7f47b198fc4e91fbec8ab89b697e649a6b946bbcf9d821bd9e7b3135e85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c9e2dd326999c04933bd64b67c104310661d686b68987c4a4bb5f8615b972591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e2dd326999c04933bd64b67c104310661d686b68987c4a4bb5f8615b972591->enter($__internal_c9e2dd326999c04933bd64b67c104310661d686b68987c4a4bb5f8615b972591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_c9e2dd326999c04933bd64b67c104310661d686b68987c4a4bb5f8615b972591->leave($__internal_c9e2dd326999c04933bd64b67c104310661d686b68987c4a4bb5f8615b972591_prof);

        
        $__internal_da8d7f47b198fc4e91fbec8ab89b697e649a6b946bbcf9d821bd9e7b3135e85d->leave($__internal_da8d7f47b198fc4e91fbec8ab89b697e649a6b946bbcf9d821bd9e7b3135e85d_prof);

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
