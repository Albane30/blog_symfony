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

/* front/main/mentions-legales.html.twig */
class __TwigTemplate_8f96e470dc8029561eb1e02578c82573f84dd40ca0ee6c64f5b8e2bd8723bf97 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/mentions-legales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/main/mentions-legales.html.twig"));

        $this->parent = $this->loadTemplate("front/layout.html.twig", "front/main/mentions-legales.html.twig", 1);
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

        echo "Mentions légales";
        
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
    <h1>Mentions légales</h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac quam lacus. Vivamus sed massa pretium, porttitor massa in, viverra ex. Suspendisse turpis diam, finibus id maximus non, auctor vitae leo. Suspendisse accumsan nibh nisl, vehicula volutpat quam ullamcorper id. Aliquam turpis nisi, tempor nec neque ut, laoreet bibendum felis. In eu eleifend nisi, vitae aliquam justo. Integer at libero a arcu bibendum pharetra. Donec gravida risus ut libero ullamcorper, id pellentesque lacus viverra.

Phasellus tristique tortor in tortor accumsan porttitor. Suspendisse augue eros, lacinia in nunc vel, iaculis vestibulum nibh. Nulla ullamcorper in ex sed vulputate. Donec non gravida ex. Aliquam convallis euismod enim, a dictum ex tempus vel. Quisque quis massa nec lacus ornare laoreet sit amet quis sem. Maecenas eget ex hendrerit, tempor urna bibendum, blandit diam. Ut eget lacus quis arcu elementum eleifend. Donec at magna non orci bibendum lobortis vel vitae ipsum. Aenean rhoncus, lorem dictum rutrum vestibulum, risus purus iaculis diam, sed iaculis lorem metus vitae ex. Phasellus vitae suscipit metus. Ut imperdiet tortor a tortor posuere, ultrices interdum magna volutpat.

In tortor massa, malesuada non ex non, porttitor aliquet nisi. Aliquam quis nibh mollis, pharetra diam eget, ornare nisl. Proin tortor erat, aliquam nec varius ac, finibus facilisis ipsum. Pellentesque rutrum consectetur ligula, vitae iaculis sapien bibendum dictum. Sed laoreet laoreet risus, at fringilla mi hendrerit id. Praesent faucibus dui eu erat interdum, a semper eros iaculis. Integer erat velit, hendrerit sed enim non, pretium elementum lectus. Duis tempus volutpat ipsum, ac mollis dolor sagittis eget. Mauris at mi blandit, sodales tellus sit amet, interdum metus. Phasellus ut rhoncus turpis. Fusce sit amet hendrerit erat. Mauris eget sollicitudin velit. Nunc vitae nunc enim. Vestibulum faucibus nec est nec semper.

Sed ultricies sem mi, dignissim blandit velit tincidunt vel. Nulla hendrerit commodo nibh, non porttitor erat consequat a. Morbi pulvinar lorem mauris, a lobortis ipsum imperdiet nec. Aliquam erat volutpat. Nam mollis sed mauris tempor pretium. Fusce bibendum lacinia nulla. Duis ac viverra tellus.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel elementum mi, id fermentum lectus. Sed facilisis, sapien non consequat egestas, orci quam scelerisque ante, at molestie augue libero eget lacus. Sed elementum risus eu commodo placerat. Vivamus congue enim sed felis sagittis sagittis. Donec feugiat nulla in fringilla molestie. Sed ligula libero, lobortis eu odio a, sodales molestie enim. In sed luctus neque. Nulla nec metus risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent pretium, neque eget interdum eleifend, mauris odio laoreet nunc, sed dictum dui tortor nec mauris. Maecenas mi lorem, maximus id lacinia vestibulum, elementum ac felis. Vestibulum dictum hendrerit mi, ac ullamcorper quam congue nec. Etiam laoreet in magna nec finibus.

Etiam in sapien id lorem gravida efficitur eu sed lectus. In lobortis hendrerit justo ac gravida. Quisque id semper tortor. Donec tortor justo, blandit quis erat at, blandit tempus lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vel sapien tincidunt dui tempus ullamcorper. Suspendisse ultrices quis tortor ut aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dolor velit, laoreet sagittis feugiat at, posuere ac ex.

Nam at nibh rhoncus lorem semper posuere et sit amet lacus. Quisque ornare lacus lobortis elit interdum sodales. Pellentesque tempus varius tellus, eu convallis erat accumsan eu. Sed eleifend tempus ipsum eget hendrerit. Nunc quis consequat purus. Mauris ut placerat neque. Fusce efficitur purus in magna faucibus tristique. Nam eros diam, pharetra at augue eu, bibendum commodo quam. Integer rhoncus eu lectus vitae eleifend. </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front/main/mentions-legales.html.twig";
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

