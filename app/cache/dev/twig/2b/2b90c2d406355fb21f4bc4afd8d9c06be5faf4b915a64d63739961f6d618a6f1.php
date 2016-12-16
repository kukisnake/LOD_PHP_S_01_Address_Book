<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5c96a10bfc49e054639a8901db8dfe42b5f58092c5ac35d7beea6e980a853eb9 extends Twig_Template
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
        $__internal_d8c120e82b1734e57b5cdb892d4348bd4e279f0c9b71d08166c5874d2dcece64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c120e82b1734e57b5cdb892d4348bd4e279f0c9b71d08166c5874d2dcece64->enter($__internal_d8c120e82b1734e57b5cdb892d4348bd4e279f0c9b71d08166c5874d2dcece64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c120e82b1734e57b5cdb892d4348bd4e279f0c9b71d08166c5874d2dcece64->leave($__internal_d8c120e82b1734e57b5cdb892d4348bd4e279f0c9b71d08166c5874d2dcece64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a764b10dd65b97712868c6cf26b6da61cc0566aab6c490239130f29db798da7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a764b10dd65b97712868c6cf26b6da61cc0566aab6c490239130f29db798da7b->enter($__internal_a764b10dd65b97712868c6cf26b6da61cc0566aab6c490239130f29db798da7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a764b10dd65b97712868c6cf26b6da61cc0566aab6c490239130f29db798da7b->leave($__internal_a764b10dd65b97712868c6cf26b6da61cc0566aab6c490239130f29db798da7b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3da4aa09cdf00608ce8f2d1a1160eef7714e4eabab195d851d30035d84265c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da4aa09cdf00608ce8f2d1a1160eef7714e4eabab195d851d30035d84265c04->enter($__internal_3da4aa09cdf00608ce8f2d1a1160eef7714e4eabab195d851d30035d84265c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3da4aa09cdf00608ce8f2d1a1160eef7714e4eabab195d851d30035d84265c04->leave($__internal_3da4aa09cdf00608ce8f2d1a1160eef7714e4eabab195d851d30035d84265c04_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca12dede86bbacc545f45a6371a56d3a633d62c3d9da467343e463329aff8e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca12dede86bbacc545f45a6371a56d3a633d62c3d9da467343e463329aff8e2e->enter($__internal_ca12dede86bbacc545f45a6371a56d3a633d62c3d9da467343e463329aff8e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca12dede86bbacc545f45a6371a56d3a633d62c3d9da467343e463329aff8e2e->leave($__internal_ca12dede86bbacc545f45a6371a56d3a633d62c3d9da467343e463329aff8e2e_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
