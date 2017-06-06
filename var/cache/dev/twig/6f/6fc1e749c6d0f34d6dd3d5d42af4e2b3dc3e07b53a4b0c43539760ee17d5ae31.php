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
        $__internal_cae535222bd7612d840f0eb63b0d0d67b955bef7c2d198106a03d7a3f859936d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae535222bd7612d840f0eb63b0d0d67b955bef7c2d198106a03d7a3f859936d->enter($__internal_cae535222bd7612d840f0eb63b0d0d67b955bef7c2d198106a03d7a3f859936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_9f1e7872e6c28eef73ca575930c8e14f04162439553464f72833e32374e5d509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1e7872e6c28eef73ca575930c8e14f04162439553464f72833e32374e5d509->enter($__internal_9f1e7872e6c28eef73ca575930c8e14f04162439553464f72833e32374e5d509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae535222bd7612d840f0eb63b0d0d67b955bef7c2d198106a03d7a3f859936d->leave($__internal_cae535222bd7612d840f0eb63b0d0d67b955bef7c2d198106a03d7a3f859936d_prof);

        
        $__internal_9f1e7872e6c28eef73ca575930c8e14f04162439553464f72833e32374e5d509->leave($__internal_9f1e7872e6c28eef73ca575930c8e14f04162439553464f72833e32374e5d509_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d23daef21e4ba95296231b0799e6b04f8d8b42fe81af52b4445802b0ec076dd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23daef21e4ba95296231b0799e6b04f8d8b42fe81af52b4445802b0ec076dd5->enter($__internal_d23daef21e4ba95296231b0799e6b04f8d8b42fe81af52b4445802b0ec076dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bee817c48a8e7ff4f487bfe9507a46fed6399cd1af93ec59fd0e2ee6c1cede48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee817c48a8e7ff4f487bfe9507a46fed6399cd1af93ec59fd0e2ee6c1cede48->enter($__internal_bee817c48a8e7ff4f487bfe9507a46fed6399cd1af93ec59fd0e2ee6c1cede48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
</div>



<div class=\"navigation text-center\">
  ";
        // line 87
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
</div>




";
        
        $__internal_bee817c48a8e7ff4f487bfe9507a46fed6399cd1af93ec59fd0e2ee6c1cede48->leave($__internal_bee817c48a8e7ff4f487bfe9507a46fed6399cd1af93ec59fd0e2ee6c1cede48_prof);

        
        $__internal_d23daef21e4ba95296231b0799e6b04f8d8b42fe81af52b4445802b0ec076dd5->leave($__internal_d23daef21e4ba95296231b0799e6b04f8d8b42fe81af52b4445802b0ec076dd5_prof);

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
        return array (  156 => 87,  148 => 81,  120 => 58,  113 => 56,  111 => 55,  104 => 53,  97 => 51,  92 => 48,  88 => 47,  80 => 41,  49 => 4,  40 => 3,  11 => 1,);
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

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
  </div>

{% endfor %}

</div>



<div class=\"navigation text-center\">
  {{ knp_pagination_render(pagination) }}
</div>




{% endblock %}", "default/index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/index.html.twig");
    }
}
