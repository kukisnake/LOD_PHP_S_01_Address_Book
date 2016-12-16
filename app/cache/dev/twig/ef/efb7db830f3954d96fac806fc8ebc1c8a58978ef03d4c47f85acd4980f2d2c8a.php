<?php

/* person/index.html.twig */
class __TwigTemplate_9ebfeaa780508806e2aefb497810df5d61ffd8350143b89cbafee7272683bd12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "person/index.html.twig", 1);
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
        $__internal_39e1234580f0f8d272f391a10a7bf38f31582966d588d04ba0d64be7db49e1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e1234580f0f8d272f391a10a7bf38f31582966d588d04ba0d64be7db49e1e9->enter($__internal_39e1234580f0f8d272f391a10a7bf38f31582966d588d04ba0d64be7db49e1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "person/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e1234580f0f8d272f391a10a7bf38f31582966d588d04ba0d64be7db49e1e9->leave($__internal_39e1234580f0f8d272f391a10a7bf38f31582966d588d04ba0d64be7db49e1e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11aacfdcb37d3b86ac77cae995ca14bc422a3a505b1a60e4adc735a79c086dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11aacfdcb37d3b86ac77cae995ca14bc422a3a505b1a60e4adc735a79c086dcb->enter($__internal_11aacfdcb37d3b86ac77cae995ca14bc422a3a505b1a60e4adc735a79c086dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["people"] ?? $this->getContext($context, "people")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "surname", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person_new");
        echo "\">Create a new person</a>
        </li>
    </ul>
";
        
        $__internal_11aacfdcb37d3b86ac77cae995ca14bc422a3a505b1a60e4adc735a79c086dcb->leave($__internal_11aacfdcb37d3b86ac77cae995ca14bc422a3a505b1a60e4adc735a79c086dcb_prof);

    }

    public function getTemplateName()
    {
        return "person/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>People list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for person in people %}
            <tr>
                <td><a href=\"{{ path('person_show', { 'id': person.id }) }}\">{{ person.id }}</a></td>
                <td>{{ person.name }}</td>
                <td>{{ person.surname }}</td>
                <td>{{ person.description }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('person_show', { 'id': person.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('person_edit', { 'id': person.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('person_new') }}\">Create a new person</a>
        </li>
    </ul>
{% endblock %}
", "person/index.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/person/index.html.twig");
    }
}
