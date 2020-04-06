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

/* jarvis/pro.html.twig */
class __TwigTemplate_6b9b8f0df8b9aa01927d45ec3c26062916c5a8817502af1236beabf1be3316a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/pro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/pro.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jarvis/pro.html.twig", 1);
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

        echo "JarvisPro";
        
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

        .entete{background-repeat:no-repeat;background:url(\"../img/home_smarthome.png\");background-size:cover;height:100vh;position:relative;z-index:1;}
        .titre{display:flex;position:absolute;top:50px;left:260px;width:80%;}
        .produit{color:#C1A291;display:flex;}
        a{color:#C1A291;}
        p{color:#ffffff;}
        .navpro{width:80%;align-items: center;}
        .tabInt{position:absolute;top:21vh;left:45vh;height:60vh;}
        .slogan{position:absolute;top:84vh;left:64vh;color:#ffffff;}
        .corps{background:#263271;}
        .titrePro{display:flex;align-items:center;justify-content:center;height:30vh;}
        .titreProd{display:flex;align-items:flex-start;justify-content:center;height:20vh;}
        .textProd{font-size:2em;width:70%;text-align:center;}
        .imagePro{display:flex;align-items:center;justify-content:center;height:50vh;}
        .imgPro{height:315px;}
        .marqueText{display:flex;align-items:flex-end;height:30vh;}
        .textMarque{font-size:2em;width:60%;margin-left:20px;}
        .imageMarque{display:flex;align-items:center;justify-content:center;height:90vh;}
        .imgMarque{height:700px;}
        .marqueText1{display:flex;align-items:start;justify-content:flex-end;height:30vh;}
        .textMarque1{font-size:2em;width:60%;margin-right:20px;}
        .imageMaison{display:flex;align-items:center;justify-content:center;height:120vh;}
        .interface{background:#ffffff;}
        .interSlogan{display:flex;align-items:flex-end;justify-content:center;height:20vh;}
        .titreBleu{color:#263271;font-size:2.5em;width:70%;text-align:center;}
        .interText{display:flex;align-items:center;justify-content:center;height:30vh;}
        .textBleu{color:#263271;font-size:2em;width:60%;text-align:center;}
        .imageInter{display:flex;align-items:center;justify-content:center;height:120vh;}
        .imgInter{width:100%;}
        .titreFamily{display:flex;align-items:flex-end;justify-content:center;height:20vh;}
        .textFamily{display:flex;align-items:center;justify-content:center;height:15vh;}
        .produitFamily{color:#C1A291;display:flex;}
        .textProdFami{font-size:2.5em;width:70%;text-align:center;}
        .savoirPlus{display:flex;align-items:center;justify-content:center;height:10vh;}
        .savoir{color:#EF7E40;font-size:2em;}
        .imageFamily{display:flex;align-items:center;justify-content:center;height:110vh;}
        .imgFamily{width:55%;}
        .videoPro{background:#ffffff;height:90vh;display:flex;align-items:center;}
        .videoText{display:flex;flex-direction:column;align-items:center;justify-content:center;width:40%;height:60vh;}
        .titreVideo{color:black;font-size:2.5em;text-align:center;height:20vh;width:70%;}
        .textVideo{color:#263271;font-size:1.8em;width:70%;}
        .video{width:60%;height:70vh;margin-right:30px;}
        footer{background:#263271;text-align:center;height:20vh;}
        .reseau{display:flex;justify-content:space-around;}
        .copy{align-items:bottom;}

    </style>

    <body>

        <header class=\"img-fluid entete\">

            <div class=\"titre\">
            <h1 class=\"produit\">JarvisPro</h1>
                <ul class=\"nav navpro justify-content-end\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Acheter</a>
                    </li>
                </ul>
            </div>
            <img class=\"img-fluid tabInt\" src=\"../img/TabBlack.png\">
            <h2 class=\"slogan\">\"Bonjour, je suis Jarvis votre majordome\"</h2>

        </header>

        <section class=\"corps\">

            <div class=\"jarvisPro\">
                <div class=\"titrePro\">
                    <h1 class=\"produit\">JarvisPro<p class=\"\">, une révolution</p></h1>
                </div>
                <div class=\"titreProd\">
                    <p class=\"textProd\">Grâce à moi, vos appareils connectés vont fonctionner de manière plus efficace et plus intelligente ensemble, pour vous faciliter la vie.</p>
                </div>
                <div class=\"imagePro\">
                    <img class=\"img-fluid imgPro\" src=\"../img/jarvisProMulti.png\">
                </div>
                <div class=\"titreProd\">
                    <p class=\"textProd\">Quels que soient vos accessoires, je vous permet de les configurer puis de les contrôler très facilement.</p>
                </div>
                <div class=\"imagePro\">
                    <img class=\"img-fluid imgPro\" src=\"../img/ObjetConnect.png\">
                </div>
            </div>

            <div class=\"marques\">
                <div class=\"marqueText\">
                    <p class=\"textMarque\">Plusieurs marques sont d'ores et déjà compatibles avec moi et leurs nombres ne cesse d'auguementer.</p>
                </div>
                <div class=\"imageMarque\">
                    <img class=\"img-fluid imgMarque\" src=\"../img/ListeCompatible.png\">
                </div>
                <div class=\"marqueText1\">
                    <p class=\"textMarque1\">En plus, chacun de ces produits est testé et validé par nos équipes pour garantir une utilisation totalement sécurisée</p>
                </div>
            </div>

            <div class=\"imageMaison\">
                <img class=\"img-fluid\" src=\"../img/Maison3d.png\">
            </div>

            <div class=\"interface\">
                <div class=\"interSlogan\">
                    <p class=\"titreBleu\">Trouver l'interface qui vous correspond !</p>
                </div>
                <div class=\"interText\">
                    <p class=\"textBleu\">J'ai été conçu avant tout pour être autonome et vous décharger de certaines tâches. Mais nous aimons tous garder le contrôle des choses. C'est pour cela que je suis doté d'une interface graphique révolutionnaire qui s'adaptera à chacun.</p>
                </div>
                <div class=\"imageInter\">
                    <img class=\"img-fluid imgInter\" src=\"../img/ipadInterf1.png\">
                </div>
            </div>

            <div class=\"JarvisFamily\">
                <div class=\"titreFamily\">
                    <h1 class=\"produitFamily\">JarvisFamily<p class=\"\">, le réseau familial privé et confidentiel.</p>
                </div>
                <div class=\"textFamily\">
                    <p class=\"textProdFami\">Pour que toute la famille reste en contact</p></h1>
                </div>
                <div class=\"savoirPlus\">
                    <a class=\"savoir\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisFamily");
        echo "\">En savoir plus ></a>
                </div>
                <div class=\"imageFamily\">
                    <img class=\"imgFamily\" src=\"../img/FamilyTab.png\">
                </div>
            </div>

            <div class=\"videoPro\">
                <div class=\"videoText\">
                    <p class=\"titreVideo\">L'avenir commence aujourd'hui.</p>
                    <p class=\"textVideo\">Votre habitat devient autonome, il anticipe vos demandes. Je suis Jarvis et j'apprend de vos habitudes et vous déleste de certaines tâches. vivez chez vous sereinement, ne vous occupez plus de rien, je suis là.</p>
                </div>
                <iframe class=\"video\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1zzmleZekBo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            </div>

        </section>

        ";
        // line 166
        echo "
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jarvis/pro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 166,  219 => 135,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}JarvisPro{% endblock %}

{% block body %}

    <style>

        .entete{background-repeat:no-repeat;background:url(\"../img/home_smarthome.png\");background-size:cover;height:100vh;position:relative;z-index:1;}
        .titre{display:flex;position:absolute;top:50px;left:260px;width:80%;}
        .produit{color:#C1A291;display:flex;}
        a{color:#C1A291;}
        p{color:#ffffff;}
        .navpro{width:80%;align-items: center;}
        .tabInt{position:absolute;top:21vh;left:45vh;height:60vh;}
        .slogan{position:absolute;top:84vh;left:64vh;color:#ffffff;}
        .corps{background:#263271;}
        .titrePro{display:flex;align-items:center;justify-content:center;height:30vh;}
        .titreProd{display:flex;align-items:flex-start;justify-content:center;height:20vh;}
        .textProd{font-size:2em;width:70%;text-align:center;}
        .imagePro{display:flex;align-items:center;justify-content:center;height:50vh;}
        .imgPro{height:315px;}
        .marqueText{display:flex;align-items:flex-end;height:30vh;}
        .textMarque{font-size:2em;width:60%;margin-left:20px;}
        .imageMarque{display:flex;align-items:center;justify-content:center;height:90vh;}
        .imgMarque{height:700px;}
        .marqueText1{display:flex;align-items:start;justify-content:flex-end;height:30vh;}
        .textMarque1{font-size:2em;width:60%;margin-right:20px;}
        .imageMaison{display:flex;align-items:center;justify-content:center;height:120vh;}
        .interface{background:#ffffff;}
        .interSlogan{display:flex;align-items:flex-end;justify-content:center;height:20vh;}
        .titreBleu{color:#263271;font-size:2.5em;width:70%;text-align:center;}
        .interText{display:flex;align-items:center;justify-content:center;height:30vh;}
        .textBleu{color:#263271;font-size:2em;width:60%;text-align:center;}
        .imageInter{display:flex;align-items:center;justify-content:center;height:120vh;}
        .imgInter{width:100%;}
        .titreFamily{display:flex;align-items:flex-end;justify-content:center;height:20vh;}
        .textFamily{display:flex;align-items:center;justify-content:center;height:15vh;}
        .produitFamily{color:#C1A291;display:flex;}
        .textProdFami{font-size:2.5em;width:70%;text-align:center;}
        .savoirPlus{display:flex;align-items:center;justify-content:center;height:10vh;}
        .savoir{color:#EF7E40;font-size:2em;}
        .imageFamily{display:flex;align-items:center;justify-content:center;height:110vh;}
        .imgFamily{width:55%;}
        .videoPro{background:#ffffff;height:90vh;display:flex;align-items:center;}
        .videoText{display:flex;flex-direction:column;align-items:center;justify-content:center;width:40%;height:60vh;}
        .titreVideo{color:black;font-size:2.5em;text-align:center;height:20vh;width:70%;}
        .textVideo{color:#263271;font-size:1.8em;width:70%;}
        .video{width:60%;height:70vh;margin-right:30px;}
        footer{background:#263271;text-align:center;height:20vh;}
        .reseau{display:flex;justify-content:space-around;}
        .copy{align-items:bottom;}

    </style>

    <body>

        <header class=\"img-fluid entete\">

            <div class=\"titre\">
            <h1 class=\"produit\">JarvisPro</h1>
                <ul class=\"nav navpro justify-content-end\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Acheter</a>
                    </li>
                </ul>
            </div>
            <img class=\"img-fluid tabInt\" src=\"../img/TabBlack.png\">
            <h2 class=\"slogan\">\"Bonjour, je suis Jarvis votre majordome\"</h2>

        </header>

        <section class=\"corps\">

            <div class=\"jarvisPro\">
                <div class=\"titrePro\">
                    <h1 class=\"produit\">JarvisPro<p class=\"\">, une révolution</p></h1>
                </div>
                <div class=\"titreProd\">
                    <p class=\"textProd\">Grâce à moi, vos appareils connectés vont fonctionner de manière plus efficace et plus intelligente ensemble, pour vous faciliter la vie.</p>
                </div>
                <div class=\"imagePro\">
                    <img class=\"img-fluid imgPro\" src=\"../img/jarvisProMulti.png\">
                </div>
                <div class=\"titreProd\">
                    <p class=\"textProd\">Quels que soient vos accessoires, je vous permet de les configurer puis de les contrôler très facilement.</p>
                </div>
                <div class=\"imagePro\">
                    <img class=\"img-fluid imgPro\" src=\"../img/ObjetConnect.png\">
                </div>
            </div>

            <div class=\"marques\">
                <div class=\"marqueText\">
                    <p class=\"textMarque\">Plusieurs marques sont d'ores et déjà compatibles avec moi et leurs nombres ne cesse d'auguementer.</p>
                </div>
                <div class=\"imageMarque\">
                    <img class=\"img-fluid imgMarque\" src=\"../img/ListeCompatible.png\">
                </div>
                <div class=\"marqueText1\">
                    <p class=\"textMarque1\">En plus, chacun de ces produits est testé et validé par nos équipes pour garantir une utilisation totalement sécurisée</p>
                </div>
            </div>

            <div class=\"imageMaison\">
                <img class=\"img-fluid\" src=\"../img/Maison3d.png\">
            </div>

            <div class=\"interface\">
                <div class=\"interSlogan\">
                    <p class=\"titreBleu\">Trouver l'interface qui vous correspond !</p>
                </div>
                <div class=\"interText\">
                    <p class=\"textBleu\">J'ai été conçu avant tout pour être autonome et vous décharger de certaines tâches. Mais nous aimons tous garder le contrôle des choses. C'est pour cela que je suis doté d'une interface graphique révolutionnaire qui s'adaptera à chacun.</p>
                </div>
                <div class=\"imageInter\">
                    <img class=\"img-fluid imgInter\" src=\"../img/ipadInterf1.png\">
                </div>
            </div>

            <div class=\"JarvisFamily\">
                <div class=\"titreFamily\">
                    <h1 class=\"produitFamily\">JarvisFamily<p class=\"\">, le réseau familial privé et confidentiel.</p>
                </div>
                <div class=\"textFamily\">
                    <p class=\"textProdFami\">Pour que toute la famille reste en contact</p></h1>
                </div>
                <div class=\"savoirPlus\">
                    <a class=\"savoir\" href=\"{{path('jarvisFamily')}}\">En savoir plus ></a>
                </div>
                <div class=\"imageFamily\">
                    <img class=\"imgFamily\" src=\"../img/FamilyTab.png\">
                </div>
            </div>

            <div class=\"videoPro\">
                <div class=\"videoText\">
                    <p class=\"titreVideo\">L'avenir commence aujourd'hui.</p>
                    <p class=\"textVideo\">Votre habitat devient autonome, il anticipe vos demandes. Je suis Jarvis et j'apprend de vos habitudes et vous déleste de certaines tâches. vivez chez vous sereinement, ne vous occupez plus de rien, je suis là.</p>
                </div>
                <iframe class=\"video\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1zzmleZekBo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            </div>

        </section>

        {# <footer>

            <div class=\"reseau\">
                    <a href=\"#\"><img class=\"facebook\" src=\"img/\"></a>
                    <a href=\"#\"><img class=\"linkedin\" src=\"img/\"></a>
                    <a href=\"#\"><img class=\"instagram\" src=\"img/\"></a>
                    <a href=\"#\"><img class=\"twitter\" src=\"img/\"></a>
            </div>
            <div class=\"copy\">
                <p>© Copyright 2020 mySmartJarvis All Rights Reserved</p>
                <p>Engagement de confisdentialité Utilisation des cookies Mentiobns légales Plan du site</p>
            </div>

        </footer> #}

    </body>

{% endblock %}", "jarvis/pro.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\pro.html.twig");
    }
}
