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
    .imgFond{position:relative;width:100%;height:80vh;margin-top:15vh;opacity:0.6;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:13vh;width:100%;margin-bottom:0px;position:absolute;top:5vh;}
    .produit{color:#C1A291;margin-left:26vh;font-size:4vw;}
    .tablette{position:absolute;left:50vh;height:60vh;bottom:5vh;}
    .navProduit{display:flex;align-items:end;margin-right:6vh;}
    .intro{color:white;}
    .titreIntro{display:flex;align-items:center;justify-content:center;height:20vh;}
    .textIntro{text-align:center;font-size:1.6vw;margin:0 10em 0 10em;height:25vh;}
    .reception{display:flex;margin:5vh;text-align:center;height:70vh;margin-top:20vh;}
    .hall{display:flex;margin:5vh;text-align:center;height:70vh;margin-top:20vh;}
    .imgReception{height:55vh;}
    .imgHall{height:55vh;}
    p{color:#ffffff;font-size:1.6vw;}
    h2{color:#ffffff;font-size:2.5vw;}


</style>

<body>

    <header class=\"img-fluid\">

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

        <div class=\"img-fluid fond\">
            <img class=\"img-fluid imgFond\" src=\"../img/chambre5.png\">
            <img class=\"tablette\" src=\"../img/Tab.png\">
        </div>

    </header>

    <section class=\"intro\">

        <h2 class=\"titreIntro\">Service en chambre</h2>
        <p class=\"textIntro\">Jarvis est un majordome, grâce à lui vos clients auront accès à un catalogue de services exceptionnels tel que: place de théâtre, baby-sitter, visite culturelle,  roomservice… Mais aussi  l'accès à leur compte Netflix ou playlist Spotify simplement</p>

    </section>

    <article class=\"reception\">

        <div class=\"\">
            <h2 class=\"\">Même le personnel d'hôtel aime ça!</h2>
            <p class=\"\">il est simple avec cette interface incroyable d'ajuster la luminosité du restaurant,  pour augmenter la température dans le hall ou pour changer la playlist musicale. depuis n'importe quel ordinateur de l'hôtel, le staff peut tout gérer d'un jeux d'enfant.</p>
        </div>
        <img class=\"imgReception\" src=\"../img/reception.png\">

    </article>

    <article class=\"hall\">

        <img class=\"imgHall\" src=\"../img/tabHall.png\">
        <div class=\"\">
            <h2 class=\"\">De la maison à l'hôtel, votre Jarvis reste le même.</h2>
            <p class=\"\">basé sur la même technologie votre majordome vous accompagnera jusqu'à l'hôtel. Il connaît vos préférences et adapte automatiquement la pièce. Lors de la réservation, vous découvrirez votre chambre d'hôtel dans votre application habituelle.</p>
        </div>

    </article>



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
    .imgFond{position:relative;width:100%;height:80vh;margin-top:15vh;opacity:0.6;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:13vh;width:100%;margin-bottom:0px;position:absolute;top:5vh;}
    .produit{color:#C1A291;margin-left:26vh;font-size:4vw;}
    .tablette{position:absolute;left:50vh;height:60vh;bottom:5vh;}
    .navProduit{display:flex;align-items:end;margin-right:6vh;}
    .intro{color:white;}
    .titreIntro{display:flex;align-items:center;justify-content:center;height:20vh;}
    .textIntro{text-align:center;font-size:1.6vw;margin:0 10em 0 10em;height:25vh;}
    .reception{display:flex;margin:5vh;text-align:center;height:70vh;margin-top:20vh;}
    .hall{display:flex;margin:5vh;text-align:center;height:70vh;margin-top:20vh;}
    .imgReception{height:55vh;}
    .imgHall{height:55vh;}
    p{color:#ffffff;font-size:1.6vw;}
    h2{color:#ffffff;font-size:2.5vw;}


</style>

<body>

    <header class=\"img-fluid\">

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

        <div class=\"img-fluid fond\">
            <img class=\"img-fluid imgFond\" src=\"../img/chambre5.png\">
            <img class=\"tablette\" src=\"../img/Tab.png\">
        </div>

    </header>

    <section class=\"intro\">

        <h2 class=\"titreIntro\">Service en chambre</h2>
        <p class=\"textIntro\">Jarvis est un majordome, grâce à lui vos clients auront accès à un catalogue de services exceptionnels tel que: place de théâtre, baby-sitter, visite culturelle,  roomservice… Mais aussi  l'accès à leur compte Netflix ou playlist Spotify simplement</p>

    </section>

    <article class=\"reception\">

        <div class=\"\">
            <h2 class=\"\">Même le personnel d'hôtel aime ça!</h2>
            <p class=\"\">il est simple avec cette interface incroyable d'ajuster la luminosité du restaurant,  pour augmenter la température dans le hall ou pour changer la playlist musicale. depuis n'importe quel ordinateur de l'hôtel, le staff peut tout gérer d'un jeux d'enfant.</p>
        </div>
        <img class=\"imgReception\" src=\"../img/reception.png\">

    </article>

    <article class=\"hall\">

        <img class=\"imgHall\" src=\"../img/tabHall.png\">
        <div class=\"\">
            <h2 class=\"\">De la maison à l'hôtel, votre Jarvis reste le même.</h2>
            <p class=\"\">basé sur la même technologie votre majordome vous accompagnera jusqu'à l'hôtel. Il connaît vos préférences et adapte automatiquement la pièce. Lors de la réservation, vous découvrirez votre chambre d'hôtel dans votre application habituelle.</p>
        </div>

    </article>



</body>



{% endblock %}", "jarvis/hotel.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\hotel.html.twig");
    }
}
