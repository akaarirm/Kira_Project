<?php

/* ::base.html.twig */
class __TwigTemplate_8b1b5b3f9b933d8583943162c752aab11ff6e0071010dd519d2541824a0d3653 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2bca780f71e0d6f32481e42c72dc4c111762779161fe4a2cc8f5cb20ce05b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bca780f71e0d6f32481e42c72dc4c111762779161fe4a2cc8f5cb20ce05b75->enter($__internal_c2bca780f71e0d6f32481e42c72dc4c111762779161fe4a2cc8f5cb20ce05b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - UTTGescus</title>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 14
        $this->displayBlock('nav', $context, $blocks);
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "<script src=\"//code.jquery.com/jquery.min.js\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_c2bca780f71e0d6f32481e42c72dc4c111762779161fe4a2cc8f5cb20ce05b75->leave($__internal_c2bca780f71e0d6f32481e42c72dc4c111762779161fe4a2cc8f5cb20ce05b75_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_40f79ce4644458842df6ece264230c619c17be19aa016b6c7b713af54c538c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f79ce4644458842df6ece264230c619c17be19aa016b6c7b713af54c538c8e->enter($__internal_40f79ce4644458842df6ece264230c619c17be19aa016b6c7b713af54c538c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_40f79ce4644458842df6ece264230c619c17be19aa016b6c7b713af54c538c8e->leave($__internal_40f79ce4644458842df6ece264230c619c17be19aa016b6c7b713af54c538c8e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9b0042956390ea5b97e97d2bbd5ca43820c6e900e0dba883cfdd9a838f8b93b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0042956390ea5b97e97d2bbd5ca43820c6e900e0dba883cfdd9a838f8b93b5->enter($__internal_9b0042956390ea5b97e97d2bbd5ca43820c6e900e0dba883cfdd9a838f8b93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9b0042956390ea5b97e97d2bbd5ca43820c6e900e0dba883cfdd9a838f8b93b5->leave($__internal_9b0042956390ea5b97e97d2bbd5ca43820c6e900e0dba883cfdd9a838f8b93b5_prof);

    }

    // line 14
    public function block_nav($context, array $blocks = array())
    {
        $__internal_c66cad0e9befbcdfd04a3eba712b90d42efb33e92b8cb457bc8233abca9ca934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66cad0e9befbcdfd04a3eba712b90d42efb33e92b8cb457bc8233abca9ca934->enter($__internal_c66cad0e9befbcdfd04a3eba712b90d42efb33e92b8cb457bc8233abca9ca934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "::base.html.twig", 14)->display($context);
        
        $__internal_c66cad0e9befbcdfd04a3eba712b90d42efb33e92b8cb457bc8233abca9ca934->leave($__internal_c66cad0e9befbcdfd04a3eba712b90d42efb33e92b8cb457bc8233abca9ca934_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a24e4f145982fe3300576206e9279139e42403af4226fa29766f57a329191c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a24e4f145982fe3300576206e9279139e42403af4226fa29766f57a329191c9->enter($__internal_1a24e4f145982fe3300576206e9279139e42403af4226fa29766f57a329191c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a24e4f145982fe3300576206e9279139e42403af4226fa29766f57a329191c9->leave($__internal_1a24e4f145982fe3300576206e9279139e42403af4226fa29766f57a329191c9_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3198ac9b5f107d22dd69b0f2114266892f8f39ca286875793be8d83b52df120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3198ac9b5f107d22dd69b0f2114266892f8f39ca286875793be8d83b52df120->enter($__internal_d3198ac9b5f107d22dd69b0f2114266892f8f39ca286875793be8d83b52df120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d3198ac9b5f107d22dd69b0f2114266892f8f39ca286875793be8d83b52df120->leave($__internal_d3198ac9b5f107d22dd69b0f2114266892f8f39ca286875793be8d83b52df120_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 16,  109 => 15,  97 => 14,  86 => 10,  75 => 6,  65 => 18,  62 => 17,  60 => 16,  58 => 15,  56 => 14,  49 => 11,  47 => 10,  42 => 8,  38 => 7,  34 => 6,  27 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}{% endblock %} - UTTGescus</title>
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
{% block nav %}{% include '::nav.html.twig' %}{% endblock %}
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
<script src=\"//code.jquery.com/jquery.min.js\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
</body>
</html>", "::base.html.twig", "/Applications/MAMP/htdocs/Project_LO07/app/Resources/views/base.html.twig");
    }
}
