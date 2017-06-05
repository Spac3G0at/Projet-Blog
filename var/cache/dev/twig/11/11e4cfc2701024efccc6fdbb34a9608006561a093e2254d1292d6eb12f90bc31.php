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
        $__internal_4b7dc65d3b96b16703907e2f42a656b0012a07e060c7f9813fcf6cdc93150929 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7dc65d3b96b16703907e2f42a656b0012a07e060c7f9813fcf6cdc93150929->enter($__internal_4b7dc65d3b96b16703907e2f42a656b0012a07e060c7f9813fcf6cdc93150929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_15966554387b360668c43daa6db487e7a0b374e8a5c168735f108103c94b8012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15966554387b360668c43daa6db487e7a0b374e8a5c168735f108103c94b8012->enter($__internal_15966554387b360668c43daa6db487e7a0b374e8a5c168735f108103c94b8012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7dc65d3b96b16703907e2f42a656b0012a07e060c7f9813fcf6cdc93150929->leave($__internal_4b7dc65d3b96b16703907e2f42a656b0012a07e060c7f9813fcf6cdc93150929_prof);

        
        $__internal_15966554387b360668c43daa6db487e7a0b374e8a5c168735f108103c94b8012->leave($__internal_15966554387b360668c43daa6db487e7a0b374e8a5c168735f108103c94b8012_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ab79a75d1e77fa77e4feb705aba0ffeac5eedb64064052eb619f718e324e4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab79a75d1e77fa77e4feb705aba0ffeac5eedb64064052eb619f718e324e4d8->enter($__internal_8ab79a75d1e77fa77e4feb705aba0ffeac5eedb64064052eb619f718e324e4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c12f5db7686036bed7ca78ee0b62211ce1f092a18735adb832cf981f2ad0d7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12f5db7686036bed7ca78ee0b62211ce1f092a18735adb832cf981f2ad0d7f3->enter($__internal_c12f5db7686036bed7ca78ee0b62211ce1f092a18735adb832cf981f2ad0d7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c12f5db7686036bed7ca78ee0b62211ce1f092a18735adb832cf981f2ad0d7f3->leave($__internal_c12f5db7686036bed7ca78ee0b62211ce1f092a18735adb832cf981f2ad0d7f3_prof);

        
        $__internal_8ab79a75d1e77fa77e4feb705aba0ffeac5eedb64064052eb619f718e324e4d8->leave($__internal_8ab79a75d1e77fa77e4feb705aba0ffeac5eedb64064052eb619f718e324e4d8_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_210df1e72680b26d8df10d97b28dc9cfb7730b0d42d1546ac9c24262c095b91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210df1e72680b26d8df10d97b28dc9cfb7730b0d42d1546ac9c24262c095b91e->enter($__internal_210df1e72680b26d8df10d97b28dc9cfb7730b0d42d1546ac9c24262c095b91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_489908e1130848355d760707edf97dc25eefd06b03e444148ebeb358c85b6485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489908e1130848355d760707edf97dc25eefd06b03e444148ebeb358c85b6485->enter($__internal_489908e1130848355d760707edf97dc25eefd06b03e444148ebeb358c85b6485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "            ";
        
        $__internal_489908e1130848355d760707edf97dc25eefd06b03e444148ebeb358c85b6485->leave($__internal_489908e1130848355d760707edf97dc25eefd06b03e444148ebeb358c85b6485_prof);

        
        $__internal_210df1e72680b26d8df10d97b28dc9cfb7730b0d42d1546ac9c24262c095b91e->leave($__internal_210df1e72680b26d8df10d97b28dc9cfb7730b0d42d1546ac9c24262c095b91e_prof);

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
