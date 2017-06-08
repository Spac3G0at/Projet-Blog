<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_72d7b8cbd18a3a14ac88e46054cff7e0545e9b2a06de6dfa7e448fe089805ba2 extends Twig_Template
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
        $__internal_8cab840b12ce64bb1d85e46c12962dfffcd0aa4ee7154af2bc8d6c9873237da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cab840b12ce64bb1d85e46c12962dfffcd0aa4ee7154af2bc8d6c9873237da5->enter($__internal_8cab840b12ce64bb1d85e46c12962dfffcd0aa4ee7154af2bc8d6c9873237da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2ac47a5461d979d54aa147ef3242031e9370518b08177de00bb88f0ffbd2f01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac47a5461d979d54aa147ef3242031e9370518b08177de00bb88f0ffbd2f01d->enter($__internal_2ac47a5461d979d54aa147ef3242031e9370518b08177de00bb88f0ffbd2f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8cab840b12ce64bb1d85e46c12962dfffcd0aa4ee7154af2bc8d6c9873237da5->leave($__internal_8cab840b12ce64bb1d85e46c12962dfffcd0aa4ee7154af2bc8d6c9873237da5_prof);

        
        $__internal_2ac47a5461d979d54aa147ef3242031e9370518b08177de00bb88f0ffbd2f01d->leave($__internal_2ac47a5461d979d54aa147ef3242031e9370518b08177de00bb88f0ffbd2f01d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
