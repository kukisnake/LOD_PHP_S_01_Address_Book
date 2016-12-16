<?php

/* groups/new.html.twig */
class __TwigTemplate_ad74da46664aea5f8fd6ad8f0ad2141d2636dde24830fa54c1f3981da1d576c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groups/new.html.twig", 1);
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
        $__internal_51935e9c4f551caee6728cd4a581a92d606aef0b3fe9f4dd50708bed6d1dcd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51935e9c4f551caee6728cd4a581a92d606aef0b3fe9f4dd50708bed6d1dcd76->enter($__internal_51935e9c4f551caee6728cd4a581a92d606aef0b3fe9f4dd50708bed6d1dcd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groups/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51935e9c4f551caee6728cd4a581a92d606aef0b3fe9f4dd50708bed6d1dcd76->leave($__internal_51935e9c4f551caee6728cd4a581a92d606aef0b3fe9f4dd50708bed6d1dcd76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4945bbd81667c77429b55b4ef23d5fb5b91134b9661c21285305266b7f1d1b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4945bbd81667c77429b55b4ef23d5fb5b91134b9661c21285305266b7f1d1b8f->enter($__internal_4945bbd81667c77429b55b4ef23d5fb5b91134b9661c21285305266b7f1d1b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Group creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4945bbd81667c77429b55b4ef23d5fb5b91134b9661c21285305266b7f1d1b8f->leave($__internal_4945bbd81667c77429b55b4ef23d5fb5b91134b9661c21285305266b7f1d1b8f_prof);

    }

    public function getTemplateName()
    {
        return "groups/new.html.twig";
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
    <h1>Group creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('groups_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "groups/new.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/groups/new.html.twig");
    }
}
