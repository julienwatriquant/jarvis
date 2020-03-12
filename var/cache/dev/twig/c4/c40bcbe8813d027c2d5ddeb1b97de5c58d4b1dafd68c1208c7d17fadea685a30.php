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
body{height:1000vh;width:100%;}
header{width:100%;max-height:400VH;}
h1{position: relative;bottom: -4vh;color:#C1A291;}
div .jarvis{display: flex;justify-content: space-evenly;position: relative;right: -60vh;}
div .family{height:100vh;width:100%;}
div .imgfamily{height: 250px; width: 250px;position: relative;right: -73vh;bottom: -16vh;}
</style>

<body>

<header>
 <h1>JarvisFamily</h1>
    <div class=\"jarvis\">
       
         <a href=\"#\" >Compatibilités </a>
        
             <a href=\"#\" >  Caractéristiques techniques </a>
</div>

    <div class=\"family\">
        <img class=\"imgfamily\" src=\"img/FamilyTab.jpg\">
</div>

<div class=\"\">
    <p></p>
</div>



</header>













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
body{height:1000vh;width:100%;}
header{width:100%;max-height:400VH;}
h1{position: relative;bottom: -4vh;color:#C1A291;}
div .jarvis{display: flex;justify-content: space-evenly;position: relative;right: -60vh;}
div .family{height:100vh;width:100%;}
div .imgfamily{height: 250px; width: 250px;position: relative;right: -73vh;bottom: -16vh;}
</style>

<body>

<header>
 <h1>JarvisFamily</h1>
    <div class=\"jarvis\">
       
         <a href=\"#\" >Compatibilités </a>
        
             <a href=\"#\" >  Caractéristiques techniques </a>
</div>

    <div class=\"family\">
        <img class=\"imgfamily\" src=\"img/FamilyTab.jpg\">
</div>

<div class=\"\">
    <p></p>
</div>



</header>













</body>
{% endblock %}
", "jarvis/family.html.twig", "C:\\xampp\\htdocs\\symfony\\jarvis\\templates\\jarvis\\family.html.twig");
    }
}
