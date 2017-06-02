<?php

/* base.html.twig */
class __TwigTemplate_da4584904b9de9f2988b8434195f48c2a6bdcc5115cca848796032f8b29c7fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15d3004d6b766549d4bc2a78546c5602ec923c1f2fe245c451bc7f33fb655a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d3004d6b766549d4bc2a78546c5602ec923c1f2fe245c451bc7f33fb655a64->enter($__internal_15d3004d6b766549d4bc2a78546c5602ec923c1f2fe245c451bc7f33fb655a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_23a066658206cc4884e344fc59b64ed9b0a4bf9f74db136ee22e0db159375b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a066658206cc4884e344fc59b64ed9b0a4bf9f74db136ee22e0db159375b66->enter($__internal_23a066658206cc4884e344fc59b64ed9b0a4bf9f74db136ee22e0db159375b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script src=\"https://use.fontawesome.com/26966c2e75.js\"></script>

  </head>
  <body>


    ";
        // line 17
        echo "    <!-- NAVBAR -->
    <nav class=\"navbar navbar-default\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img id=\"nav-logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\"></a>
      </div>

      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

        <ul class=\"nav navbar-nav navbar-left inline-form\">




          ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 37
            echo "            <li>
              <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
            </li>

            ";
            // line 41
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 42
                echo "              <li>
                <a href=\"";
                // line 43
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
                echo "\">Articles</a>
              </li>
            ";
            }
            // line 46
            echo "
          ";
        } else {
            // line 48
            echo "
            <div class=\"nav navbar-nav\" id=\"nav-list\" style=\"color: blue;\">

              <li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal\">S'inscrire</a></li>

            </div>

            <div class=\"nav navbar-nav\" style=\"color: blue;\">

              <li><a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\">Se connecter</a></li>

            </div>
          ";
        }
        // line 61
        echo "        </ul>


        <form class=\"search navbar-form navbar-right\" role=\"search\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
            <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-default\">
                <span class=\"glyphicon glyphicon-search\"></span>
              </button>
            </span>
          </div>
        </form>

        ";
        // line 75
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 76
            echo "        <ul class=\"nav navbar-nav navbar-right\">
          <li>
            <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> Déconnexion</a>
          </li>
        </ul>
      ";
        }
        // line 82
        echo "

