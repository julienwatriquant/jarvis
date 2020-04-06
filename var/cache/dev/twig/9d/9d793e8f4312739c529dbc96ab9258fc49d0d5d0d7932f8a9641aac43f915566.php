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
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <meta name=\"viewport\" content=\"width=device-width,height=device-height, initial-scale=1.0\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
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
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvis");
        echo "\"><img class=\"logo\" src=\"../img/img/jarvisLogo.gif\"></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisPro");
        echo "\">JarvisPro</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jarvisAcces");
        echo "\">JarvisAcces</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">JarvisScreen</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 40
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
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        
        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "
      <footer>

        
          <div class=\"iconReseaux\">

            <a class=\"icon\" href=\"http://www.facebook.com/mysmartjarvis\"><i class=\"fab fa-facebook-square\"></i></a>

            <a class=\"icon\" href=\"http://www.instagram.com/mysmartjarvis\"><i class=\"fab fa-instagram\"></i></a>
          </div>
          <div>
            <p>© 2020 Copyright :
                <a href=\"\" class=\"lienFin\"> mysmartjarivs .com</a></p>
          </div>

        

      </footer>  
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
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

    // line 11
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


    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));


        // line 60

        echo "        
        
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }


    // line 68
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

        return array (  226 => 68,  212 => 60,  201 => 59,  182 => 11,  163 => 10,  133 => 62,  131 => 61,  128 => 60,  126 => 59,  104 => 40,  95 => 34,  89 => 31,  83 => 28,  643=> 12,  61 => 11,  57 => 10,  46=> 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <meta name=\"viewport\" content=\"width=device-width,height=device-height, initial-scale=1.0\">
         <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
        integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
        <title>{% block title %}Accueil{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <style>
    nav{background:#263271;height:6vh;display:flex;align-items:center;justify-content:center;position:fixed;width:100%;opacity:0.98;}
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
              <a class=\"nav-link\" href=\"#\">JarvisScreen</a>
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
                <a href=\"\" class=\"lienFin\"> mysmartjarivs .com</a></p>
          </div>

        

      </footer>  
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\base.html.twig");
    }
}
