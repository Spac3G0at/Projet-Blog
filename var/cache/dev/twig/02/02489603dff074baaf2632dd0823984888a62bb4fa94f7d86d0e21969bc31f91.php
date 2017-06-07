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
        $__internal_2946035d06599b81331483e8bce54f8e853398de481eb112e04840e222be5a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2946035d06599b81331483e8bce54f8e853398de481eb112e04840e222be5a29->enter($__internal_2946035d06599b81331483e8bce54f8e853398de481eb112e04840e222be5a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $__internal_b9456afd82d6ecbdec7e520bb01b7920c06ee4805343c77859b4c4337aceeae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9456afd82d6ecbdec7e520bb01b7920c06ee4805343c77859b4c4337aceeae4->enter($__internal_b9456afd82d6ecbdec7e520bb01b7920c06ee4805343c77859b4c4337aceeae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exceptions:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2946035d06599b81331483e8bce54f8e853398de481eb112e04840e222be5a29->leave($__internal_2946035d06599b81331483e8bce54f8e853398de481eb112e04840e222be5a29_prof);

        
        $__internal_b9456afd82d6ecbdec7e520bb01b7920c06ee4805343c77859b4c4337aceeae4->leave($__internal_b9456afd82d6ecbdec7e520bb01b7920c06ee4805343c77859b4c4337aceeae4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d0234bfd17956ece307d20c88c595daa1397248a9089abeb5b535652c6ad20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0234bfd17956ece307d20c88c595daa1397248a9089abeb5b535652c6ad20c->enter($__internal_3d0234bfd17956ece307d20c88c595daa1397248a9089abeb5b535652c6ad20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dafd97240824086f7982ad1c622bd7a08ee9a71553d19d9dc77b49a98325208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafd97240824086f7982ad1c622bd7a08ee9a71553d19d9dc77b49a98325208c->enter($__internal_dafd97240824086f7982ad1c622bd7a08ee9a71553d19d9dc77b49a98325208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dafd97240824086f7982ad1c622bd7a08ee9a71553d19d9dc77b49a98325208c->leave($__internal_dafd97240824086f7982ad1c622bd7a08ee9a71553d19d9dc77b49a98325208c_prof);

        
        $__internal_3d0234bfd17956ece307d20c88c595daa1397248a9089abeb5b535652c6ad20c->leave($__internal_3d0234bfd17956ece307d20c88c595daa1397248a9089abeb5b535652c6ad20c_prof);

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
