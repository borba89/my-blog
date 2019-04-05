<?php

/* site/post.html.twig */
class __TwigTemplate_5c3c6581dc79b2171ae3e405449b39534d2a36a1779ba344781bfc73ace2e250 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/post.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/post.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["postName"]) || array_key_exists("postName", $context) ? $context["postName"] : (function () { throw new Twig_Error_Runtime('Variable "postName" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>
";
        // line 2
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("main");
        echo "
";
        // line 3
        echo $this->extensions['WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension']->renderBreadcrumbs(array("separator" => ">", "listId" => "breadcrumbs"));
        echo "

    <li>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 5, $this->source); })()), "title", array()), "html", null, true);
        echo "</li>
    <li>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 6, $this->source); })()), "content", array()), "html", null, true);
        echo "</li>
    <li>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 7, $this->source); })()), "author", array()), "html", null, true);
        echo "</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "site/post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  38 => 3,  34 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ postName }}</h1>
{{ knp_menu_render('main') }}
{{ wo_render_breadcrumbs({separator: '>', listId: 'breadcrumbs'}) }}

    <li>{{ post.title }}</li>
    <li>{{ post.content }}</li>
    <li>{{ post.author }}</li>
", "site/post.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/post.html.twig");
    }
}
