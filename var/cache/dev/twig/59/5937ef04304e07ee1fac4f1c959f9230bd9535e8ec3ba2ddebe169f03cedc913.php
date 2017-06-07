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
        $__internal_c6bbd1c1fdc5f559af849cd5cb8eb7284cd5764458143bed065bf2ab5b9a1fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bbd1c1fdc5f559af849cd5cb8eb7284cd5764458143bed065bf2ab5b9a1fc4->enter($__internal_c6bbd1c1fdc5f559af849cd5cb8eb7284cd5764458143bed065bf2ab5b9a1fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_177b3c3b5f8b256ca23816040a1e3dfaba4d8b929758f496deb4bafbd4a93922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177b3c3b5f8b256ca23816040a1e3dfaba4d8b929758f496deb4bafbd4a93922->enter($__internal_177b3c3b5f8b256ca23816040a1e3dfaba4d8b929758f496deb4bafbd4a93922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6bbd1c1fdc5f559af849cd5cb8eb7284cd5764458143bed065bf2ab5b9a1fc4->leave($__internal_c6bbd1c1fdc5f559af849cd5cb8eb7284cd5764458143bed065bf2ab5b9a1fc4_prof);

        
        $__internal_177b3c3b5f8b256ca23816040a1e3dfaba4d8b929758f496deb4bafbd4a93922->leave($__internal_177b3c3b5f8b256ca23816040a1e3dfaba4d8b929758f496deb4bafbd4a93922_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ee072dd926ace04772fe21809db5fa8317a5990efca9978481e5ad85e6c601b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee072dd926ace04772fe21809db5fa8317a5990efca9978481e5ad85e6c601b->enter($__internal_8ee072dd926ace04772fe21809db5fa8317a5990efca9978481e5ad85e6c601b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac4a8c745969d5ddb6127eb173855474958ecec3744b205f7baca87f4b9991b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4a8c745969d5ddb6127eb173855474958ecec3744b205f7baca87f4b9991b1->enter($__internal_ac4a8c745969d5ddb6127eb173855474958ecec3744b205f7baca87f4b9991b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ac4a8c745969d5ddb6127eb173855474958ecec3744b205f7baca87f4b9991b1->leave($__internal_ac4a8c745969d5ddb6127eb173855474958ecec3744b205f7baca87f4b9991b1_prof);

        
        $__internal_8ee072dd926ace04772fe21809db5fa8317a5990efca9978481e5ad85e6c601b->leave($__internal_8ee072dd926ace04772fe21809db5fa8317a5990efca9978481e5ad85e6c601b_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e0c29c7d820784ba0bda288f3875d352ee57413692dc081768f4b266dd58219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0c29c7d820784ba0bda288f3875d352ee57413692dc081768f4b266dd58219->enter($__internal_5e0c29c7d820784ba0bda288f3875d352ee57413692dc081768f4b266dd58219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed0bdacc67b4317cfc95183519594d4f2010f5f7c581bddd11d7e424dad013cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0bdacc67b4317cfc95183519594d4f2010f5f7c581bddd11d7e424dad013cf->enter($__internal_ed0bdacc67b4317cfc95183519594d4f2010f5f7c581bddd11d7e424dad013cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_ed0bdacc67b4317cfc95183519594d4f2010f5f7c581bddd11d7e424dad013cf->leave($__internal_ed0bdacc67b4317cfc95183519594d4f2010f5f7c581bddd11d7e424dad013cf_prof);

        
        $__internal_5e0c29c7d820784ba0bda288f3875d352ee57413692dc081768f4b266dd58219->leave($__internal_5e0c29c7d820784ba0bda288f3875d352ee57413692dc081768f4b266dd58219_prof);

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
