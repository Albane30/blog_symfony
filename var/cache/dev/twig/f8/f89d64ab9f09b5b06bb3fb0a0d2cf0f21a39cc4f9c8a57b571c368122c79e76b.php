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

/* navbar.html.twig */
class __TwigTemplate_2fe0cdfa873d696351516cc3bc2c52731925f5a05bb3d0eac6923d2e34ed7aae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Mon blog</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/admin/article\">Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/admin/category\">Catégories</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Mentions
          </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentions-legales");
        echo "\">Mentions légales</a></li>
            <li><a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cgu");
        echo "\">CGU</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  73 => 23,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{path('home')}}\">Mon blog</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('home')}}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/admin/article\">Articles</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/admin/category\">Catégories</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Mentions
          </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
            <li><a class=\"dropdown-item\" href=\"{{path('mentions-legales')}}\">Mentions légales</a></li>
            <li><a class=\"dropdown-item\" href=\"{{path('cgu')}}\">CGU</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>", "navbar.html.twig", "/opt/lampp/htdocs/blogSymfony/templates/navbar.html.twig");
    }
}
