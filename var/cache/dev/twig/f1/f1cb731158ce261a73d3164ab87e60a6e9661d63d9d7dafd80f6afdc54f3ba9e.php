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
        $__internal_0f864359ebe6aeddd9a3323f7c9562ad4460de2049dea24c3c213f03b9c4f922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f864359ebe6aeddd9a3323f7c9562ad4460de2049dea24c3c213f03b9c4f922->enter($__internal_0f864359ebe6aeddd9a3323f7c9562ad4460de2049dea24c3c213f03b9c4f922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_82a961e0f2918ce32c2bafa47ea0ce3d8faa379c2af77810a709ad08b97dcb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a961e0f2918ce32c2bafa47ea0ce3d8faa379c2af77810a709ad08b97dcb58->enter($__internal_82a961e0f2918ce32c2bafa47ea0ce3d8faa379c2af77810a709ad08b97dcb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_0f864359ebe6aeddd9a3323f7c9562ad4460de2049dea24c3c213f03b9c4f922->leave($__internal_0f864359ebe6aeddd9a3323f7c9562ad4460de2049dea24c3c213f03b9c4f922_prof);

        
        $__internal_82a961e0f2918ce32c2bafa47ea0ce3d8faa379c2af77810a709ad08b97dcb58->leave($__internal_82a961e0f2918ce32c2bafa47ea0ce3d8faa379c2af77810a709ad08b97dcb58_prof);

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