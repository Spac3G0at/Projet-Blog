<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2852c6628dbe3f8e6e7a6305e151d5403f75d505932101db7243eba936d9ff54 extends Twig_Template
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
        $__internal_47d710b5939c6d357b8792d97e33d997ce2f73d8615e776ced76102a9166852d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d710b5939c6d357b8792d97e33d997ce2f73d8615e776ced76102a9166852d->enter($__internal_47d710b5939c6d357b8792d97e33d997ce2f73d8615e776ced76102a9166852d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_498b60149f3576d0ec3740cd2fb855f8e01b38c2362211b5f082a8a2af6eb6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498b60149f3576d0ec3740cd2fb855f8e01b38c2362211b5f082a8a2af6eb6ad->enter($__internal_498b60149f3576d0ec3740cd2fb855f8e01b38c2362211b5f082a8a2af6eb6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_47d710b5939c6d357b8792d97e33d997ce2f73d8615e776ced76102a9166852d->leave($__internal_47d710b5939c6d357b8792d97e33d997ce2f73d8615e776ced76102a9166852d_prof);

        
        $__internal_498b60149f3576d0ec3740cd2fb855f8e01b38c2362211b5f082a8a2af6eb6ad->leave($__internal_498b60149f3576d0ec3740cd2fb855f8e01b38c2362211b5f082a8a2af6eb6ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
