<?php

/* default/contact.html.twig */
class __TwigTemplate_37d492c36369323bc3cbfd6f651f706f2f618ffc78db9d5ce6b35501ec6628f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/contact.html.twig", 1);
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
        $__internal_0aa9f499f9bd3afe758c67a5eeaef02e14863dcd280d4fa8d5a0e7af808dbbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa9f499f9bd3afe758c67a5eeaef02e14863dcd280d4fa8d5a0e7af808dbbb4->enter($__internal_0aa9f499f9bd3afe758c67a5eeaef02e14863dcd280d4fa8d5a0e7af808dbbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_8a0acf11a8886a834b8afccfa78b0d7f995696d5e5ef1c03d517d7b973885408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0acf11a8886a834b8afccfa78b0d7f995696d5e5ef1c03d517d7b973885408->enter($__internal_8a0acf11a8886a834b8afccfa78b0d7f995696d5e5ef1c03d517d7b973885408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aa9f499f9bd3afe758c67a5eeaef02e14863dcd280d4fa8d5a0e7af808dbbb4->leave($__internal_0aa9f499f9bd3afe758c67a5eeaef02e14863dcd280d4fa8d5a0e7af808dbbb4_prof);

        
        $__internal_8a0acf11a8886a834b8afccfa78b0d7f995696d5e5ef1c03d517d7b973885408->leave($__internal_8a0acf11a8886a834b8afccfa78b0d7f995696d5e5ef1c03d517d7b973885408_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0090ca5bc37ca8f9ef62b7c861b9f2c9f1d7ab96fd768f4b5251aaacd44dc1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0090ca5bc37ca8f9ef62b7c861b9f2c9f1d7ab96fd768f4b5251aaacd44dc1eb->enter($__internal_0090ca5bc37ca8f9ef62b7c861b9f2c9f1d7ab96fd768f4b5251aaacd44dc1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe68b05faaad890002ba034283a1c9eaf4ef8c10a182631ae59bf0e07eb88db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe68b05faaad890002ba034283a1c9eaf4ef8c10a182631ae59bf0e07eb88db3->enter($__internal_fe68b05faaad890002ba034283a1c9eaf4ef8c10a182631ae59bf0e07eb88db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe68b05faaad890002ba034283a1c9eaf4ef8c10a182631ae59bf0e07eb88db3->leave($__internal_fe68b05faaad890002ba034283a1c9eaf4ef8c10a182631ae59bf0e07eb88db3_prof);

        
        $__internal_0090ca5bc37ca8f9ef62b7c861b9f2c9f1d7ab96fd768f4b5251aaacd44dc1eb->leave($__internal_0090ca5bc37ca8f9ef62b7c861b9f2c9f1d7ab96fd768f4b5251aaacd44dc1eb_prof);

    }

    public function getTemplateName()
    {
        return "default/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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







 {% endblock %}
", "default/contact.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/contact.html.twig");
    }
}
