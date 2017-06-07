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
        $__internal_ea9e29e463509af5a09e97feaebcd6d873f35ed4c30cd78c76d1f03a44bd9316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9e29e463509af5a09e97feaebcd6d873f35ed4c30cd78c76d1f03a44bd9316->enter($__internal_ea9e29e463509af5a09e97feaebcd6d873f35ed4c30cd78c76d1f03a44bd9316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0126141a2d8251a264733144e9517dca2fef1ad63f033ce6ef3896d271aa1fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0126141a2d8251a264733144e9517dca2fef1ad63f033ce6ef3896d271aa1fb9->enter($__internal_0126141a2d8251a264733144e9517dca2fef1ad63f033ce6ef3896d271aa1fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ea9e29e463509af5a09e97feaebcd6d873f35ed4c30cd78c76d1f03a44bd9316->leave($__internal_ea9e29e463509af5a09e97feaebcd6d873f35ed4c30cd78c76d1f03a44bd9316_prof);

        
        $__internal_0126141a2d8251a264733144e9517dca2fef1ad63f033ce6ef3896d271aa1fb9->leave($__internal_0126141a2d8251a264733144e9517dca2fef1ad63f033ce6ef3896d271aa1fb9_prof);

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
