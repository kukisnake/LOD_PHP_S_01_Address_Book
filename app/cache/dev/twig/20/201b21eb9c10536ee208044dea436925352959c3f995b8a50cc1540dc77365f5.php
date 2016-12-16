<?php

/* base.html.twig */
class __TwigTemplate_4a908980b5e7db1beae34b14a260bb75e05557a7d9f11b0ba86ba16e406effdb extends Twig_Template
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
        $__internal_73a901bd596e68b521c47b76b1d49db1b49dec11d973e0c978e410e2adfc5e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a901bd596e68b521c47b76b1d49db1b49dec11d973e0c978e410e2adfc5e63->enter($__internal_73a901bd596e68b521c47b76b1d49db1b49dec11d973e0c978e410e2adfc5e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_73a901bd596e68b521c47b76b1d49db1b49dec11d973e0c978e410e2adfc5e63->leave($__internal_73a901bd596e68b521c47b76b1d49db1b49dec11d973e0c978e410e2adfc5e63_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5ff1fc59a01c1a0ef15fc086b8805ac3dcdc059d96e1aedcce0f25bd36b1f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ff1fc59a01c1a0ef15fc086b8805ac3dcdc059d96e1aedcce0f25bd36b1f26->enter($__internal_d5ff1fc59a01c1a0ef15fc086b8805ac3dcdc059d96e1aedcce0f25bd36b1f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d5ff1fc59a01c1a0ef15fc086b8805ac3dcdc059d96e1aedcce0f25bd36b1f26->leave($__internal_d5ff1fc59a01c1a0ef15fc086b8805ac3dcdc059d96e1aedcce0f25bd36b1f26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a03f596c95260444568887762e25ddf957004c356fcdc51425282ff48cc04b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03f596c95260444568887762e25ddf957004c356fcdc51425282ff48cc04b73->enter($__internal_a03f596c95260444568887762e25ddf957004c356fcdc51425282ff48cc04b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a03f596c95260444568887762e25ddf957004c356fcdc51425282ff48cc04b73->leave($__internal_a03f596c95260444568887762e25ddf957004c356fcdc51425282ff48cc04b73_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c26693d22784f2d5ceb960f0c9ce1fe694a3f0ee4ab6cb269a25617081bdeb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c26693d22784f2d5ceb960f0c9ce1fe694a3f0ee4ab6cb269a25617081bdeb1->enter($__internal_0c26693d22784f2d5ceb960f0c9ce1fe694a3f0ee4ab6cb269a25617081bdeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0c26693d22784f2d5ceb960f0c9ce1fe694a3f0ee4ab6cb269a25617081bdeb1->leave($__internal_0c26693d22784f2d5ceb960f0c9ce1fe694a3f0ee4ab6cb269a25617081bdeb1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e92a3de3d2141d363769944fc1165072caaf6519576ab4da733aafe3b735f27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92a3de3d2141d363769944fc1165072caaf6519576ab4da733aafe3b735f27e->enter($__internal_e92a3de3d2141d363769944fc1165072caaf6519576ab4da733aafe3b735f27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e92a3de3d2141d363769944fc1165072caaf6519576ab4da733aafe3b735f27e->leave($__internal_e92a3de3d2141d363769944fc1165072caaf6519576ab4da733aafe3b735f27e_prof);

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
", "base.html.twig", "/home/kuki/Workspace/LOD_PHP_S_01_Address_Book/Address_Book/app/Resources/views/base.html.twig");
    }
}
