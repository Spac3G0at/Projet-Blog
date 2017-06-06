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
        $__internal_c48f68a42e73b04957b8033ee0fe50b67aae812b5c7b1f75c3cbe7e49c7b1142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48f68a42e73b04957b8033ee0fe50b67aae812b5c7b1f75c3cbe7e49c7b1142->enter($__internal_c48f68a42e73b04957b8033ee0fe50b67aae812b5c7b1f75c3cbe7e49c7b1142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_7f158d1d82a4a19d21ba7571549144f510ce34fd09a366be9ca3ce11bceeebb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f158d1d82a4a19d21ba7571549144f510ce34fd09a366be9ca3ce11bceeebb0->enter($__internal_7f158d1d82a4a19d21ba7571549144f510ce34fd09a366be9ca3ce11bceeebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c48f68a42e73b04957b8033ee0fe50b67aae812b5c7b1f75c3cbe7e49c7b1142->leave($__internal_c48f68a42e73b04957b8033ee0fe50b67aae812b5c7b1f75c3cbe7e49c7b1142_prof);

        
        $__internal_7f158d1d82a4a19d21ba7571549144f510ce34fd09a366be9ca3ce11bceeebb0->leave($__internal_7f158d1d82a4a19d21ba7571549144f510ce34fd09a366be9ca3ce11bceeebb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8602c075f8d65c08bcdc8c2e17d0578491a9135efb0a4b0c369c9357807069dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8602c075f8d65c08bcdc8c2e17d0578491a9135efb0a4b0c369c9357807069dd->enter($__internal_8602c075f8d65c08bcdc8c2e17d0578491a9135efb0a4b0c369c9357807069dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56f229779cf52b2dcb0e3d3e3a22bc32102f3668c71c0fc7235f4b15f274dbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f229779cf52b2dcb0e3d3e3a22bc32102f3668c71c0fc7235f4b15f274dbf8->enter($__internal_56f229779cf52b2dcb0e3d3e3a22bc32102f3668c71c0fc7235f4b15f274dbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_56f229779cf52b2dcb0e3d3e3a22bc32102f3668c71c0fc7235f4b15f274dbf8->leave($__internal_56f229779cf52b2dcb0e3d3e3a22bc32102f3668c71c0fc7235f4b15f274dbf8_prof);

        
        $__internal_8602c075f8d65c08bcdc8c2e17d0578491a9135efb0a4b0c369c9357807069dd->leave($__internal_8602c075f8d65c08bcdc8c2e17d0578491a9135efb0a4b0c369c9357807069dd_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2773e73225d1ed0cae4e6c7157d79527f9a287f743893c94406a3c54c38efff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2773e73225d1ed0cae4e6c7157d79527f9a287f743893c94406a3c54c38efff7->enter($__internal_2773e73225d1ed0cae4e6c7157d79527f9a287f743893c94406a3c54c38efff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4f162b604df32dc630b8c4fb0b1f84f4e308ebaf14e2a27cef3966d4cf136eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f162b604df32dc630b8c4fb0b1f84f4e308ebaf14e2a27cef3966d4cf136eba->enter($__internal_4f162b604df32dc630b8c4fb0b1f84f4e308ebaf14e2a27cef3966d4cf136eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_4f162b604df32dc630b8c4fb0b1f84f4e308ebaf14e2a27cef3966d4cf136eba->leave($__internal_4f162b604df32dc630b8c4fb0b1f84f4e308ebaf14e2a27cef3966d4cf136eba_prof);

        
        $__internal_2773e73225d1ed0cae4e6c7157d79527f9a287f743893c94406a3c54c38efff7->leave($__internal_2773e73225d1ed0cae4e6c7157d79527f9a287f743893c94406a3c54c38efff7_prof);

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
   
{% endblock %}", "@FOSUser/layout.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}
