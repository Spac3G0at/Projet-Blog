<?php

/* :default:about.html.twig */
class __TwigTemplate_b87a971933cf25d7da8097139770d8c352fb8c4de30bfad67849c1a333ae7624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:about.html.twig", 1);
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


<div  class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"text-center\">
\t\t\t<h1>A PROPOS</h1>
\t\t\t<hr>
\t\t</div>
\t</div>

\t<div class=\"row\">

\t\t\t<img class=\"img-responsive center-block img-circle\"  height=\"210\" width=\"210\" src=\"http://vizeo.net/wp-content/uploads/2013/07/vizeo-globetrotter-bolivie.jpg\">
\t</div>
\t<div class=\"row\">
\t\t<div  class=\" tailleT col-md-offset-1 col-md-10 col-md-offset-1\">

\t\t\t<div class=\"text-center \">
\t\t\t\t\t<h2 id=\"titleAbout\">Qui suis-je ?</h2>
\t\t\t</div>

\t\t<div class=\"text-justify about\">
\t\t\t\t\t<p>Bonjour et bienvenue à vous, je m’appelle Pierre et j’ai trente ans. J’ai effectué le travail de comptable durant six ans et j’ai décidé de tout laisser tomber du jour au lendemain pour ma passion : LE VOYAGE !! Cela fait 1 ans maintenant que je sillonne les villes du monde pour vous partager les paysages, les rencontres ainsi que les meilleurs plans, pour toutes les bourses !

\t\t\t\t\t</p>
\t\t</div>

\t\t<div class=\"text-justify about\">
\t\t\t\t\t<p>Lorsque j’étais enfant, mes parents m’emmenaient en voyage très souvent. En voyant les innombrables paysages magnifiques ainsi que la façon dont les gens vivent ailleurs, leur coutume, mentalité, nourriture, cela m’a ouvert l’esprit et m’a appris à être tolérant. Mais surtout cela m’a donné le goût du voyage et de l’inconnue. Désormais je vis de mon blog grâce à vous et suis très heureux de vous faire participer à la découverte de nouveaux horizon.
\t\t\t\t\tVoyager est plus qu’un loisir pour moi, c’est véritablement un mode de vie.
\t\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\tN’hésitez pas à visiter mes pages sur les réseaux sociaux, je publie régulièrement photos,
\t\t\t\t\tastuces et conseils pour les voyageurs et serait heureux de discuter avec vous.
\t\t\t\t\t</p>

\t\t</div>
\t\t<hr>
\t </div>

\t</div>
</div>
 <a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>



<!-- FIN DU HTML -->
";
    }

    public function getTemplateName()
    {
        return ":default:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:about.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/about.html.twig");
    }
}
