<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_95157a3edc268746f563143d8eff66d566cfa7b9303163479c8d95ce0845bba2 extends Twig_Template
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
        $__internal_8a2575fae993d4617c052c865a31eba52850cd16f11b4d6ab7f32e4f8043f49e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2575fae993d4617c052c865a31eba52850cd16f11b4d6ab7f32e4f8043f49e->enter($__internal_8a2575fae993d4617c052c865a31eba52850cd16f11b4d6ab7f32e4f8043f49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_05b59e9c5ec9ab8b6b5f4c5ee948c29071b5f4441c9da2157ec18e1a424c6ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b59e9c5ec9ab8b6b5f4c5ee948c29071b5f4441c9da2157ec18e1a424c6ecb->enter($__internal_05b59e9c5ec9ab8b6b5f4c5ee948c29071b5f4441c9da2157ec18e1a424c6ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8a2575fae993d4617c052c865a31eba52850cd16f11b4d6ab7f32e4f8043f49e->leave($__internal_8a2575fae993d4617c052c865a31eba52850cd16f11b4d6ab7f32e4f8043f49e_prof);

        
        $__internal_05b59e9c5ec9ab8b6b5f4c5ee948c29071b5f4441c9da2157ec18e1a424c6ecb->leave($__internal_05b59e9c5ec9ab8b6b5f4c5ee948c29071b5f4441c9da2157ec18e1a424c6ecb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
