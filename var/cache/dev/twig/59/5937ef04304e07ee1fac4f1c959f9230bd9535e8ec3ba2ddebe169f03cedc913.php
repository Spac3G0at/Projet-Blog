<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_02c86e6d4ca808ec0d5f19cd08990353d083b6a4b26cb4f046b85341715a9adb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1683d51f75fc0784ac00a8ff6f10d0111bf824a7c76de75552aee7b8a064862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1683d51f75fc0784ac00a8ff6f10d0111bf824a7c76de75552aee7b8a064862->enter($__internal_e1683d51f75fc0784ac00a8ff6f10d0111bf824a7c76de75552aee7b8a064862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_c4e279227a49039a0c70d11147a4ca41d35b733ea8525e2529db2bbb2b99d6c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e279227a49039a0c70d11147a4ca41d35b733ea8525e2529db2bbb2b99d6c4->enter($__internal_c4e279227a49039a0c70d11147a4ca41d35b733ea8525e2529db2bbb2b99d6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1683d51f75fc0784ac00a8ff6f10d0111bf824a7c76de75552aee7b8a064862->leave($__internal_e1683d51f75fc0784ac00a8ff6f10d0111bf824a7c76de75552aee7b8a064862_prof);

        
        $__internal_c4e279227a49039a0c70d11147a4ca41d35b733ea8525e2529db2bbb2b99d6c4->leave($__internal_c4e279227a49039a0c70d11147a4ca41d35b733ea8525e2529db2bbb2b99d6c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_15330d6b7f989a1779590be3d72703406448a9a7b02624a9a7c1cfd835a35f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15330d6b7f989a1779590be3d72703406448a9a7b02624a9a7c1cfd835a35f9e->enter($__internal_15330d6b7f989a1779590be3d72703406448a9a7b02624a9a7c1cfd835a35f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11a762c488f14ffdcde1877600d2cbe05774c58a84295775cc5aed2df7f49957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a762c488f14ffdcde1877600d2cbe05774c58a84295775cc5aed2df7f49957->enter($__internal_11a762c488f14ffdcde1877600d2cbe05774c58a84295775cc5aed2df7f49957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
        <div>
            ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 10
            echo "                </a>
            ";
        } else {
            // line 12
            echo "                ";
            // line 13
            echo "            ";
        }
        // line 14
        echo "        </div>

        ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 17
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 18
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 20
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        // line 25
        echo "
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
   
";
        
        $__internal_11a762c488f14ffdcde1877600d2cbe05774c58a84295775cc5aed2df7f49957->leave($__internal_11a762c488f14ffdcde1877600d2cbe05774c58a84295775cc5aed2df7f49957_prof);

        
        $__internal_15330d6b7f989a1779590be3d72703406448a9a7b02624a9a7c1cfd835a35f9e->leave($__internal_15330d6b7f989a1779590be3d72703406448a9a7b02624a9a7c1cfd835a35f9e_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e384e8ea30ce8cde93cd89951bfc595fb1753f1fb39f3a4a74dea8b308241ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e384e8ea30ce8cde93cd89951bfc595fb1753f1fb39f3a4a74dea8b308241ea6->enter($__internal_e384e8ea30ce8cde93cd89951bfc595fb1753f1fb39f3a4a74dea8b308241ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e3719a0e7b0d373f7834b6c772dfecc7c907b2c6744a90c62ec0dd6695b0cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3719a0e7b0d373f7834b6c772dfecc7c907b2c6744a90c62ec0dd6695b0cad->enter($__internal_8e3719a0e7b0d373f7834b6c772dfecc7c907b2c6744a90c62ec0dd6695b0cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_8e3719a0e7b0d373f7834b6c772dfecc7c907b2c6744a90c62ec0dd6695b0cad->leave($__internal_8e3719a0e7b0d373f7834b6c772dfecc7c907b2c6744a90c62ec0dd6695b0cad_prof);

        
        $__internal_e384e8ea30ce8cde93cd89951bfc595fb1753f1fb39f3a4a74dea8b308241ea6->leave($__internal_e384e8ea30ce8cde93cd89951bfc595fb1753f1fb39f3a4a74dea8b308241ea6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  122 => 27,  110 => 29,  108 => 27,  104 => 25,  101 => 24,  95 => 23,  86 => 20,  81 => 19,  76 => 18,  71 => 17,  69 => 16,  65 => 14,  62 => 13,  60 => 12,  56 => 10,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
{#                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\"> #}
{#                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }} #}
                </a>
            {% else %}
                {# <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> #}
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
   
{% endblock %}", "@FOSUser/layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
