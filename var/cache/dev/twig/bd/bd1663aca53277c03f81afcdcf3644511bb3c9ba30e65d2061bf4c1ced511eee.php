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

/* front/main/cgu.html.twig */
class __TwigTemplate_fd7ca34df1e6d7f945a58d8140b60f5ad73156f04cbfc0a67601e066060a1b34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/cgu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/cgu.html.twig"));

        $this->parent = $this->loadTemplate("front/layout.html.twig", "front/main/cgu.html.twig", 1);
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

        echo "CGU";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <h1>Conditions générales d'utilisation</h1>
    <p> Duis pretium ipsum lectus, eget convallis tortor tempor eu. Praesent urna sem, vulputate ut euismod id, finibus venenatis odio. Sed in bibendum felis. Ut ac efficitur sem, sed tristique lorem. Fusce tristique cursus nulla nec luctus. In porta tortor eu dui vestibulum blandit. Sed sit amet dui mollis, tempus nulla in, gravida urna. Integer quis pulvinar turpis. Aliquam libero justo, tempor nec tortor id, porttitor malesuada lacus.

Sed id odio a nibh faucibus vehicula. Morbi feugiat quam sed neque dignissim blandit. Integer interdum justo nulla. Sed consequat, lectus et venenatis pharetra, diam felis fermentum neque, viverra porta sem est ut sem. Suspendisse a enim pretium, volutpat sem vel, maximus ipsum. Nullam eleifend quam vitae eros rutrum, vitae vulputate augue fringilla. Integer accumsan ultricies lacus vitae facilisis. Curabitur cursus dui aliquet purus dignissim rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras nisi lectus, maximus vel vehicula vel, venenatis vel nunc. Aliquam accumsan blandit diam. Nullam tincidunt ex ac erat eleifend posuere. Quisque lorem lacus, ultrices at tellus ut, vulputate ornare nisi. Nam ac iaculis sapien.

Mauris quis magna eu quam feugiat fermentum. Suspendisse arcu erat, viverra mattis euismod sit amet, pulvinar id ipsum. Aliquam arcu velit, lacinia eget laoreet vel, viverra ut libero. Donec blandit varius elit, nec rhoncus nibh pulvinar in. Sed varius justo augue. Nam vehicula magna quam, eu vulputate nisl viverra eget. Integer quis ipsum ut nunc scelerisque dictum. </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/main/cgu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 10,  101 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/layout.html.twig' %}

{% block title %}CGU{% endblock %}

{%block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}

    <h1>Conditions générales d'utilisation</h1>
    <p> Duis pretium ipsum lectus, eget convallis tortor tempor eu. Praesent urna sem, vulputate ut euismod id, finibus venenatis odio. Sed in bibendum felis. Ut ac efficitur sem, sed tristique lorem. Fusce tristique cursus nulla nec luctus. In porta tortor eu dui vestibulum blandit. Sed sit amet dui mollis, tempus nulla in, gravida urna. Integer quis pulvinar turpis. Aliquam libero justo, tempor nec tortor id, porttitor malesuada lacus.

Sed id odio a nibh faucibus vehicula. Morbi feugiat quam sed neque dignissim blandit. Integer interdum justo nulla. Sed consequat, lectus et venenatis pharetra, diam felis fermentum neque, viverra porta sem est ut sem. Suspendisse a enim pretium, volutpat sem vel, maximus ipsum. Nullam eleifend quam vitae eros rutrum, vitae vulputate augue fringilla. Integer accumsan ultricies lacus vitae facilisis. Curabitur cursus dui aliquet purus dignissim rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras nisi lectus, maximus vel vehicula vel, venenatis vel nunc. Aliquam accumsan blandit diam. Nullam tincidunt ex ac erat eleifend posuere. Quisque lorem lacus, ultrices at tellus ut, vulputate ornare nisi. Nam ac iaculis sapien.

Mauris quis magna eu quam feugiat fermentum. Suspendisse arcu erat, viverra mattis euismod sit amet, pulvinar id ipsum. Aliquam arcu velit, lacinia eget laoreet vel, viverra ut libero. Donec blandit varius elit, nec rhoncus nibh pulvinar in. Sed varius justo augue. Nam vehicula magna quam, eu vulputate nisl viverra eget. Integer quis ipsum ut nunc scelerisque dictum. </p>
{% endblock %}", "front/main/cgu.html.twig", "/opt/lampp/htdocs/blogSymfony/templates/front/main/cgu.html.twig");
    }
}
