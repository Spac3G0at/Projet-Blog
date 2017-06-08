<?php

/* :default:contact.html.twig */
class __TwigTemplate_06e47b870b97f90f64e81fe6074bfa5644e423fb59c500b42d87424b261de1b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:contact.html.twig", 1);
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
\t<div class=\"row\">
\t\t<h1 class=\"text-center\" id=\"topp\">CONTACT</h1>
\t</div>
\t\t<hr>

\t<div class=\"row\">
      <div class=\"col-md-6 col-md-offset-3 col-xs-12 br\">
        <div class=\"well well-sm\">
          <form class=\"form-horizontal\" action=\"\" method=\"post\">
          <fieldset>
            <!-- Name input-->
            <div class=\"form-group col-md-12 text-center\">
              <label for=\"name\">NOM</label>
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"Votre Nom\" class=\"form-control \">

            </div>

            <!-- Email input-->
             <div class=\"form-group col-md-12  text-center\">
              <label for=\"email\">Votre Email</label>
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Votre email\" class=\"form-control\">
            </div>


            <!-- Message body -->



               <div class=\"form-group col-md-12  text-center\">
              <label for=\"name\">Objet</label>

                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"objet\" class=\"form-control\">

            </div>


            <div class=\"form-group col-md-12  text-center\">
              <label for=\"message\">Texte</label>

                <textarea class=\"form-control\" id=\"message\" name=\"message\" placeholder=\"texte\" rows=\"5\"></textarea>

            </div>

            <!-- Form actions -->

           <input id=\"ContactForm1_contact-form-submit\" type=\"button\" value=\"Send\">
          </fieldset>
          </form>
        </div>
      </div>
\t</div>




 <a href=\"#\" class=\"fa fa-chevron-up fa-2x\" aria-hidden=\"true\" id=\"toTop\"></a>







 ";
    }

    public function getTemplateName()
    {
        return ":default:contact.html.twig";
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
        return new Twig_Source("", ":default:contact.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/contact.html.twig");
    }
}
