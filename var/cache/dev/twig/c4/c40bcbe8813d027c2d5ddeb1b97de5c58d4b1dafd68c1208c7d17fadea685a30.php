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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<style>
body{background:#263271;margin: 0 auto;}
header{width:100%;margin: 0 auto;align-items:center;text-align:center;}
.lien{display:flex;padding-left:30%;}
.titre{display:flex;align-items:center;justify-content:space-evenly;padding-top:6vh;}
.a-lien{position:relative;margin-left:6vh;color:#C1A291;}
a:hover{text-decoration:none;}
h1{color: #C1A291;}
h2 .cloud{text-align:center;color:white;display:flex;justify-content:center;}
div .jarvis{display: flex;justify-content: space-evenly;position: relative;right: -41vh;}
div .family{height: 750px;width: 750px;position: relative;right: 13vh;}
div .imgtablettefamily{height:auto;max-width:100%;position: relative;right: -40vh;bottom: -16vh;}
div .texte{color:white;display:flex;justify-content:center;}
section{margin-top: 5vh;}
 .transports{height:50px;width:50px;}
 .pTransport{position: relative;top: -6vh;right: -24vh;}
 .photo{height:50px;width:50px;}
 .pPhoto{position: relative;top: -6vh;right: -23vh;}
 .new{height:50px;width:50px;}
 .pNews{position: relative;top: -6vh;right: -23vh;}
 .calendrier{height:50px;width:50px;}
 .pCalendrier{position: relative;top: -6vh;right: -22vh;}
 .listeB{height:50px;width:50px;}
 .pListe{position: relative;top: -6vh;right: -21vh;}
 .message{height:50px;width:50px;}
 .pMessage{position: relative;top: -6vh;right: -24vh;}
 .my{color:#C1A291;}
 

</style>

<body>

<header>
    <div class=\"titre\">
        <h1>JarvisFamily</h2>
        <div class=\"lien\">
              <a class=\"a-lien\" href=\"\">Compatibilités</a>
              <a class=\"a-lien\" href=\"\">Caractéristiques techniques</a>
        </div>
    </div>
    <img class=\"imgtablettefamily\" src=\"../img/FamilyTab.jpg\" alt=\"photo tablette jarvis family\">
</header>

<h2><strong class=\"cloud\">Cloud privé et sécurisé à la maison</strong></h2>

<div class=\"texte\">
    <article>Un lieu d'echange et de partage au sein du foyer, Sécurisé car stocké
       localement à la maison.Créez des albums photos de vos plus beaux 
       souvenirs , échangez des messages en toute confiance et même créer 
       des listes partagées
    </article>
</div>
<section>
<div class=\"news text-white\">
    <img class=\"new\" src=\"../img/news1.png\" alt=\"\">
    <h4><strong>News</strong></h4>
    <p class=\"pNews\">Consulter la météo et l'ensemble des actualités à proximité de chez vous</p>
</div>
<br>
<div class=\"messages text-white\">
    <img class=\"message\" src=\"../img/message.png\" alt=\"\">
    <h4><strong>Messages</strong></h4>
    <p class=\"pMessage\">Echanger des messages avec les membres
     de votre famille en toute confidentialité.</p>
</div>
<br>
<div class=\"Transport text-white\">
    <img class=\"transports\" src=\"../img/transport.png\" alt=\"\">
    <h4><strong>Transport</strong></h4>
    <p class=\"pTransport\">Visualiser en direct 
    l'ensemble des transports
     disponibles proche de chez vous.
    (prochainement disponible)</p>
</div>
<br>
<div class=\"Photos text-white\">
    <img class=\"photo\" src=\"../img/photos1.png\" alt=\"\">
    <h4><strong>Photos</strong></h4>
    <p class=\"pPhoto\">Créer à nouveau vos albums photos
     d'antan de manière
    sécurisée et accessible 
    depuis n'importe ou dans le monde.
         (prochainement disponible)</p>
</div>
<br>
<div class=\"agenda text-white\">
    <img class=\"calendrier\" src=\"../img/calendar1.png\" alt=\"icone calendrier\">
    <h4><strong>Agenda</strong></h4>
    <p class=\"pCalendrier\">Partager vos rencontres 
    et rendez-vous
     commun à la famille.
      (prochainement disponible)</p>
</div>
<br>
<div class=\"listes text-white\">
    <img class=\"listeB\" src=\"../img/listeB.png\" alt=\"\">
    <h4><strong>Listes</strong></h4>
    <p class=\"pListe\">Créer des listes à l'ensemble du foyer,
      comme vos listes de courses et assignez
      les à chacun des membres.</p>
</div>

</section>


<h3 class=\"text-white\">Services gratuit inclus dans l'ensemble des produits <strong class=\"my\">mySmartJarvis</strong></h3>















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
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<style>
body{background:#263271;margin: 0 auto;}
header{width:100%;margin: 0 auto;align-items:center;text-align:center;}
.lien{display:flex;padding-left:30%;}
.titre{display:flex;align-items:center;justify-content:space-evenly;padding-top:6vh;}
.a-lien{position:relative;margin-left:6vh;color:#C1A291;}
a:hover{text-decoration:none;}
h1{color: #C1A291;}
h2 .cloud{text-align:center;color:white;display:flex;justify-content:center;}
div .jarvis{display: flex;justify-content: space-evenly;position: relative;right: -41vh;}
div .family{height: 750px;width: 750px;position: relative;right: 13vh;}
div .imgtablettefamily{height:auto;max-width:100%;position: relative;right: -40vh;bottom: -16vh;}
div .texte{color:white;display:flex;justify-content:center;}
section{margin-top: 5vh;}
 .transports{height:50px;width:50px;}
 .pTransport{position: relative;top: -6vh;right: -24vh;}
 .photo{height:50px;width:50px;}
 .pPhoto{position: relative;top: -6vh;right: -23vh;}
 .new{height:50px;width:50px;}
 .pNews{position: relative;top: -6vh;right: -23vh;}
 .calendrier{height:50px;width:50px;}
 .pCalendrier{position: relative;top: -6vh;right: -22vh;}
 .listeB{height:50px;width:50px;}
 .pListe{position: relative;top: -6vh;right: -21vh;}
 .message{height:50px;width:50px;}
 .pMessage{position: relative;top: -6vh;right: -24vh;}
 .my{color:#C1A291;}
 

</style>

<body>

<header>
    <div class=\"titre\">
        <h1>JarvisFamily</h2>
        <div class=\"lien\">
              <a class=\"a-lien\" href=\"\">Compatibilités</a>
              <a class=\"a-lien\" href=\"\">Caractéristiques techniques</a>
        </div>
    </div>
    <img class=\"imgtablettefamily\" src=\"../img/FamilyTab.jpg\" alt=\"photo tablette jarvis family\">
</header>

<h2><strong class=\"cloud\">Cloud privé et sécurisé à la maison</strong></h2>

<div class=\"texte\">
    <article>Un lieu d'echange et de partage au sein du foyer, Sécurisé car stocké
       localement à la maison.Créez des albums photos de vos plus beaux 
       souvenirs , échangez des messages en toute confiance et même créer 
       des listes partagées
    </article>
</div>
<section>
<div class=\"news text-white\">
    <img class=\"new\" src=\"../img/news1.png\" alt=\"\">
    <h4><strong>News</strong></h4>
    <p class=\"pNews\">Consulter la météo et l'ensemble des actualités à proximité de chez vous</p>
</div>
<br>
<div class=\"messages text-white\">
    <img class=\"message\" src=\"../img/message.png\" alt=\"\">
    <h4><strong>Messages</strong></h4>
    <p class=\"pMessage\">Echanger des messages avec les membres
     de votre famille en toute confidentialité.</p>
</div>
<br>
<div class=\"Transport text-white\">
    <img class=\"transports\" src=\"../img/transport.png\" alt=\"\">
    <h4><strong>Transport</strong></h4>
    <p class=\"pTransport\">Visualiser en direct 
    l'ensemble des transports
     disponibles proche de chez vous.
    (prochainement disponible)</p>
</div>
<br>
<div class=\"Photos text-white\">
    <img class=\"photo\" src=\"../img/photos1.png\" alt=\"\">
    <h4><strong>Photos</strong></h4>
    <p class=\"pPhoto\">Créer à nouveau vos albums photos
     d'antan de manière
    sécurisée et accessible 
    depuis n'importe ou dans le monde.
         (prochainement disponible)</p>
</div>
<br>
<div class=\"agenda text-white\">
    <img class=\"calendrier\" src=\"../img/calendar1.png\" alt=\"icone calendrier\">
    <h4><strong>Agenda</strong></h4>
    <p class=\"pCalendrier\">Partager vos rencontres 
    et rendez-vous
     commun à la famille.
      (prochainement disponible)</p>
</div>
<br>
<div class=\"listes text-white\">
    <img class=\"listeB\" src=\"../img/listeB.png\" alt=\"\">
    <h4><strong>Listes</strong></h4>
    <p class=\"pListe\">Créer des listes à l'ensemble du foyer,
      comme vos listes de courses et assignez
      les à chacun des membres.</p>
</div>

</section>


<h3 class=\"text-white\">Services gratuit inclus dans l'ensemble des produits <strong class=\"my\">mySmartJarvis</strong></h3>















</body>
{% endblock %}
", "jarvis/family.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\family.html.twig");
    }
}
