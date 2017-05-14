<?php

/* projet_lo07Bundle:Default:index.html.twig */
class __TwigTemplate_fc89f5a04854d18be250490053726fbc43beed6ebeee489f6fe195817adbee33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "projet_lo07Bundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_437f0956d6b4c68f86cd12fe5991bd7122b804c26575311b54d64ed0355bde70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437f0956d6b4c68f86cd12fe5991bd7122b804c26575311b54d64ed0355bde70->enter($__internal_437f0956d6b4c68f86cd12fe5991bd7122b804c26575311b54d64ed0355bde70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projet_lo07Bundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437f0956d6b4c68f86cd12fe5991bd7122b804c26575311b54d64ed0355bde70->leave($__internal_437f0956d6b4c68f86cd12fe5991bd7122b804c26575311b54d64ed0355bde70_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d8479b6cf1594d60e7c1cfb3289ee8455019d0c9507096c62f41fd8d8268359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8479b6cf1594d60e7c1cfb3289ee8455019d0c9507096c62f41fd8d8268359->enter($__internal_9d8479b6cf1594d60e7c1cfb3289ee8455019d0c9507096c62f41fd8d8268359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Acceuil";
        
        $__internal_9d8479b6cf1594d60e7c1cfb3289ee8455019d0c9507096c62f41fd8d8268359->leave($__internal_9d8479b6cf1594d60e7c1cfb3289ee8455019d0c9507096c62f41fd8d8268359_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1380dec4be1c93371a48f5802ac6c47f581351dca45497334020f0c6bccc71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1380dec4be1c93371a48f5802ac6c47f581351dca45497334020f0c6bccc71f->enter($__internal_f1380dec4be1c93371a48f5802ac6c47f581351dca45497334020f0c6bccc71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f1380dec4be1c93371a48f5802ac6c47f581351dca45497334020f0c6bccc71f->leave($__internal_f1380dec4be1c93371a48f5802ac6c47f581351dca45497334020f0c6bccc71f_prof);

    }

    public function getTemplateName()
    {
        return "projet_lo07Bundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block title %}Acceuil{% endblock %}
{% block body %}
{% endblock %}", "projet_lo07Bundle:Default:index.html.twig", "/Applications/MAMP/htdocs/Project_LO07/src/projet_lo07Bundle/Resources/views/Default/index.html.twig");
    }
}
