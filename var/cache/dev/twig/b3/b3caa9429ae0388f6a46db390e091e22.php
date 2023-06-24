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

/* base.html.twig */
class __TwigTemplate_68e81befcae50c12c7ad376c7ac03aba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
\t\t<link
\t\thref=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\"/>
\t\t";
        // line 15
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
\t\t";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "\t</head>
\t<body>
\t\t<header>
\t\t\t<nav>
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
\t\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo " \" alt=\"logo\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<input type=\"checkbox\" id=\"menu-toggle\" class=\"d-sm-none\" />
\t\t\t\t<label for=\"menu-toggle\" class=\"menu-toggle\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</label>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<a href=\"#\">La Mariée</a>
\t\t\t\t\t<a href=\"#\">Robes en couleur</a>
\t\t\t\t\t<a href=\"#\">La Maison</a>
\t\t\t\t\t<a href=\"#\">Rendez-vous / Boutique</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"fa fa-user-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t
\t\t\t<section class=\"h-text\">
\t\t\t\t<h1 data-aos=\"zoom-in-down\" data-aos-delay=\"100\">
\t\t\t\t\tNos Clientes
\t\t\t\t</h1>
\t\t\t</section>
\t\t</header>
\t\t";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "\t\t<footer>
\t\t\t<div class=\"f-contact\" data-aos=\"zoom-in-up\" data-aos-offset=\"200\">
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>LA MARIÉE</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Cérémonie</p>
\t\t\t\t\t\t<p>Civil</p>
\t\t\t\t\t\t<p>Accessoires</p>
\t\t\t\t\t\t<p>Seconde main</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>ROBES EN COULEUR</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Collection 2022</p>
\t\t\t\t\t\t<p>Seconde main couleur</p>
\t\t\t\t\t\t<p>Intemporels</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>LA MAISON</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Nous</p>
\t\t\t\t\t\t<p>Blog</p>
\t\t\t\t\t\t<p>FAQ</p>
\t\t\t\t\t\t<p>Contact</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>RENDEZ-VOUS / BOUTIQUE</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Prise de rendez-vous au showroom</p>
\t\t\t\t\t\t<p>Sur-mesure</p>
\t\t\t\t\t\t<p>Essayage virtuel</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t";
        // line 102
        $this->displayBlock('js', $context, $blocks);
        // line 127
        echo "\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Test technique | L'Amusée Paris
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "\t\t\t";
        echo twig_escape_filter($this->env, $this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 103
        echo "\t\t\t<!-- JS here -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js\"></script>
\t\t\t<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
\t\t\t<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
\t\t\t<script>
\t\t\t\t\$(\".portfolio-item\").isotope({ // options
itemSelector: \".item\",
layoutMode: \"fitRows\"
});
\$(\".portfolio-menu ul li\").click(function () {
\$(\".portfolio-menu ul li\").removeClass(\"active\");
\$(this).addClass(\"active\");

var selector = \$(this).attr(\"data-filter\");
\$(\".portfolio-item\").isotope({filter: selector});
return false;
});
\t\t</script>
\t\t\t<script>
\t\t\t\tAOS.init();
\t\t\t</script>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  242 => 103,  235 => 102,  223 => 56,  213 => 20,  206 => 19,  196 => 16,  189 => 15,  175 => 6,  166 => 127,  164 => 102,  117 => 57,  115 => 56,  84 => 28,  80 => 27,  73 => 22,  71 => 19,  68 => 18,  65 => 15,  58 => 10,  54 => 8,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Test technique | L'Amusée Paris
\t\t\t{% endblock %}
\t\t</title>
\t\t<link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset(\"assets/css/style.css\") }}\"/>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
\t\t<link
\t\thref=\"https://unpkg.com/aos@2.3.1/dist/aos.css\" rel=\"stylesheet\"/>
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<header>
\t\t\t<nav>
\t\t\t\t<div class=\"logo\">
\t\t\t\t\t<a href=\"{{ path('homepage') }}\">
\t\t\t\t\t\t<img src=\"{{asset(\"assets/img/logo.png\")}} \" alt=\"logo\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<input type=\"checkbox\" id=\"menu-toggle\" class=\"d-sm-none\" />
\t\t\t\t<label for=\"menu-toggle\" class=\"menu-toggle\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t</label>
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<a href=\"#\">La Mariée</a>
\t\t\t\t\t<a href=\"#\">Robes en couleur</a>
\t\t\t\t\t<a href=\"#\">La Maison</a>
\t\t\t\t\t<a href=\"#\">Rendez-vous / Boutique</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"icon\">
\t\t\t\t\t<i class=\"fa fa-user-o\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"fa fa-shopping-bag\" aria-hidden=\"true\"></i>
\t\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t\t</div>
\t\t\t</nav>
\t\t\t
\t\t\t<section class=\"h-text\">
\t\t\t\t<h1 data-aos=\"zoom-in-down\" data-aos-delay=\"100\">
\t\t\t\t\tNos Clientes
\t\t\t\t</h1>
\t\t\t</section>
\t\t</header>
\t\t{% block body %}{% endblock %}
\t\t<footer>
\t\t\t<div class=\"f-contact\" data-aos=\"zoom-in-up\" data-aos-offset=\"200\">
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>LA MARIÉE</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Cérémonie</p>
\t\t\t\t\t\t<p>Civil</p>
\t\t\t\t\t\t<p>Accessoires</p>
\t\t\t\t\t\t<p>Seconde main</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>ROBES EN COULEUR</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Collection 2022</p>
\t\t\t\t\t\t<p>Seconde main couleur</p>
\t\t\t\t\t\t<p>Intemporels</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>LA MAISON</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Nous</p>
\t\t\t\t\t\t<p>Blog</p>
\t\t\t\t\t\t<p>FAQ</p>
\t\t\t\t\t\t<p>Contact</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>RENDEZ-VOUS / BOUTIQUE</h4>
\t\t\t\t\t\t<br/>
\t\t\t\t\t\t<p>Prise de rendez-vous au showroom</p>
\t\t\t\t\t\t<p>Sur-mesure</p>
\t\t\t\t\t\t<p>Essayage virtuel</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t{% block  js %}
\t\t\t<!-- JS here -->
\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js\"></script>
\t\t\t<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
\t\t\t<script src=\"https://unpkg.com/aos@2.3.1/dist/aos.js\"></script>
\t\t\t<script>
\t\t\t\t\$(\".portfolio-item\").isotope({ // options
itemSelector: \".item\",
layoutMode: \"fitRows\"
});
\$(\".portfolio-menu ul li\").click(function () {
\$(\".portfolio-menu ul li\").removeClass(\"active\");
\$(this).addClass(\"active\");

var selector = \$(this).attr(\"data-filter\");
\$(\".portfolio-item\").isotope({filter: selector});
return false;
});
\t\t</script>
\t\t\t<script>
\t\t\t\tAOS.init();
\t\t\t</script>

\t\t{% endblock %}
\t</body>
</html>
", "base.html.twig", "/Users/loic/Documents/GitHub/resultat/templates/base.html.twig");
    }
}
