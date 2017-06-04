<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_18b73f9dfd44048bce7c3e72058adb90487376974559fa8591eba07e19361c70 extends Twig_Template
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
        $__internal_ecef97410f3d10d4aac3958b857b4cc9056a733cd1c6fd77762895159da4d291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecef97410f3d10d4aac3958b857b4cc9056a733cd1c6fd77762895159da4d291->enter($__internal_ecef97410f3d10d4aac3958b857b4cc9056a733cd1c6fd77762895159da4d291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_53a642756da67a85582b0b84e485b0f4a51044a51eeeb5c9830268e40c2cc7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a642756da67a85582b0b84e485b0f4a51044a51eeeb5c9830268e40c2cc7b6->enter($__internal_53a642756da67a85582b0b84e485b0f4a51044a51eeeb5c9830268e40c2cc7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecef97410f3d10d4aac3958b857b4cc9056a733cd1c6fd77762895159da4d291->leave($__internal_ecef97410f3d10d4aac3958b857b4cc9056a733cd1c6fd77762895159da4d291_prof);

        
        $__internal_53a642756da67a85582b0b84e485b0f4a51044a51eeeb5c9830268e40c2cc7b6->leave($__internal_53a642756da67a85582b0b84e485b0f4a51044a51eeeb5c9830268e40c2cc7b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce70c8ed02cc60d9f61cde44a002c60bebc6a38fba593359e67af268cf7aabfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce70c8ed02cc60d9f61cde44a002c60bebc6a38fba593359e67af268cf7aabfb->enter($__internal_ce70c8ed02cc60d9f61cde44a002c60bebc6a38fba593359e67af268cf7aabfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70fe34564025aba32566063d3fe187c36e26bd12c4fb6cd8954c5ceee9b3bbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fe34564025aba32566063d3fe187c36e26bd12c4fb6cd8954c5ceee9b3bbdc->enter($__internal_70fe34564025aba32566063d3fe187c36e26bd12c4fb6cd8954c5ceee9b3bbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70fe34564025aba32566063d3fe187c36e26bd12c4fb6cd8954c5ceee9b3bbdc->leave($__internal_70fe34564025aba32566063d3fe187c36e26bd12c4fb6cd8954c5ceee9b3bbdc_prof);

        
        $__internal_ce70c8ed02cc60d9f61cde44a002c60bebc6a38fba593359e67af268cf7aabfb->leave($__internal_ce70c8ed02cc60d9f61cde44a002c60bebc6a38fba593359e67af268cf7aabfb_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96f53db11d2f6c171b3f5e86ff1fd01c682d39a8a9b23b41845a4399622d2175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f53db11d2f6c171b3f5e86ff1fd01c682d39a8a9b23b41845a4399622d2175->enter($__internal_96f53db11d2f6c171b3f5e86ff1fd01c682d39a8a9b23b41845a4399622d2175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bcd9d006ba578d50b175b66734b3b501e8e2ea89bd4662190062c6e4ac20844d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd9d006ba578d50b175b66734b3b501e8e2ea89bd4662190062c6e4ac20844d->enter($__internal_bcd9d006ba578d50b175b66734b3b501e8e2ea89bd4662190062c6e4ac20844d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_bcd9d006ba578d50b175b66734b3b501e8e2ea89bd4662190062c6e4ac20844d->leave($__internal_bcd9d006ba578d50b175b66734b3b501e8e2ea89bd4662190062c6e4ac20844d_prof);

        
        $__internal_96f53db11d2f6c171b3f5e86ff1fd01c682d39a8a9b23b41845a4399622d2175->leave($__internal_96f53db11d2f6c171b3f5e86ff1fd01c682d39a8a9b23b41845a4399622d2175_prof);

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
