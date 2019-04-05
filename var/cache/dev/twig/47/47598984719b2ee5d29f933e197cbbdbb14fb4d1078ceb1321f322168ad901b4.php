<?php

/* site/postcategory.html.twig */
class __TwigTemplate_0949dce31a73660d30486aa4eaee1bc22ceed577e51c727e6f83c9b4ddf3d4f4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/postcategory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/postcategory.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

<body>
<h3>Menu Categories</h3>
";
        // line 8
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("main");
        echo "
";
        // line 9
        echo $this->extensions['WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension']->renderBreadcrumbs(array("separator" => ">", "listId" => "breadcrumbs"));
        echo "

<h1> Посты категории ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["categoryName"]) || array_key_exists("categoryName", $context) ? $context["categoryName"] : (function () { throw new Twig_Error_Runtime('Variable "categoryName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h1>

<div class=\"container\">

    <div class=\"count\">
        ";
        // line 16
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 16, $this->source); })()));
        echo "
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pos"]) || array_key_exists("pos", $context) ? $context["pos"] : (function () { throw new Twig_Error_Runtime('Variable "pos" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["po"]) {
            // line 20
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["po"], "title", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["po"], "content", array()), "html", null, true);
            echo "</li>
        <li>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["po"], "author", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['po'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "site/postcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  74 => 22,  70 => 21,  65 => 20,  61 => 19,  55 => 16,  47 => 11,  42 => 9,  38 => 8,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

<body>
<h3>Menu Categories</h3>
{{ knp_menu_render('main') }}
{{ wo_render_breadcrumbs({separator: '>', listId: 'breadcrumbs'}) }}

<h1> Посты категории {{categoryName}}</h1>

<div class=\"container\">

    <div class=\"count\">
        {{ knp_pagination_render(pagination) }}
    </div>

    {% for po in pos  %}
        <li>{{ po.title }}</li>
        <li>{{ po.content }}</li>
        <li>{{ po.author }}</li>
    {% endfor %}

</div>
</body>
</html>", "site/postcategory.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/postcategory.html.twig");
    }
}
