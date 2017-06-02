<?php

/* default/index.html.twig */
class __TwigTemplate_150aba31e88419bdb20c7cfd8f3ab4c564d1df4548e9cccd8366fcd7c6b7ca05 extends Twig_Template
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
        $__internal_f4370501961bdb0fdbee5c7e61c2eb99fb53719915e24dcea4a2caacccb2d5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4370501961bdb0fdbee5c7e61c2eb99fb53719915e24dcea4a2caacccb2d5d2->enter($__internal_f4370501961bdb0fdbee5c7e61c2eb99fb53719915e24dcea4a2caacccb2d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_21742534df88abd34cf8f669b25fd656126b302ca02b61aa4c2f3f76199db32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21742534df88abd34cf8f669b25fd656126b302ca02b61aa4c2f3f76199db32a->enter($__internal_21742534df88abd34cf8f669b25fd656126b302ca02b61aa4c2f3f76199db32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4370501961bdb0fdbee5c7e61c2eb99fb53719915e24dcea4a2caacccb2d5d2->leave($__internal_f4370501961bdb0fdbee5c7e61c2eb99fb53719915e24dcea4a2caacccb2d5d2_prof);

        
        $__internal_21742534df88abd34cf8f669b25fd656126b302ca02b61aa4c2f3f76199db32a->leave($__internal_21742534df88abd34cf8f669b25fd656126b302ca02b61aa4c2f3f76199db32a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_06713b424edecb21415bd19329aa9f79608dd12642d34a5eeb1b98a5009f7f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06713b424edecb21415bd19329aa9f79608dd12642d34a5eeb1b98a5009f7f2d->enter($__internal_06713b424edecb21415bd19329aa9f79608dd12642d34a5eeb1b98a5009f7f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7299a468dd5cc3fb5800b9ec9ca3638a48c1a04989f4ef01be30ecbf10c9a816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7299a468dd5cc3fb5800b9ec9ca3638a48c1a04989f4ef01be30ecbf10c9a816->enter($__internal_7299a468dd5cc3fb5800b9ec9ca3638a48c1a04989f4ef01be30ecbf10c9a816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7299a468dd5cc3fb5800b9ec9ca3638a48c1a04989f4ef01be30ecbf10c9a816->leave($__internal_7299a468dd5cc3fb5800b9ec9ca3638a48c1a04989f4ef01be30ecbf10c9a816_prof);

        
        $__internal_06713b424edecb21415bd19329aa9f79608dd12642d34a5eeb1b98a5009f7f2d->leave($__internal_06713b424edecb21415bd19329aa9f79608dd12642d34a5eeb1b98a5009f7f2d_prof);

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
