<?php

/* base.html.twig */
class __TwigTemplate_ff85f36fee1b93b06472b60414ceee15e65852e3cbbc7b7764dc9745f8607d20 extends Twig_Template
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
        $__internal_b8df043a69ecafdc37a987f66716e412d01f7662e689315f173aa3124e1abf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8df043a69ecafdc37a987f66716e412d01f7662e689315f173aa3124e1abf08->enter($__internal_b8df043a69ecafdc37a987f66716e412d01f7662e689315f173aa3124e1abf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6dff225b128e52c03886881a1d9179e0078b37df023b6d273c8e15e1240e6e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dff225b128e52c03886881a1d9179e0078b37df023b6d273c8e15e1240e6e12->enter($__internal_6dff225b128e52c03886881a1d9179e0078b37df023b6d273c8e15e1240e6e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>

                      </body>
                      </html>
";
        
        $__internal_b8df043a69ecafdc37a987f66716e412d01f7662e689315f173aa3124e1abf08->leave($__internal_b8df043a69ecafdc37a987f66716e412d01f7662e689315f173aa3124e1abf08_prof);

        
        $__internal_6dff225b128e52c03886881a1d9179e0078b37df023b6d273c8e15e1240e6e12->leave($__internal_6dff225b128e52c03886881a1d9179e0078b37df023b6d273c8e15e1240e6e12_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_81b7940fde9d10f05f9ad3a0271cdf3a8e297d1a4f275c092c93e93a3c49fbe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81b7940fde9d10f05f9ad3a0271cdf3a8e297d1a4f275c092c93e93a3c49fbe9->enter($__internal_81b7940fde9d10f05f9ad3a0271cdf3a8e297d1a4f275c092c93e93a3c49fbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f572a52df228d54463546d38b65cc9094c57dd6aa7cc4e8884937a50fbfd4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f572a52df228d54463546d38b65cc9094c57dd6aa7cc4e8884937a50fbfd4fa->enter($__internal_5f572a52df228d54463546d38b65cc9094c57dd6aa7cc4e8884937a50fbfd4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_5f572a52df228d54463546d38b65cc9094c57dd6aa7cc4e8884937a50fbfd4fa->leave($__internal_5f572a52df228d54463546d38b65cc9094c57dd6aa7cc4e8884937a50fbfd4fa_prof);

        
        $__internal_81b7940fde9d10f05f9ad3a0271cdf3a8e297d1a4f275c092c93e93a3c49fbe9->leave($__internal_81b7940fde9d10f05f9ad3a0271cdf3a8e297d1a4f275c092c93e93a3c49fbe9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_25642d6a6acbd7ec9ffbae7cb720ba7f6bbc76b6faf41fee51eb0aa8f5e35cc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25642d6a6acbd7ec9ffbae7cb720ba7f6bbc76b6faf41fee51eb0aa8f5e35cc3->enter($__internal_25642d6a6acbd7ec9ffbae7cb720ba7f6bbc76b6faf41fee51eb0aa8f5e35cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b56584d9d56e958ae9eb0208ef196629548a3c16f2104d32e8f25c4717b8ed2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56584d9d56e958ae9eb0208ef196629548a3c16f2104d32e8f25c4717b8ed2e->enter($__internal_b56584d9d56e958ae9eb0208ef196629548a3c16f2104d32e8f25c4717b8ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b56584d9d56e958ae9eb0208ef196629548a3c16f2104d32e8f25c4717b8ed2e->leave($__internal_b56584d9d56e958ae9eb0208ef196629548a3c16f2104d32e8f25c4717b8ed2e_prof);

        
        $__internal_25642d6a6acbd7ec9ffbae7cb720ba7f6bbc76b6faf41fee51eb0aa8f5e35cc3->leave($__internal_25642d6a6acbd7ec9ffbae7cb720ba7f6bbc76b6faf41fee51eb0aa8f5e35cc3_prof);

    }

    // line 107
    public function block_body($context, array $blocks = array())
    {
        $__internal_e399e0c81261f0840abdd3903326cc92f3d5bb881b4f04d2e9cf146fd61e4994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e399e0c81261f0840abdd3903326cc92f3d5bb881b4f04d2e9cf146fd61e4994->enter($__internal_e399e0c81261f0840abdd3903326cc92f3d5bb881b4f04d2e9cf146fd61e4994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7c787fa595921553d67311a82867f73fcf8608d286b5d43a923ec7afbb57fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c787fa595921553d67311a82867f73fcf8608d286b5d43a923ec7afbb57fd3->enter($__internal_e7c787fa595921553d67311a82867f73fcf8608d286b5d43a923ec7afbb57fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7c787fa595921553d67311a82867f73fcf8608d286b5d43a923ec7afbb57fd3->leave($__internal_e7c787fa595921553d67311a82867f73fcf8608d286b5d43a923ec7afbb57fd3_prof);

        
        $__internal_e399e0c81261f0840abdd3903326cc92f3d5bb881b4f04d2e9cf146fd61e4994->leave($__internal_e399e0c81261f0840abdd3903326cc92f3d5bb881b4f04d2e9cf146fd61e4994_prof);

    }

    // line 242
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3c907030988b2b1ac292653f20b49c488d96fabe588f7821be61ac8e7a510451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c907030988b2b1ac292653f20b49c488d96fabe588f7821be61ac8e7a510451->enter($__internal_3c907030988b2b1ac292653f20b49c488d96fabe588f7821be61ac8e7a510451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8f954eb2ade70cbc3e92e078f848f2bf5dc9f7a63b662be2adcd0b0bb02616d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f954eb2ade70cbc3e92e078f848f2bf5dc9f7a63b662be2adcd0b0bb02616d2->enter($__internal_8f954eb2ade70cbc3e92e078f848f2bf5dc9f7a63b662be2adcd0b0bb02616d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8f954eb2ade70cbc3e92e078f848f2bf5dc9f7a63b662be2adcd0b0bb02616d2->leave($__internal_8f954eb2ade70cbc3e92e078f848f2bf5dc9f7a63b662be2adcd0b0bb02616d2_prof);

        
        $__internal_3c907030988b2b1ac292653f20b49c488d96fabe588f7821be61ac8e7a510451->leave($__internal_3c907030988b2b1ac292653f20b49c488d96fabe588f7821be61ac8e7a510451_prof);

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
        return array (  396 => 242,  379 => 107,  362 => 6,  344 => 5,  329 => 245,  325 => 244,  320 => 243,  318 => 242,  302 => 229,  273 => 203,  262 => 194,  185 => 118,  173 => 108,  171 => 107,  162 => 100,  158 => 82,  151 => 78,  147 => 76,  145 => 75,  129 => 61,  114 => 48,  110 => 46,  104 => 43,  101 => 42,  99 => 41,  91 => 38,  88 => 37,  86 => 36,  71 => 26,  60 => 17,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
                        <script src=\"{{ asset('assets/js/script.js') }}\"></script>

                      </body>
                      </html>
", "base.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/app/Resources/views/base.html.twig");
    }
}
