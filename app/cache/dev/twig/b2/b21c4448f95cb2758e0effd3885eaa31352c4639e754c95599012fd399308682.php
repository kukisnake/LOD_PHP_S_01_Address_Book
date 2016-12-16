<?php

/* ABBundle:Default:index.html.twig */
class __TwigTemplate_811ce96bed1a898da1863bc1f1de4942731ab0023cf83e8efd8f75dc6ab0b87f extends Twig_Template
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
        $__internal_596d789ccf271030783df53d097fd25c95c2ac9286205c38cec5b26fd4019f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596d789ccf271030783df53d097fd25c95c2ac9286205c38cec5b26fd4019f03->enter($__internal_596d789ccf271030783df53d097fd25c95c2ac9286205c38cec5b26fd4019f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ABBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_596d789ccf271030783df53d097fd25c95c2ac9286205c38cec5b26fd4019f03->leave($__internal_596d789ccf271030783df53d097fd25c95c2ac9286205c38cec5b26fd4019f03_prof);

    }

    public function getTemplateName()
    {
        return "ABBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "ABBundle:Default:index.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/src/Address_Book/AddressBookBundle/Resources/views/Default/index.html.twig");
    }
}
