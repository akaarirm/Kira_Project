<?php

/* etudiantAjout.html.twig */
class __TwigTemplate_4e07d729fc6448d0ecd5cb6b8a6ea7250970c483c8105da55ef9d1b079f3e703 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_486ee496ff237da20ac80bd22fbe2a1a570d403b1994d81d86be4e72427f3780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486ee496ff237da20ac80bd22fbe2a1a570d403b1994d81d86be4e72427f3780->enter($__internal_486ee496ff237da20ac80bd22fbe2a1a570d403b1994d81d86be4e72427f3780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "etudiantAjout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>UTTGescus - Ajouter un etudiant</title>
</head>
<body>
    <div>
        ";
        // line 17
        $this->displayBlock('nav', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </div>
    <div class=\"container\">
        ";
        // line 21
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <script src=\"//code.jquery.com/jquery.min.js\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_486ee496ff237da20ac80bd22fbe2a1a570d403b1994d81d86be4e72427f3780->leave($__internal_486ee496ff237da20ac80bd22fbe2a1a570d403b1994d81d86be4e72427f3780_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd9ab1313744ac9e0ca6ea30825f8cbb6397cf007ea3bba40b5612f2a3053ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9ab1313744ac9e0ca6ea30825f8cbb6397cf007ea3bba40b5612f2a3053ea7->enter($__internal_bd9ab1313744ac9e0ca6ea30825f8cbb6397cf007ea3bba40b5612f2a3053ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bd9ab1313744ac9e0ca6ea30825f8cbb6397cf007ea3bba40b5612f2a3053ea7->leave($__internal_bd9ab1313744ac9e0ca6ea30825f8cbb6397cf007ea3bba40b5612f2a3053ea7_prof);

    }

    // line 17
    public function block_nav($context, array $blocks = array())
    {
        $__internal_ac386f8074186fb1cedb10472a721834652462e88da384a3e93d2def7b4c8e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac386f8074186fb1cedb10472a721834652462e88da384a3e93d2def7b4c8e67->enter($__internal_ac386f8074186fb1cedb10472a721834652462e88da384a3e93d2def7b4c8e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $this->loadTemplate("::nav.html.twig", "etudiantAjout.html.twig", 17)->display($context);
        
        $__internal_ac386f8074186fb1cedb10472a721834652462e88da384a3e93d2def7b4c8e67->leave($__internal_ac386f8074186fb1cedb10472a721834652462e88da384a3e93d2def7b4c8e67_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49e7f3891390a4d066586b6750617e07643acff6024958141410ef3f74745388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e7f3891390a4d066586b6750617e07643acff6024958141410ef3f74745388->enter($__internal_49e7f3891390a4d066586b6750617e07643acff6024958141410ef3f74745388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_49e7f3891390a4d066586b6750617e07643acff6024958141410ef3f74745388->leave($__internal_49e7f3891390a4d066586b6750617e07643acff6024958141410ef3f74745388_prof);

    }

    public function getTemplateName()
    {
        return "etudiantAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 18,  98 => 17,  87 => 11,  77 => 26,  71 => 23,  67 => 22,  63 => 21,  59 => 19,  56 => 18,  54 => 17,  45 => 12,  43 => 11,  38 => 9,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
    <link rel=\"stylesheet\" href=\"path/to/font-awesome/css/font-awesome.min.css\">
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <title>UTTGescus - Ajouter un etudiant</title>
</head>
<body>
    <div>
        {% block nav %}{% include '::nav.html.twig' %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </div>
    <div class=\"container\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    </div>
    <script src=\"//code.jquery.com/jquery.min.js\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
</body>
</html>", "etudiantAjout.html.twig", "/Applications/MAMP/htdocs/Project_LO07/app/Resources/views/etudiantAjout.html.twig");
    }
}
