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
     jarvis{display:flex;justify-content:space-between;align-items:center;height:17vh;width:100%;margin-bottom:0px;}  
     .produit{color: #C1A291;margin-left: 27vh;font-size: 2.em !important;margin-top: 16vh;}
    .navProduit{display:flex;justify-content:flex-end;margin-right:19vh;margin-top: -7vh;}
    section{text-align: center;margin-top: -10vh;height: 92vh;}
    section .screen{vertical-align: middle;border-style: none;height: auto ;max-width: 100%;}
    article{color:white;text-align:center;font-size:2em;font-weight:bold;margin-top: 6vh;margin-right: 5vh;}
    main {text-align: center;font-size: 2em;color: white;margin-top: 5vh;
    margin-right: 5vh}
    main .pro{color:#C1A291;}
    p{text-align:center;color:white;font-size:1em;text-justify:none;margin-top:5vh;margin-right: 52vh;margin-left: 61vh;font-size: 1.2em !important;}
    footer{align-items: center;text-align: center;background: #263271;height:20vh;margin-top: 18vh;} 
    
 @media screen and (max-width:1024px){
    .produit {margin-left: 9vh;
    font-size: 7vh !important;margin-top:9vh;}
   .navProduit { margin-right: 26vh;margin-top: 4vh;margin-left: 21vh;font-size: 2em;}
   section {margin-top: -10vh;height: 42vh;}

  article {font-size: 2.4em;font-weight: bold;margin-top: 3vh;margin-right: 14vh;margin-left: 20vh;}
  main{font-size: 2.4em;  margin-top: 5vh;
  margin-right: -1vh; margin-left: 5vh;}
  p{font-size: 2.3em;margin-top: 5vh;margin-right: 15vh;margin-left: 20vh;font-size: 1.9em !important;}
}

 @media screen and (max-width:768px){
    section .screen{height: 50vh;margin-right: 11vh;padding-top: -2vh;margin-top: 1vh;}
   article{font-size: 2em;margin-top: -33vh;margin-right: 27vh;margin-left: 21vh;}
   main{font-size: 2em;margin-top: 5vh;margin-right: 33vh;margin-left: 27vh;}
   p{ font-size: 1em;  margin-top: 5vh; margin-right: 22vh;margin-left: 17vh;
    font-size: 1.6em;}
    .iconReseaux{padding: 3vh; margin-left: -6vh; margin-bottom: -5vh;}
}
  @media screen and (max-width:360px){
    section .screen{height: 85vh;width: auto;margin-left: 1vh;margin-top: 8vh;}
    article {font-size: 2em;margin-top: 3vh;margin-left: 30vh;}
    main {font-size: 2em;margin-top: 5vh;margin-left: 32vh;}
    p {font-size: 1em;margin-top: 5vh;margin-right: -15vh; margin-left: 25vh;font-size: 1.2em;}
    .iconReseaux {padding: 3vh;margin-left: 35vh;}
}


    @media screen all and (max-device-width: 205px){
    .produit {margin-left: 3vh;font-size: 16vw;margin-top: 22vh;} 
    .navProduit {margin-right: 15vh;margin-top: 24vh;margin-left: 8vh;}
    section {margin-top: -10vh;height: 73vh;}
    section .screen {height: 96vh;width: auto;margin-left: 7vh;}
    article {font-size:4em;margin-top: 4vh;margin-right: -57vh;margin-left: 3vh;}
    main {font-size: 2em;margin-top: 11vh; margin-right: -54vh; margin-left: 5vh;height: 12vh;}
    p {font-size: 1em; margin-top: 18vh;margin-right: -46vh;margin-left: 12vh;font-size: 1.2em;margin:  O auto;}
    .iconReseaux {margin-right: -37vh;padding: 3vh;margin-left: 18vh;
    margin-top: 9vh;}
    
    }   
  

  
   

</style>

<body>

    <header class=\"img-fluid fond\">

        <img class=\"img-fluid imgFond\" src=\"\">
        <div class=\"jarvis\">
            <div class=\"nomProduit\">
                <h1 class=\"produit\">JarvisScreen</h1>
            </div>
            <div class=\"navProduit\">
                <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
            </div>
        </div>

    </header>

    <section>
        <div class=\"imgScreen\">
            <img class=\"screen\" src=\"../img/jarvisscreen.jpg\" alt=\"photo jarvis screen\">
        </div>

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
     jarvis{display:flex;justify-content:space-between;align-items:center;height:17vh;width:100%;margin-bottom:0px;}  
     .produit{color: #C1A291;margin-left: 27vh;font-size: 2.em !important;margin-top: 16vh;}
    .navProduit{display:flex;justify-content:flex-end;margin-right:19vh;margin-top: -7vh;}
    section{text-align: center;margin-top: -10vh;height: 92vh;}
    section .screen{vertical-align: middle;border-style: none;height: auto ;max-width: 100%;}
    article{color:white;text-align:center;font-size:2em;font-weight:bold;margin-top: 6vh;margin-right: 5vh;}
    main {text-align: center;font-size: 2em;color: white;margin-top: 5vh;
    margin-right: 5vh}
    main .pro{color:#C1A291;}
    p{text-align:center;color:white;font-size:1em;text-justify:none;margin-top:5vh;margin-right: 52vh;margin-left: 61vh;font-size: 1.2em !important;}
    footer{align-items: center;text-align: center;background: #263271;height:20vh;margin-top: 18vh;} 
    
 @media screen and (max-width:1024px){
    .produit {margin-left: 9vh;
    font-size: 7vh !important;margin-top:9vh;}
   .navProduit { margin-right: 26vh;margin-top: 4vh;margin-left: 21vh;font-size: 2em;}
   section {margin-top: -10vh;height: 42vh;}

  article {font-size: 2.4em;font-weight: bold;margin-top: 3vh;margin-right: 14vh;margin-left: 20vh;}
  main{font-size: 2.4em;  margin-top: 5vh;
  margin-right: -1vh; margin-left: 5vh;}
  p{font-size: 2.3em;margin-top: 5vh;margin-right: 15vh;margin-left: 20vh;font-size: 1.9em !important;}
}

 @media screen and (max-width:768px){
    section .screen{height: 50vh;margin-right: 11vh;padding-top: -2vh;margin-top: 1vh;}
   article{font-size: 2em;margin-top: -33vh;margin-right: 27vh;margin-left: 21vh;}
   main{font-size: 2em;margin-top: 5vh;margin-right: 33vh;margin-left: 27vh;}
   p{ font-size: 1em;  margin-top: 5vh; margin-right: 22vh;margin-left: 17vh;
    font-size: 1.6em;}
    .iconReseaux{padding: 3vh; margin-left: -6vh; margin-bottom: -5vh;}
}
  @media screen and (max-width:360px){
    section .screen{height: 85vh;width: auto;margin-left: 1vh;margin-top: 8vh;}
    article {font-size: 2em;margin-top: 3vh;margin-left: 30vh;}
    main {font-size: 2em;margin-top: 5vh;margin-left: 32vh;}
    p {font-size: 1em;margin-top: 5vh;margin-right: -15vh; margin-left: 25vh;font-size: 1.2em;}
    .iconReseaux {padding: 3vh;margin-left: 35vh;}
}


    @media screen all and (max-device-width: 205px){
    .produit {margin-left: 3vh;font-size: 16vw;margin-top: 22vh;} 
    .navProduit {margin-right: 15vh;margin-top: 24vh;margin-left: 8vh;}
    section {margin-top: -10vh;height: 73vh;}
    section .screen {height: 96vh;width: auto;margin-left: 7vh;}
    article {font-size:4em;margin-top: 4vh;margin-right: -57vh;margin-left: 3vh;}
    main {font-size: 2em;margin-top: 11vh; margin-right: -54vh; margin-left: 5vh;height: 12vh;}
    p {font-size: 1em; margin-top: 18vh;margin-right: -46vh;margin-left: 12vh;font-size: 1.2em;margin:  O auto;}
    .iconReseaux {margin-right: -37vh;padding: 3vh;margin-left: 18vh;
    margin-top: 9vh;}
    
    }   
  

  
   

</style>

<body>

    <header class=\"img-fluid fond\">

        <img class=\"img-fluid imgFond\" src=\"\">
        <div class=\"jarvis\">
            <div class=\"nomProduit\">
                <h1 class=\"produit\">JarvisScreen</h1>
            </div>
            <div class=\"navProduit\">
                <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
            </div>
        </div>

    </header>

    <section>
        <div class=\"imgScreen\">
            <img class=\"screen\" src=\"../img/jarvisscreen.jpg\" alt=\"photo jarvis screen\">
        </div>

    </section>    
    <article> Plus qu'un écran , un monstre</article>
    <main> Disponible en option pour votre <strong class=\"pro color:#EF7E40\">jarvisPro</strong></main>
    <p>Ecran tactile de 10 pouces alimenté en POE et permettant le contrôle total de la maison. Disposant de LED de chaque côté , l'écran permet de passer des messages clairs et simples : les led sont vertes, c'est que la qualité d'air est excellente ! </p>
</body>



{% endblock %}", "jarvis/screen.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\screen.html.twig");
    }
}
