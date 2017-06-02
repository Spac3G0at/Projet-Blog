<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8db22a43c2ec56e8af01c7e2929fcc6f123a485a74646e92c0e97591d20bb45e extends Twig_Template
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
        $__internal_60dad087ad31ec68a60f036f5a7f18ea684984bf35c22409129ed04eb2a381b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60dad087ad31ec68a60f036f5a7f18ea684984bf35c22409129ed04eb2a381b5->enter($__internal_60dad087ad31ec68a60f036f5a7f18ea684984bf35c22409129ed04eb2a381b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_bfa336877926551c0a17e095e91c5152b1312dfeba9cd7ef70a27f7e247cc8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa336877926551c0a17e095e91c5152b1312dfeba9cd7ef70a27f7e247cc8a1->enter($__internal_bfa336877926551c0a17e095e91c5152b1312dfeba9cd7ef70a27f7e247cc8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60dad087ad31ec68a60f036f5a7f18ea684984bf35c22409129ed04eb2a381b5->leave($__internal_60dad087ad31ec68a60f036f5a7f18ea684984bf35c22409129ed04eb2a381b5_prof);

        
        $__internal_bfa336877926551c0a17e095e91c5152b1312dfeba9cd7ef70a27f7e247cc8a1->leave($__internal_bfa336877926551c0a17e095e91c5152b1312dfeba9cd7ef70a27f7e247cc8a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_253fb3bdfb88ec312cf62eb55eb00d21585cdbe03e285630432f8e2bbe14e41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253fb3bdfb88ec312cf62eb55eb00d21585cdbe03e285630432f8e2bbe14e41c->enter($__internal_253fb3bdfb88ec312cf62eb55eb00d21585cdbe03e285630432f8e2bbe14e41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c0785a8d114c0689ecd327c4d9e907a8946cd39e66bf70c6a8b428ad635f3fc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0785a8d114c0689ecd327c4d9e907a8946cd39e66bf70c6a8b428ad635f3fc4->enter($__internal_c0785a8d114c0689ecd327c4d9e907a8946cd39e66bf70c6a8b428ad635f3fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c0785a8d114c0689ecd327c4d9e907a8946cd39e66bf70c6a8b428ad635f3fc4->leave($__internal_c0785a8d114c0689ecd327c4d9e907a8946cd39e66bf70c6a8b428ad635f3fc4_prof);

        
        $__internal_253fb3bdfb88ec312cf62eb55eb00d21585cdbe03e285630432f8e2bbe14e41c->leave($__internal_253fb3bdfb88ec312cf62eb55eb00d21585cdbe03e285630432f8e2bbe14e41c_prof);

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
