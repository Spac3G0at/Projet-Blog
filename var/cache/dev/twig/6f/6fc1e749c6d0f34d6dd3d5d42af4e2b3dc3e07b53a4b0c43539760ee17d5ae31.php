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
        $__internal_faafb489bd0f0e4624ff2dfa7b760fe51ac5c1dfdf19a79cdb04db158733ef6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faafb489bd0f0e4624ff2dfa7b760fe51ac5c1dfdf19a79cdb04db158733ef6f->enter($__internal_faafb489bd0f0e4624ff2dfa7b760fe51ac5c1dfdf19a79cdb04db158733ef6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_4df1df0a87bbb7b28f2c2081e44e16f24781d0db7f6212ce2cee031dd8fc3290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df1df0a87bbb7b28f2c2081e44e16f24781d0db7f6212ce2cee031dd8fc3290->enter($__internal_4df1df0a87bbb7b28f2c2081e44e16f24781d0db7f6212ce2cee031dd8fc3290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faafb489bd0f0e4624ff2dfa7b760fe51ac5c1dfdf19a79cdb04db158733ef6f->leave($__internal_faafb489bd0f0e4624ff2dfa7b760fe51ac5c1dfdf19a79cdb04db158733ef6f_prof);

        
        $__internal_4df1df0a87bbb7b28f2c2081e44e16f24781d0db7f6212ce2cee031dd8fc3290->leave($__internal_4df1df0a87bbb7b28f2c2081e44e16f24781d0db7f6212ce2cee031dd8fc3290_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_772dd97a184f48f25e07dc3527389766fb5f3e677cd0e3758ae4ca80c69bf160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772dd97a184f48f25e07dc3527389766fb5f3e677cd0e3758ae4ca80c69bf160->enter($__internal_772dd97a184f48f25e07dc3527389766fb5f3e677cd0e3758ae4ca80c69bf160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94d302c2f028030c1f5fbdc86eb76eb3ee853fec5006c4bbcaa4fed6af881217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d302c2f028030c1f5fbdc86eb76eb3ee853fec5006c4bbcaa4fed6af881217->enter($__internal_94d302c2f028030c1f5fbdc86eb76eb3ee853fec5006c4bbcaa4fed6af881217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



  <!-- ---------------- -->

  <div class=\"row MainTitle\">
   <h2>Mon Carnet de Voyage</h2>
   <h4>histoire d'un globe trotter</h4>
 </div>

 <hr>

 <div class=\"row text-center\">
  <p>Bienvenue sur mon blog à l’international!</p>

  <p>Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
  <p>Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>


  <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>




<!-- ancien exemple -->


";
        // line 41
        echo "
<!-- ############# -->


<div class=\"row Articles\">

  ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 48
            echo "

  <div class=\"col-xs-12 col-md-4 col-sm-6 article-card\">
    <h3 class=\"text-center\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
    <span class=\"glyphicon glyphicon-user\">Author</span><br>
    <span class=\"glyphicon glyphicon-time\">";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</span>

    ";
            // line 55
            if (($this->getAttribute($context["article"], "image", array()) != null)) {
                // line 56
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
                echo "\" class=\"img-responsive center-block\">
    ";
            }
            // line 58
            echo "
  
    ";
            // line 60
            echo $this->getAttribute($context["article"], "text", array());
            echo "

  </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
</div>



<div class=\"navigation text-center\">
  ";
        // line 71
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>




";
        
        $__internal_94d302c2f028030c1f5fbdc86eb76eb3ee853fec5006c4bbcaa4fed6af881217->leave($__internal_94d302c2f028030c1f5fbdc86eb76eb3ee853fec5006c4bbcaa4fed6af881217_prof);

        
        $__internal_772dd97a184f48f25e07dc3527389766fb5f3e677cd0e3758ae4ca80c69bf160->leave($__internal_772dd97a184f48f25e07dc3527389766fb5f3e677cd0e3758ae4ca80c69bf160_prof);

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
        return array (  143 => 71,  135 => 65,  124 => 60,  120 => 58,  113 => 56,  111 => 55,  104 => 53,  97 => 51,  92 => 48,  88 => 47,  80 => 41,  49 => 4,  40 => 3,  11 => 1,);
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

  <div class=\"row MainTitle\">
   <h2>Mon Carnet de Voyage</h2>
   <h4>histoire d'un globe trotter</h4>
 </div>

 <hr>

 <div class=\"row text-center\">
  <p>Bienvenue sur mon blog à l’international!</p>

  <p>Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
  <p>Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>


  <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>




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
