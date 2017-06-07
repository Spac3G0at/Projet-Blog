<?php

/* TwigBundle:Exceptions:error404.html.twig */
class __TwigTemplate_8a0b33291b8f9e9e731fab45589f04adf8d02f4ce20742f77e27e1a198b8d520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exceptions:error404.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42befac07016b85c1308f03106547a9df3a64272538833f3bfedae9d050f25a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42befac07016b85c1308f03106547a9df3a64272538833f3bfedae9d050f25a8->enter($__internal_42befac07016b85c1308f03106547a9df3a64272538833f3bfedae9d050f25a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $__internal_e92071b4323121938910e5c04dce7d091ba518f48431d47a44bec081c9f5a6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92071b4323121938910e5c04dce7d091ba518f48431d47a44bec081c9f5a6c0->enter($__internal_e92071b4323121938910e5c04dce7d091ba518f48431d47a44bec081c9f5a6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42befac07016b85c1308f03106547a9df3a64272538833f3bfedae9d050f25a8->leave($__internal_42befac07016b85c1308f03106547a9df3a64272538833f3bfedae9d050f25a8_prof);

        
        $__internal_e92071b4323121938910e5c04dce7d091ba518f48431d47a44bec081c9f5a6c0->leave($__internal_e92071b4323121938910e5c04dce7d091ba518f48431d47a44bec081c9f5a6c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd67c877b3a479ee7a87fe413af7e1589649306d8873688d2f61f9d0a99b1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd67c877b3a479ee7a87fe413af7e1589649306d8873688d2f61f9d0a99b1aa->enter($__internal_0bd67c877b3a479ee7a87fe413af7e1589649306d8873688d2f61f9d0a99b1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cd2c0d22d320a39082d90f84f5299ffb934229d136e28dc748d58e56e40c163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd2c0d22d320a39082d90f84f5299ffb934229d136e28dc748d58e56e40c163->enter($__internal_2cd2c0d22d320a39082d90f84f5299ffb934229d136e28dc748d58e56e40c163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Page not found</h1>

    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>

";
        
        $__internal_2cd2c0d22d320a39082d90f84f5299ffb934229d136e28dc748d58e56e40c163->leave($__internal_2cd2c0d22d320a39082d90f84f5299ffb934229d136e28dc748d58e56e40c163_prof);

        
        $__internal_0bd67c877b3a479ee7a87fe413af7e1589649306d8873688d2f61f9d0a99b1aa->leave($__internal_0bd67c877b3a479ee7a87fe413af7e1589649306d8873688d2f61f9d0a99b1aa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exceptions:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<h1>Page not found</h1>

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {# ... #}
    {% endif %}

    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"{{ path('homepage') }}\">return to the homepage</a>.
    </p>

{% endblock %}", "TwigBundle:Exceptions:error404.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/TwigBundle/views/Exceptions/error404.html.twig");
    }
}