{% block title %}Mentions légales{% endblock %}

{%block stylesheets %}
{{ parent() }}
{% endblock %}

{% block body %}

    <h1>Mentions légales</h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac quam lacus. Vivamus sed massa pretium, porttitor massa in, viverra ex. Suspendisse turpis diam, finibus id maximus non, auctor vitae leo. Suspendisse accumsan nibh nisl, vehicula volutpat quam ullamcorper id. Aliquam turpis nisi, tempor nec neque ut, laoreet bibendum felis. In eu eleifend nisi, vitae aliquam justo. Integer at libero a arcu bibendum pharetra. Donec gravida risus ut libero ullamcorper, id pellentesque lacus viverra.

Phasellus tristique tortor in tortor accumsan porttitor. Suspendisse augue eros, lacinia in nunc vel, iaculis vestibulum nibh. Nulla ullamcorper in ex sed vulputate. Donec non gravida ex. Aliquam convallis euismod enim, a dictum ex tempus vel. Quisque quis massa nec lacus ornare laoreet sit amet quis sem. Maecenas eget ex hendrerit, tempor urna bibendum, blandit diam. Ut eget lacus quis arcu elementum eleifend. Donec at magna non orci bibendum lobortis vel vitae ipsum. Aenean rhoncus, lorem dictum rutrum vestibulum, risus purus iaculis diam, sed iaculis lorem metus vitae ex. Phasellus vitae suscipit metus. Ut imperdiet tortor a tortor posuere, ultrices interdum magna volutpat.

In tortor massa, malesuada non ex non, porttitor aliquet nisi. Aliquam quis nibh mollis, pharetra diam eget, ornare nisl. Proin tortor erat, aliquam nec varius ac, finibus facilisis ipsum. Pellentesque rutrum consectetur ligula, vitae iaculis sapien bibendum dictum. Sed laoreet laoreet risus, at fringilla mi hendrerit id. Praesent faucibus dui eu erat interdum, a semper eros iaculis. Integer erat velit, hendrerit sed enim non, pretium elementum lectus. Duis tempus volutpat ipsum, ac mollis dolor sagittis eget. Mauris at mi blandit, sodales tellus sit amet, interdum metus. Phasellus ut rhoncus turpis. Fusce sit amet hendrerit erat. Mauris eget sollicitudin velit. Nunc vitae nunc enim. Vestibulum faucibus nec est nec semper.

Sed ultricies sem mi, dignissim blandit velit tincidunt vel. Nulla hendrerit commodo nibh, non porttitor erat consequat a. Morbi pulvinar lorem mauris, a lobortis ipsum imperdiet nec. Aliquam erat volutpat. Nam mollis sed mauris tempor pretium. Fusce bibendum lacinia nulla. Duis ac viverra tellus.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel elementum mi, id fermentum lectus. Sed facilisis, sapien non consequat egestas, orci quam scelerisque ante, at molestie augue libero eget lacus. Sed elementum risus eu commodo placerat. Vivamus congue enim sed felis sagittis sagittis. Donec feugiat nulla in fringilla molestie. Sed ligula libero, lobortis eu odio a, sodales molestie enim. In sed luctus neque. Nulla nec metus risus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent pretium, neque eget interdum eleifend, mauris odio laoreet nunc, sed dictum dui tortor nec mauris. Maecenas mi lorem, maximus id lacinia vestibulum, elementum ac felis. Vestibulum dictum hendrerit mi, ac ullamcorper quam congue nec. Etiam laoreet in magna nec finibus.

Etiam in sapien id lorem gravida efficitur eu sed lectus. In lobortis hendrerit justo ac gravida. Quisque id semper tortor. Donec tortor justo, blandit quis erat at, blandit tempus lacus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vel sapien tincidunt dui tempus ullamcorper. Suspendisse ultrices quis tortor ut aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer dolor velit, laoreet sagittis feugiat at, posuere ac ex.

Nam at nibh rhoncus lorem semper posuere et sit amet lacus. Quisque ornare lacus lobortis elit interdum sodales. Pellentesque tempus varius tellus, eu convallis erat accumsan eu. Sed eleifend tempus ipsum eget hendrerit. Nunc quis consequat purus. Mauris ut placerat neque. Fusce efficitur purus in magna faucibus tristique. Nam eros diam, pharetra at augue eu, bibendum commodo quam. Integer rhoncus eu lectus vitae eleifend. </p>
{% endblock %}

", "front/main/mentions-legales.html.twig", "/opt/lampp/htdocs/blogSymfony/templates/front/main/mentions-legales.html.twig");
    }
}
