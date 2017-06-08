<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_03db45c21633e35f8e6e0d4901ee57332a17320a76bccf9fcf5f7e1ca8c0d400 extends Twig_Template
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
        $__internal_81d4c6120b18d2f910f514e40b3fb73b23a972b565dd43952c0faf2cde29a0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d4c6120b18d2f910f514e40b3fb73b23a972b565dd43952c0faf2cde29a0ab->enter($__internal_81d4c6120b18d2f910f514e40b3fb73b23a972b565dd43952c0faf2cde29a0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_df1ec01e24c96bc809a0c932ba4d0ff41e7d51e11d59aa5d658e8930c83bfd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1ec01e24c96bc809a0c932ba4d0ff41e7d51e11d59aa5d658e8930c83bfd4b->enter($__internal_df1ec01e24c96bc809a0c932ba4d0ff41e7d51e11d59aa5d658e8930c83bfd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_81d4c6120b18d2f910f514e40b3fb73b23a972b565dd43952c0faf2cde29a0ab->leave($__internal_81d4c6120b18d2f910f514e40b3fb73b23a972b565dd43952c0faf2cde29a0ab_prof);

        
        $__internal_df1ec01e24c96bc809a0c932ba4d0ff41e7d51e11d59aa5d658e8930c83bfd4b->leave($__internal_df1ec01e24c96bc809a0c932ba4d0ff41e7d51e11d59aa5d658e8930c83bfd4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
