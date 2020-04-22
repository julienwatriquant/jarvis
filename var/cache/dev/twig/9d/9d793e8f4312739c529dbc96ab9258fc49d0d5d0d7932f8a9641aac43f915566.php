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

/* base.html.twig */
class __TwigTemplate_6ddc216faa59a07abe95bc8b7a0881f5557b0706db83acd786cf3af7f8d6ad1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">        
        <meta name=\"viewport\" content=\"width=device-width,height=device-height, initial-scale=1.0\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <style>
    nav{background:#263271;height:6vh;display:flex;align-items:center;justify-content:center;position:fixed;z-index:2;width:100%;opacity:0.98;}
    .logo{height:6vh;}
    .nav-link{color:#C1A291;}
    .icon{color:#C1A291;}
    a:hover{text-decoration:none;}
    .panier{height:3vh;}
    ul{align-items:center;}
    li{margin-left:4vh;margin-right:4vh;}
    footer{align-items:center;text-align:center;background:#263271;height:20vh;}
    i{font-size:2em;margin-left:2%;margin-right:2%;}
    .iconReseaux{padding:3vh;}
    </style>
    <body>
      <nav>
        <ul class=\"nav justify-content:center\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"";

        // line 30

        // line 31

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvis");
        echo "\"><img class=\"logo\" src=\"../img/img/jarvisLogo.gif\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";

        // line 33

        // line 34

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisPro");
        echo "\">JarvisPro</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";

        // line 36

        // line 37

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisAcces");
        echo "\">JarvisAcces</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";

        // line 39

        // line 40

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisScreen");
        echo "\">JarvisScreen</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";

        // line 42

        // line 43

        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisHotel");
        echo "\">JarvisForHotel</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"https://www.cloud.mysmartjarvis.com/\">S'identifier</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\"><img class=\"panier\" src=\"../img/BagOr.png\"></a>
            </li>

          </ul>
        </nav>

        </ul>
      </nav>


      ";

        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 65

        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 66

        echo "



        
      ";

        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71

        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72

        echo "
      <footer>

        
          <div class=\"iconReseaux\">

            <a class=\"icon\" href=\"http://www.facebook.com/mysmartjarvis\"><i class=\"fab fa-facebook-square\"></i></a>

            <a class=\"icon\" href=\"http://www.instagram.com/mysmartjarvis\"><i class=\"fab fa-instagram\"></i></a>
          </div>
          <div>
            <p>© 2020 Copyright :
                <a href=\"\" class=\"lienFin\"> mysmartjarvis .com</a></p>
          </div>

        

      </footer>  
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }


    // line 61

    // line 62

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));


        // line 62

        // line 63

        echo "        
        
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }


    // line 70

    // line 71

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {

        return array (  230 => 70,  218 => 62,  208 => 61,  190 => 11,  171 => 10,  141 => 71,  139 => 70,  132 => 65,  130 => 61,  108 => 42,  102 => 39,  96 => 36,  90 => 33,  84 => 30,  64 => 12,  62 => 11,  58 => 10,  47 => 1,);

        return array (  231 => 71,  219 => 63,  209 => 62,  191 => 12,  172 => 11,  142 => 72,  140 => 71,  133 => 66,  131 => 62,  109 => 43,  103 => 40,  97 => 37,  91 => 34,  85 => 31,  65 => 13,  63 => 12,  59 => 11,  47 => 1,);

    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">        
        <meta name=\"viewport\" content=\"width=device-width,height=device-height, initial-scale=1.0\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        
        <title>{% block title %}Accueil{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <style>
    nav{background:#263271;height:6vh;display:flex;align-items:center;justify-content:center;position:fixed;z-index:2;width:100%;opacity:0.98;}
    .logo{height:6vh;}
    .nav-link{color:#C1A291;}
    .icon{color:#C1A291;}
    a:hover{text-decoration:none;}
    .panier{height:3vh;}
    ul{align-items:center;}
    li{margin-left:4vh;margin-right:4vh;}
    footer{align-items:center;text-align:center;background:#263271;height:20vh;}
    i{font-size:2em;margin-left:2%;margin-right:2%;}
    .iconReseaux{padding:3vh;}
    </style>
    <body>
      <nav>
        <ul class=\"nav justify-content:center\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"{{path('jarvis')}}\"><img class=\"logo\" src=\"../img/img/jarvisLogo.gif\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('jarvisPro')}}\">JarvisPro</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('jarvisAcces')}}\">JarvisAcces</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('jarvisScreen')}}\">JarvisScreen</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{path('jarvisHotel')}}\">JarvisForHotel</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Services</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"https://www.cloud.mysmartjarvis.com/\">S'identifier</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\"><img class=\"panier\" src=\"../img/BagOr.png\"></a>
            </li>

          </ul>
        </nav>

        </ul>
      </nav>


      {% block body %}
        
        
      {% endblock %}




        
      {% block javascripts %}{% endblock %}

      <footer>

        
          <div class=\"iconReseaux\">

            <a class=\"icon\" href=\"http://www.facebook.com/mysmartjarvis\"><i class=\"fab fa-facebook-square\"></i></a>

            <a class=\"icon\" href=\"http://www.instagram.com/mysmartjarvis\"><i class=\"fab fa-instagram\"></i></a>
          </div>
          <div>
            <p>© 2020 Copyright :
                <a href=\"\" class=\"lienFin\"> mysmartjarvis .com</a></p>
          </div>

        

      </footer>  
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\base.html.twig");
    }
}
