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
body{background:#263271;height:1000vh;width:100%;}
header{width:100%;max-height:400VH;}
h1{position: relative;bottom: -6vh;right: -21vh;color: #C1A291;}
h2 .cloud{text-align:center;color:white;display:flex;justify-content:center;}
div .jarvis{display: flex;justify-content: space-evenly;position: relative;right: -60vh;}
div .family{height: 750px;width: 750px;position: relative;right: 13vh;}
div .imgtablettefamily{height:auto;max-width:100%;position: relative;right: -73vh;bottom: -16vh;}
div .texte{color:white;display:flex;justify-content:center;}

section{}
 .transports{height:50px;width:50px;}
 .photo{height:50px;width:50px;}
 .new{height:50px;width:50px;}
 .calendrier{height:50px;width:50px;}
 .listeB{height:50px;width:50px;}
 .message{height:50px;width:50px;}

 .my{color:#C1A291;}
 footer{display:flex;flex-direction:column;background:#263271;height:25vh;margin:1vh;}
     div .reseau {height: 50%;display: flex;justify-content: center;/* vertical-align: middle !important; */align-items: center;}
    div .copy{align-items: flex-end;justify-content: center;color:#C1A291;height: 50%;text-align: center;font-weight:bold;}

</style>

<body>

<header>
 <h1>JarvisFamily</h1>
    <div class=\"jarvis\">
       
         <a href=\"#\" >Compatibilités </a>
        
             <a href=\"#\" >  Caractéristiques techniques </a>
                </div>

            <div class=\"family\">
                 <img class=\"imgtablettefamily\" src=\"../img/FamilyTab.jpg\" alt=\"photo tablette jarvis family\">
            </div>

    <div class=\"\">
    <p></p>
</div>



</header>

<h2><strong class=\"cloud\">Cloud privé et sécurisé à la maison</strong></h2>

<div class=\"texte\">
    <p>Un lieu d'echange et de partage au sein du foyer.Sécurisé car stocké
       localement
        à la maison .Créez des albums photos de vos plus beaux 
       souvenirs , échangez des messages en toute confiance et même créer 
               des listes partagées</p>

</div>
<section>
<div class=\"news text-white\">
    <img class=\"new\" src=\"../img/news1.png\" alt=\"\">
    <span><strong>News</strong></span>
    <p>Consulter la météo et l'ensemble des actualités à proximité de chez vous</p>
</div>

<div class=\"messages text-white\">
    <img class=\"message\" src=\"../img/message.png\" alt=\"\">
    <span><strong>Messages</strong></span>
    <p>Echanger des messages avec les membres
     de votre famille
      en toute confidentialité.</p>
</div>

<div class=\"Transport text-white\">
    <img class=\"transports\" src=\"../img/transport.png\" alt=\"\">
    <span><strong>Transport</strong></span>
    <p>Visualiser en direct 
    l'ensemble des transports
     disponibles proche de chez vous.
    (prochainement disponible)</p>
</div>

<div class=\"Photos text-white\">
    <img class=\"photo\" src=\"../img/photos1.png\" alt=\"\">
    <span><strong>Photos</strong></span>
    <p>Créer à nouveau vos albums photos
     d'antan de manière
    sécurisée et accessible 
    depuis n'importe ou dans le monde.
         (prochainement disponible)</p>
</div>

<div class=\"agenda text-white\">
    <img class=\"calendrier\" src=\"../img/calendar1.png\" alt=\"icone calendrier\">
    <span><strong>Agenda</strong></span>
    <p>Partager vos rencontres 
    et rendez-vous
     commun à la famille.
      (prochainement disponible)</p>
</div>

<div class=\"listes text-white\">
    <img class=\"listeB\" src=\"../img/listeB.png\" alt=\"\">
    <span><strong>Listes</strong></span>
    
    <p>Créer des listes à l'ensemble du foyer,
      comme vos listes de courses et assignez
      les à chacun des membres.</p>
</div>

</section>

<h3 class=\"text-white\">Services gratuit inclus dans l'ensemble des produits <strong class=\"my\">mySmartJarvis</strong></h3>

<footer class=\"border-color:#C1A291\">
    <div class=\"reseau\">
            <a href=\"#\"><img class=\"facebook\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"linkedin\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"instagram\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"twitter\" src=\"img/\"></a>
</div>
    <div class=\"copy\">
        <p>Copyright 2020 mySmartJarvis All Rights Reserved</p>
        <p>Engagement de confisdentialité Utilisation des cookies Mentions légales Plan du site</p>
</div>

 





</footer>














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
body{background:#263271;height:1000vh;width:100%;}
header{width:100%;max-height:400VH;}
h1{position: relative;bottom: -6vh;right: -21vh;color: #C1A291;}
h2 .cloud{text-align:center;color:white;display:flex;justify-content:center;}
div .jarvis{display: flex;justify-content: space-evenly;position: relative;right: -60vh;}
div .family{height: 750px;width: 750px;position: relative;right: 13vh;}
div .imgtablettefamily{height:auto;max-width:100%;position: relative;right: -73vh;bottom: -16vh;}
div .texte{color:white;display:flex;justify-content:center;}

section{}
 .transports{height:50px;width:50px;}
 .photo{height:50px;width:50px;}
 .new{height:50px;width:50px;}
 .calendrier{height:50px;width:50px;}
 .listeB{height:50px;width:50px;}
 .message{height:50px;width:50px;}

 .my{color:#C1A291;}
 footer{display:flex;flex-direction:column;background:#263271;height:25vh;margin:1vh;}
     div .reseau {height: 50%;display: flex;justify-content: center;/* vertical-align: middle !important; */align-items: center;}
    div .copy{align-items: flex-end;justify-content: center;color:#C1A291;height: 50%;text-align: center;font-weight:bold;}

</style>

<body>

<header>
 <h1>JarvisFamily</h1>
    <div class=\"jarvis\">
       
         <a href=\"#\" >Compatibilités </a>
        
             <a href=\"#\" >  Caractéristiques techniques </a>
                </div>

            <div class=\"family\">
                 <img class=\"imgtablettefamily\" src=\"../img/FamilyTab.jpg\" alt=\"photo tablette jarvis family\">
            </div>

    <div class=\"\">
    <p></p>
</div>



</header>

<h2><strong class=\"cloud\">Cloud privé et sécurisé à la maison</strong></h2>

<div class=\"texte\">
    <p>Un lieu d'echange et de partage au sein du foyer.Sécurisé car stocké
       localement
        à la maison .Créez des albums photos de vos plus beaux 
       souvenirs , échangez des messages en toute confiance et même créer 
               des listes partagées</p>

</div>
<section>
<div class=\"news text-white\">
    <img class=\"new\" src=\"../img/news1.png\" alt=\"\">
    <span><strong>News</strong></span>
    <p>Consulter la météo et l'ensemble des actualités à proximité de chez vous</p>
</div>

<div class=\"messages text-white\">
    <img class=\"message\" src=\"../img/message.png\" alt=\"\">
    <span><strong>Messages</strong></span>
    <p>Echanger des messages avec les membres
     de votre famille
      en toute confidentialité.</p>
</div>

<div class=\"Transport text-white\">
    <img class=\"transports\" src=\"../img/transport.png\" alt=\"\">
    <span><strong>Transport</strong></span>
    <p>Visualiser en direct 
    l'ensemble des transports
     disponibles proche de chez vous.
    (prochainement disponible)</p>
</div>

<div class=\"Photos text-white\">
    <img class=\"photo\" src=\"../img/photos1.png\" alt=\"\">
    <span><strong>Photos</strong></span>
    <p>Créer à nouveau vos albums photos
     d'antan de manière
    sécurisée et accessible 
    depuis n'importe ou dans le monde.
         (prochainement disponible)</p>
</div>

<div class=\"agenda text-white\">
    <img class=\"calendrier\" src=\"../img/calendar1.png\" alt=\"icone calendrier\">
    <span><strong>Agenda</strong></span>
    <p>Partager vos rencontres 
    et rendez-vous
     commun à la famille.
      (prochainement disponible)</p>
</div>

<div class=\"listes text-white\">
    <img class=\"listeB\" src=\"../img/listeB.png\" alt=\"\">
    <span><strong>Listes</strong></span>
    
    <p>Créer des listes à l'ensemble du foyer,
      comme vos listes de courses et assignez
      les à chacun des membres.</p>
</div>

</section>

<h3 class=\"text-white\">Services gratuit inclus dans l'ensemble des produits <strong class=\"my\">mySmartJarvis</strong></h3>

<footer class=\"border-color:#C1A291\">
    <div class=\"reseau\">
            <a href=\"#\"><img class=\"facebook\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"linkedin\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"instagram\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"twitter\" src=\"img/\"></a>
</div>
    <div class=\"copy\">
        <p>Copyright 2020 mySmartJarvis All Rights Reserved</p>
        <p>Engagement de confisdentialité Utilisation des cookies Mentions légales Plan du site</p>
</div>

 





</footer>














</body>
{% endblock %}
", "jarvis/family.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\family.html.twig");
    }
}
