<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_10515bd68c674a7fead4c94fd95f930257f6d6611f589d83f2b12409f26f8128 extends Twig_Template
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
        $__internal_fb4dd2e8fd69894c418aaf1562e9adbffa19937b3e8bbdd84ff5376cd8096ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb4dd2e8fd69894c418aaf1562e9adbffa19937b3e8bbdd84ff5376cd8096ac8->enter($__internal_fb4dd2e8fd69894c418aaf1562e9adbffa19937b3e8bbdd84ff5376cd8096ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_ccfb19f0870ff3e9ce958be4b445ff6d8d4c2d62be1e407a41fb37b576d19219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfb19f0870ff3e9ce958be4b445ff6d8d4c2d62be1e407a41fb37b576d19219->enter($__internal_ccfb19f0870ff3e9ce958be4b445ff6d8d4c2d62be1e407a41fb37b576d19219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_fb4dd2e8fd69894c418aaf1562e9adbffa19937b3e8bbdd84ff5376cd8096ac8->leave($__internal_fb4dd2e8fd69894c418aaf1562e9adbffa19937b3e8bbdd84ff5376cd8096ac8_prof);

        
        $__internal_ccfb19f0870ff3e9ce958be4b445ff6d8d4c2d62be1e407a41fb37b576d19219->leave($__internal_ccfb19f0870ff3e9ce958be4b445ff6d8d4c2d62be1e407a41fb37b576d19219_prof);

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
