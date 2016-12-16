<?php

/* address/show.html.twig */
class __TwigTemplate_c46419d3a64239894af29bde250bb0ff55a708e170871f65b82e9d0e693dbb48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "address/show.html.twig", 1);
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
        $__internal_6340301fe40b99f59542aab3e6b5e6268f87dfd13aea6e257a8df907033bd2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6340301fe40b99f59542aab3e6b5e6268f87dfd13aea6e257a8df907033bd2b3->enter($__internal_6340301fe40b99f59542aab3e6b5e6268f87dfd13aea6e257a8df907033bd2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "address/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6340301fe40b99f59542aab3e6b5e6268f87dfd13aea6e257a8df907033bd2b3->leave($__internal_6340301fe40b99f59542aab3e6b5e6268f87dfd13aea6e257a8df907033bd2b3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9486238e584531ec6d8b4e153f6e6dc5c90411480870b913bc7b4fae7eb3ec0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9486238e584531ec6d8b4e153f6e6dc5c90411480870b913bc7b4fae7eb3ec0f->enter($__internal_9486238e584531ec6d8b4e153f6e6dc5c90411480870b913bc7b4fae7eb3ec0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Address</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Street</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "street", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Housenumber</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "houseNumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Flatnumber</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "flatNumber", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("address_edit", array("id" => $this->getAttribute(($context["address"] ?? $this->getContext($context, "address")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 41
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9486238e584531ec6d8b4e153f6e6dc5c90411480870b913bc7b4fae7eb3ec0f->leave($__internal_9486238e584531ec6d8b4e153f6e6dc5c90411480870b913bc7b4fae7eb3ec0f_prof);

    }

    public function getTemplateName()
    {
        return "address/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  92 => 36,  86 => 33,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Address</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ address.id }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ address.city }}</td>
            </tr>
            <tr>
                <th>Street</th>
                <td>{{ address.street }}</td>
            </tr>
            <tr>
                <th>Housenumber</th>
                <td>{{ address.houseNumber }}</td>
            </tr>
            <tr>
                <th>Flatnumber</th>
                <td>{{ address.flatNumber }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('address_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('address_edit', { 'id': address.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "address/show.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/address/show.html.twig");
    }
}
