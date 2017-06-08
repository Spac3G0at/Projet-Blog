<?php

/* KnpPaginatorBundle:Pagination:sliding.html.twig */
class __TwigTemplate_dd6dc9d00318c3a87ac66ea9a1650b1c9e2c5dbed1be64430d34110a4d3c1f4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 4
            echo "    <div class=\"pagination\">
        <ul class=\"pagination\">
            ";
            // line 6
            if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
                // line 7
                echo "                <li>";
                // line 8
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["first"] ?? null)))), "html", null, true);
                echo "\">&lt;&lt;</a>
                ";
                // line 9
                echo "</li>
            ";
            }
            // line 11
            echo "
            ";
            // line 12
            if (array_key_exists("previous", $context)) {
                // line 13
                echo "                <li>";
                // line 14
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
                echo "\">&lt;</a>
                ";
                // line 15
                echo "</li>
            ";
            }
            // line 17
            echo "
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 19
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 20
                    echo "                    <li>";
                    // line 21
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    ";
                    // line 22
                    echo "</li>
                ";
                } else {
                    // line 24
                    echo "                    <li class=\"active\"><span class=\"current\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
                ";
                }
                // line 26
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
            ";
            // line 29
            if (array_key_exists("next", $context)) {
                // line 30
                echo "                <li>";
                // line 31
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
                echo "\">&gt;</a>
               ";
                // line 32
                echo "</li>
            ";
            }
            // line 34
            echo "
            ";
            // line 35
            if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
                // line 36
                echo "                <li>";
                // line 37
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["last"] ?? null)))), "html", null, true);
                echo "\">&gt;&gt;</a>
                ";
                // line 38
                echo "</li>
            ";
            }
            // line 40
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  121 => 38,  116 => 37,  114 => 36,  112 => 35,  109 => 34,  105 => 32,  100 => 31,  98 => 30,  96 => 29,  93 => 28,  86 => 26,  80 => 24,  76 => 22,  69 => 21,  67 => 20,  64 => 19,  60 => 18,  57 => 17,  53 => 15,  48 => 14,  46 => 13,  44 => 12,  41 => 11,  37 => 9,  32 => 8,  30 => 7,  28 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpPaginatorBundle:Pagination:sliding.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sliding.html.twig");
    }
}
