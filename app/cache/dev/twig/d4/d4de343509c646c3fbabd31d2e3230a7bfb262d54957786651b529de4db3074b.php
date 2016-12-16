<?php

/* address/new.html.twig */
class __TwigTemplate_824941aceb0820d805216853e0aac362aa5655314aadf6310fb079b82e34b2b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "address/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_201be952f23ad32f2ca33503baf8375ffef5aa4b8d3550c009ea00554b0b9f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201be952f23ad32f2ca33503baf8375ffef5aa4b8d3550c009ea00554b0b9f36->enter($__internal_201be952f23ad32f2ca33503baf8375ffef5aa4b8d3550c009ea00554b0b9f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "address/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201be952f23ad32f2ca33503baf8375ffef5aa4b8d3550c009ea00554b0b9f36->leave($__internal_201be952f23ad32f2ca33503baf8375ffef5aa4b8d3550c009ea00554b0b9f36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_722eade172206f5589e95da311587edc58ea5e3eec4e9469078bccaafe331691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_722eade172206f5589e95da311587edc58ea5e3eec4e9469078bccaafe331691->enter($__internal_722eade172206f5589e95da311587edc58ea5e3eec4e9469078bccaafe331691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Address creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_722eade172206f5589e95da311587edc58ea5e3eec4e9469078bccaafe331691->leave($__internal_722eade172206f5589e95da311587edc58ea5e3eec4e9469078bccaafe331691_prof);

    }

    public function getTemplateName()
    {
        return "address/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Address creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('address_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "address/new.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/address/new.html.twig");
    }
}
