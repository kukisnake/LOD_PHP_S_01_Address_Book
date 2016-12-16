<?php

/* person/new.html.twig */
class __TwigTemplate_f82bf615fb3ac7490122f0d5755257ee8baf24d16ea523ec833975b1174aa2dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "person/new.html.twig", 1);
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
        $__internal_3d62bc37821fb841d8946e7bbf2fb73ec74d0ea1c1d5e02e7a5bf314a2d9e739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d62bc37821fb841d8946e7bbf2fb73ec74d0ea1c1d5e02e7a5bf314a2d9e739->enter($__internal_3d62bc37821fb841d8946e7bbf2fb73ec74d0ea1c1d5e02e7a5bf314a2d9e739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d62bc37821fb841d8946e7bbf2fb73ec74d0ea1c1d5e02e7a5bf314a2d9e739->leave($__internal_3d62bc37821fb841d8946e7bbf2fb73ec74d0ea1c1d5e02e7a5bf314a2d9e739_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca5985305f660e9737c32f592fcf28d0b3b13d8520a520c87815be57ae1f7d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca5985305f660e9737c32f592fcf28d0b3b13d8520a520c87815be57ae1f7d5->enter($__internal_9ca5985305f660e9737c32f592fcf28d0b3b13d8520a520c87815be57ae1f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Person creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9ca5985305f660e9737c32f592fcf28d0b3b13d8520a520c87815be57ae1f7d5->leave($__internal_9ca5985305f660e9737c32f592fcf28d0b3b13d8520a520c87815be57ae1f7d5_prof);

    }

    public function getTemplateName()
    {
        return "person/new.html.twig";
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
    <h1>Person creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('person_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "person/new.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/person/new.html.twig");
    }
}
