<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2e38dcacc3e7428beef242add9e2bffc6f47ef7af300075aa0e79299e98f5831 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8254aaa36cfe1d10115dff083045f9f7c418ae08d2e627d9d2e1b545913f837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8254aaa36cfe1d10115dff083045f9f7c418ae08d2e627d9d2e1b545913f837->enter($__internal_a8254aaa36cfe1d10115dff083045f9f7c418ae08d2e627d9d2e1b545913f837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_e33cb0f9a807a01222debfe907e22d5cb7d4c5a1dfc945335fed82e35d085db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33cb0f9a807a01222debfe907e22d5cb7d4c5a1dfc945335fed82e35d085db7->enter($__internal_e33cb0f9a807a01222debfe907e22d5cb7d4c5a1dfc945335fed82e35d085db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a8254aaa36cfe1d10115dff083045f9f7c418ae08d2e627d9d2e1b545913f837->leave($__internal_a8254aaa36cfe1d10115dff083045f9f7c418ae08d2e627d9d2e1b545913f837_prof);

        
        $__internal_e33cb0f9a807a01222debfe907e22d5cb7d4c5a1dfc945335fed82e35d085db7->leave($__internal_e33cb0f9a807a01222debfe907e22d5cb7d4c5a1dfc945335fed82e35d085db7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
