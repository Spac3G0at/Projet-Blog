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
        $__internal_35d5a35c54024c0291b5c3b3c5894c0584996dc5c44ae14a2d25a899bde14257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d5a35c54024c0291b5c3b3c5894c0584996dc5c44ae14a2d25a899bde14257->enter($__internal_35d5a35c54024c0291b5c3b3c5894c0584996dc5c44ae14a2d25a899bde14257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e4dd5fe10062786b6bf8304b33978948c1a6ef8a59d6b2c3b2a9d16ead0e33de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4dd5fe10062786b6bf8304b33978948c1a6ef8a59d6b2c3b2a9d16ead0e33de->enter($__internal_e4dd5fe10062786b6bf8304b33978948c1a6ef8a59d6b2c3b2a9d16ead0e33de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d5a35c54024c0291b5c3b3c5894c0584996dc5c44ae14a2d25a899bde14257->leave($__internal_35d5a35c54024c0291b5c3b3c5894c0584996dc5c44ae14a2d25a899bde14257_prof);

        
        $__internal_e4dd5fe10062786b6bf8304b33978948c1a6ef8a59d6b2c3b2a9d16ead0e33de->leave($__internal_e4dd5fe10062786b6bf8304b33978948c1a6ef8a59d6b2c3b2a9d16ead0e33de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3887b52f89069334b5f46fa58153552b76fa6ab793ed0e6ca447941650e7dbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3887b52f89069334b5f46fa58153552b76fa6ab793ed0e6ca447941650e7dbd7->enter($__internal_3887b52f89069334b5f46fa58153552b76fa6ab793ed0e6ca447941650e7dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86090cf74d43575e8f628a4b321e137c6b5b286597d0f5779d61bafd78e15da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86090cf74d43575e8f628a4b321e137c6b5b286597d0f5779d61bafd78e15da5->enter($__internal_86090cf74d43575e8f628a4b321e137c6b5b286597d0f5779d61bafd78e15da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



  <!-- ---------------- -->

  <div class=\"row MainTitle\" id=\"header\">
    <h2 class=\"TitleTop letters\"  data-letters=\"Carnet de voyage\">Carnet de voyage</h2>
   <h4 id=\"catch\">histoire d'un globe trotter</h4>
 </div>


<hr>

<div class=\"container-fluid Presentation text-center\">
   <h3>Bienvenue sur mon blog international</h3>
   <p class=\"PresentationLine\">Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
   <p class=\"PresentationLine\">Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>
   <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>

<hr>

<div class=\"dropdown\">
  <button class=\"btn btn-danger dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Trier par
  <span class=\"caret\"></span></button>
  <ul class=\"dropdown-menu\">
    <li><a  href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Du plus récent au plus ancien</a></li>
    <li><a  href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("asc");
        echo "\">Du plus ancien au plus récent</a></li>
  </ul>
</div>

<hr>



<!-- ancien exemple -->


";
        // line 51
        echo "
<!-- ############# -->


<div class=\"row Articles\">

  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 58
            echo "

  <div class=\"col-xs-12 col-md-4 col-sm-6 article-card\">
    <h3  class=\"text-center\"><a style=\"color: #800000;\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</a></h3>
    <span class=\"glyphicon glyphicon-time\">";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</span>

    ";
            // line 64
            if (($this->getAttribute($context["article"], "image", array()) != null)) {
                // line 65
                echo "    <img style=\"height: 200px\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "image", array()), "html", null, true);
                echo "\" class=\"img-responsive center-block\">
    ";
            }
            // line 67
            echo "
    ";
            // line 68
            echo $this->getAttribute($context["article"], "text", array());
            echo "

  </div>
  <a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
</div>



<div class=\"navigation text-center\">
  ";
        // line 80
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>




";
        
        $__internal_86090cf74d43575e8f628a4b321e137c6b5b286597d0f5779d61bafd78e15da5->leave($__internal_86090cf74d43575e8f628a4b321e137c6b5b286597d0f5779d61bafd78e15da5_prof);

        
        $__internal_3887b52f89069334b5f46fa58153552b76fa6ab793ed0e6ca447941650e7dbd7->leave($__internal_3887b52f89069334b5f46fa58153552b76fa6ab793ed0e6ca447941650e7dbd7_prof);

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
        return array (  158 => 80,  150 => 74,  138 => 68,  135 => 67,  128 => 65,  126 => 64,  119 => 62,  113 => 61,  108 => 58,  104 => 57,  96 => 51,  82 => 32,  78 => 31,  49 => 4,  40 => 3,  11 => 1,);
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

  <div class=\"row MainTitle\" id=\"header\">
    <h2 class=\"TitleTop letters\"  data-letters=\"Carnet de voyage\">Carnet de voyage</h2>
   <h4 id=\"catch\">histoire d'un globe trotter</h4>
 </div>


<hr>

<div class=\"container-fluid Presentation text-center\">
   <h3>Bienvenue sur mon blog international</h3>
   <p class=\"PresentationLine\">Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
   <p class=\"PresentationLine\">Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>
   <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>

<hr>

<div class=\"dropdown\">
  <button class=\"btn btn-danger dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">Trier par
  <span class=\"caret\"></span></button>
  <ul class=\"dropdown-menu\">
    <li><a  href=\"{{ path('homepage') }}\">Du plus récent au plus ancien</a></li>
    <li><a  href=\"{{ path('asc') }}\">Du plus ancien au plus récent</a></li>
  </ul>
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
    <h3  class=\"text-center\"><a style=\"color: #800000;\" href=\"{{ path('post', {id: article.id}) }}\">{{ article.title }}</a></h3>
    <span class=\"glyphicon glyphicon-time\">{{ article.createdAt | date('Y-m-d') }}, {{ article.createdAt | date('H:i:s') }}</span>

    {% if article.image != NULL %}
    <img style=\"height: 200px\" src=\"{{ asset('uploads/articles/') }}{{ article.image }}\" class=\"img-responsive center-block\">
    {% endif %}

    {{ article.text | raw }}

  </div>
  <a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>

{% endfor %}

</div>



<div class=\"navigation text-center\">
  {{ knp_pagination_render(pagination) }}
</div>




{% endblock %}
", "default/index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/index.html.twig");
    }
}
