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

/* jarvis/hotel.html.twig */
class __TwigTemplate_ef5e5b3ea0737b950d19fd94531d77a8af135e8845e80585a45c9bd2afb4e5e0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/hotel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/hotel.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jarvis/hotel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "JarvisForHotels";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<style>

    body{background:#263271;}
    .colOra{color:#EF7E40;}
    .fond{height:100vh;}
    .imgFond{position:relative;width:100%;height:95%;opacity:0.6;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:13vh;width:100%;margin-bottom:0px;position:absolute;top:5vh;}
    .produit{color:#C1A291;margin-left:26vh;font-size:4vw;}
    .tablette{position:absolute;left:50vh;height:60vh;bottom:5vh;}
    .navProduit{display:flex;align-items:end;margin-right:6vh;}


</style>

<body>

    <header class=\"img-fluid fond\">

        <img class=\"img-fluid imgFond\" src=\"../img/chambre5.png\">
        <div class=\"jarvis\">
            <div class=\"nomProduit\">
                <h1 class=\"produit\">JarvisForHôtels</h1>
            </div>
            <div class=\"navProduit\">
                <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                <a class=\"nav-link colOra\" href=\"#\">Demander un devis</a>
            </div>
        </div>
        <img class=\"tablette\" src=\"../img/Tab.png\">

    </header>

    <section>




    </section>    


</body>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jarvis/hotel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}JarvisForHotels{% endblock %}

{% block body %}

<style>

    body{background:#263271;}
    .colOra{color:#EF7E40;}
    .fond{height:100vh;}
    .imgFond{position:relative;width:100%;height:95%;opacity:0.6;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:13vh;width:100%;margin-bottom:0px;position:absolute;top:5vh;}
    .produit{color:#C1A291;margin-left:26vh;font-size:4vw;}
    .tablette{position:absolute;left:50vh;height:60vh;bottom:5vh;}
    .navProduit{display:flex;align-items:end;margin-right:6vh;}


</style>

<body>

    <header class=\"img-fluid fond\">

        <img class=\"img-fluid imgFond\" src=\"../img/chambre5.png\">
        <div class=\"jarvis\">
            <div class=\"nomProduit\">
                <h1 class=\"produit\">JarvisForHôtels</h1>
            </div>
            <div class=\"navProduit\">
                <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                <a class=\"nav-link colOra\" href=\"#\">Demander un devis</a>
            </div>
        </div>
        <img class=\"tablette\" src=\"../img/Tab.png\">

    </header>

    <section>




    </section>    


</body>



{% endblock %}", "jarvis/hotel.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\hotel.html.twig");
    }
}
