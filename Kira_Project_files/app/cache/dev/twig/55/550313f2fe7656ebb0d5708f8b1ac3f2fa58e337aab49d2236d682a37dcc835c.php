<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4762613c6de10539fc9d0609aef7eed56f57912e90f4a28e96001733994a0b65 extends Twig_Template
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
        $__internal_1d66486bbe65b3bfd8dd0d563c2e9a1fd70895be9b08a4e369b22973bf2b3f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d66486bbe65b3bfd8dd0d563c2e9a1fd70895be9b08a4e369b22973bf2b3f04->enter($__internal_1d66486bbe65b3bfd8dd0d563c2e9a1fd70895be9b08a4e369b22973bf2b3f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d66486bbe65b3bfd8dd0d563c2e9a1fd70895be9b08a4e369b22973bf2b3f04->leave($__internal_1d66486bbe65b3bfd8dd0d563c2e9a1fd70895be9b08a4e369b22973bf2b3f04_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_543f50edb2f10d31861db7feb7b26bc6b8c1255d0ab9358c64ba8b109b1ed3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543f50edb2f10d31861db7feb7b26bc6b8c1255d0ab9358c64ba8b109b1ed3b8->enter($__internal_543f50edb2f10d31861db7feb7b26bc6b8c1255d0ab9358c64ba8b109b1ed3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_543f50edb2f10d31861db7feb7b26bc6b8c1255d0ab9358c64ba8b109b1ed3b8->leave($__internal_543f50edb2f10d31861db7feb7b26bc6b8c1255d0ab9358c64ba8b109b1ed3b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c7d988471a2052bb38ad1259789cc4b4a66d825c549a2321b41987d1c048faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7d988471a2052bb38ad1259789cc4b4a66d825c549a2321b41987d1c048faa->enter($__internal_7c7d988471a2052bb38ad1259789cc4b4a66d825c549a2321b41987d1c048faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7c7d988471a2052bb38ad1259789cc4b4a66d825c549a2321b41987d1c048faa->leave($__internal_7c7d988471a2052bb38ad1259789cc4b4a66d825c549a2321b41987d1c048faa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17169470f90c373170fc22e3f5ec1eef28add6b20c14b44156399f7641c11a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17169470f90c373170fc22e3f5ec1eef28add6b20c14b44156399f7641c11a12->enter($__internal_17169470f90c373170fc22e3f5ec1eef28add6b20c14b44156399f7641c11a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17169470f90c373170fc22e3f5ec1eef28add6b20c14b44156399f7641c11a12->leave($__internal_17169470f90c373170fc22e3f5ec1eef28add6b20c14b44156399f7641c11a12_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/Project_LO07/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
