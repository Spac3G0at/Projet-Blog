<?php

/* @FOSUser/Registration/Modal/register.html.twig */
class __TwigTemplate_c4573ef71992498a698d61c3a5de8e7dfba65a082cc8dc485db44ad0a257890e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_337892970d7cb39ddb39043ca202a3952ab2ef24e9e10d9c829b83b21499a751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337892970d7cb39ddb39043ca202a3952ab2ef24e9e10d9c829b83b21499a751->enter($__internal_337892970d7cb39ddb39043ca202a3952ab2ef24e9e10d9c829b83b21499a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        $__internal_20854e1ca11d66805f12501240c55c4f28d13cdc73a818acee5ec29e900f8b1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20854e1ca11d66805f12501240c55c4f28d13cdc73a818acee5ec29e900f8b1c->enter($__internal_20854e1ca11d66805f12501240c55c4f28d13cdc73a818acee5ec29e900f8b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/Modal/register.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_337892970d7cb39ddb39043ca202a3952ab2ef24e9e10d9c829b83b21499a751->leave($__internal_337892970d7cb39ddb39043ca202a3952ab2ef24e9e10d9c829b83b21499a751_prof);

        
        $__internal_20854e1ca11d66805f12501240c55c4f28d13cdc73a818acee5ec29e900f8b1c->leave($__internal_20854e1ca11d66805f12501240c55c4f28d13cdc73a818acee5ec29e900f8b1c_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47cf1db28a3e14bf32afede7bbe096fa2dd3f6728c9b1c7267197e8c12564b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cf1db28a3e14bf32afede7bbe096fa2dd3f6728c9b1c7267197e8c12564b25->enter($__internal_47cf1db28a3e14bf32afede7bbe096fa2dd3f6728c9b1c7267197e8c12564b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9180daa82c30745089143a4b424b2e8e55e7cbf542635d197808b2a1c4d97ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9180daa82c30745089143a4b424b2e8e55e7cbf542635d197808b2a1c4d97ad5->enter($__internal_9180daa82c30745089143a4b424b2e8e55e7cbf542635d197808b2a1c4d97ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "@FOSUser/Registration/Modal/register.html.twig", 4)->display($context);
        
        $__internal_9180daa82c30745089143a4b424b2e8e55e7cbf542635d197808b2a1c4d97ad5->leave($__internal_9180daa82c30745089143a4b424b2e8e55e7cbf542635d197808b2a1c4d97ad5_prof);

        
        $__internal_47cf1db28a3e14bf32afede7bbe096fa2dd3f6728c9b1c7267197e8c12564b25->leave($__internal_47cf1db28a3e14bf32afede7bbe096fa2dd3f6728c9b1c7267197e8c12564b25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/Modal/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# {% extends \"@FOSUser/layout.html.twig\" %} #}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/Modal/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/Modal/register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
