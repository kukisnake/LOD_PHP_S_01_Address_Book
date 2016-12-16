<?php

/* base.html.twig */
class __TwigTemplate_2b9e327fd43ed7fa77243b7a876cac363bce77f20607ab9fe765bc59f3dd0bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0324498f41f325b7659c2f5da10f4e2097b3d971cb2a978f0a0956dfe041e719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0324498f41f325b7659c2f5da10f4e2097b3d971cb2a978f0a0956dfe041e719->enter($__internal_0324498f41f325b7659c2f5da10f4e2097b3d971cb2a978f0a0956dfe041e719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0324498f41f325b7659c2f5da10f4e2097b3d971cb2a978f0a0956dfe041e719->leave($__internal_0324498f41f325b7659c2f5da10f4e2097b3d971cb2a978f0a0956dfe041e719_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57eedc2f3173a9fca115d205a57c419a9b3886f709260f9082d53a77151c5daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eedc2f3173a9fca115d205a57c419a9b3886f709260f9082d53a77151c5daf->enter($__internal_57eedc2f3173a9fca115d205a57c419a9b3886f709260f9082d53a77151c5daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_57eedc2f3173a9fca115d205a57c419a9b3886f709260f9082d53a77151c5daf->leave($__internal_57eedc2f3173a9fca115d205a57c419a9b3886f709260f9082d53a77151c5daf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5645a726640b9aecfd6cdbb21694c87f2ccdeb94d7e8d01f61ca86d92f5e4df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5645a726640b9aecfd6cdbb21694c87f2ccdeb94d7e8d01f61ca86d92f5e4df3->enter($__internal_5645a726640b9aecfd6cdbb21694c87f2ccdeb94d7e8d01f61ca86d92f5e4df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5645a726640b9aecfd6cdbb21694c87f2ccdeb94d7e8d01f61ca86d92f5e4df3->leave($__internal_5645a726640b9aecfd6cdbb21694c87f2ccdeb94d7e8d01f61ca86d92f5e4df3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb425c1d096d485a2caf1ff7c37913b60b9dc401f280b3badb037adb1a76d7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb425c1d096d485a2caf1ff7c37913b60b9dc401f280b3badb037adb1a76d7cb->enter($__internal_cb425c1d096d485a2caf1ff7c37913b60b9dc401f280b3badb037adb1a76d7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb425c1d096d485a2caf1ff7c37913b60b9dc401f280b3badb037adb1a76d7cb->leave($__internal_cb425c1d096d485a2caf1ff7c37913b60b9dc401f280b3badb037adb1a76d7cb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_245ee0f191215d1da2a86320245286b898e7547879b695c7bd018b7f61aa7f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245ee0f191215d1da2a86320245286b898e7547879b695c7bd018b7f61aa7f0d->enter($__internal_245ee0f191215d1da2a86320245286b898e7547879b695c7bd018b7f61aa7f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_245ee0f191215d1da2a86320245286b898e7547879b695c7bd018b7f61aa7f0d->leave($__internal_245ee0f191215d1da2a86320245286b898e7547879b695c7bd018b7f61aa7f0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/app/Resources/views/base.html.twig");
    }
}
