<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdf1449b7d8c77c9bfab71d7a3cb63f77e02e6165e2817056d471b547e1a102b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34652832b842ad1a0f0ac1ea9d8b059429e2713da9460986e0d392f5652462bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34652832b842ad1a0f0ac1ea9d8b059429e2713da9460986e0d392f5652462bd->enter($__internal_34652832b842ad1a0f0ac1ea9d8b059429e2713da9460986e0d392f5652462bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34652832b842ad1a0f0ac1ea9d8b059429e2713da9460986e0d392f5652462bd->leave($__internal_34652832b842ad1a0f0ac1ea9d8b059429e2713da9460986e0d392f5652462bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b444438e2868f61803a300e5be00556b318aa9956daa77a6edb4cf62d8cf4b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b444438e2868f61803a300e5be00556b318aa9956daa77a6edb4cf62d8cf4b45->enter($__internal_b444438e2868f61803a300e5be00556b318aa9956daa77a6edb4cf62d8cf4b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b444438e2868f61803a300e5be00556b318aa9956daa77a6edb4cf62d8cf4b45->leave($__internal_b444438e2868f61803a300e5be00556b318aa9956daa77a6edb4cf62d8cf4b45_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9d5314e972990be632864f7eda7fbe48380f2f73dfb5bed825a688c5bd77f822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5314e972990be632864f7eda7fbe48380f2f73dfb5bed825a688c5bd77f822->enter($__internal_9d5314e972990be632864f7eda7fbe48380f2f73dfb5bed825a688c5bd77f822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9d5314e972990be632864f7eda7fbe48380f2f73dfb5bed825a688c5bd77f822->leave($__internal_9d5314e972990be632864f7eda7fbe48380f2f73dfb5bed825a688c5bd77f822_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f69f21b0ca0e69840a885cd9a286afad9480cc8469743256b5a81178e03f85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f69f21b0ca0e69840a885cd9a286afad9480cc8469743256b5a81178e03f85a->enter($__internal_6f69f21b0ca0e69840a885cd9a286afad9480cc8469743256b5a81178e03f85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f69f21b0ca0e69840a885cd9a286afad9480cc8469743256b5a81178e03f85a->leave($__internal_6f69f21b0ca0e69840a885cd9a286afad9480cc8469743256b5a81178e03f85a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
