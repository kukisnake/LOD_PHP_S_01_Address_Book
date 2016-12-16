<?php

/* groups/index.html.twig */
class __TwigTemplate_f2659615965f75985b18581a175ca8a6bece4dd6d5a63ad757b35591e38c028b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "groups/index.html.twig", 1);
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
        $__internal_a9c0dd582741bba4f457232ee2d4b657fa5eb2d87b4d759378a591f344a7ae78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c0dd582741bba4f457232ee2d4b657fa5eb2d87b4d759378a591f344a7ae78->enter($__internal_a9c0dd582741bba4f457232ee2d4b657fa5eb2d87b4d759378a591f344a7ae78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "groups/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9c0dd582741bba4f457232ee2d4b657fa5eb2d87b4d759378a591f344a7ae78->leave($__internal_a9c0dd582741bba4f457232ee2d4b657fa5eb2d87b4d759378a591f344a7ae78_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_830d91aefa18abb9194b38c2c84ba25e2cd3f62133eaf03feaa000bc466f7829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830d91aefa18abb9194b38c2c84ba25e2cd3f62133eaf03feaa000bc466f7829->enter($__internal_830d91aefa18abb9194b38c2c84ba25e2cd3f62133eaf03feaa000bc466f7829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Groups list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_show", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_edit", array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_new");
        echo "\">Create a new group</a>
        </li>
    </ul>
";
        
        $__internal_830d91aefa18abb9194b38c2c84ba25e2cd3f62133eaf03feaa000bc466f7829->leave($__internal_830d91aefa18abb9194b38c2c84ba25e2cd3f62133eaf03feaa000bc466f7829_prof);

    }

    public function getTemplateName()
    {
        return "groups/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Groups list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for group in groups %}
            <tr>
                <td><a href=\"{{ path('groups_show', { 'id': group.id }) }}\">{{ group.id }}</a></td>
                <td>{{ group.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('groups_show', { 'id': group.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('groups_edit', { 'id': group.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('groups_new') }}\">Create a new group</a>
        </li>
    </ul>
{% endblock %}
", "groups/index.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/groups/index.html.twig");
    }
}
