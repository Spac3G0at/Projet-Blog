<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_8d3984af6c5f9670b7c143475fc27e0dcaef1ee2903512917c11579739b1bc5c extends Twig_Template
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
        $__internal_634aa6f27b1a1dcb021bf06751b3d723621531dbec8b98991e0d5c9535d91708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634aa6f27b1a1dcb021bf06751b3d723621531dbec8b98991e0d5c9535d91708->enter($__internal_634aa6f27b1a1dcb021bf06751b3d723621531dbec8b98991e0d5c9535d91708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_80ecc0de43a0260f79b4f3ffe2314a1206ee5b90560138b344eb668e34abd661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ecc0de43a0260f79b4f3ffe2314a1206ee5b90560138b344eb668e34abd661->enter($__internal_80ecc0de43a0260f79b4f3ffe2314a1206ee5b90560138b344eb668e34abd661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

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
        
        $__internal_634aa6f27b1a1dcb021bf06751b3d723621531dbec8b98991e0d5c9535d91708->leave($__internal_634aa6f27b1a1dcb021bf06751b3d723621531dbec8b98991e0d5c9535d91708_prof);

        
        $__internal_80ecc0de43a0260f79b4f3ffe2314a1206ee5b90560138b344eb668e34abd661->leave($__internal_80ecc0de43a0260f79b4f3ffe2314a1206ee5b90560138b344eb668e34abd661_prof);

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
