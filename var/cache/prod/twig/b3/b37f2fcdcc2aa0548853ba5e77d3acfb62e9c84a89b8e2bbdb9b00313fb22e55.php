<?php

/* :default:post.html.twig */
class __TwigTemplate_fd4eb5f457595a06281d3c53e5c3368570aadc94d483369ff3db291b2b995642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:post.html.twig", 1);
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
\t";
        // line 5
        if (($this->getAttribute(($context["article"] ?? null), "isDraft", array()) != 1)) {
            // line 6
            echo "
\t<div class=\"row ";
            // line 7
            if (($this->getAttribute(($context["article"] ?? null), "image", array()) != null)) {
                echo " haveImage ";
            }
            echo "\">
\t<h1 class=\"text-center\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", array()), "html", null, true);
            echo "</h1>
\t";
            // line 9
            if (($this->getAttribute(($context["article"] ?? null), "image", array()) != null)) {
                // line 10
                echo "\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/articles/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "image", array()), "html", null, true);
                echo "\">
\t";
            }
            // line 12
            echo "
\t</div>

\t<hr>

\t<div class=\"row container\">
\t\t<h4 class=\"text-center\">";
            // line 18
            echo "<span class=\"glyphicon glyphicon-time\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "createdAt", array()), "Y-m-d"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "createdAt", array()), "H:i:s"), "html", null, true);
            echo "</h4>
\t</div>

\t<hr>


\t<div class=\"row article-content container\">

\t\t";
            // line 26
            echo $this->getAttribute(($context["article"] ?? null), "text", array());
            echo "

\t</div>

\t";
        } else {
            // line 31
            echo "
\t\t<h1 class=\"text-center\">Article indisponible</h1>

\t";
        }
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return ":default:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  88 => 31,  80 => 26,  66 => 18,  58 => 12,  51 => 10,  49 => 9,  45 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:post.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/app/Resources/views/default/post.html.twig");
    }
}
