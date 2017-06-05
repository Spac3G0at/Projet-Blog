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
        $__internal_3c550af0abe449318a2f2378b733cd0ce6a4ef3f628c7facf4f58b5703c09053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c550af0abe449318a2f2378b733cd0ce6a4ef3f628c7facf4f58b5703c09053->enter($__internal_3c550af0abe449318a2f2378b733cd0ce6a4ef3f628c7facf4f58b5703c09053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_175de99f8c012aaaa8e201588def09f4310d4911ec829ab641f7d6f93ef991b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_175de99f8c012aaaa8e201588def09f4310d4911ec829ab641f7d6f93ef991b8->enter($__internal_175de99f8c012aaaa8e201588def09f4310d4911ec829ab641f7d6f93ef991b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3c550af0abe449318a2f2378b733cd0ce6a4ef3f628c7facf4f58b5703c09053->leave($__internal_3c550af0abe449318a2f2378b733cd0ce6a4ef3f628c7facf4f58b5703c09053_prof);

        
        $__internal_175de99f8c012aaaa8e201588def09f4310d4911ec829ab641f7d6f93ef991b8->leave($__internal_175de99f8c012aaaa8e201588def09f4310d4911ec829ab641f7d6f93ef991b8_prof);

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
