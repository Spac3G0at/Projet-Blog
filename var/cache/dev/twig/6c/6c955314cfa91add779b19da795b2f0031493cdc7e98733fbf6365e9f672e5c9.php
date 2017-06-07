<?php

/* @FOSUser/Security/Modal/login.html.twig */
class __TwigTemplate_e0d75de853a97ee80dd8edfe86d91737f099aeb6952a0a251fa788b3eb54759b extends Twig_Template
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
        $__internal_55421edd33c6bce076d50947ba1c3a86537cd3f3d477366760e0471183cdb65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55421edd33c6bce076d50947ba1c3a86537cd3f3d477366760e0471183cdb65b->enter($__internal_55421edd33c6bce076d50947ba1c3a86537cd3f3d477366760e0471183cdb65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        $__internal_1064c5b05cd8aa7b6f0e1f20ecb65d8a3f5d1eb2ac448343ea39e39e53ff98a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1064c5b05cd8aa7b6f0e1f20ecb65d8a3f5d1eb2ac448343ea39e39e53ff98a0->enter($__internal_1064c5b05cd8aa7b6f0e1f20ecb65d8a3f5d1eb2ac448343ea39e39e53ff98a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/Modal/login.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_55421edd33c6bce076d50947ba1c3a86537cd3f3d477366760e0471183cdb65b->leave($__internal_55421edd33c6bce076d50947ba1c3a86537cd3f3d477366760e0471183cdb65b_prof);

        
        $__internal_1064c5b05cd8aa7b6f0e1f20ecb65d8a3f5d1eb2ac448343ea39e39e53ff98a0->leave($__internal_1064c5b05cd8aa7b6f0e1f20ecb65d8a3f5d1eb2ac448343ea39e39e53ff98a0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2870e629d1c9b3b572f7b7d7a0fa6e1c145acc64598c3fe867aea7a245ba29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2870e629d1c9b3b572f7b7d7a0fa6e1c145acc64598c3fe867aea7a245ba29d->enter($__internal_f2870e629d1c9b3b572f7b7d7a0fa6e1c145acc64598c3fe867aea7a245ba29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c75627d43b2eb5d7da8cb35b4eada2b40d64d9d935471257c72f5adcd00075f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75627d43b2eb5d7da8cb35b4eada2b40d64d9d935471257c72f5adcd00075f4->enter($__internal_c75627d43b2eb5d7da8cb35b4eada2b40d64d9d935471257c72f5adcd00075f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/Modal/login_content.html.twig");
        echo "
";
        
        $__internal_c75627d43b2eb5d7da8cb35b4eada2b40d64d9d935471257c72f5adcd00075f4->leave($__internal_c75627d43b2eb5d7da8cb35b4eada2b40d64d9d935471257c72f5adcd00075f4_prof);

        
        $__internal_f2870e629d1c9b3b572f7b7d7a0fa6e1c145acc64598c3fe867aea7a245ba29d->leave($__internal_f2870e629d1c9b3b572f7b7d7a0fa6e1c145acc64598c3fe867aea7a245ba29d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/Modal/login.html.twig";
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
    {{ include('@FOSUser/Security/Modal/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/Modal/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/Modal/login.html.twig");
    }
}
