<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_777db5995659f598323e0280d81e9b1de8ae233384e888a25f6c87d0c42ddde0 extends Twig_Template
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
        $__internal_770a03576316456d11d31a3581299bc1af1977f8ff97fc60cac245aa6b4a655a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770a03576316456d11d31a3581299bc1af1977f8ff97fc60cac245aa6b4a655a->enter($__internal_770a03576316456d11d31a3581299bc1af1977f8ff97fc60cac245aa6b4a655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9efcd5b901dce01450e4cdb82e290c37c625a161ce2114b76cb907c4d6decd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efcd5b901dce01450e4cdb82e290c37c625a161ce2114b76cb907c4d6decd8a->enter($__internal_9efcd5b901dce01450e4cdb82e290c37c625a161ce2114b76cb907c4d6decd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_770a03576316456d11d31a3581299bc1af1977f8ff97fc60cac245aa6b4a655a->leave($__internal_770a03576316456d11d31a3581299bc1af1977f8ff97fc60cac245aa6b4a655a_prof);

        
        $__internal_9efcd5b901dce01450e4cdb82e290c37c625a161ce2114b76cb907c4d6decd8a->leave($__internal_9efcd5b901dce01450e4cdb82e290c37c625a161ce2114b76cb907c4d6decd8a_prof);

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
