<?php

/* default/index.html.twig */
class __TwigTemplate_7fe2edb11b5067b31a3c17c11fddee2b9742ec0ce649b16e6efb10a9e6a78711 extends Twig_Template
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
        $__internal_ef938ce353427fef5d04662837ab692298eddd2f6fea69f74b161edbc3b4dbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef938ce353427fef5d04662837ab692298eddd2f6fea69f74b161edbc3b4dbf4->enter($__internal_ef938ce353427fef5d04662837ab692298eddd2f6fea69f74b161edbc3b4dbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_745dc5aee2b1c667dcfcc5289d0a1b90e7ce90ec186bd647b36725cd906aed3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745dc5aee2b1c667dcfcc5289d0a1b90e7ce90ec186bd647b36725cd906aed3f->enter($__internal_745dc5aee2b1c667dcfcc5289d0a1b90e7ce90ec186bd647b36725cd906aed3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef938ce353427fef5d04662837ab692298eddd2f6fea69f74b161edbc3b4dbf4->leave($__internal_ef938ce353427fef5d04662837ab692298eddd2f6fea69f74b161edbc3b4dbf4_prof);

        
        $__internal_745dc5aee2b1c667dcfcc5289d0a1b90e7ce90ec186bd647b36725cd906aed3f->leave($__internal_745dc5aee2b1c667dcfcc5289d0a1b90e7ce90ec186bd647b36725cd906aed3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bc4a1660ddefb8828bd3eb279a88108c23fbc35e2f2912aae46924e1d30ddfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc4a1660ddefb8828bd3eb279a88108c23fbc35e2f2912aae46924e1d30ddfe->enter($__internal_3bc4a1660ddefb8828bd3eb279a88108c23fbc35e2f2912aae46924e1d30ddfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7d6d9175bf4ed4966274838aa83fbb2467c7c85a365db42f4c0b3fefba86db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d6d9175bf4ed4966274838aa83fbb2467c7c85a365db42f4c0b3fefba86db6->enter($__internal_e7d6d9175bf4ed4966274838aa83fbb2467c7c85a365db42f4c0b3fefba86db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

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


<div class=\"row Articles\">
   <div class=\"col-xs-12 col-md-4 col-sm-6\">
      <h3 class=\"text-center\">Chine</h3>
      <span class=\"glyphicon glyphicon-user\">Thomas</span><br>
      <span class=\"glyphicon glyphicon-time\">26/05/2017</span>
      <img src=\"";
        // line 29
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
        // line 38
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
        // line 47
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




";
        
        $__internal_e7d6d9175bf4ed4966274838aa83fbb2467c7c85a365db42f4c0b3fefba86db6->leave($__internal_e7d6d9175bf4ed4966274838aa83fbb2467c7c85a365db42f4c0b3fefba86db6_prof);

        
        $__internal_3bc4a1660ddefb8828bd3eb279a88108c23fbc35e2f2912aae46924e1d30ddfe->leave($__internal_3bc4a1660ddefb8828bd3eb279a88108c23fbc35e2f2912aae46924e1d30ddfe_prof);

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
        return array (  136 => 74,  124 => 65,  112 => 56,  100 => 47,  88 => 38,  76 => 29,  49 => 4,  40 => 3,  11 => 1,);
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




{% endblock %}", "default/index.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/index.html.twig");
    }
}
