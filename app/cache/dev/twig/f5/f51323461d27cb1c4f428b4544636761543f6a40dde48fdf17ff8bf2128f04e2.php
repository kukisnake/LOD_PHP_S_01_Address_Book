<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e6828c2659fb92938a4498b9af7185aacf57ad3beb2d6b89a3ed048b33fe5555 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5931b783a64bc3860e06bf6277c3227f2766152e53dae4e94184ac5d23ba96a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5931b783a64bc3860e06bf6277c3227f2766152e53dae4e94184ac5d23ba96a1->enter($__internal_5931b783a64bc3860e06bf6277c3227f2766152e53dae4e94184ac5d23ba96a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5931b783a64bc3860e06bf6277c3227f2766152e53dae4e94184ac5d23ba96a1->leave($__internal_5931b783a64bc3860e06bf6277c3227f2766152e53dae4e94184ac5d23ba96a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7455f6078a4b31a4e8b95dd10f14d2b53b4adfcfe5304f11c7b2376e3d16b5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7455f6078a4b31a4e8b95dd10f14d2b53b4adfcfe5304f11c7b2376e3d16b5de->enter($__internal_7455f6078a4b31a4e8b95dd10f14d2b53b4adfcfe5304f11c7b2376e3d16b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7455f6078a4b31a4e8b95dd10f14d2b53b4adfcfe5304f11c7b2376e3d16b5de->leave($__internal_7455f6078a4b31a4e8b95dd10f14d2b53b4adfcfe5304f11c7b2376e3d16b5de_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ba79d991102873837ffebccc04df7e137affff9379dfa511242aed7d0687bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba79d991102873837ffebccc04df7e137affff9379dfa511242aed7d0687bea->enter($__internal_4ba79d991102873837ffebccc04df7e137affff9379dfa511242aed7d0687bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4ba79d991102873837ffebccc04df7e137affff9379dfa511242aed7d0687bea->leave($__internal_4ba79d991102873837ffebccc04df7e137affff9379dfa511242aed7d0687bea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab9d6c225a32261bd03053eaeb20c1168835fe715e46769232382f4a498e6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab9d6c225a32261bd03053eaeb20c1168835fe715e46769232382f4a498e6d0->enter($__internal_0ab9d6c225a32261bd03053eaeb20c1168835fe715e46769232382f4a498e6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_0ab9d6c225a32261bd03053eaeb20c1168835fe715e46769232382f4a498e6d0->leave($__internal_0ab9d6c225a32261bd03053eaeb20c1168835fe715e46769232382f4a498e6d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
