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

        echo "Hello JarvisController!";
        
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
    body{min-height:1000vh;width:100%;}
    header{background:#263271;width:100%;min-height:50vh;text-align:center;}
    h1 .pro{text-align:center;}
    div .lien{display:flex;justify-content:space-around;}
    div .cadre{background:#EDEFF8;margin-top: 3vh;}
    div .acces{text-align:center;background:#FBFBFD;margin-top: -2VH;margin-bottom: 0vh;margin-right: 0vh;
    margin-left: 0vh;}
    div .enceinte{display:flex;justify-content:space-around;}
    section{display:flex;justify-content:space-around;background:#EDEFF8;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;}
    div .jarvisscreen{text-align:center;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;background:#FBFBFD}
    div .jarvistags{text-align:center;margin-top: 1VH;margin-bottom: 1vh;margin-right: 1vh;margin-left: 1vh;background:#FBFBFD}
    main{display:flex;justify-content:space-around;background:#EDEFF8;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;text-align:center;}
    article{display:flex;justify-content:space-around;background:#EDEFF8;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;text-align:center;}
    footer{background:#263271;text-align:center;height:20vh;}
    div .reseau{display:flex;justify-content:space-around;}
    div .copy{align-items:bottom;}
    #imgfamily{max-width: 100%;
\theight: auto;}
    #imghotel{max-width: 100%;
\theight: auto;}
    #imgtel{max-width: 100%;
\theight: auto;}
    #imgscreen{max-width: 100%;
\theight: auto;}
    #imgtags{max-width: 100%;
\theight: auto;}
</style>

<body>

<header>
    <div class=\"texte\">
        <h1 class=\"pro\">JarvisPro</h1>

        <h2>Une app pour gérer l'ensemble de votre domotique</h2>

        <h5>à partir de 900 €</h5>

    </div>

<div class=\"lien\">
        <a href=\"jarvisPro\" src=\"\">En savoir plus</a>
        <a href=\"\" src=\"\">Acheter</a>
</div>

    <img class=\"tel\" src=\"img/Entete1.png\" alt=\"\" id=\"imgtel\">

</header>

<div class=\"cadre\">
    <div class=\"acces\">
            <h1>JarvisAcces</h1>
            <h2>Une alternative au Ehpad à domicile</h2>
            <h5>à partir de 450 €</h5>
        <div>
             <a href=\"jarvisAcces\" src=\"\">En savoir plus</a>
             <a href=\"\" src=\"\">Acheter</a>
        </div>

        <div class=\"enceinte\">
             <img class=\"\" src=\"img/enceinte1.jpg\">
             <br>
             <img class=\"\" src=\"img/enceinte.jpg\">
        
        </div>
        
        
    </div>
</div>

<section>
    
    <div class=\"jarvisscreen\">
            <h1 class=\"screen\">JarvisScreen</h1>

            <h2>Plus qu'un écran un monstre</h2>

            <h5>à partir de 1020 €</h5>

        <div>
             <a href=\"jarvisscreen\" src=\"\">En savoir plus</a>
             <a href=\"\" src=\"\">Acheter</a>
         </div>
          <div class=\"tablette\">
             <img class=\"\" src=\"img/Jarvisscreen.jpg\" id=\"imgscreen\">
           
        </div>   
    </div>

    <div class=\"jarvistags\">
        <h1>JarvisTags</h1>
        <h2>Prochainement disponible</h2>

         <div>
             <a href=\"jarvistag\" src=\"\">En savoir plus</a>
             <a href=\"\" src=\"\">Acheter</a>
         </div>
          <div class=\"tags\">
             <img class=\"\" src=\"img/enceinte.jpg\" id=\"imgtags\">
           
        </div>   

    </div>

</section>

<main>
 <div class=\"jarvisfamily\">
            <h1 class=\"family\">JarvisFamily</h1>

            <h2>Le réseau familial,privé et sécurisé</h2>

          

        <div>
             <a href=\"jarvisfamily\" src=\"\">En savoir plus</a>
             
         </div>
          <div class=\"tablette family\">
             <img class=\"\" src=\"img/FamilyTab.jpg\" id=\"imgfamily\">
           
        </div>   
    </div>

    <div class=\"jarvisforhotels\">
        <h1>JarvisForHotels</h1>
        <h2>l'expérience client au coeur de votre hôtel</h2>
        <h4>à partir de 1500 € par chambre</h4>

         <div>
             <a href=\"jarvisforhotels\" src=\"\">En savoir plus</a>
            
         </div>
          <div class=\"hotel\">
             <img class=\"\" src=\"img/Façade1.jpeg\" id=\"imghotel\">
           
        </div>   

    </div>
</main>
<article>

<div class=\"jarvisabonnement\">
            <h1 class=\"\">Abonnement</h1>

            <h2>En achat ou en location, votre Jarvis à porter de main</h2>

          

        <div>
             <a href=\"abonnement\" src=\"\">En savoir plus</a>
             
         </div>
          <div class=\"\">
             <img class=\"\" src=\"img/img/Annotation 2020-02-28 155121.png\">
           
        </div>   
    </div>

    <div class=\"services\">
        <h1>Services</h1>
        <h2>Femme de ménage,jardinier,nounous,tout ce monde à votre service</h2>
        

         <div>
             <a href=\"Services\" src=\"\">En savoir plus</a>
            
         </div>
          <div class=\"jarvisservices\">
             <img class=\"background:blue;\" src=\"img/\">
           
        </div>   

    </div>
</article>


<footer>
    <div class=\"reseau\">
            <a href=\"#\"><img class=\"facebook\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"linkedin\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"instagram\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"twitter\" src=\"img/\"></a>
</div>
    <div class=\"copy\">
        <p>Copyright 2020 mySmartJarvis All Rights Reserved</p>
        <p>Engagement de confisdentialité Utilisation des cookies Mentiobns légales Plan du site</p>
</div>

 





</footer>

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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello JarvisController!{% endblock %}

{% block body %}
<style>
    body{min-height:1000vh;width:100%;}
    header{background:#263271;width:100%;min-height:50vh;text-align:center;}
    h1 .pro{text-align:center;}
    div .lien{display:flex;justify-content:space-around;}
    div .cadre{background:#EDEFF8;margin-top: 3vh;}
    div .acces{text-align:center;background:#FBFBFD;margin-top: -2VH;margin-bottom: 0vh;margin-right: 0vh;
    margin-left: 0vh;}
    div .enceinte{display:flex;justify-content:space-around;}
    section{display:flex;justify-content:space-around;background:#EDEFF8;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;}
    div .jarvisscreen{text-align:center;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;background:#FBFBFD}
    div .jarvistags{text-align:center;margin-top: 1VH;margin-bottom: 1vh;margin-right: 1vh;margin-left: 1vh;background:#FBFBFD}
    main{display:flex;justify-content:space-around;background:#EDEFF8;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;text-align:center;}
    article{display:flex;justify-content:space-around;background:#EDEFF8;margin-top: 1VH;margin-bottom: 1vh; margin-right: 1vh;margin-left: 1vh;text-align:center;}
    footer{background:#263271;text-align:center;height:20vh;}
    div .reseau{display:flex;justify-content:space-around;}
    div .copy{align-items:bottom;}
    #imgfamily{max-width: 100%;
\theight: auto;}
    #imghotel{max-width: 100%;
\theight: auto;}
    #imgtel{max-width: 100%;
\theight: auto;}
    #imgscreen{max-width: 100%;
\theight: auto;}
    #imgtags{max-width: 100%;
\theight: auto;}
</style>

<body>

<header>
    <div class=\"texte\">
        <h1 class=\"pro\">JarvisPro</h1>

        <h2>Une app pour gérer l'ensemble de votre domotique</h2>

        <h5>à partir de 900 €</h5>

    </div>

<div class=\"lien\">
        <a href=\"jarvisPro\" src=\"\">En savoir plus</a>
        <a href=\"\" src=\"\">Acheter</a>
</div>

    <img class=\"tel\" src=\"img/Entete1.png\" alt=\"\" id=\"imgtel\">

</header>

<div class=\"cadre\">
    <div class=\"acces\">
            <h1>JarvisAcces</h1>
            <h2>Une alternative au Ehpad à domicile</h2>
            <h5>à partir de 450 €</h5>
        <div>
             <a href=\"jarvisAcces\" src=\"\">En savoir plus</a>
             <a href=\"\" src=\"\">Acheter</a>
        </div>

        <div class=\"enceinte\">
             <img class=\"\" src=\"img/enceinte1.jpg\">
             <br>
             <img class=\"\" src=\"img/enceinte.jpg\">
        
        </div>
        
        
    </div>
</div>

<section>
    
    <div class=\"jarvisscreen\">
            <h1 class=\"screen\">JarvisScreen</h1>

            <h2>Plus qu'un écran un monstre</h2>

            <h5>à partir de 1020 €</h5>

        <div>
             <a href=\"jarvisscreen\" src=\"\">En savoir plus</a>
             <a href=\"\" src=\"\">Acheter</a>
         </div>
          <div class=\"tablette\">
             <img class=\"\" src=\"img/Jarvisscreen.jpg\" id=\"imgscreen\">
           
        </div>   
    </div>

    <div class=\"jarvistags\">
        <h1>JarvisTags</h1>
        <h2>Prochainement disponible</h2>

         <div>
             <a href=\"jarvistag\" src=\"\">En savoir plus</a>
             <a href=\"\" src=\"\">Acheter</a>
         </div>
          <div class=\"tags\">
             <img class=\"\" src=\"img/enceinte.jpg\" id=\"imgtags\">
           
        </div>   

    </div>

</section>

<main>
 <div class=\"jarvisfamily\">
            <h1 class=\"family\">JarvisFamily</h1>

            <h2>Le réseau familial,privé et sécurisé</h2>

          

        <div>
             <a href=\"jarvisfamily\" src=\"\">En savoir plus</a>
             
         </div>
          <div class=\"tablette family\">
             <img class=\"\" src=\"img/FamilyTab.jpg\" id=\"imgfamily\">
           
        </div>   
    </div>

    <div class=\"jarvisforhotels\">
        <h1>JarvisForHotels</h1>
        <h2>l'expérience client au coeur de votre hôtel</h2>
        <h4>à partir de 1500 € par chambre</h4>

         <div>
             <a href=\"jarvisforhotels\" src=\"\">En savoir plus</a>
            
         </div>
          <div class=\"hotel\">
             <img class=\"\" src=\"img/Façade1.jpeg\" id=\"imghotel\">
           
        </div>   

    </div>
</main>
<article>

<div class=\"jarvisabonnement\">
            <h1 class=\"\">Abonnement</h1>

            <h2>En achat ou en location, votre Jarvis à porter de main</h2>

          

        <div>
             <a href=\"abonnement\" src=\"\">En savoir plus</a>
             
         </div>
          <div class=\"\">
             <img class=\"\" src=\"img/img/Annotation 2020-02-28 155121.png\">
           
        </div>   
    </div>

    <div class=\"services\">
        <h1>Services</h1>
        <h2>Femme de ménage,jardinier,nounous,tout ce monde à votre service</h2>
        

         <div>
             <a href=\"Services\" src=\"\">En savoir plus</a>
            
         </div>
          <div class=\"jarvisservices\">
             <img class=\"background:blue;\" src=\"img/\">
           
        </div>   

    </div>
</article>


<footer>
    <div class=\"reseau\">
            <a href=\"#\"><img class=\"facebook\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"linkedin\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"instagram\" src=\"img/\"></a>
            <a href=\"#\"><img class=\"twitter\" src=\"img/\"></a>
</div>
    <div class=\"copy\">
        <p>Copyright 2020 mySmartJarvis All Rights Reserved</p>
        <p>Engagement de confisdentialité Utilisation des cookies Mentiobns légales Plan du site</p>
</div>

 





</footer>

 </body>

   
   

{% endblock %}










        

        
       
        



    
    
    
    








   ", "jarvis/index.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\index.html.twig");
    }
}
