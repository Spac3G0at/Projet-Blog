<?php

/* FOSUserBundle:Registration/Modal:register.html.twig */
class __TwigTemplate_92d54f68683f0b72b3aa51f4b0c9fed9a54d024e316097ffb09f4c5c359e4f30 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->loadTemplate("@FOSUser/Registration/Modal/register_content.html.twig", "FOSUserBundle:Registration/Modal:register.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration/Modal:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  23 => 3,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration/Modal:register.html.twig", "/home/spac3g0at/Documents/Simplon/Projet Fin Formation/Blog/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/Modal/register.html.twig");
    }
}
