<?php

/* base.html.twig */
class __TwigTemplate_80c70b09b1357f04d4769301c0d3cc86d579d8b5ac65949f0d6e59bcc3047e1f extends Twig_Template
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
        $__internal_970db06502612f666d7fca58744ed3fa244f40964e3734abdc47fac490bcbbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970db06502612f666d7fca58744ed3fa244f40964e3734abdc47fac490bcbbbc->enter($__internal_970db06502612f666d7fca58744ed3fa244f40964e3734abdc47fac490bcbbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_60690485149e3f80e95ea18da4f2d87bc37b76831b78806329b912e34e38ad95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60690485149e3f80e95ea18da4f2d87bc37b76831b78806329b912e34e38ad95->enter($__internal_60690485149e3f80e95ea18da4f2d87bc37b76831b78806329b912e34e38ad95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_970db06502612f666d7fca58744ed3fa244f40964e3734abdc47fac490bcbbbc->leave($__internal_970db06502612f666d7fca58744ed3fa244f40964e3734abdc47fac490bcbbbc_prof);

        
        $__internal_60690485149e3f80e95ea18da4f2d87bc37b76831b78806329b912e34e38ad95->leave($__internal_60690485149e3f80e95ea18da4f2d87bc37b76831b78806329b912e34e38ad95_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_216d02827d6b3f66fb6f871fd8e4a5e11694b3724a46a8baa9da86e160c09602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216d02827d6b3f66fb6f871fd8e4a5e11694b3724a46a8baa9da86e160c09602->enter($__internal_216d02827d6b3f66fb6f871fd8e4a5e11694b3724a46a8baa9da86e160c09602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d547d14be69e0710c67ad348932ca8997ac25fb54be1c6657be0624943b5a02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d547d14be69e0710c67ad348932ca8997ac25fb54be1c6657be0624943b5a02c->enter($__internal_d547d14be69e0710c67ad348932ca8997ac25fb54be1c6657be0624943b5a02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_d547d14be69e0710c67ad348932ca8997ac25fb54be1c6657be0624943b5a02c->leave($__internal_d547d14be69e0710c67ad348932ca8997ac25fb54be1c6657be0624943b5a02c_prof);

        
        $__internal_216d02827d6b3f66fb6f871fd8e4a5e11694b3724a46a8baa9da86e160c09602->leave($__internal_216d02827d6b3f66fb6f871fd8e4a5e11694b3724a46a8baa9da86e160c09602_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a0a5618ed4f99ab9e35953b9869fa6493997bfd43dfb1069c55215ce12a20146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a5618ed4f99ab9e35953b9869fa6493997bfd43dfb1069c55215ce12a20146->enter($__internal_a0a5618ed4f99ab9e35953b9869fa6493997bfd43dfb1069c55215ce12a20146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8670b1d78e34c64f6a0ce3359be9d968de36b00db1d4a4ef0dc23d24cf95c110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8670b1d78e34c64f6a0ce3359be9d968de36b00db1d4a4ef0dc23d24cf95c110->enter($__internal_8670b1d78e34c64f6a0ce3359be9d968de36b00db1d4a4ef0dc23d24cf95c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8670b1d78e34c64f6a0ce3359be9d968de36b00db1d4a4ef0dc23d24cf95c110->leave($__internal_8670b1d78e34c64f6a0ce3359be9d968de36b00db1d4a4ef0dc23d24cf95c110_prof);

        
        $__internal_a0a5618ed4f99ab9e35953b9869fa6493997bfd43dfb1069c55215ce12a20146->leave($__internal_a0a5618ed4f99ab9e35953b9869fa6493997bfd43dfb1069c55215ce12a20146_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_2816cf5663ddd2eebf5694e35ebbc4a452f00c0bb0169f7a68158e3a12a2c010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2816cf5663ddd2eebf5694e35ebbc4a452f00c0bb0169f7a68158e3a12a2c010->enter($__internal_2816cf5663ddd2eebf5694e35ebbc4a452f00c0bb0169f7a68158e3a12a2c010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cce4c9293012dcd2cd202763740dd14667ee46089415b09ca53046effbb5bb04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce4c9293012dcd2cd202763740dd14667ee46089415b09ca53046effbb5bb04->enter($__internal_cce4c9293012dcd2cd202763740dd14667ee46089415b09ca53046effbb5bb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cce4c9293012dcd2cd202763740dd14667ee46089415b09ca53046effbb5bb04->leave($__internal_cce4c9293012dcd2cd202763740dd14667ee46089415b09ca53046effbb5bb04_prof);

        
        $__internal_2816cf5663ddd2eebf5694e35ebbc4a452f00c0bb0169f7a68158e3a12a2c010->leave($__internal_2816cf5663ddd2eebf5694e35ebbc4a452f00c0bb0169f7a68158e3a12a2c010_prof);

    }

    // line 242
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_843b85c190fb0168a93513b8c7f709ac6767e30a55665d7fa5ed3d3fd45453a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843b85c190fb0168a93513b8c7f709ac6767e30a55665d7fa5ed3d3fd45453a8->enter($__internal_843b85c190fb0168a93513b8c7f709ac6767e30a55665d7fa5ed3d3fd45453a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_96d14bf6165f07adaefa02bf8f626859e9135fe209100e3e393713bb92477bb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d14bf6165f07adaefa02bf8f626859e9135fe209100e3e393713bb92477bb8->enter($__internal_96d14bf6165f07adaefa02bf8f626859e9135fe209100e3e393713bb92477bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96d14bf6165f07adaefa02bf8f626859e9135fe209100e3e393713bb92477bb8->leave($__internal_96d14bf6165f07adaefa02bf8f626859e9135fe209100e3e393713bb92477bb8_prof);

        
        $__internal_843b85c190fb0168a93513b8c7f709ac6767e30a55665d7fa5ed3d3fd45453a8->leave($__internal_843b85c190fb0168a93513b8c7f709ac6767e30a55665d7fa5ed3d3fd45453a8_prof);

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
