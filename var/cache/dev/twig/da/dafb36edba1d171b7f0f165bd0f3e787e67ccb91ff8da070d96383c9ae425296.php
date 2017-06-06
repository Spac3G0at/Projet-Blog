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
        $__internal_c8466db7da77a25fe57a297c01f40f545b3c5e8c58af7880853a88a6e774092c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8466db7da77a25fe57a297c01f40f545b3c5e8c58af7880853a88a6e774092c->enter($__internal_c8466db7da77a25fe57a297c01f40f545b3c5e8c58af7880853a88a6e774092c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $__internal_efa616844593283cadbc785f315baa37f26f71f32adbb4d85cc264228c64f136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa616844593283cadbc785f315baa37f26f71f32adbb4d85cc264228c64f136->enter($__internal_efa616844593283cadbc785f315baa37f26f71f32adbb4d85cc264228c64f136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8466db7da77a25fe57a297c01f40f545b3c5e8c58af7880853a88a6e774092c->leave($__internal_c8466db7da77a25fe57a297c01f40f545b3c5e8c58af7880853a88a6e774092c_prof);

        
        $__internal_efa616844593283cadbc785f315baa37f26f71f32adbb4d85cc264228c64f136->leave($__internal_efa616844593283cadbc785f315baa37f26f71f32adbb4d85cc264228c64f136_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_98f6b3b8023bd493d8c96495df4fd70927640d97282b0e5421e2474cc4af7d38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f6b3b8023bd493d8c96495df4fd70927640d97282b0e5421e2474cc4af7d38->enter($__internal_98f6b3b8023bd493d8c96495df4fd70927640d97282b0e5421e2474cc4af7d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1860894ffb95789ea3b28d8157368c17989c32f9f0376c1148c9283f6f07a876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1860894ffb95789ea3b28d8157368c17989c32f9f0376c1148c9283f6f07a876->enter($__internal_1860894ffb95789ea3b28d8157368c17989c32f9f0376c1148c9283f6f07a876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <div class=\"form-group col-md-12 col-xs-9 text-center\">
              <label for=\"name\">NOM</label>
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"Votre Nom\" class=\"form-control \">
           
            </div>
    
            <!-- Email input-->
             <div class=\"form-group col-md-12 text-center\">
              <label for=\"email\">Votre Email</label>
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Votre email\" class=\"form-control\">
            </div>
    

            <!-- Message body -->



               <div class=\"form-group col-md-12 text-center\">
              <label for=\"name\">Objet</label>
              
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"objet\" class=\"form-control\">
              
            </div>


            <div class=\"form-group col-md-12 text-center\">
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
        
        $__internal_1860894ffb95789ea3b28d8157368c17989c32f9f0376c1148c9283f6f07a876->leave($__internal_1860894ffb95789ea3b28d8157368c17989c32f9f0376c1148c9283f6f07a876_prof);

        
        $__internal_98f6b3b8023bd493d8c96495df4fd70927640d97282b0e5421e2474cc4af7d38->leave($__internal_98f6b3b8023bd493d8c96495df4fd70927640d97282b0e5421e2474cc4af7d38_prof);

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
            <div class=\"form-group col-md-12 col-xs-9 text-center\">
              <label for=\"name\">NOM</label>
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"Votre Nom\" class=\"form-control \">
           
            </div>
    
            <!-- Email input-->
             <div class=\"form-group col-md-12 text-center\">
              <label for=\"email\">Votre Email</label>
                <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"Votre email\" class=\"form-control\">
            </div>
    

            <!-- Message body -->



               <div class=\"form-group col-md-12 text-center\">
              <label for=\"name\">Objet</label>
              
                <input id=\"name\" name=\"name\" type=\"text\" placeholder=\"objet\" class=\"form-control\">
              
            </div>


            <div class=\"form-group col-md-12 text-center\">
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







 {% endblock %}", "default/contact.html.twig", "/home/thomas/Bureau/1- PORJET FIN FORMATION/Blog/app/Resources/views/default/contact.html.twig");
    }
}
