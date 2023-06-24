<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_932de275c80c068b778895c1c2d0868c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

\t<div class=\"site-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_new");
        echo "\">Create new</a>
\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 11
            echo "\t\t\t\t\t<div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t<div class=\"col-lg-4 mb-4\">
\t\t\t\t\t\t\t<div class=\"entry2\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_show", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset($context["new"], "imageFile"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"excerpt\">

\t\t\t\t\t\t\t\t\t<p>";
            // line 19
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 19), 0, 150), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_news_show", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\">Read More</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</div>
\t\t</div>
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 28,  95 => 21,  90 => 19,  83 => 15,  79 => 14,  74 => 11,  70 => 10,  66 => 9,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}


\t<div class=\"site-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<a href=\"{{ path('app_news_new') }}\">Create new</a>
\t\t\t\t{% for new in news %}
\t\t\t\t\t<div class=\"d-flex flex-wrap\">
\t\t\t\t\t\t<div class=\"col-lg-4 mb-4\">
\t\t\t\t\t\t\t<div class=\"entry2\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_news_show', {'id':new.id}) }}\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid rounded\" src=\"{{ vich_uploader_asset(new, 'imageFile') }}\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"excerpt\">

\t\t\t\t\t\t\t\t\t<p>{{new.description|slice(0,150)}}...</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_news_show', {'id':new.id}) }}\">Read More</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>


{% endblock %}
", "home/index.html.twig", "/Users/loic/Documents/GitHub/resultat/templates/home/index.html.twig");
    }
}
