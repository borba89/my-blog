<?php

/* site/search.html.twig */
class __TwigTemplate_f3664cd48d2a97c3ad975e9c12ea21b2f046310c669190d7b0ffcfefde0660cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/search.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

<body>
<h3>Search</h3>
";
        // line 8
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("main");
        echo "
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">Register</a>
</li>
<ul class=\"navbar-nav ml-auto\">
    ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
        </li>
    ";
        }
        // line 19
        echo "</ul>
";
        // line 20
        echo $this->extensions['WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension']->renderBreadcrumbs(array("separator" => ">", "listId" => "breadcrumbs"));
        echo "


";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new Twig_Error_Runtime('Variable "searchForm" does not exist.', 23, $this->source); })()), 'form');
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "site/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  66 => 20,  63 => 19,  57 => 16,  54 => 15,  51 => 14,  49 => 13,  43 => 10,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

<body>
<h3>Search</h3>
{{ knp_menu_render('main') }}
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
</li>
<ul class=\"navbar-nav ml-auto\">
    {% if is_granted('ROLE_USER') %}
    {% else %}
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
        </li>
    {% endif %}
</ul>
{{ wo_render_breadcrumbs({separator: '>', listId: 'breadcrumbs'}) }}


{{ form(searchForm) }}
</body>
</html>
", "site/search.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/search.html.twig");
    }
}
