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

/* jarvis/family.html.twig */
class __TwigTemplate_3e21678c489acc9991dac9247ba0bbd8cc922a951ca107f8ef16b68724a4bfac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/family.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/family.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jarvis/family.html.twig", 1);
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

        echo "JarvisFamily";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<style>
    body{background:#263271;}
    .jarvis{display:flex;justify-content:space-evenly;align-items:center;height:20vh;width:100%;margin-bottom:0px;}
    .produit{color:#C1A291;width:29%;}
    .family{height: 150vh;display:flex;align-items:center;justify-content:center;height:60vh;}
    .imgFamilyTab{height:95%}
    h2{display:flex;justify-content:center;align-items:center;height:20vh;width:70%}
    .slogan{color:white;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;height:50vh;width:100%;}
    .textSlogan{color:white;font-size:1.7vw;display:flex;align-items:center;justify-content:center;width:70%;}
    span{font-size:1.5vw;color:#ffffff;}
    .corp{display:flex;align-items:center;width:100%;height:100vh;}
    .iconFami{width:20%;height:80vh;display:flex;flex-direction:column;justify-content:space-evenly;align-items:flex-end}
    .titreIcon{width:10%;height:83vh;display:flex;flex-direction:column;justify-content:space-evenly;margin-left:20px}
    .textIcon{width:70%;height:83vh;margin-top:20px;display:flex;flex-direction:column;justify-content:space-evenly;}
    .textI{margin-bottom:0px;margin-left:70px;font-size:1.2vw;color:#ffffff;}
    .iconF{height:70px;width:70px;}
    h3{color:#ffffff;display:flex;align-items:center;justify-content:center;height:30vh;}
    .marque{color:#C1A291;margin:7px;}
    .imageEnfant{display:flex;align-items:center;justify-content:center;height:100vh;}
    .imgEnfant{width:60%}

</style>

<body>

    <header>
        <div class=\"jarvis\">
            <h1 class=\"produit\">JarvisFamily</h1>
            <ul class=\"nav navfami\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                </li>
            </ul>
        </div>

        <div class=\"family\">
            <img class=\"imgFamilyTab\" src=\"../img/FamilyTab.png\" alt=\"photo tablette jarvis family\">
        </div>
        <div class=\"slogan\">
            <h2 class=\"sloganText\">Cloud privé et sécurisé à la maison</h2>
            <div class=\"textSlogan\">
                <p>Un lieu d'echange et de partage au sein du foyer. Sécurisé car stocké localement à la maison. Créez des albums photos de vos plus beaux souvenirs, échangez des messages en toute confiance et même créer des listes partagées</p>
            </div>
        </div>

    </header>

    <section>
        <div class=\"corp\">
            <div class=\"iconFami\">
                <img class=\"iconF\" src=\"../img/news1.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/message.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/transport.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/photos1.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/calendar1.png\" alt=\"icone calendrier\">

                <img class=\"iconF\" src=\"../img/listeB.png\" alt=\"\">
            </div>

            <div class=\"titreIcon\">
                <span><strong>News</strong></span>

                <span><strong>Messages</strong></span>

                <span><strong>Transport</strong></span>

                <span><strong>Photos</strong></span>

                <span><strong>Agenda</strong></span>

                <span><strong>Listes</strong></span>            
            </div>

            <div class=\"textIcon\">
                <p class=\"textI\">Consulter la météo et l'ensemble des actualités à proximité de chez vous</p>

                <p class=\"textI\">Echanger des messages avec les membres de votre famille en toute confidentialité.</p>

                <p class=\"textI\">Visualiser en direct l'ensemble des transports disponibles proche de chez vous. (prochainement disponible)</p>

                <p class=\"textI\">Créer à nouveau vos albums photos d'antan de manière sécurisée et accessible depuis n'importe ou dans le monde. (prochainement disponible)</p>

                <p class=\"textI\">Partager vos rencontres et rendez-vous commun à la famille. (prochainement disponible)</p>

                <p class=\"textI\">Créer des listes à l'ensemble du foyer, comme vos listes de courses et assignez les à chacun des membres.</p>
            </div>
        </div>

        <h3 class=\"text-white\">Services gratuit inclus dans l'ensemble des produits, <strong class=\"marque\"> mySmartJarvis</strong></h3>
        <div class=\"imageEnfant\">
            <img class=\"imgEnfant\" src=\"../img/EnfantFamily.png\">
        </div>
    </section>


</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jarvis/family.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}JarvisFamily{% endblock %}


{% block body %}

<style>
    body{background:#263271;}
    .jarvis{display:flex;justify-content:space-evenly;align-items:center;height:20vh;width:100%;margin-bottom:0px;}
    .produit{color:#C1A291;width:29%;}
    .family{height: 150vh;display:flex;align-items:center;justify-content:center;height:60vh;}
    .imgFamilyTab{height:95%}
    h2{display:flex;justify-content:center;align-items:center;height:20vh;width:70%}
    .slogan{color:white;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;height:50vh;width:100%;}
    .textSlogan{color:white;font-size:1.7vw;display:flex;align-items:center;justify-content:center;width:70%;}
    span{font-size:1.5vw;color:#ffffff;}
    .corp{display:flex;align-items:center;width:100%;height:100vh;}
    .iconFami{width:20%;height:80vh;display:flex;flex-direction:column;justify-content:space-evenly;align-items:flex-end}
    .titreIcon{width:10%;height:83vh;display:flex;flex-direction:column;justify-content:space-evenly;margin-left:20px}
    .textIcon{width:70%;height:83vh;margin-top:20px;display:flex;flex-direction:column;justify-content:space-evenly;}
    .textI{margin-bottom:0px;margin-left:70px;font-size:1.2vw;color:#ffffff;}
    .iconF{height:70px;width:70px;}
    h3{color:#ffffff;display:flex;align-items:center;justify-content:center;height:30vh;}
    .marque{color:#C1A291;margin:7px;}
    .imageEnfant{display:flex;align-items:center;justify-content:center;height:100vh;}
    .imgEnfant{width:60%}

</style>

<body>

    <header>
        <div class=\"jarvis\">
            <h1 class=\"produit\">JarvisFamily</h1>
            <ul class=\"nav navfami\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                </li>
            </ul>
        </div>

        <div class=\"family\">
            <img class=\"imgFamilyTab\" src=\"../img/FamilyTab.png\" alt=\"photo tablette jarvis family\">
        </div>
        <div class=\"slogan\">
            <h2 class=\"sloganText\">Cloud privé et sécurisé à la maison</h2>
            <div class=\"textSlogan\">
                <p>Un lieu d'echange et de partage au sein du foyer. Sécurisé car stocké localement à la maison. Créez des albums photos de vos plus beaux souvenirs, échangez des messages en toute confiance et même créer des listes partagées</p>
            </div>
        </div>

    </header>

    <section>
        <div class=\"corp\">
            <div class=\"iconFami\">
                <img class=\"iconF\" src=\"../img/news1.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/message.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/transport.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/photos1.png\" alt=\"\">

                <img class=\"iconF\" src=\"../img/calendar1.png\" alt=\"icone calendrier\">

                <img class=\"iconF\" src=\"../img/listeB.png\" alt=\"\">
            </div>

            <div class=\"titreIcon\">