<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_ceea86c77c039cc27b2be12713c64f80db28e880bee0e5548a9d232b61e84995 extends Twig_Template
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
        $__internal_3f987af9e6737d2f31ff2939f527ec26f862b7a8500bd93a4b17059aa263041e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f987af9e6737d2f31ff2939f527ec26f862b7a8500bd93a4b17059aa263041e->enter($__internal_3f987af9e6737d2f31ff2939f527ec26f862b7a8500bd93a4b17059aa263041e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_863e915d0f5af535068ec481db7ca1ec2d41dea1d6050b67106bbc405c2dd36c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863e915d0f5af535068ec481db7ca1ec2d41dea1d6050b67106bbc405c2dd36c->enter($__internal_863e915d0f5af535068ec481db7ca1ec2d41dea1d6050b67106bbc405c2dd36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3f987af9e6737d2f31ff2939f527ec26f862b7a8500bd93a4b17059aa263041e->leave($__internal_3f987af9e6737d2f31ff2939f527ec26f862b7a8500bd93a4b17059aa263041e_prof);

        
        $__internal_863e915d0f5af535068ec481db7ca1ec2d41dea1d6050b67106bbc405c2dd36c->leave($__internal_863e915d0f5af535068ec481db7ca1ec2d41dea1d6050b67106bbc405c2dd36c_prof);

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
