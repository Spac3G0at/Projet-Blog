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
        $__internal_ebc9c0cf619a1437079c20d9c1b1f571a0a2edac9f7f38d4c0ead355485e01dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc9c0cf619a1437079c20d9c1b1f571a0a2edac9f7f38d4c0ead355485e01dd->enter($__internal_ebc9c0cf619a1437079c20d9c1b1f571a0a2edac9f7f38d4c0ead355485e01dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_ba1126b6969bb24312cd35d66c73093037b611f02dd5792c702699b4e90d4b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1126b6969bb24312cd35d66c73093037b611f02dd5792c702699b4e90d4b80->enter($__internal_ba1126b6969bb24312cd35d66c73093037b611f02dd5792c702699b4e90d4b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc9c0cf619a1437079c20d9c1b1f571a0a2edac9f7f38d4c0ead355485e01dd->leave($__internal_ebc9c0cf619a1437079c20d9c1b1f571a0a2edac9f7f38d4c0ead355485e01dd_prof);

        
        $__internal_ba1126b6969bb24312cd35d66c73093037b611f02dd5792c702699b4e90d4b80->leave($__internal_ba1126b6969bb24312cd35d66c73093037b611f02dd5792c702699b4e90d4b80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f82d93b5d1580cff7f7af1b9c5a36d485ce4f9865b798fab3a9555c48468785e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f82d93b5d1580cff7f7af1b9c5a36d485ce4f9865b798fab3a9555c48468785e->enter($__internal_f82d93b5d1580cff7f7af1b9c5a36d485ce4f9865b798fab3a9555c48468785e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e35fcb62fd087786cc3af8e45757a3d58551ad017362316232a83e0d5da0ede4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35fcb62fd087786cc3af8e45757a3d58551ad017362316232a83e0d5da0ede4->enter($__internal_e35fcb62fd087786cc3af8e45757a3d58551ad017362316232a83e0d5da0ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e35fcb62fd087786cc3af8e45757a3d58551ad017362316232a83e0d5da0ede4->leave($__internal_e35fcb62fd087786cc3af8e45757a3d58551ad017362316232a83e0d5da0ede4_prof);

        
        $__internal_f82d93b5d1580cff7f7af1b9c5a36d485ce4f9865b798fab3a9555c48468785e->leave($__internal_f82d93b5d1580cff7f7af1b9c5a36d485ce4f9865b798fab3a9555c48468785e_prof);

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
", "default/index.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/app/Resources/views/default/index.html.twig");
    }
}
