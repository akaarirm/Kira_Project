<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea79098ea07ad13fa9431f7cc60e5691b23319f6a0330a506b083a59d05ac89f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0776d19a8d6b603653c8d7704a606475dae51c08ddf17db779aee24127a9b115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0776d19a8d6b603653c8d7704a606475dae51c08ddf17db779aee24127a9b115->enter($__internal_0776d19a8d6b603653c8d7704a606475dae51c08ddf17db779aee24127a9b115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0776d19a8d6b603653c8d7704a606475dae51c08ddf17db779aee24127a9b115->leave($__internal_0776d19a8d6b603653c8d7704a606475dae51c08ddf17db779aee24127a9b115_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_15b5c66d32f9ea875301b866b23436da97dfbdb4d2b5aca41e85be7127ccc8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15b5c66d32f9ea875301b866b23436da97dfbdb4d2b5aca41e85be7127ccc8d4->enter($__internal_15b5c66d32f9ea875301b866b23436da97dfbdb4d2b5aca41e85be7127ccc8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_15b5c66d32f9ea875301b866b23436da97dfbdb4d2b5aca41e85be7127ccc8d4->leave($__internal_15b5c66d32f9ea875301b866b23436da97dfbdb4d2b5aca41e85be7127ccc8d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fab2210bc00c739484750f91d67dfc941a87ed0746c2beb610ecfbb80f760571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab2210bc00c739484750f91d67dfc941a87ed0746c2beb610ecfbb80f760571->enter($__internal_fab2210bc00c739484750f91d67dfc941a87ed0746c2beb610ecfbb80f760571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fab2210bc00c739484750f91d67dfc941a87ed0746c2beb610ecfbb80f760571->leave($__internal_fab2210bc00c739484750f91d67dfc941a87ed0746c2beb610ecfbb80f760571_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0e87cefc1d029ce29c0fc8bb822546f97e3b08199df7da7f75a750e67f56690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e87cefc1d029ce29c0fc8bb822546f97e3b08199df7da7f75a750e67f56690->enter($__internal_f0e87cefc1d029ce29c0fc8bb822546f97e3b08199df7da7f75a750e67f56690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f0e87cefc1d029ce29c0fc8bb822546f97e3b08199df7da7f75a750e67f56690->leave($__internal_f0e87cefc1d029ce29c0fc8bb822546f97e3b08199df7da7f75a750e67f56690_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/Project_LO07/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