";
        // line 100
        echo "
                </nav>

                <div class=\"container demo\">

                  <!-- END NAVBAR -->

                  ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
        echo "

                  </div> 
                  <!-- FOOTER -->


                  <footer>
                   <div class=\"footer\">

                     <div class=\"row\">
                       <div class=\"";
        // line 118
        echo "\">

                         <ul class=\"social text-center\">
                           <li>
                             <a href=\"\"> <i class=\" fa fa-facebook\">   </i> </a>
                           </li>
                           <li>
                             <a href=\"\"> <i class=\"fa fa-twitter\">   </i> </a>
                           </li>
                           <li>
                             <a href=\"#\"> <i class=\"fa fa-google-plus\">   </i> </a>
                           </li>
                           <li>
                             <a href=\"#\"> <i class=\"fa fa-youtube\">   </i> </a>
                           </li>
                         </ul>
                       </div>

                       <div >
                         <ul class=\"footermenu text-center\">
                           <li>
                             <a href=\"\">HOME</a>
                           </li>
                           <li>
                             <a href=\"\">MENU</a>
                           </li>
                           <li>
                             <a href=\"#\">LOCATION</a>
                           </li>
                           <li>
                             <a href=\"#\">MENTIONS</a>
                           </li>
                         </ul>
                       </div>

                       <div >
                         <ul class=\"footerSecondMenu text-center\">
                           <li>
                             <a href=\"\">Contact</a>
                           </li>
                           <li>
                             <a href=\"\">Blog</a>
                           </li>
                           <li>
                             <a href=\"#\">A propos</a>
                           </li>
                         </ul>
                       </div>

                     </div>
                     <div class=\"footerRedPart col-lg-6 col-md-3 col-sm-6 col-xs-12\">
                       <h4>Travel Trips, Globe trotters, travel with <i class=\" fa fa-heart\"></i> around the world</h4>
                       <h5>@World Culture Travel and<span style=\"border-right: 1px solid grey; padding-right: 10px;\"> life </span>
                         <span style=\"padding-left: 10px;\"> </span> All rights reserved</h5>

                       </div>
                     </div>
                     <footer>

                      <!-- END FOOTER -->











                      <!-- -- MODAL -- -->


                      <!-- Trigger the modal with a button -->
                      ";
        // line 194
        echo "
                      <!-- Modal -->
                      <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                        <div class=\"modal-dialog modal-sm\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title text-center\">CONNEXION</h4>
                            </div>
                            <div class=\"modal-body\">
                              ";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Security:loginModal"));
        echo "
                            </div>
                            <div class=\"modal-footer\">
                              <div data-dismiss=\"modal\" class=\"btn btn-default ctn-close\">
                                <i  class=\"fa fa-times rotation\" aria-hidden=\"true\"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>








                      <!-- Modal -->
                      <div class=\"modal fade\" id=\"modal\" role=\"dialog\">
                        <div class=\"modal-dialog modal-sm\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title text-center\">INSCRIPTION</h4>
                            </div>
                            <div class=\"modal-body\">
                              ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Registration:registerModal"));
        echo "
                            </div>
                            <div class=\"modal-footer\">
                              <div data-dismiss=\"modal\" class=\"btn btn-default ctn-close\">
                                <i  class=\"fa fa-times rotation\" aria-hidden=\"true\"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



                      ";
        // line 242
        $this->displayBlock('javascripts', $context, $blocks);
        // line 243
        echo "                        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.js"), "html", null, true);
        echo "\"></script>
                        <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                      </body>
                      </html>";
        
        $__internal_15d3004d6b766549d4bc2a78546c5602ec923c1f2fe245c451bc7f33fb655a64->leave($__internal_15d3004d6b766549d4bc2a78546c5602ec923c1f2fe245c451bc7f33fb655a64_prof);

        
        $__internal_23a066658206cc4884e344fc59b64ed9b0a4bf9f74db136ee22e0db159375b66->leave($__internal_23a066658206cc4884e344fc59b64ed9b0a4bf9f74db136ee22e0db159375b66_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7efe585634c04a62f8797ddd8da788fe04344737905317f1088eea2fc49b84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7efe585634c04a62f8797ddd8da788fe04344737905317f1088eea2fc49b84d->enter($__internal_e7efe585634c04a62f8797ddd8da788fe04344737905317f1088eea2fc49b84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3fc70917e39fbcdad54b128de18835800bd17898497d4b61d5762a3510c1e0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc70917e39fbcdad54b128de18835800bd17898497d4b61d5762a3510c1e0c2->enter($__internal_3fc70917e39fbcdad54b128de18835800bd17898497d4b61d5762a3510c1e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_3fc70917e39fbcdad54b128de18835800bd17898497d4b61d5762a3510c1e0c2->leave($__internal_3fc70917e39fbcdad54b128de18835800bd17898497d4b61d5762a3510c1e0c2_prof);

        
        $__internal_e7efe585634c04a62f8797ddd8da788fe04344737905317f1088eea2fc49b84d->leave($__internal_e7efe585634c04a62f8797ddd8da788fe04344737905317f1088eea2fc49b84d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66cd3bb08e99389e91fec99255627da46ed0ca8bbf30b6cdd7f88ef9d9070a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66cd3bb08e99389e91fec99255627da46ed0ca8bbf30b6cdd7f88ef9d9070a5c->enter($__internal_66cd3bb08e99389e91fec99255627da46ed0ca8bbf30b6cdd7f88ef9d9070a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_efd5a98005d69e5b94edd8c6ba9f3ddfcf1b4c991f49bc1c23c0407f1ce37a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd5a98005d69e5b94edd8c6ba9f3ddfcf1b4c991f49bc1c23c0407f1ce37a10->enter($__internal_efd5a98005d69e5b94edd8c6ba9f3ddfcf1b4c991f49bc1c23c0407f1ce37a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_efd5a98005d69e5b94edd8c6ba9f3ddfcf1b4c991f49bc1c23c0407f1ce37a10->leave($__internal_efd5a98005d69e5b94edd8c6ba9f3ddfcf1b4c991f49bc1c23c0407f1ce37a10_prof);

        
        $__internal_66cd3bb08e99389e91fec99255627da46ed0ca8bbf30b6cdd7f88ef9d9070a5c->leave($__internal_66cd3bb08e99389e91fec99255627da46ed0ca8bbf30b6cdd7f88ef9d9070a5c_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_a216b174b7bf923ee82186ca92ecc21382d108c75427ce6218fe2b9852cd2874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a216b174b7bf923ee82186ca92ecc21382d108c75427ce6218fe2b9852cd2874->enter($__internal_a216b174b7bf923ee82186ca92ecc21382d108c75427ce6218fe2b9852cd2874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_324b51eee316ac7c0b258fbad9518f9cbf63057d90fade8aa8c1b11d9abefb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324b51eee316ac7c0b258fbad9518f9cbf63057d90fade8aa8c1b11d9abefb3e->enter($__internal_324b51eee316ac7c0b258fbad9518f9cbf63057d90fade8aa8c1b11d9abefb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_324b51eee316ac7c0b258fbad9518f9cbf63057d90fade8aa8c1b11d9abefb3e->leave($__internal_324b51eee316ac7c0b258fbad9518f9cbf63057d90fade8aa8c1b11d9abefb3e_prof);

        
        $__internal_a216b174b7bf923ee82186ca92ecc21382d108c75427ce6218fe2b9852cd2874->leave($__internal_a216b174b7bf923ee82186ca92ecc21382d108c75427ce6218fe2b9852cd2874_prof);

    }

    // line 242
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a7b2f02fd734f2bf36b2b4b4a5eb3c151b9189d787e13a1611b9dc4550744fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7b2f02fd734f2bf36b2b4b4a5eb3c151b9189d787e13a1611b9dc4550744fa->enter($__internal_9a7b2f02fd734f2bf36b2b4b4a5eb3c151b9189d787e13a1611b9dc4550744fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_22f14512c321a8663b89f15a35d61749f3d7d6573e0133d611fbd69704ccb046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f14512c321a8663b89f15a35d61749f3d7d6573e0133d611fbd69704ccb046->enter($__internal_22f14512c321a8663b89f15a35d61749f3d7d6573e0133d611fbd69704ccb046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22f14512c321a8663b89f15a35d61749f3d7d6573e0133d611fbd69704ccb046->leave($__internal_22f14512c321a8663b89f15a35d61749f3d7d6573e0133d611fbd69704ccb046_prof);

        
        $__internal_9a7b2f02fd734f2bf36b2b4b4a5eb3c151b9189d787e13a1611b9dc4550744fa->leave($__internal_9a7b2f02fd734f2bf36b2b4b4a5eb3c151b9189d787e13a1611b9dc4550744fa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 242,  373 => 107,  356 => 6,  338 => 5,  325 => 244,  320 => 243,  318 => 242,  302 => 229,  273 => 203,  262 => 194,  185 => 118,  173 => 108,  171 => 107,  162 => 100,  158 => 82,  151 => 78,  147 => 76,  145 => 75,  129 => 61,  114 => 48,  110 => 46,  104 => 43,  101 => 42,  99 => 41,  91 => 38,  88 => 37,  86 => 36,  71 => 26,  60 => 17,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
  <meta charset=\"UTF-8\" />
  <title>{% block title %}Blog{% endblock %}</title>
  {% block stylesheets %}{% endblock %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\" />
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script src=\"https://use.fontawesome.com/26966c2e75.js\"></script>

  </head>
  <body>


    {# <div class=\"container\"> #}
    <!-- NAVBAR -->
    <nav class=\"navbar navbar-default\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\"><img id=\"nav-logo\" src=\"{{ asset(\"assets/img/logo.png\") }}\"></a>
      </div>

      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">

        <ul class=\"nav navbar-nav navbar-left inline-form\">




          {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li>
              <a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> {{ app.user.username }}</a>
            </li>

            {% if is_granted('ROLE_ADMIN')  %}
              <li>
                <a href=\"{{ path(\"article_index\") }}\">Articles</a>
              </li>
            {% endif %}

          {% else %}

            <div class=\"nav navbar-nav\" id=\"nav-list\" style=\"color: blue;\">

              <li><a href=\"\" data-toggle=\"modal\" data-target=\"#modal\">S'inscrire</a></li>

            </div>

            <div class=\"nav navbar-nav\" style=\"color: blue;\">

              <li><a href=\"\" data-toggle=\"modal\" data-target=\"#myModal\">Se connecter</a></li>

            </div>
          {% endif %}
        </ul>


        <form class=\"search navbar-form navbar-right\" role=\"search\">
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher\">
            <span class=\"input-group-btn\">
              <button type=\"submit\" class=\"btn btn-default\">
                <span class=\"glyphicon glyphicon-search\"></span>
              </button>
            </span>
          </div>
        </form>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <ul class=\"nav navbar-nav navbar-right\">
          <li>
            <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa fa-power-off\" aria-hidden=\"true\"></i> Déconnexion</a>
          </li>
        </ul>
      {% endif %}


{#                 <ul class=\"social nav navbar-nav navbar-right inline-form\">

                    <li>
                        <a href=\"#\"> <i class=\"fa fa-facebook\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"> <i class=\"fa fa-twitter\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"> <i class=\"fa fa-google-plus\"></i></a>
                    </li>
                    <li>
                        <a href=\"#\"> <i class=\"fa fa-youtube\"></i></a>
                    </li>

                  </ul> #}

                </nav>

                <div class=\"container demo\">

                  <!-- END NAVBAR -->

                  {% block body %}{% endblock %}


                  </div> 
                  <!-- FOOTER -->


                  <footer>
                   <div class=\"footer\">

                     <div class=\"row\">
                       <div class=\"{# col-lg-6 col-lg-offset-4 col-md-2 col-sm-4 col-xs-12  #}\">

                         <ul class=\"social text-center\">
                           <li>
                             <a href=\"\"> <i class=\" fa fa-facebook\">   </i> </a>
                           </li>
                           <li>
                             <a href=\"\"> <i class=\"fa fa-twitter\">   </i> </a>
                           </li>
                           <li>
                             <a href=\"#\"> <i class=\"fa fa-google-plus\">   </i> </a>
                           </li>
                           <li>
                             <a href=\"#\"> <i class=\"fa fa-youtube\">   </i> </a>
                           </li>
                         </ul>
                       </div>

                       <div >
                         <ul class=\"footermenu text-center\">
                           <li>
                             <a href=\"\">HOME</a>
                           </li>
                           <li>
                             <a href=\"\">MENU</a>
                           </li>
                           <li>
                             <a href=\"#\">LOCATION</a>
                           </li>
                           <li>
                             <a href=\"#\">MENTIONS</a>
                           </li>
                         </ul>
                       </div>

                       <div >
                         <ul class=\"footerSecondMenu text-center\">
                           <li>
                             <a href=\"\">Contact</a>
                           </li>
                           <li>
                             <a href=\"\">Blog</a>
                           </li>
                           <li>
                             <a href=\"#\">A propos</a>
                           </li>
                         </ul>
                       </div>

                     </div>
                     <div class=\"footerRedPart col-lg-6 col-md-3 col-sm-6 col-xs-12\">
                       <h4>Travel Trips, Globe trotters, travel with <i class=\" fa fa-heart\"></i> around the world</h4>
                       <h5>@World Culture Travel and<span style=\"border-right: 1px solid grey; padding-right: 10px;\"> life </span>
                         <span style=\"padding-left: 10px;\"> </span> All rights reserved</h5>

                       </div>
                     </div>
                     <footer>

                      <!-- END FOOTER -->











                      <!-- -- MODAL -- -->


                      <!-- Trigger the modal with a button -->
                      {#   <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">CONNEXION</button> #}

                      <!-- Modal -->
                      <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                        <div class=\"modal-dialog modal-sm\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title text-center\">CONNEXION</h4>
                            </div>
                            <div class=\"modal-body\">
                              {{ render(controller(\"FOSUserBundle:Security:loginModal\")) }}
                            </div>
                            <div class=\"modal-footer\">
                              <div data-dismiss=\"modal\" class=\"btn btn-default ctn-close\">
                                <i  class=\"fa fa-times rotation\" aria-hidden=\"true\"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>








                      <!-- Modal -->
                      <div class=\"modal fade\" id=\"modal\" role=\"dialog\">
                        <div class=\"modal-dialog modal-sm\">
                          <div class=\"modal-content\">
                            <div class=\"modal-header\">
                              <h4 class=\"modal-title text-center\">INSCRIPTION</h4>
                            </div>
                            <div class=\"modal-body\">
                              {{ render(controller(\"FOSUserBundle:Registration:registerModal\")) }}
                            </div>
                            <div class=\"modal-footer\">
                              <div data-dismiss=\"modal\" class=\"btn btn-default ctn-close\">
                                <i  class=\"fa fa-times rotation\" aria-hidden=\"true\"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



                      {% block javascripts %}{% endblock %}
                        <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.js') }}\"></script>
                        <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.js') }}\"></script>
                      </body>
                      </html>", "base.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/base.html.twig");
    }
}
