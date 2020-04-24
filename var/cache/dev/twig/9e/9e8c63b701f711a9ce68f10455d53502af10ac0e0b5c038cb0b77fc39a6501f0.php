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

/* jarvis/acces.html.twig */
class __TwigTemplate_444a4ab96a9b60fc19cde668cd717e6df3cd30b1aac8983645e22e549e4e856d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/acces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jarvis/acces.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jarvis/acces.html.twig", 1);
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

        echo "JarvisAcces";
        
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
    .contenu{margin: 0 auto;}
    header{width:100%;margin: 0 auto;background:#263271;text-align:center;min-height:80vh;align-items:center;padding-top:5vh;}
    .lien{display:flex;padding-left:30%;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:13vh;width:100%;margin-bottom:0px;position:absolute;top:5vh;}
    .produit{color:#C1A291;margin-left:26vh;font-size:4vw;}
    .navProduit{display:flex;align-items:end;margin-right:6vh;}

    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    span{color:#C1A291;}
    #imgenceinte{width:20%;height:auto;margin-top:20vh;}
    .tv-assist{font-size:7vh;color:white;margin-bottom:10vh;margin-top:10vh;}
    .mini-logo{height:15vh;}
    .acces{text-align:center;margin: 0 auto;background-color:#FBFBFD;}
    .acces-text{font-size:7vh;text-align:center;padding-top:10vh;background-color:#FBFBFD;}
    .acces-text2{font-size:4.4vh;background-color:#FBFBFD;}
    .tag{text-align:center;background-color:#FBFBFD;margin-top:-2.7vh;padding-top:7vh;}
    .tag-text{display:flex;justify-content:center;}
    .tag-text2{padding-top:9vh;font-size:3.5vh;}
    .tag-img{height:55vh;}
    .smoke{text-align:center;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;padding-bottom:7vh;}
    .smoke-img{height:30vh;}
    .smoke-text{display:flex;justify-content:center;}
    .smoke-text2{padding-top:8vh;font-size:3.5vh;}
    .motion{text-align:center;font-size:3.5vh;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;}
    .motion-text{display:flex;justify-content:center;align-items:center;}
    .motion-img{height:45vh;}
    .plug{text-align:center;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;}
    .plug-text{display:flex;justify-content:center;}
    .plug-img{height:50vh;}
    .plug-text2{margin-top:23vh;font-size:3.5vh;}
    .plan-appartement{text-align:center;background-color:#FBFBFD;}
    .text-appart{font-size:5vh;}
    .watch{text-align:center;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;}
    .watch-text{display:flex;justify-content:center;}
    .watch-text1{font-size:3vh;margin-top:38vh;}
    .watch-text2{font-size:4vh;}
    .img-watch-1{height:90vh;}
    .img-watch-2{height:120vh;}
    .img-logo{height:20vh;}
    .img-appart{height:90vh;}
    .item1-3{display:flex;justify-content:center;}
    .item4-6{display:flex;justify-content:center;}
    .item7-8{display:flex;justify-content:center;}
    .mini-item{margin-right:5%;}
    .text-logo{color:#C1A291;}
    .watch-abonement{background-color:#FBFBFD;text-align:center;margin-top:1vh;padding-top:2vh;}
    .abonement-text1{font-size:8vh;}
    .abonement-text2{font-size:3.5vh;}
    .watch-bas-page{background-color:#FBFBFD;text-align:center;padding-top:5vh;margin-top:1vh;padding-bottom:5vh;}
    .img-bas-page{width:55%;}
    .bas-page-text{font-size:3.5vh;}
</style>
<body>
  <div class=\"contenu\">
    <header>
        <div class=\"jarvis\">
            <div class=\"nomProduit\">
                <h1 class=\"produit\">JarvisAcces</h1>
            </div>
            <div class=\"navProduit\">
                <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                <a class=\"nav-link colOra\" href=\"#\">Acheter</a>
            </div>
        </div>
    <img class=\"img-fluid\" src=\"../img/enceinte.png\" id=\"imgenceinte\">
    <p class=\"tv-assist\">La téléassistance visionnaire</p>
    <br>
  </header>
    <div class=\"acces\">
      <div class=\"acces-text\"><p>Démultiplier vos<br> possibilités sans ajouter la moindre complexité.</p> </div>
      <br>
        <div class=\"acces-text2\">
        <p>Composer de 4 éléments, le <span>JarvisTag</span>, le <span>JarvisSmoke</span>, le <span>JarvisMotion</span>
        <br>et le <span>JarvisPlug</span> ainsi que la <span>JarvisWatch</span> (en option)</p>
        </div>
        <br>
        <br>
    </div>";
        // line 89
        echo "    <div class=\"tag\">
    <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisTag</h2>
    <br>
    <div class=\"tag-text\">
      <img class=\"tag-img\" src=\"../img/enceinte1.png\">
      <p class=\"tag-text2\">L'assistant vocal qui permet de veiller sur <br> toutes personnes dépendantes, séniors ou en <br> situation d’handicap,
        il  permet de faire de <br> l’appel silencieux et vérifier que tout va bien, <br> 
        ou permet à l’usager de demander un appel <br> de courtoisie vers un proche ou la <br> téléassistance.
      </p>
    </div>
    </div>";
        // line 100
        echo "  <div class=\"smoke\">
   <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisSmoke</h2>
   <div class=\"smoke-text\">
   <p class=\"smoke-text2\">Le détecteur de fumée connecté, afin de <br> prévenir tout dépard de feu.</p>
   <img class=\"smoke-img\" src=\"../img/img/JarvisSmoke/smoke.png\">
   </div>
  </div>
 <div class=\"motion\">
   <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisMotion</h2>
   <div class=\"motion-text\">
    <img class=\"motion-img\" src=\"../img/img/JarvisMotion/IMG-0613.jpg\">
    <p>Le détecteur de mouvement multidirectionnel<br> de taille réduite, détectera vos déplacement la<br> nuit et
      allumera automatiquement la lumière<br> afin d'éviter les chutes.
   </p>
   </div>
  </div>
  <div class=\"plug\">
   <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisPlug</h2>
   <div class=\"plug-text\">
    <p class=\"plug-text2\">Prise intelligente</p>
    <img class=\"plug-img\" src=\"../img/img/JarvisPlug/IMG-0610.jpg\">
   </div>
   <br>
   <br>
  </div>
  <div class=\"plan-appartement\">
    <h3>  Le tout arrive déjà configuré, c’est prêt à poser !</h3>
    <img class=\"img-appart\" src=\"../img/Appart3DAcces.png\">
    <p class=\"text-appart\">A eux 4, ils prennent soins de vos proches en surveillant qu’ils<br> n’aient pas oublié quelque chose sur le feu
   ou vous prévient en<br> cas de chutes avec la <span>JarvisWatch</span>.
    </p>
    <br>
    <br>
  </div>
  <div class=\"watch\">
    <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisWatch</h2>
    <p>À partir de 170 € <a class=\"\" href=\"\">Acheter ></a></p>
    <div class=\"watch-text\">
      <img class=\"img-watch-1\" src=\"../img/img/jarvisWatch/IMG-0602.jpg\">
      <p class=\"watch-text1\">  Afin d’augmenter les capacités de la solution <span>JarvisAcces</span>, ajoutez y la <span>JarvisWatch</span>.
        Non stigmatisant, ce bijou technologique ornera fièrement le poignet de vos aïeux !
      </p>
      <br>
      <br>
      <br>
    </div>
    <img src=\"../img/img/jarvisWatch/IMG-0603.jpg\" class=\"img-watch-2\">
    <p class=\"watch-text2\">Disposant d’un bouton SOS, de la détection de chute et de la possibilité<br>
    de créer des barrières virtuelles (géofencing) gardez un œil non<br> 
    intruisif sur vos proches.
    </p>
    <br>
    <p class=\"watch-text2\">Grâce à sa connectivité la <span>JarvisWatch</span> permet d’alerter les proches<br>
    et la téléassistance dès le moindre danger de ceci même depuis<br>
    le jardin, le marché ou dans le bus.
    </p>
    <br>
    <p class=\"watch-text2\">Un montre autonome basée sur l’intelligence de votre majordome préféré.</p>
    <div class=\"item\">
    <br>
    <br>
    <br>
        <div class=\"item1-3\">
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/pieds.png\" class=\"img-logo\"><p class=\"text-logo\">Activité</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/chute.png\" class=\"img-logo\"><p class=\"text-logo\">Détection de chute</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/gps.png\" class=\"img-logo\"><p class=\"text-logo\">Géofencing</p></div>
        </div>";
        // line 167
        echo "        <div class=\"item4-6\">
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/appels.png\" class=\"img-logo\"><p class=\"text-logo\">Appels</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/sms.png\" class=\"img-logo\"><p class=\"text-logo\">SMS</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/sos.png\" class=\"img-logo\"><p class=\"text-logo\">SOS</p></div>
        </div>";
        // line 172
        echo "        <div class=\"item7-8\">
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/vibreur.png\" class=\"img-logo\"><p class=\"text-logo\">Vibreur</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/cardiaque.png\" class=\"img-logo\"><p class=\"text-logo\">Rythme cardiaque</p></div>
        </div>";
        // line 176
        echo "      </div>";
        // line 177
        echo "    </div> ";
        // line 178
        echo "    <div class=\"watch-abonement\">
      <p class=\"abonement-text1\">Abonnement 7€ par mois.</p>
      <br>
      <p class=\"abonement-text2\">Un abonnement est nécessaire et il comprend : connectivité 2G pour la<br> <span>JarvisWatch</span>, les mises à jour,
       les appels vers la téléassistance et les proches et de<br> la connectivité 2G pour le <span>JarvisTag</span> si votre
       proche n’a pas de box internet.</p>
       <br>
       <br>
    </div>
    <div class=\"watch-bas-page\">
      <p class=\"bas-page-text\">soyez alerté via le JarvisFamily<br>
       de l’ensemble des intervenants passant chez votre proche</p>
       <img class=\"img-bas-page\" src=\"../img/familyTab.png\"> 
    </div>
  
 </div>  
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "jarvis/acces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 178,  269 => 177,  267 => 176,  262 => 172,  256 => 167,  188 => 100,  176 => 89,  104 => 18,  102 => 17,  100 => 16,  98 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}JarvisAcces{% endblock %}

{% block body %}
<style>
    .contenu{margin: 0 auto;}
    header{width:100%;margin: 0 auto;background:#263271;text-align:center;min-height:80vh;align-items:center;padding-top:5vh;}
    .lien{display:flex;padding-left:30%;}
    .jarvis{display:flex;justify-content:space-between;align-items:center;height:13vh;width:100%;margin-bottom:0px;position:absolute;top:5vh;}
    .produit{color:#C1A291;margin-left:26vh;font-size:4vw;}
    .navProduit{display:flex;align-items:end;margin-right:6vh;}

    {# .titre{display:flex;align-items:center;justify-content:space-evenly;padding-top:2vh;} #}
    {# .a-lien{position:relative;margin-left:6vh;color:#C1A291;} #}
    {# a:hover{text-decoration:none;} #}
    {# h2{color:#C1A291;font-size:7vh;} #}
    span{color:#C1A291;}
    #imgenceinte{width:20%;height:auto;margin-top:20vh;}
    .tv-assist{font-size:7vh;color:white;margin-bottom:10vh;margin-top:10vh;}
    .mini-logo{height:15vh;}
    .acces{text-align:center;margin: 0 auto;background-color:#FBFBFD;}
    .acces-text{font-size:7vh;text-align:center;padding-top:10vh;background-color:#FBFBFD;}
    .acces-text2{font-size:4.4vh;background-color:#FBFBFD;}
    .tag{text-align:center;background-color:#FBFBFD;margin-top:-2.7vh;padding-top:7vh;}
    .tag-text{display:flex;justify-content:center;}
    .tag-text2{padding-top:9vh;font-size:3.5vh;}
    .tag-img{height:55vh;}
    .smoke{text-align:center;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;padding-bottom:7vh;}
    .smoke-img{height:30vh;}
    .smoke-text{display:flex;justify-content:center;}
    .smoke-text2{padding-top:8vh;font-size:3.5vh;}
    .motion{text-align:center;font-size:3.5vh;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;}
    .motion-text{display:flex;justify-content:center;align-items:center;}
    .motion-img{height:45vh;}
    .plug{text-align:center;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;}
    .plug-text{display:flex;justify-content:center;}
    .plug-img{height:50vh;}
    .plug-text2{margin-top:23vh;font-size:3.5vh;}
    .plan-appartement{text-align:center;background-color:#FBFBFD;}
    .text-appart{font-size:5vh;}
    .watch{text-align:center;background-color:#FBFBFD;margin-top:1vh;padding-top:5vh;}
    .watch-text{display:flex;justify-content:center;}
    .watch-text1{font-size:3vh;margin-top:38vh;}
    .watch-text2{font-size:4vh;}
    .img-watch-1{height:90vh;}
    .img-watch-2{height:120vh;}
    .img-logo{height:20vh;}
    .img-appart{height:90vh;}
    .item1-3{display:flex;justify-content:center;}
    .item4-6{display:flex;justify-content:center;}
    .item7-8{display:flex;justify-content:center;}
    .mini-item{margin-right:5%;}
    .text-logo{color:#C1A291;}
    .watch-abonement{background-color:#FBFBFD;text-align:center;margin-top:1vh;padding-top:2vh;}
    .abonement-text1{font-size:8vh;}
    .abonement-text2{font-size:3.5vh;}
    .watch-bas-page{background-color:#FBFBFD;text-align:center;padding-top:5vh;margin-top:1vh;padding-bottom:5vh;}
    .img-bas-page{width:55%;}
    .bas-page-text{font-size:3.5vh;}
</style>
<body>
  <div class=\"contenu\">
    <header>
        <div class=\"jarvis\">
            <div class=\"nomProduit\">
                <h1 class=\"produit\">JarvisAcces</h1>
            </div>
            <div class=\"navProduit\">
                <a class=\"nav-link\" href=\"#\">Compatibilités</a>
                <a class=\"nav-link\" href=\"#\">Caractéristiques techniques</a>
                <a class=\"nav-link colOra\" href=\"#\">Acheter</a>
            </div>
        </div>
    <img class=\"img-fluid\" src=\"../img/enceinte.png\" id=\"imgenceinte\">
    <p class=\"tv-assist\">La téléassistance visionnaire</p>
    <br>
  </header>
    <div class=\"acces\">
      <div class=\"acces-text\"><p>Démultiplier vos<br> possibilités sans ajouter la moindre complexité.</p> </div>
      <br>
        <div class=\"acces-text2\">
        <p>Composer de 4 éléments, le <span>JarvisTag</span>, le <span>JarvisSmoke</span>, le <span>JarvisMotion</span>
        <br>et le <span>JarvisPlug</span> ainsi que la <span>JarvisWatch</span> (en option)</p>
        </div>
        <br>
        <br>
    </div>{# fin acces #}
    <div class=\"tag\">
    <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisTag</h2>
    <br>
    <div class=\"tag-text\">
      <img class=\"tag-img\" src=\"../img/enceinte1.png\">
      <p class=\"tag-text2\">L'assistant vocal qui permet de veiller sur <br> toutes personnes dépendantes, séniors ou en <br> situation d’handicap,
        il  permet de faire de <br> l’appel silencieux et vérifier que tout va bien, <br> 
        ou permet à l’usager de demander un appel <br> de courtoisie vers un proche ou la <br> téléassistance.
      </p>
    </div>
    </div>{# fin tag #}
  <div class=\"smoke\">
   <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisSmoke</h2>
   <div class=\"smoke-text\">
   <p class=\"smoke-text2\">Le détecteur de fumée connecté, afin de <br> prévenir tout dépard de feu.</p>
   <img class=\"smoke-img\" src=\"../img/img/JarvisSmoke/smoke.png\">
   </div>
  </div>
 <div class=\"motion\">
   <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisMotion</h2>
   <div class=\"motion-text\">
    <img class=\"motion-img\" src=\"../img/img/JarvisMotion/IMG-0613.jpg\">
    <p>Le détecteur de mouvement multidirectionnel<br> de taille réduite, détectera vos déplacement la<br> nuit et
      allumera automatiquement la lumière<br> afin d'éviter les chutes.
   </p>
   </div>
  </div>
  <div class=\"plug\">
   <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisPlug</h2>
   <div class=\"plug-text\">
    <p class=\"plug-text2\">Prise intelligente</p>
    <img class=\"plug-img\" src=\"../img/img/JarvisPlug/IMG-0610.jpg\">
   </div>
   <br>
   <br>
  </div>
  <div class=\"plan-appartement\">
    <h3>  Le tout arrive déjà configuré, c’est prêt à poser !</h3>
    <img class=\"img-appart\" src=\"../img/Appart3DAcces.png\">
    <p class=\"text-appart\">A eux 4, ils prennent soins de vos proches en surveillant qu’ils<br> n’aient pas oublié quelque chose sur le feu
   ou vous prévient en<br> cas de chutes avec la <span>JarvisWatch</span>.
    </p>
    <br>
    <br>
  </div>
  <div class=\"watch\">
    <h2><img class=\"mini-logo\" src=\"../img/img/jarvisLogo.gif\">  JarvisWatch</h2>
    <p>À partir de 170 € <a class=\"\" href=\"\">Acheter ></a></p>
    <div class=\"watch-text\">
      <img class=\"img-watch-1\" src=\"../img/img/jarvisWatch/IMG-0602.jpg\">
      <p class=\"watch-text1\">  Afin d’augmenter les capacités de la solution <span>JarvisAcces</span>, ajoutez y la <span>JarvisWatch</span>.
        Non stigmatisant, ce bijou technologique ornera fièrement le poignet de vos aïeux !
      </p>
      <br>
      <br>
      <br>
    </div>
    <img src=\"../img/img/jarvisWatch/IMG-0603.jpg\" class=\"img-watch-2\">
    <p class=\"watch-text2\">Disposant d’un bouton SOS, de la détection de chute et de la possibilité<br>
    de créer des barrières virtuelles (géofencing) gardez un œil non<br> 
    intruisif sur vos proches.
    </p>
    <br>
    <p class=\"watch-text2\">Grâce à sa connectivité la <span>JarvisWatch</span> permet d’alerter les proches<br>
    et la téléassistance dès le moindre danger de ceci même depuis<br>
    le jardin, le marché ou dans le bus.
    </p>
    <br>
    <p class=\"watch-text2\">Un montre autonome basée sur l’intelligence de votre majordome préféré.</p>
    <div class=\"item\">
    <br>
    <br>
    <br>
        <div class=\"item1-3\">
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/pieds.png\" class=\"img-logo\"><p class=\"text-logo\">Activité</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/chute.png\" class=\"img-logo\"><p class=\"text-logo\">Détection de chute</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/gps.png\" class=\"img-logo\"><p class=\"text-logo\">Géofencing</p></div>
        </div>{#fin item1-3 #}
        <div class=\"item4-6\">
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/appels.png\" class=\"img-logo\"><p class=\"text-logo\">Appels</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/sms.png\" class=\"img-logo\"><p class=\"text-logo\">SMS</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/sos.png\" class=\"img-logo\"><p class=\"text-logo\">SOS</p></div>
        </div>{# fin item4-6 #}
        <div class=\"item7-8\">
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/vibreur.png\" class=\"img-logo\"><p class=\"text-logo\">Vibreur</p></div>
          <div class=\"mini-item\"><img src=\"../img/img/logo_rond/cardiaque.png\" class=\"img-logo\"><p class=\"text-logo\">Rythme cardiaque</p></div>
        </div>{# fin item7-8 #}
      </div>{# fin item #}
    </div> {# watch #}
    <div class=\"watch-abonement\">
      <p class=\"abonement-text1\">Abonnement 7€ par mois.</p>
      <br>
      <p class=\"abonement-text2\">Un abonnement est nécessaire et il comprend : connectivité 2G pour la<br> <span>JarvisWatch</span>, les mises à jour,
       les appels vers la téléassistance et les proches et de<br> la connectivité 2G pour le <span>JarvisTag</span> si votre
       proche n’a pas de box internet.</p>
       <br>
       <br>
    </div>
    <div class=\"watch-bas-page\">
      <p class=\"bas-page-text\">soyez alerté via le JarvisFamily<br>
       de l’ensemble des intervenants passant chez votre proche</p>
       <img class=\"img-bas-page\" src=\"../img/familyTab.png\"> 
    </div>
  
 </div>  
</body>
{% endblock %}", "jarvis/acces.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\acces.html.twig");
    }
}
