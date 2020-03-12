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

        echo "Jarvis Acces";
        
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
    body{margin: 0 auto; width:100%;}
    header{width:100%;margin: 0 auto;margin-top:7vh;background:#263271;text-align:center;min-height:60vh;}
    h2{color:#C1A291;}
    span{color:#C1A291;}
    nav{margin-top:-7vh;}
    .titre{display:flex;}
    #imgenceinte{width:40%;height:auto;}
    .tv-assist{font-size:7vh;color:white;}
    .acces{text-align:center;margin-top:10vh;}
    .acces-text{font-size:6vh;}
    .lien{margin-left:30%;}
    .item1-3{display:flex;}
    .item4-6{display:flex;}
    .item7-8{display:flex;}

</style>


<body>
  <div class=\"contenu\">
    <header>
      <div class=\"titre\">
        <h2>JArvisAcces</h2>
        <div class=\"lien\">
          <ul class=\"nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Compatibilités</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Caractéristiques techniques</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Acheter</a>
            </li>
          </ul>
        </div>
      </div>
    <img class=\"\" src=\"../img/enceinte.jpg\" id=\"imgenceinte\">
    <p class=\"tv-assist\">La téléassistance visionnaire</p>
  </header>
    <div class=\"acces\">
      <div class=\"acces-text\"><p>Démultiplier vos</p><p> possibilités sans ajouter la moindre complexité.</p> </div>
        <p>Composer de 4 éléments, le <span>JArvisTag</span>, le <span>JarvisSmoke</span>, le <span>JarvisMotion</span></p>
        <p>et le <span>JarvisPlug</span> ainsi que la <span>JarvisWatch</span> (en option)</p>
      </div>";
        // line 52
        echo "    <div class=\"tag\">
    <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisTag</h2>
    <div class=\"tag-text\">
      <img class=\"\" src=\"../img/enceinte1.jpg\">
      <p>L'assistant vocal qui permet de veiller sur toutes personnes dépendantes, séniors ou en situation d’handicap,
        il  permet de faire de l’appel silencieux et vérifier que tout va bien, 
        ou permet à l’usager de demander un appel de courtoisie vers un proche ou la téléassistance.
      </p>
    </div>
    </div>";
        // line 62
        echo "  <div class=\"watch\">
   <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisSmoke</h2>
   <div class=\"watch-text\">
   <p>Le détecteur de fumée connecté, afin de prévenir tout dépard de feu.</p>
   <img class=\"\" src=\"../img/img/JarvisSmoke/smoke.png\">
   </div>
  </div>
 <div class=\"motion\">
   <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisMotion</h2>
   <div class=\"motion-text\">
    <img class=\"\" src=\"../img/img/JarvisMotion/IMG-0613.jpg\">
    <p>Le détecteur de mouvement multidirectionnel de taille réduite, détectera vos déplacement la nuit et
      allumera automatiquement la lumière afin d'éviter les chutes.
   </p>
   </div>
  </div>
  <div class=\"plug\">
   <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisPlug</h2>
   <div class=\"plug-text\">
    <p>Prise intelligente (voir àrajouter du texte)</p>
    <img class=\"\" src=\"../img/img/JarvisPlug/IMG-0610.jpg\">
   </div>
  </div>
  <div class=\"plan-appartement\">
    <h2>  Le tout arrive déjà configuré, c’est prêt à poser !</h2>
    <img class=\"\" src=\"../img/Appart3DAcces.png\">
    <p>A eux 4, ils prennent soins de vos proches en surveillant qu’ils n’aient pas oublié quelque chose sur le feu
   ou vous prévient en cas de chutes avec la <span>JarvisWatch</span>.
    </p>
  </div>
  <div class=\"watch\">
    <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisWatch</h2>
    <p>À partir de 170 € <a class=\"\" href=\"\">Acheter ></a></p>
    <div>
      <img class=\"\" src=\"../img/img/jarvisWatch/IMG-0602.jpg\">
      <p>  Afin d’augmenter les capacités de la solution JarvisAcces, ajoutez y la JarvisWatch.
        Non stigmatisant, ce bijou technologique ornera fièrement le poignet de vos aïeux !
      </p>
    </div>
    <img src=\"../img/img/jarvisWatch/IMG-0603.jpg\" class=\"\">
    <p>Disposant d’un bouton SOS, de la détection de chute et de la possibilité
    de créer des barrières virtuelles (géofencing) gardez un œil non 
    intruisif sur vos proches.
    </p>
    <br>
    <p>Grâce à sa connectivité la <span>JarvisWatch</span> permet d’alerter les proches
    et la téléassistance dès le moindre danger de ceci même depuis
    le jardin, le marché ou dans le bus.
    </p>
    <br>
    <p>Un montre autonome basée sur l’intelligence de votre majordome préféré.</p>
    <div class=\"item\">
      <div class=\"item1-3\">
        <div><img src=\"../img/img/logo_rond/pieds.png\" class=\"\"><p>Activité</p></div>
        <div><img src=\"../img/img/logo_rond/chute.png\" class=\"\"><p>Détection de chute</p></div>
        <div><img src=\"../img/img/logo_rond/gps.png\" class=\"\"><p>Géofencing</p></div>
      </div>";
        // line 119
        echo "      <div class=\"item4-6\">
        <div><img src=\"../img/img/logo_rond/appels.png\" class=\"\"><p>Appels</p></div>
        <div><img src=\"../img/img/logo_rond/sms.png\" class=\"\"><p>SMS</p></div>
        <div><imgsrc=\"../img/img/logo_rond/sos.png\" class=\"\"><p>SOS</p></div>
      </div>";
        // line 124
        echo "      <div class=\"item7-8\">
        <div><img src=\"../img/img/logo_rond/vibreur.png\" class=\"\"><p>Vibreur</p></div>
        <div><img src=\"../img/img/logo_rond/cardiaque.png\" class=\"\"><p>Rythme cardiaque</p></div>
      </div>";
        // line 128
        echo "    </div>";
        // line 129
        echo "    <div class=\"watch-text\">
      <p>Abonnement 7€ par mois.</p>
      <br>
      <p>Un abonnement est nécessaire et il comprend : connectivité 2G pour la JarvisWatch, les mises à jour,
       les appels vers la téléassistance et les proches et de la connectivité 2G pour le JarvisTag si votre
       proche n’a pas de box internet.</p>
    </div>
    <div class=\"watch-bas-page\">
      <p>soyez alerté via le JarvisFamily
       de l’ensemble des intervenants passant chez votre proche</p>
       <img class=\"\" src=\"../img/familyTab.jpg\"> 
    </div>
  </div> ";
        // line 142
        echo " </div>  
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
        return array (  231 => 142,  217 => 129,  215 => 128,  210 => 124,  204 => 119,  146 => 62,  135 => 52,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jarvis Acces{% endblock %}

{% block body %}
<style>
    body{margin: 0 auto; width:100%;}
    header{width:100%;margin: 0 auto;margin-top:7vh;background:#263271;text-align:center;min-height:60vh;}
    h2{color:#C1A291;}
    span{color:#C1A291;}
    nav{margin-top:-7vh;}
    .titre{display:flex;}
    #imgenceinte{width:40%;height:auto;}
    .tv-assist{font-size:7vh;color:white;}
    .acces{text-align:center;margin-top:10vh;}
    .acces-text{font-size:6vh;}
    .lien{margin-left:30%;}
    .item1-3{display:flex;}
    .item4-6{display:flex;}
    .item7-8{display:flex;}

</style>


<body>
  <div class=\"contenu\">
    <header>
      <div class=\"titre\">
        <h2>JArvisAcces</h2>
        <div class=\"lien\">
          <ul class=\"nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Compatibilités</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Caractéristiques techniques</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"\">Acheter</a>
            </li>
          </ul>
        </div>
      </div>
    <img class=\"\" src=\"../img/enceinte.jpg\" id=\"imgenceinte\">
    <p class=\"tv-assist\">La téléassistance visionnaire</p>
  </header>
    <div class=\"acces\">
      <div class=\"acces-text\"><p>Démultiplier vos</p><p> possibilités sans ajouter la moindre complexité.</p> </div>
        <p>Composer de 4 éléments, le <span>JArvisTag</span>, le <span>JarvisSmoke</span>, le <span>JarvisMotion</span></p>
        <p>et le <span>JarvisPlug</span> ainsi que la <span>JarvisWatch</span> (en option)</p>
      </div>{# fin acces #}
    <div class=\"tag\">
    <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisTag</h2>
    <div class=\"tag-text\">
      <img class=\"\" src=\"../img/enceinte1.jpg\">
      <p>L'assistant vocal qui permet de veiller sur toutes personnes dépendantes, séniors ou en situation d’handicap,
        il  permet de faire de l’appel silencieux et vérifier que tout va bien, 
        ou permet à l’usager de demander un appel de courtoisie vers un proche ou la téléassistance.
      </p>
    </div>
    </div>{# fin tag #}
  <div class=\"watch\">
   <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisSmoke</h2>
   <div class=\"watch-text\">
   <p>Le détecteur de fumée connecté, afin de prévenir tout dépard de feu.</p>
   <img class=\"\" src=\"../img/img/JarvisSmoke/smoke.png\">
   </div>
  </div>
 <div class=\"motion\">
   <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisMotion</h2>
   <div class=\"motion-text\">
    <img class=\"\" src=\"../img/img/JarvisMotion/IMG-0613.jpg\">
    <p>Le détecteur de mouvement multidirectionnel de taille réduite, détectera vos déplacement la nuit et
      allumera automatiquement la lumière afin d'éviter les chutes.
   </p>
   </div>
  </div>
  <div class=\"plug\">
   <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisPlug</h2>
   <div class=\"plug-text\">
    <p>Prise intelligente (voir àrajouter du texte)</p>
    <img class=\"\" src=\"../img/img/JarvisPlug/IMG-0610.jpg\">
   </div>
  </div>
  <div class=\"plan-appartement\">
    <h2>  Le tout arrive déjà configuré, c’est prêt à poser !</h2>
    <img class=\"\" src=\"../img/Appart3DAcces.png\">
    <p>A eux 4, ils prennent soins de vos proches en surveillant qu’ils n’aient pas oublié quelque chose sur le feu
   ou vous prévient en cas de chutes avec la <span>JarvisWatch</span>.
    </p>
  </div>
  <div class=\"watch\">
    <h2><img class=\"\" src=\"../img/img/jarvisLogo.gif\"> JArvisWatch</h2>
    <p>À partir de 170 € <a class=\"\" href=\"\">Acheter ></a></p>
    <div>
      <img class=\"\" src=\"../img/img/jarvisWatch/IMG-0602.jpg\">
      <p>  Afin d’augmenter les capacités de la solution JarvisAcces, ajoutez y la JarvisWatch.
        Non stigmatisant, ce bijou technologique ornera fièrement le poignet de vos aïeux !
      </p>
    </div>
    <img src=\"../img/img/jarvisWatch/IMG-0603.jpg\" class=\"\">
    <p>Disposant d’un bouton SOS, de la détection de chute et de la possibilité
    de créer des barrières virtuelles (géofencing) gardez un œil non 
    intruisif sur vos proches.
    </p>
    <br>
    <p>Grâce à sa connectivité la <span>JarvisWatch</span> permet d’alerter les proches
    et la téléassistance dès le moindre danger de ceci même depuis
    le jardin, le marché ou dans le bus.
    </p>
    <br>
    <p>Un montre autonome basée sur l’intelligence de votre majordome préféré.</p>
    <div class=\"item\">
      <div class=\"item1-3\">
        <div><img src=\"../img/img/logo_rond/pieds.png\" class=\"\"><p>Activité</p></div>
        <div><img src=\"../img/img/logo_rond/chute.png\" class=\"\"><p>Détection de chute</p></div>
        <div><img src=\"../img/img/logo_rond/gps.png\" class=\"\"><p>Géofencing</p></div>
      </div>{#fin item1-3 #}
      <div class=\"item4-6\">
        <div><img src=\"../img/img/logo_rond/appels.png\" class=\"\"><p>Appels</p></div>
        <div><img src=\"../img/img/logo_rond/sms.png\" class=\"\"><p>SMS</p></div>
        <div><imgsrc=\"../img/img/logo_rond/sos.png\" class=\"\"><p>SOS</p></div>
      </div>{# fin item4-6 #}
      <div class=\"item7-8\">
        <div><img src=\"../img/img/logo_rond/vibreur.png\" class=\"\"><p>Vibreur</p></div>
        <div><img src=\"../img/img/logo_rond/cardiaque.png\" class=\"\"><p>Rythme cardiaque</p></div>
      </div>{# fin item7-8 #}
    </div>{# fin item #}
    <div class=\"watch-text\">
      <p>Abonnement 7€ par mois.</p>
      <br>
      <p>Un abonnement est nécessaire et il comprend : connectivité 2G pour la JarvisWatch, les mises à jour,
       les appels vers la téléassistance et les proches et de la connectivité 2G pour le JarvisTag si votre
       proche n’a pas de box internet.</p>
    </div>
    <div class=\"watch-bas-page\">
      <p>soyez alerté via le JarvisFamily
       de l’ensemble des intervenants passant chez votre proche</p>
       <img class=\"\" src=\"../img/familyTab.jpg\"> 
    </div>
  </div> {# watch #}
 </div>  
</body>
{% endblock %}", "jarvis/acces.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\acces.html.twig");
    }
}
