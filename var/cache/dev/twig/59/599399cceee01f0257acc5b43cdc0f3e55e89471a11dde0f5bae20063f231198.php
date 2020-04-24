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

/* jarvis/index.html.twig */
class __TwigTemplate_f9500c2d662dde293d2ffe9dc7bb200863e8fc099af9ae68a23ace08feb7f987 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jarvis/index.html.twig", 1);
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

        echo "Acceuil Jarvis";
        
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
        echo "<style>
    header{background:#263271;width:100%;height:110vh;text-align:center;padding-top:6vh;margin: 0 auto;}
    .tel{vertical-align: middle;border-style: none;height: 500px;width: 650px;padding-bottom:5vh;padding-top:5vh;}
    h1 {text-align:center;color:#C1A291;font-size:4vw;}
    h2{color:#C1A291;padding:5vh;font-size:3vw;}
    .pro{color:white;}
    h5{color:#C1A291;}
    .lien{display:flex;justify-content:space-evenly;margin:5vh 40vh 0vh 40vh;}
    .a-lien{color:#EF7E40;margin-left:5vh;}
    .plus{color:#EF7E40;font-size:1.5vw;padding:3vh;}
    .cadre{margin:0 auto;padding-bottom:5vh;margin-bottom:0.5vh;background:#FBFBFD;}
    .acces{text-align:center;background:#FBFBFD;}
    .enceinte{display:flex;justify-content:space-evenly;}
    section{width: 100%;height: auto;display:flex;justify-content:space-around;text-align:center;margin:0 auto;}
    .jarvisscreen{width: 50%;height: auto;margin:0.5vh;;background:#FBFBFD;}
    .jarvistags{width: 50%;height: auto;margin: 0.5vh;background:#FBFBFD;}
    .imgscreen{width: 350px;height: 250px;}
    .imgtags{width:250px;height: auto;}
    .imgtags1{width:320px;height: auto;}
    main{display:flex;justify-content:space-around;text-align:center;margin:0 auto;background:white;}
    .jarvisfamily{background:#FBFBFD;width: 50%;height: auto;margin: 0.5vh;justify-content:center;padding-bottom:3vh;}
    .jarvisforhotels{background:#FBFBFD;width: 50%;height: auto;margin:0.5vh;text-align:center;padding-bottom:3vh;}
    .imghotel{width: 400px;height: 200px;}
    .imgfamily{width: 350px;height: 250px;}
    article{width:100%;height:auto;display:flex;justify-content:space-around;margin:0 auto;text-align:center;}
    .jarvisabonnement{background:#FBFBFD;width: 50%;height: auto;margin: 0.5vh;padding-bottom:3vh;}
    .jarvisservices{background:#FBFBFD;width: 50%;height: auto;margin: 0.5vh;padding-bottom:3vh;}
    .imgabonnement{width:300px;height:200px;}
    .logo{height: 50px;width: 50px;}
    .logo-service{padding-top:8vh;}

</style>

<body>

<header>
    <div class=\"text\">
        <h1 class=\"\">JarvisPro</h1>
        <h3 class=\"pro\">Une app pour gérer l'ensemble de votre domotique</h3>
        <h5>à partir de 900 €</h5>
    </div>
    <div class=\"lien\">
            <a class=\"plus\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisPro");
        echo "\" src=\"\">En savoir plus ></a>
            <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
    </div>
    <img class=\"tel\" src=\"img/Entete1.png\" alt=\"\" id=\"imgtel\">
</header>
<div class=\"cadre\">
    <div class=\"acces\">
            <h2>JarvisAcces</h2>
            <h3>Une alternative au Ehpad à domicile</h3>
            <h5>à partir de 450 €</h5>
        <div>
             <a class=\"plus\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisAcces");
        echo "\" src=\"\">En savoir plus ></a>
             <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
        </div>
        <div class=\"enceinte\">
             <img class=\"imgtags\" src=\"img/enceinte.png\">
             <br>
             <img class=\"imgtags1\" src=\"img/enceinte1.png\">
        </div>
    </div>
</div>
<section>
    <div class=\"jarvisscreen\">
            <h2 class=\"screen\">JarvisScreen</h2>
            <h3>Plus qu'un écran un monstre</h3>
            <h5>à partir de 1020 €</h5>
        <div>
             <a class=\"plus\" href=\"jarvisScreen\" src=\"\">En savoir plus ></a>
             <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
         </div>
          <div class=\"tablette\">
             <img class=\"imgscreen\" src=\"img/JarvisScreen.png\">  
        </div>   
    </div>
    <div class=\"jarvistags\">
        <h2>JarvisTags</h2>
        <h3>Prochainement disponible</h3>
         <div>
             <a class=\"plus\" href=\"jarvistag\" src=\"\">En savoir plus ></a>
             <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
         </div>
          <div class=\"tags\">
             <img class=\"imgtags\" src=\"img/enceinte.png\"> 
        </div>   
    </div>
</section>
<main>
    <div class=\"jarvisfamily\">
            <h2 class=\"family\">JarvisFamily</h2>
            <h3>Le réseau familial,privé et sécurisé</h3>
        <div>
             <a class=\"plus\" href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisFamily");
        echo "\" src=\"\">En savoir plus ></a> 
         </div>
          <div class=\"tablette family\">
             <img class=\"imgfamily\" src=\"img/FamilyTab.png\">
        </div>   
    </div>
    <div class=\"jarvisforhotels\">
        <h2>JarvisForHotels</h2>
        <h3>l'expérience client au coeur de votre hôtel</h3>
        <h5>à partir de 1500 € par chambre</h5>
         <div>
               <a class=\"plus\" href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisHotel");
        echo "\" src=\"\">En savoir plus ></a>
         </div>
          <div class=\"hotel\">
             <img class=\"imghotel\" src=\"img/Façade1.jpeg\">
        </div>   
    </div>
</main>
<article>
<div class=\"jarvisabonnement\">
            <h2>Abonnement</h2>
            <h3>En achat ou en location, votre Jarvis à porter de main</h3>
        <div>
             <a class=\"plus\" href=\"abonnement\" src=\"\">En savoir plus ></a>
         </div>
          <div class=\"\">
             <img class=\"imgabonnement\" src=\"img/img/Annotation 2020-02-28 155121.png\">
        </div>   
    </div>
    <div class=\"jarvisservices\">
        <h2>Services</h2>
        <h3>Femme de ménage, jardinier, nounous, tout ce monde à votre service</h3>
         <div>
             <a class=\"plus\" href=\"Services\" src=\"\">En savoir plus ></a>
         </div>
         <div>
          <div class=\"logo-service\">
             <img class=\"logo\" src=\"../img/img/logo rond/ubereat.png\">
             <img class=\"logo\" src=\"../img/img/logo rond/deliveroo.png\">
             <img class=\"logo\" src=\"../img/JustEat.png\">
             <img class=\"logo\" src=\"../img/img/logo rond/netflix.png\">
           </div>
           <br>
            <div>
             <img class=\"logo\" src=\"../img/img/logo rond/aideballade.png\">
             <img class=\"logo\" src=\"../img/img/logo rond/aideMedical.jpg\">
             <img class=\"logo\" src=\"../img/img/logo rond/aideMenage.jpg\">
             <img class=\"logo\" src=\"../img/img/logo rond/aideRepas.png\">
            </div>
          </div>
    </div>
</article>


 </body>

   
   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jarvis/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 110,  189 => 99,  146 => 59,  132 => 48,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Acceuil Jarvis{% endblock %}

{% block body %}
<style>
    header{background:#263271;width:100%;height:110vh;text-align:center;padding-top:6vh;margin: 0 auto;}
    .tel{vertical-align: middle;border-style: none;height: 500px;width: 650px;padding-bottom:5vh;padding-top:5vh;}
    h1 {text-align:center;color:#C1A291;font-size:4vw;}
    h2{color:#C1A291;padding:5vh;font-size:3vw;}
    .pro{color:white;}
    h5{color:#C1A291;}
    .lien{display:flex;justify-content:space-evenly;margin:5vh 40vh 0vh 40vh;}
    .a-lien{color:#EF7E40;margin-left:5vh;}
    .plus{color:#EF7E40;font-size:1.5vw;padding:3vh;}
    .cadre{margin:0 auto;padding-bottom:5vh;margin-bottom:0.5vh;background:#FBFBFD;}
    .acces{text-align:center;background:#FBFBFD;}
    .enceinte{display:flex;justify-content:space-evenly;}
    section{width: 100%;height: auto;display:flex;justify-content:space-around;text-align:center;margin:0 auto;}
    .jarvisscreen{width: 50%;height: auto;margin:0.5vh;;background:#FBFBFD;}
    .jarvistags{width: 50%;height: auto;margin: 0.5vh;background:#FBFBFD;}
    .imgscreen{width: 350px;height: 250px;}
    .imgtags{width:250px;height: auto;}
    .imgtags1{width:320px;height: auto;}
    main{display:flex;justify-content:space-around;text-align:center;margin:0 auto;background:white;}
    .jarvisfamily{background:#FBFBFD;width: 50%;height: auto;margin: 0.5vh;justify-content:center;padding-bottom:3vh;}
    .jarvisforhotels{background:#FBFBFD;width: 50%;height: auto;margin:0.5vh;text-align:center;padding-bottom:3vh;}
    .imghotel{width: 400px;height: 200px;}
    .imgfamily{width: 350px;height: 250px;}
    article{width:100%;height:auto;display:flex;justify-content:space-around;margin:0 auto;text-align:center;}
    .jarvisabonnement{background:#FBFBFD;width: 50%;height: auto;margin: 0.5vh;padding-bottom:3vh;}
    .jarvisservices{background:#FBFBFD;width: 50%;height: auto;margin: 0.5vh;padding-bottom:3vh;}
    .imgabonnement{width:300px;height:200px;}
    .logo{height: 50px;width: 50px;}
    .logo-service{padding-top:8vh;}

</style>

<body>

<header>
    <div class=\"text\">
        <h1 class=\"\">JarvisPro</h1>
        <h3 class=\"pro\">Une app pour gérer l'ensemble de votre domotique</h3>
        <h5>à partir de 900 €</h5>
    </div>
    <div class=\"lien\">
            <a class=\"plus\" href=\"{{path('jarvisPro')}}\" src=\"\">En savoir plus ></a>
            <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
    </div>
    <img class=\"tel\" src=\"img/Entete1.png\" alt=\"\" id=\"imgtel\">
</header>
<div class=\"cadre\">
    <div class=\"acces\">
            <h2>JarvisAcces</h2>
            <h3>Une alternative au Ehpad à domicile</h3>
            <h5>à partir de 450 €</h5>
        <div>
             <a class=\"plus\" href=\"{{path('jarvisAcces')}}\" src=\"\">En savoir plus ></a>
             <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
        </div>
        <div class=\"enceinte\">
             <img class=\"imgtags\" src=\"img/enceinte.png\">
             <br>
             <img class=\"imgtags1\" src=\"img/enceinte1.png\">
        </div>
    </div>
</div>
<section>
    <div class=\"jarvisscreen\">
            <h2 class=\"screen\">JarvisScreen</h2>
            <h3>Plus qu'un écran un monstre</h3>
            <h5>à partir de 1020 €</h5>
        <div>
             <a class=\"plus\" href=\"jarvisScreen\" src=\"\">En savoir plus ></a>
             <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
         </div>
          <div class=\"tablette\">
             <img class=\"imgscreen\" src=\"img/JarvisScreen.png\">  
        </div>   
    </div>
    <div class=\"jarvistags\">
        <h2>JarvisTags</h2>
        <h3>Prochainement disponible</h3>
         <div>
             <a class=\"plus\" href=\"jarvistag\" src=\"\">En savoir plus ></a>
             <a class=\"plus\" href=\"\" src=\"\">Acheter ></a>
         </div>
          <div class=\"tags\">
             <img class=\"imgtags\" src=\"img/enceinte.png\"> 
        </div>   
    </div>
</section>
<main>
    <div class=\"jarvisfamily\">
            <h2 class=\"family\">JarvisFamily</h2>
            <h3>Le réseau familial,privé et sécurisé</h3>
        <div>
             <a class=\"plus\" href=\"{{ path('jarvisFamily') }}\" src=\"\">En savoir plus ></a> 
         </div>
          <div class=\"tablette family\">
             <img class=\"imgfamily\" src=\"img/FamilyTab.png\">
        </div>   
    </div>
    <div class=\"jarvisforhotels\">
        <h2>JarvisForHotels</h2>
        <h3>l'expérience client au coeur de votre hôtel</h3>
        <h5>à partir de 1500 € par chambre</h5>
         <div>
               <a class=\"plus\" href=\"{{path('jarvisHotel')}}\" src=\"\">En savoir plus ></a>
         </div>
          <div class=\"hotel\">
             <img class=\"imghotel\" src=\"img/Façade1.jpeg\">
        </div>   
    </div>
</main>
<article>
<div class=\"jarvisabonnement\">
            <h2>Abonnement</h2>
            <h3>En achat ou en location, votre Jarvis à porter de main</h3>
        <div>
             <a class=\"plus\" href=\"abonnement\" src=\"\">En savoir plus ></a>
         </div>
          <div class=\"\">
             <img class=\"imgabonnement\" src=\"img/img/Annotation 2020-02-28 155121.png\">
        </div>   
    </div>
    <div class=\"jarvisservices\">
        <h2>Services</h2>
        <h3>Femme de ménage, jardinier, nounous, tout ce monde à votre service</h3>
         <div>
             <a class=\"plus\" href=\"Services\" src=\"\">En savoir plus ></a>
         </div>
         <div>
          <div class=\"logo-service\">
             <img class=\"logo\" src=\"../img/img/logo rond/ubereat.png\">
             <img class=\"logo\" src=\"../img/img/logo rond/deliveroo.png\">
             <img class=\"logo\" src=\"../img/JustEat.png\">
             <img class=\"logo\" src=\"../img/img/logo rond/netflix.png\">
           </div>
           <br>
            <div>
             <img class=\"logo\" src=\"../img/img/logo rond/aideballade.png\">
             <img class=\"logo\" src=\"../img/img/logo rond/aideMedical.jpg\">
             <img class=\"logo\" src=\"../img/img/logo rond/aideMenage.jpg\">
             <img class=\"logo\" src=\"../img/img/logo rond/aideRepas.png\">
            </div>
          </div>
    </div>
</article>


 </body>

   
   

{% endblock %}

", "jarvis/index.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\index.html.twig");
    }
}
