<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_7929618e26bf1178c8a65103503dc14823c4a697860bec0200cabb80be0ee323 extends Twig_Template
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
        $__internal_e2fd2f0ff09f5ec400699417efb6528cb84a97f9989c0dbb0a2ca8c9ebe55088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fd2f0ff09f5ec400699417efb6528cb84a97f9989c0dbb0a2ca8c9ebe55088->enter($__internal_e2fd2f0ff09f5ec400699417efb6528cb84a97f9989c0dbb0a2ca8c9ebe55088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_2e8056ed85d718485e9cdcd93c048c1ae25e7c159c605ce9a5b7e4dddbf3c4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8056ed85d718485e9cdcd93c048c1ae25e7c159c605ce9a5b7e4dddbf3c4bf->enter($__internal_2e8056ed85d718485e9cdcd93c048c1ae25e7c159c605ce9a5b7e4dddbf3c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2fd2f0ff09f5ec400699417efb6528cb84a97f9989c0dbb0a2ca8c9ebe55088->leave($__internal_e2fd2f0ff09f5ec400699417efb6528cb84a97f9989c0dbb0a2ca8c9ebe55088_prof);

        
        $__internal_2e8056ed85d718485e9cdcd93c048c1ae25e7c159c605ce9a5b7e4dddbf3c4bf->leave($__internal_2e8056ed85d718485e9cdcd93c048c1ae25e7c159c605ce9a5b7e4dddbf3c4bf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1262c969d94cde5cdf870782603f2a36ef0d7975be406c45db222d0d0e768e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1262c969d94cde5cdf870782603f2a36ef0d7975be406c45db222d0d0e768e38->enter($__internal_1262c969d94cde5cdf870782603f2a36ef0d7975be406c45db222d0d0e768e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_26a52fd7a144e86b8b3ff7810ed247074ddb474a53685e46f0c35e550bbeed35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a52fd7a144e86b8b3ff7810ed247074ddb474a53685e46f0c35e550bbeed35->enter($__internal_26a52fd7a144e86b8b3ff7810ed247074ddb474a53685e46f0c35e550bbeed35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_26a52fd7a144e86b8b3ff7810ed247074ddb474a53685e46f0c35e550bbeed35->leave($__internal_26a52fd7a144e86b8b3ff7810ed247074ddb474a53685e46f0c35e550bbeed35_prof);

        
        $__internal_1262c969d94cde5cdf870782603f2a36ef0d7975be406c45db222d0d0e768e38->leave($__internal_1262c969d94cde5cdf870782603f2a36ef0d7975be406c45db222d0d0e768e38_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7333c66f6689197d4fd6d3c6c6f4d0e0f7502feac939e5d562d6bf249f862fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7333c66f6689197d4fd6d3c6c6f4d0e0f7502feac939e5d562d6bf249f862fe->enter($__internal_f7333c66f6689197d4fd6d3c6c6f4d0e0f7502feac939e5d562d6bf249f862fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c7c212481eefaab8762f805dfc509b83637594a5e74b913c871c11957a113c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c212481eefaab8762f805dfc509b83637594a5e74b913c871c11957a113c1f->enter($__internal_c7c212481eefaab8762f805dfc509b83637594a5e74b913c871c11957a113c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_c7c212481eefaab8762f805dfc509b83637594a5e74b913c871c11957a113c1f->leave($__internal_c7c212481eefaab8762f805dfc509b83637594a5e74b913c871c11957a113c1f_prof);

        
        $__internal_f7333c66f6689197d4fd6d3c6c6f4d0e0f7502feac939e5d562d6bf249f862fe->leave($__internal_f7333c66f6689197d4fd6d3c6c6f4d0e0f7502feac939e5d562d6bf249f862fe_prof);

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
