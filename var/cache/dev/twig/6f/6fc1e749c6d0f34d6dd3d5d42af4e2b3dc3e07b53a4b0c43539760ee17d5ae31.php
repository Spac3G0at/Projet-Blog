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
        $__internal_e22820bc7c74a6ceac03237c157a11d743f267886ae314d09d9bf9730ae3e89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e22820bc7c74a6ceac03237c157a11d743f267886ae314d09d9bf9730ae3e89b->enter($__internal_e22820bc7c74a6ceac03237c157a11d743f267886ae314d09d9bf9730ae3e89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_805c349b63b3e75ac9812b985c442dd7d5c32c64f596ae5469ab231992aac44f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805c349b63b3e75ac9812b985c442dd7d5c32c64f596ae5469ab231992aac44f->enter($__internal_805c349b63b3e75ac9812b985c442dd7d5c32c64f596ae5469ab231992aac44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22820bc7c74a6ceac03237c157a11d743f267886ae314d09d9bf9730ae3e89b->leave($__internal_e22820bc7c74a6ceac03237c157a11d743f267886ae314d09d9bf9730ae3e89b_prof);

        
        $__internal_805c349b63b3e75ac9812b985c442dd7d5c32c64f596ae5469ab231992aac44f->leave($__internal_805c349b63b3e75ac9812b985c442dd7d5c32c64f596ae5469ab231992aac44f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e45074fe309dbe519d8e1edeae809a7617463862d53e042bc7980b2225d19a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e45074fe309dbe519d8e1edeae809a7617463862d53e042bc7980b2225d19a5->enter($__internal_2e45074fe309dbe519d8e1edeae809a7617463862d53e042bc7980b2225d19a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f368389ee0061d7dc906201e2add51a5d503ffa72e60c8f1e43f36c85cf03e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f368389ee0061d7dc906201e2add51a5d503ffa72e60c8f1e43f36c85cf03e5->enter($__internal_5f368389ee0061d7dc906201e2add51a5d503ffa72e60c8f1e43f36c85cf03e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <div class=\"row MainTitle\">
    <div class=\"col-lg-12\">
    <h2 class=\"TitleTop letters\"  data-letters=\"Carnet de voyage\">Carnet de voyage</h2>
       <h4>histoire d'un globe trotter</h4>
    </div>
   </div>

   <hr>

   <div class=\"container-fluid Presentation text-center\">
    <h3>Bienvenue sur mon blog à l’international</h3>
    <p class=\"PresentationLine\">Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
    <p class=\"PresentationLine\">Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>
    <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>


<div class=\"row Articles\">
   <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Chine</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Canada</h3>
      <span class=\"glyphicon glyphicon-user\">Victor</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Sénégal</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>


  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Chine</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/1.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Canada</h3>
      <span class=\"glyphicon glyphicon-user\">Victor</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/2.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Sénégal</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/3.jpg"), "html", null, true);
        echo "\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>


</div>

 <a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>


";
        
        $__internal_5f368389ee0061d7dc906201e2add51a5d503ffa72e60c8f1e43f36c85cf03e5->leave($__internal_5f368389ee0061d7dc906201e2add51a5d503ffa72e60c8f1e43f36c85cf03e5_prof);

        
        $__internal_2e45074fe309dbe519d8e1edeae809a7617463862d53e042bc7980b2225d19a5->leave($__internal_2e45074fe309dbe519d8e1edeae809a7617463862d53e042bc7980b2225d19a5_prof);

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
        return array (  136 => 74,  124 => 65,  112 => 56,  99 => 46,  87 => 37,  75 => 28,  49 => 4,  40 => 3,  11 => 1,);
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


    <div class=\"row MainTitle\">
    <div class=\"col-lg-12\">
    <h2 class=\"TitleTop letters\"  data-letters=\"Carnet de voyage\">Carnet de voyage</h2>
       <h4>histoire d'un globe trotter</h4>
    </div>
   </div>

   <hr>

   <div class=\"container-fluid Presentation text-center\">
    <h3>Bienvenue sur mon blog à l’international</h3>
    <p class=\"PresentationLine\">Vous êtes curieux, vous aimez voyager ? Ce blog est fait pour vous ! Je vous fais voyager sans que vous ayez besoin de quitter votre salon, et si l’envie vous prend d’aller à l’étranger, je vous invite à consulter les villes que j’ai déjà visitées afin de passer un séjour optimal.</p>
    <p class=\"PresentationLine\">Ne perdez plus de temps à vous demander si tel restaurant vaut mieux qu’un autre. Évitez les déceptions ! Votre fidèle serviteur à testé pour vous les restaurants, sites touristiques, hôtels, ....</p>
    <p>L’inscription est gratuite alors n’hésitez pas.</p>
</div>


<div class=\"row Articles\">
   <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Chine</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"{{ asset('assets/img/1.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Canada</h3>
      <span class=\"glyphicon glyphicon-user\">Victor</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"{{ asset('assets/img/2.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Sénégal</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"{{ asset('assets/img/3.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>


  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Chine</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"{{ asset('assets/img/1.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Canada</h3>
      <span class=\"glyphicon glyphicon-user\">Victor</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"{{ asset('assets/img/2.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>

  <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Sénégal</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"{{ asset('assets/img/3.jpg') }}\" class=\"img-responsive center-block\" alt=\"Responsive image\">
      <p>aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.
      </p>
  </div>


</div>

 <a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>


{% endblock %}
", "default/index.html.twig", "/home/thomas/Bureau/1- PROJET FIN FORMATION/Blog/app/Resources/views/default/index.html.twig");
    }
}
