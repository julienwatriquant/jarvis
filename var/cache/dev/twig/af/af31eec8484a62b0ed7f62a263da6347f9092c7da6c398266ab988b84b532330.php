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

/* jarvis/screen.html.twig */
class __TwigTemplate_9edbee21fa72e0b8512786c94f52a4a5189519310aba3d9c495167a9d2bba112 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/screen.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/screen.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jarvis/screen.html.twig", 1);
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

        echo "JarvisScreen";
        
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
    header{max-width: 100%;height: 30vh;}
    .colOra{color:#EF7E40;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:20vh;width:100%;margin-bottom:0px;top:5vh;position: relative;right: 17vh;}
    .produit{color:#C1A291;margin-left: 57vh;}
    section{text-align:center;margin-top:5vh;height:80vh;}
    section .screen{vertical-align: middle;border-style: none;height: 71vh; width: auto;}
    article{color:white;text-align:center;font-size:2em;font-weight:bold;}
    main{text-align:center;font-size:2em;color:white;margin-top: 5vh;}
    main .pro{color:#C1A291;}
    p{text-align:center;color:white;font-size:1em;text-justify:none;margin-top:5vh;margin-right: 60vh;margin-left: 69vh;font-size: 1.2em;}!important;
    footer{align-items: center;text-align: center;background: #263271;height:20vh;padding-top:3vh;}
</style>

<body>

    <header class=\"img-fluid\">

        <div class=\"jarvis\">
            <h1 class=\"produit\">JarvisScreen</h1>
            <ul class=\"nav navScreen\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link colOra\" href=\"#\">Acheter</a>
                </li>
            </ul>
        </div>
    </header>

    <section>
        <img class=\"screen\" src=\"../img/jarvisscreen.png\" alt=\"photo jarvis screen\">



    </section>    
    <article> Plus qu'un écran , un monstre</article>
    <main> Disponible en option pour votre <strong class=\"pro color:#EF7E40\">jarvisPro</strong></main>
    <p>Ecran tactile de 10 pouces alimenté en POE et permettant le contrôle total de la maison. Disposant de LED de chaque côté , l'écran permet de passer des messages clairs et simples : les led sont vertes, c'est que la qualité d'air est excellente ! </p>
</body>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jarvis/screen.html.twig";
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

{% block title %}JarvisScreen{% endblock %}

{% block body %}

<style>

    body{background:#263271;}
    header{max-width: 100%;height: 30vh;}
    .colOra{color:#EF7E40;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:20vh;width:100%;margin-bottom:0px;top:5vh;position: relative;right: 17vh;}
    .produit{color:#C1A291;margin-left: 57vh;}
    section{text-align:center;margin-top:5vh;height:80vh;}
    section .screen{vertical-align: middle;border-style: none;height: 71vh; width: auto;}
    article{color:white;text-align:center;font-size:2em;font-weight:bold;}
    main{text-align:center;font-size:2em;color:white;margin-top: 5vh;}
    main .pro{color:#C1A291;}
    p{text-align:center;color:white;font-size:1em;text-justify:none;margin-top:5vh;margin-right: 60vh;margin-left: 69vh;font-size: 1.2em;}!important;
    footer{align-items: center;text-align: center;background: #263271;height:20vh;padding-top:3vh;}
</style>

<body>

    <header class=\"img-fluid\">

        <div class=\"jarvis\">
            <h1 class=\"produit\">JarvisScreen</h1>
            <ul class=\"nav navScreen\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link colOra\" href=\"#\">Acheter</a>
                </li>
            </ul>
        </div>
    </header>

    <section>
        <img class=\"screen\" src=\"../img/jarvisscreen.png\" alt=\"photo jarvis screen\">



    </section>    
    <article> Plus qu'un écran , un monstre</article>
    <main> Disponible en option pour votre <strong class=\"pro color:#EF7E40\">jarvisPro</strong></main>
    <p>Ecran tactile de 10 pouces alimenté en POE et permettant le contrôle total de la maison. Disposant de LED de chaque côté , l'écran permet de passer des messages clairs et simples : les led sont vertes, c'est que la qualité d'air est excellente ! </p>
</body>



{% endblock %}", "jarvis/screen.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\screen.html.twig");
    }
}
