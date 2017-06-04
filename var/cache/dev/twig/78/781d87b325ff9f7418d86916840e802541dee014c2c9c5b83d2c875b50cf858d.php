<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_bc037492c4970148099630a5379c51b5f6173595447c6bf4f073d651c025a729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa14ba34510d88217030b9ccac3cdbc5cc2cb053b111a204d8f56524875f8079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa14ba34510d88217030b9ccac3cdbc5cc2cb053b111a204d8f56524875f8079->enter($__internal_aa14ba34510d88217030b9ccac3cdbc5cc2cb053b111a204d8f56524875f8079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_ba783e05bd033b3d2a37cb7fa8c9d79de76c6b9cf01725aecbbd7d356a81a997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba783e05bd033b3d2a37cb7fa8c9d79de76c6b9cf01725aecbbd7d356a81a997->enter($__internal_ba783e05bd033b3d2a37cb7fa8c9d79de76c6b9cf01725aecbbd7d356a81a997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa14ba34510d88217030b9ccac3cdbc5cc2cb053b111a204d8f56524875f8079->leave($__internal_aa14ba34510d88217030b9ccac3cdbc5cc2cb053b111a204d8f56524875f8079_prof);

        
        $__internal_ba783e05bd033b3d2a37cb7fa8c9d79de76c6b9cf01725aecbbd7d356a81a997->leave($__internal_ba783e05bd033b3d2a37cb7fa8c9d79de76c6b9cf01725aecbbd7d356a81a997_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1db614fed1ed1334d444457cfb556e7cf6b319ee4b324e837167b8362d46f4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db614fed1ed1334d444457cfb556e7cf6b319ee4b324e837167b8362d46f4e7->enter($__internal_1db614fed1ed1334d444457cfb556e7cf6b319ee4b324e837167b8362d46f4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a1cc1c8e20306cecec9770262c9edfdda65c6c5b69f7ce9aab36f54ee9d568d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1cc1c8e20306cecec9770262c9edfdda65c6c5b69f7ce9aab36f54ee9d568d4->enter($__internal_a1cc1c8e20306cecec9770262c9edfdda65c6c5b69f7ce9aab36f54ee9d568d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a1cc1c8e20306cecec9770262c9edfdda65c6c5b69f7ce9aab36f54ee9d568d4->leave($__internal_a1cc1c8e20306cecec9770262c9edfdda65c6c5b69f7ce9aab36f54ee9d568d4_prof);

        
        $__internal_1db614fed1ed1334d444457cfb556e7cf6b319ee4b324e837167b8362d46f4e7->leave($__internal_1db614fed1ed1334d444457cfb556e7cf6b319ee4b324e837167b8362d46f4e7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}


{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
