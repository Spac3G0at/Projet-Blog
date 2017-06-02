<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a21144f54ff2e0eba1019e664f20227ebbb7163243dd73862843e7c5693cd5f8 extends Twig_Template
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
        $__internal_a403be10b9267a20d88908e2b4dd4d1534e58778590e4b44ed3522f645ac6ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a403be10b9267a20d88908e2b4dd4d1534e58778590e4b44ed3522f645ac6ab1->enter($__internal_a403be10b9267a20d88908e2b4dd4d1534e58778590e4b44ed3522f645ac6ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_124bdc8d7580dfc91c995aa4adfdb5d9725a628ec25791719aa7d51979caf997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124bdc8d7580dfc91c995aa4adfdb5d9725a628ec25791719aa7d51979caf997->enter($__internal_124bdc8d7580dfc91c995aa4adfdb5d9725a628ec25791719aa7d51979caf997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_a403be10b9267a20d88908e2b4dd4d1534e58778590e4b44ed3522f645ac6ab1->leave($__internal_a403be10b9267a20d88908e2b4dd4d1534e58778590e4b44ed3522f645ac6ab1_prof);

        
        $__internal_124bdc8d7580dfc91c995aa4adfdb5d9725a628ec25791719aa7d51979caf997->leave($__internal_124bdc8d7580dfc91c995aa4adfdb5d9725a628ec25791719aa7d51979caf997_prof);

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
