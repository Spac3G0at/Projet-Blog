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
        $__internal_8a1de213cc5ebe182a3612eebf9752373961040cb303e8ef4b5691dd5efa8f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1de213cc5ebe182a3612eebf9752373961040cb303e8ef4b5691dd5efa8f34->enter($__internal_8a1de213cc5ebe182a3612eebf9752373961040cb303e8ef4b5691dd5efa8f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_2550a32aedc3933a628f8c989ab84c016f5351c4f9adb085674fbab84965b46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2550a32aedc3933a628f8c989ab84c016f5351c4f9adb085674fbab84965b46e->enter($__internal_2550a32aedc3933a628f8c989ab84c016f5351c4f9adb085674fbab84965b46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a1de213cc5ebe182a3612eebf9752373961040cb303e8ef4b5691dd5efa8f34->leave($__internal_8a1de213cc5ebe182a3612eebf9752373961040cb303e8ef4b5691dd5efa8f34_prof);

        
        $__internal_2550a32aedc3933a628f8c989ab84c016f5351c4f9adb085674fbab84965b46e->leave($__internal_2550a32aedc3933a628f8c989ab84c016f5351c4f9adb085674fbab84965b46e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6402724708e9ef694da6695c7eb8c77c6b60eea3d1a898ca22bf9bedf81f801e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6402724708e9ef694da6695c7eb8c77c6b60eea3d1a898ca22bf9bedf81f801e->enter($__internal_6402724708e9ef694da6695c7eb8c77c6b60eea3d1a898ca22bf9bedf81f801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b06b6510f3f74d9718f2023169244c4c6c62cc1f648fc6f68ff5394f46397126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06b6510f3f74d9718f2023169244c4c6c62cc1f648fc6f68ff5394f46397126->enter($__internal_b06b6510f3f74d9718f2023169244c4c6c62cc1f648fc6f68ff5394f46397126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b06b6510f3f74d9718f2023169244c4c6c62cc1f648fc6f68ff5394f46397126->leave($__internal_b06b6510f3f74d9718f2023169244c4c6c62cc1f648fc6f68ff5394f46397126_prof);

        
        $__internal_6402724708e9ef694da6695c7eb8c77c6b60eea3d1a898ca22bf9bedf81f801e->leave($__internal_6402724708e9ef694da6695c7eb8c77c6b60eea3d1a898ca22bf9bedf81f801e_prof);

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
