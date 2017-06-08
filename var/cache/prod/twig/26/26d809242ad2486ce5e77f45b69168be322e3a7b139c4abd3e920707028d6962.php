<?php

/* :default:index.html.twig */
class __TwigTemplate_7dd309338230ee5640a4d236a73d08b8e72b78f528173ef1c0d02d60644412ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
</div>




";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 80,  132 => 74,  120 => 68,  117 => 67,  110 => 65,  108 => 64,  101 => 62,  95 => 61,  90 => 58,  86 => 57,  78 => 51,  64 => 32,  60 => 31,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/index.html.twig");
    }
}
