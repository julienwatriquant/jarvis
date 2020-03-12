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
        echo "<style>
    body{margin:auto;padding:auto;}
    header{background:url(\"../img/home_smarthome.png\")5%;width:100%;height:100vh;text-align:center;}
    .titre{display:flex;}
    .prod{color:#C1A291;}
    a{color:#C1A291;}
    .navpro{width:80%;align-items: center;}
    .container{background:#263271;}
    .imgPro{height:300px;width:80%;image:center;} 
    .imgagePro{max-width:100%;max-height:100%;}
    footer{background:#263271;text-align:center;height:20vh;}
    .reseau{display:flex;justify-content:space-around;}
    .copy{align-items:bottom;}
</style>

<body>

<header>
    <div class=\"titre\">
        <h1 class=\"prod\">JarvisPro</h1>
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
    ";
        // line 39
        echo "    <h2 class=\"accroche\">\"Bonjour, je suis Jarvis votre majordome\"</h2>


</header>

<div class=\"container\">
    <div class=\"jarvisPro\">
        <div class=\"accroche\">
                <h2>Une alternative au Ehpad à domicile</h2>
            <div>
                <h2>Une alternative au Ehpad à domicile</h2>
            </div>
            <div class=\"imagePro\">
                <img class=\"imgPro\" src=\"../img/jarvisProMulti.png\">
            </div>
        </div>
    </div>
</div>


<footer>
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

 





</footer>

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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}JarvisPro{% endblock %}

{% block body %}
<style>
    body{margin:auto;padding:auto;}
    header{background:url(\"../img/home_smarthome.png\")5%;width:100%;height:100vh;text-align:center;}
    .titre{display:flex;}
    .prod{color:#C1A291;}
    a{color:#C1A291;}
    .navpro{width:80%;align-items: center;}
    .container{background:#263271;}
    .imgPro{height:300px;width:80%;image:center;} 
    .imgagePro{max-width:100%;max-height:100%;}
    footer{background:#263271;text-align:center;height:20vh;}
    .reseau{display:flex;justify-content:space-around;}
    .copy{align-items:bottom;}
</style>

<body>

<header>
    <div class=\"titre\">
        <h1 class=\"prod\">JarvisPro</h1>
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
    {# <img class=\"tabInterface\" src=\"../img/homeTabInterface.png\" alt=\"\"> #}
    <h2 class=\"accroche\">\"Bonjour, je suis Jarvis votre majordome\"</h2>


</header>

<div class=\"container\">
    <div class=\"jarvisPro\">
        <div class=\"accroche\">
                <h2>Une alternative au Ehpad à domicile</h2>
            <div>
                <h2>Une alternative au Ehpad à domicile</h2>
            </div>
            <div class=\"imagePro\">
                <img class=\"imgPro\" src=\"../img/jarvisProMulti.png\">
            </div>
        </div>
    </div>
</div>


<footer>
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

 





</footer>

 </body>

   
   

{% endblock %}", "jarvis/pro.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\pro.html.twig");
    }
}
