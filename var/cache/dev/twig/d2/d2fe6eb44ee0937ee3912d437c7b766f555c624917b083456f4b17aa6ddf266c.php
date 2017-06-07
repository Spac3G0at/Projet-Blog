<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea9333fd7888156b515c0c95b3a3891e95506cc7ae5d2638be9f321154a0b5c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19512a16c32a2bce5b234db3d12bfc3f8a4c110cab84eebb387f5e791ca97acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19512a16c32a2bce5b234db3d12bfc3f8a4c110cab84eebb387f5e791ca97acd->enter($__internal_19512a16c32a2bce5b234db3d12bfc3f8a4c110cab84eebb387f5e791ca97acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e5b8c469da79d09652c5a3252d13b1fa7a2a3ec29f3dfa6094ffb3b110098b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b8c469da79d09652c5a3252d13b1fa7a2a3ec29f3dfa6094ffb3b110098b79->enter($__internal_e5b8c469da79d09652c5a3252d13b1fa7a2a3ec29f3dfa6094ffb3b110098b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_19512a16c32a2bce5b234db3d12bfc3f8a4c110cab84eebb387f5e791ca97acd->leave($__internal_19512a16c32a2bce5b234db3d12bfc3f8a4c110cab84eebb387f5e791ca97acd_prof);

        
        $__internal_e5b8c469da79d09652c5a3252d13b1fa7a2a3ec29f3dfa6094ffb3b110098b79->leave($__internal_e5b8c469da79d09652c5a3252d13b1fa7a2a3ec29f3dfa6094ffb3b110098b79_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f5a385a51e742dc127f37f228c22446d42971f6df3058f23ff6346ca69f0c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5a385a51e742dc127f37f228c22446d42971f6df3058f23ff6346ca69f0c87->enter($__internal_6f5a385a51e742dc127f37f228c22446d42971f6df3058f23ff6346ca69f0c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb73944247f5b11c9edcafca5654364c1bc9bd05e909dd748edbe885fa78f026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb73944247f5b11c9edcafca5654364c1bc9bd05e909dd748edbe885fa78f026->enter($__internal_bb73944247f5b11c9edcafca5654364c1bc9bd05e909dd748edbe885fa78f026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bb73944247f5b11c9edcafca5654364c1bc9bd05e909dd748edbe885fa78f026->leave($__internal_bb73944247f5b11c9edcafca5654364c1bc9bd05e909dd748edbe885fa78f026_prof);

        
        $__internal_6f5a385a51e742dc127f37f228c22446d42971f6df3058f23ff6346ca69f0c87->leave($__internal_6f5a385a51e742dc127f37f228c22446d42971f6df3058f23ff6346ca69f0c87_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
