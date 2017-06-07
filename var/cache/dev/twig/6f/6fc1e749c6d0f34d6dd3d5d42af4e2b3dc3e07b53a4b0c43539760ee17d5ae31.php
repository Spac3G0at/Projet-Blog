<?php

/* default/index.html.twig */
class __TwigTemplate_abb03cc78cf03a5a2ef7d869e1245be1069e7dbe66fc99b3f9bcb4d2c16b84fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_37bb26d3d5540fb82033c8bea955571565aff369cea4df8c478e3bf4004f43e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37bb26d3d5540fb82033c8bea955571565aff369cea4df8c478e3bf4004f43e0->enter($__internal_37bb26d3d5540fb82033c8bea955571565aff369cea4df8c478e3bf4004f43e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_00365a6799aff0e75b0d7a0bd7c70beca3da015a194e32dd5f2823bfe066f259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00365a6799aff0e75b0d7a0bd7c70beca3da015a194e32dd5f2823bfe066f259->enter($__internal_00365a6799aff0e75b0d7a0bd7c70beca3da015a194e32dd5f2823bfe066f259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37bb26d3d5540fb82033c8bea955571565aff369cea4df8c478e3bf4004f43e0->leave($__internal_37bb26d3d5540fb82033c8bea955571565aff369cea4df8c478e3bf4004f43e0_prof);

        
        $__internal_00365a6799aff0e75b0d7a0bd7c70beca3da015a194e32dd5f2823bfe066f259->leave($__internal_00365a6799aff0e75b0d7a0bd7c70beca3da015a194e32dd5f2823bfe066f259_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c057be87addb6cc837fc8b607ec427cbd470a9d476f394dc08c70e1e8221b316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c057be87addb6cc837fc8b607ec427cbd470a9d476f394dc08c70e1e8221b316->enter($__internal_c057be87addb6cc837fc8b607ec427cbd470a9d476f394dc08c70e1e8221b316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23a460c162eaa3144dff89c93cdeddf1d40fb1b8308a031452dc873ac6a3b450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a460c162eaa3144dff89c93cdeddf1d40fb1b8308a031452dc873ac6a3b450->enter($__internal_23a460c162eaa3144dff89c93cdeddf1d40fb1b8308a031452dc873ac6a3b450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



  <!-- ---------------- -->

    <!-- ---------------- -->

  <div class=\"row MainTitle\">
    <h2 class=\"TitleTop letters\"  data-letters=\"Carnet de voyage\">Carnet de voyage</h2>
   <h4>histoire d'un globe trotter</h4>
 </div>


<hr>

<div class=\"container-fluid Presentation text-center\">
   <h3>Bienvenue sur mon blog international</h3>
   <p class=\"PresentationLine\">Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
   <p class=\"PresentationLine\">Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>
   <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>

<hr>




<!-- ancien exemple -->


";
        // line 43
        echo "
<!-- ############# -->


<div class=\"row Articles\">

  ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 50
            echo "

  <div class=\"col-xs-12 col-md-4 col-sm-6 article-card\">
    <h3 class=\"text-center\"><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
    <span class=\"glyphicon glyphicon-user\">Author</span><br>
    <span class=\"glyphicon glyphicon-time\">";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</span>

    ";
            // line 57
            if (($this->getAttribute($context["article"], "image", array()) != null)) {
                // line 58
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
                echo "\" class=\"img-responsive center-block\">
    ";
            }
            // line 60
            echo "
  
    ";
            // line 62
            echo $this->getAttribute($context["article"], "text", array());
            echo "

  </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
</div>



<div class=\"navigation text-center\">
  ";
        // line 73
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>




";
        
        $__internal_23a460c162eaa3144dff89c93cdeddf1d40fb1b8308a031452dc873ac6a3b450->leave($__internal_23a460c162eaa3144dff89c93cdeddf1d40fb1b8308a031452dc873ac6a3b450_prof);

        
        $__internal_c057be87addb6cc837fc8b607ec427cbd470a9d476f394dc08c70e1e8221b316->leave($__internal_c057be87addb6cc837fc8b607ec427cbd470a9d476f394dc08c70e1e8221b316_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 73,  137 => 67,  126 => 62,  122 => 60,  115 => 58,  113 => 57,  106 => 55,  99 => 53,  94 => 50,  90 => 49,  82 => 43,  49 => 4,  40 => 3,  11 => 1,);
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




  <!-- ---------------- -->

    <!-- ---------------- -->

  <div class=\"row MainTitle\">
    <h2 class=\"TitleTop letters\"  data-letters=\"Carnet de voyage\">Carnet de voyage</h2>
   <h4>histoire d'un globe trotter</h4>
 </div>


<hr>

<div class=\"container-fluid Presentation text-center\">
   <h3>Bienvenue sur mon blog international</h3>
   <p class=\"PresentationLine\">Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
   <p class=\"PresentationLine\">Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>
   <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>

<hr>




<!-- ancien exemple -->


{# <div class=\"col-xs-12 col-md-4 col-sm-6\">
  <h3 class=\"text-center\">Canada</h3>
  <span class=\"glyphicon glyphicon-user\">Victor</span><br>
  <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
  <img src=\"{{ asset('assets/img/2.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
  <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
  </p>
</div> #}

<!-- ############# -->


<div class=\"row Articles\">

  {% for article in pagination %}


  <div class=\"col-xs-12 col-md-4 col-sm-6 article-card\">
    <h3 class=\"text-center\"><a href=\"{{ path('post', {id: article.id}) }}\">{{ article.title }}</a></h3>
    <span class=\"glyphicon glyphicon-user\">Author</span><br>
    <span class=\"glyphicon glyphicon-time\">{{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</span>

    {% if article.image != NULL %}
    <img src=\"{{ asset('uploads/articles/') }}{{ article.image }}\" class=\"img-responsive center-block\">
    {% endif %}

  
    {{ article.text | raw }}

  </div>

{% endfor %}

</div>



<div class=\"navigation text-center\">
  {{ knp_pagination_render(pagination) }}
</div>




{% endblock %}", "default/index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/index.html.twig");
    }
}
