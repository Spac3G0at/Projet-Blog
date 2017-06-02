<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_19c9faf35775e53e3917208f504cd79aae541e5c0f712eda1e7387d02798ea05 extends Twig_Template
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
        $__internal_6e91128ebca4703ab55f31abf50c764e500dc0d97c02fbdd80add3ac7f2678dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e91128ebca4703ab55f31abf50c764e500dc0d97c02fbdd80add3ac7f2678dd->enter($__internal_6e91128ebca4703ab55f31abf50c764e500dc0d97c02fbdd80add3ac7f2678dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_bb5b68a24929f265916d58232be8cee057bea1b6e632c224291104fc4735c187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5b68a24929f265916d58232be8cee057bea1b6e632c224291104fc4735c187->enter($__internal_bb5b68a24929f265916d58232be8cee057bea1b6e632c224291104fc4735c187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6e91128ebca4703ab55f31abf50c764e500dc0d97c02fbdd80add3ac7f2678dd->leave($__internal_6e91128ebca4703ab55f31abf50c764e500dc0d97c02fbdd80add3ac7f2678dd_prof);

        
        $__internal_bb5b68a24929f265916d58232be8cee057bea1b6e632c224291104fc4735c187->leave($__internal_bb5b68a24929f265916d58232be8cee057bea1b6e632c224291104fc4735c187_prof);

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
