<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_cb3b6f6cd50196e6e625df163aa1dd7d8b10417530eac29b05b6986909cab282 extends Twig_Template
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
        $__internal_cdd1a425c0ed9114ac3fde88d5cb3747f3bd15fa68da1553674fc2d16eb4ae30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd1a425c0ed9114ac3fde88d5cb3747f3bd15fa68da1553674fc2d16eb4ae30->enter($__internal_cdd1a425c0ed9114ac3fde88d5cb3747f3bd15fa68da1553674fc2d16eb4ae30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_d9ceee836c2441c7f096bbd24bc7ed50bded211c4d4798f7666d8e77dbfc3359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ceee836c2441c7f096bbd24bc7ed50bded211c4d4798f7666d8e77dbfc3359->enter($__internal_d9ceee836c2441c7f096bbd24bc7ed50bded211c4d4798f7666d8e77dbfc3359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_cdd1a425c0ed9114ac3fde88d5cb3747f3bd15fa68da1553674fc2d16eb4ae30->leave($__internal_cdd1a425c0ed9114ac3fde88d5cb3747f3bd15fa68da1553674fc2d16eb4ae30_prof);

        
        $__internal_d9ceee836c2441c7f096bbd24bc7ed50bded211c4d4798f7666d8e77dbfc3359->leave($__internal_d9ceee836c2441c7f096bbd24bc7ed50bded211c4d4798f7666d8e77dbfc3359_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
