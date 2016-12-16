<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7a81e6dd5b0f22bf5375f39c8e96a36a259855cb54b230ce4cdaaa9ceee73599 extends Twig_Template
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
        $__internal_18fad047d35123948ef96ba4404cb7e579c22b1780d268eb1c081545c6287fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fad047d35123948ef96ba4404cb7e579c22b1780d268eb1c081545c6287fd2->enter($__internal_18fad047d35123948ef96ba4404cb7e579c22b1780d268eb1c081545c6287fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18fad047d35123948ef96ba4404cb7e579c22b1780d268eb1c081545c6287fd2->leave($__internal_18fad047d35123948ef96ba4404cb7e579c22b1780d268eb1c081545c6287fd2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22512f22b163fbfcf6607860f0a180d562951b4096f67889e2e9634a41069351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22512f22b163fbfcf6607860f0a180d562951b4096f67889e2e9634a41069351->enter($__internal_22512f22b163fbfcf6607860f0a180d562951b4096f67889e2e9634a41069351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_22512f22b163fbfcf6607860f0a180d562951b4096f67889e2e9634a41069351->leave($__internal_22512f22b163fbfcf6607860f0a180d562951b4096f67889e2e9634a41069351_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_577e264fa7d41b7121a377a28b2133f32e496a7986bbffa0a1ca36a7cbef384c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_577e264fa7d41b7121a377a28b2133f32e496a7986bbffa0a1ca36a7cbef384c->enter($__internal_577e264fa7d41b7121a377a28b2133f32e496a7986bbffa0a1ca36a7cbef384c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_577e264fa7d41b7121a377a28b2133f32e496a7986bbffa0a1ca36a7cbef384c->leave($__internal_577e264fa7d41b7121a377a28b2133f32e496a7986bbffa0a1ca36a7cbef384c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ea5ec4e448ca102d3423103c99357e6ebfb935e20c4edee1430541856cb4834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea5ec4e448ca102d3423103c99357e6ebfb935e20c4edee1430541856cb4834->enter($__internal_2ea5ec4e448ca102d3423103c99357e6ebfb935e20c4edee1430541856cb4834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ea5ec4e448ca102d3423103c99357e6ebfb935e20c4edee1430541856cb4834->leave($__internal_2ea5ec4e448ca102d3423103c99357e6ebfb935e20c4edee1430541856cb4834_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
