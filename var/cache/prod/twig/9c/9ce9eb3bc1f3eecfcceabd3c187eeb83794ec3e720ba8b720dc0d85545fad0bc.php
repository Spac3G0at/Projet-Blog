<?php

/* :article:show.html.twig */
class __TwigTemplate_45f81ec7ea739d58af470637b3f94af6db1c7fab750866554b2d436a2bfa44f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":article:show.html.twig", 1);
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
        echo "<div class=\"row ";
        if (($this->getAttribute(($context["article"] ?? null), "image", array()) != null)) {
            echo " haveImage ";
        }
        echo "\">
    <h1 class=\"text-center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
    ";
        // line 6
        if (($this->getAttribute(($context["article"] ?? null), "image", array()) != null)) {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "image", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 9
        echo "
    </div>

    <hr>

    <div class=\"row container\">
        <h4 class=\"text-center\">";
        // line 15
        echo "<span class=\"glyphicon glyphicon-time\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "createdAt", array()), "Y-m-d"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "createdAt", array()), "H:i:s"), "html", null, true);
        echo "</h4>
    </div>

    <hr>


    <div class=\"row article-content container\">

        ";
        // line 23
        echo $this->getAttribute(($context["article"] ?? null), "text", array());
        echo "

    </div>


    <ul class=\"list-unstyled\">
        <li>
            <a class=\"\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_edit", array("id" => $this->getAttribute(($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return ":article:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  95 => 36,  89 => 33,  83 => 30,  73 => 23,  59 => 15,  51 => 9,  44 => 7,  42 => 6,  38 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":article:show.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/article/show.html.twig");
    }
}
