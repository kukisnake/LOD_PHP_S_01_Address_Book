<?php

/* address/index.html.twig */
class __TwigTemplate_dd4204f5491765a0434cc9d1136b69decc7edbe1285fede273b88e20a16a6f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "address/index.html.twig", 1);
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
        $__internal_af1ea9c2adfa27f804335cf0fd4ad47c1768e9b7b02dc06c69395b7f8631998c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1ea9c2adfa27f804335cf0fd4ad47c1768e9b7b02dc06c69395b7f8631998c->enter($__internal_af1ea9c2adfa27f804335cf0fd4ad47c1768e9b7b02dc06c69395b7f8631998c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "address/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af1ea9c2adfa27f804335cf0fd4ad47c1768e9b7b02dc06c69395b7f8631998c->leave($__internal_af1ea9c2adfa27f804335cf0fd4ad47c1768e9b7b02dc06c69395b7f8631998c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fa535a599f85cef4f7a38ed1815e5b68926f5b1293a3389e56e8b51e1c9fd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa535a599f85cef4f7a38ed1815e5b68926f5b1293a3389e56e8b51e1c9fd5b->enter($__internal_7fa535a599f85cef4f7a38ed1815e5b68926f5b1293a3389e56e8b51e1c9fd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Addresses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>City</th>
                <th>Street</th>
                <th>Housenumber</th>
                <th>Flatnumber</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? $this->getContext($context, "addresses")));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_show", array("id" => $this->getAttribute($context["address"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "street", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "houseNumber", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["address"], "flatNumber", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_show", array("id" => $this->getAttribute($context["address"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_edit", array("id" => $this->getAttribute($context["address"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_new");
        echo "\">Create a new address</a>
        </li>
    </ul>
";
        
        $__internal_7fa535a599f85cef4f7a38ed1815e5b68926f5b1293a3389e56e8b51e1c9fd5b->leave($__internal_7fa535a599f85cef4f7a38ed1815e5b68926f5b1293a3389e56e8b51e1c9fd5b_prof);

    }

    public function getTemplateName()
    {
        return "address/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Addresses list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>City</th>
                <th>Street</th>
                <th>Housenumber</th>
                <th>Flatnumber</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for address in addresses %}
            <tr>
                <td><a href=\"{{ path('address_show', { 'id': address.id }) }}\">{{ address.id }}</a></td>
                <td>{{ address.city }}</td>
                <td>{{ address.street }}</td>
                <td>{{ address.houseNumber }}</td>
                <td>{{ address.flatNumber }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('address_show', { 'id': address.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('address_edit', { 'id': address.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('address_new') }}\">Create a new address</a>
        </li>
    </ul>
{% endblock %}
", "address/index.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/address/index.html.twig");
    }
}
