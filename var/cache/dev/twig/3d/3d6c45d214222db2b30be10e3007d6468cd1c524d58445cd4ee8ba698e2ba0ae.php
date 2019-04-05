<?php

/* site/login.html.twig */
class __TwigTemplate_6d673d09bf501e031c96d845d2dcb092b9dad8fdf1e1dee62c888d6462e7c5db extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/login.html.twig"));

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


";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form');
        echo "

<form class=\"form-inline my-2 my-lg-0\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_site_index");
        echo "\" method=\"get\">
    <input class=\"form-control mr-sm-2\" type=\"search\" aria-label=\"Search\" name=\"q\">
    <button class=\"btn btn-default my-2 my-sm-0\" type=\"submit\">Ищем</button>
</form>

";
        // line 19
        if (((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new Twig_Error_Runtime('Variable "query" does not exist.', 19, $this->source); })()) != "")) {
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new Twig_Error_Runtime('Variable "search" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["searches"]) {
                // line 21
                echo "
            <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_site_post", array("title" => twig_get_attribute($this->env, $this->source, $context["searches"], "title", array()))), "html", null, true);
                echo "\"><li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searches"], "title", array()), "html", null, true);
                echo "</li></a>
            <li>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searches"], "content", array()), "html", null, true);
                echo "</li>
            <li>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searches"], "author", array()), "html", null, true);
                echo "</li>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searches'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        echo "
<h1>Все посты</h1>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque doloribus dolorum, earum laudantium libero necessitatibus nemo nobis obcaecati provident quae quod reiciendis sunt voluptas. Asperiores aspernatur at distinctio inventore ipsa?
    <div class=\"container\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 34
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_site_post", array("title" => twig_get_attribute($this->env, $this->source, $context["post"], "title", array()))), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</li></a>
            <li>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        <div class=\"count\">
            ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 40, $this->source); })()));
        echo "
        </div>

    </div>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "site/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  120 => 38,  112 => 36,  108 => 35,  101 => 34,  97 => 33,  90 => 28,  80 => 24,  76 => 23,  70 => 22,  67 => 21,  63 => 20,  61 => 19,  53 => 14,  48 => 12,  42 => 9,  38 => 8,  29 => 1,);
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


{{ form(form)}}

<form class=\"form-inline my-2 my-lg-0\" action=\"{{ path('app_site_index') }}\" method=\"get\">
    <input class=\"form-control mr-sm-2\" type=\"search\" aria-label=\"Search\" name=\"q\">
    <button class=\"btn btn-default my-2 my-sm-0\" type=\"submit\">Ищем</button>
</form>

{% if query != '' %}
{% for searches in search %}

            <a href=\"{{ path('app_site_post', {'title': searches.title}) }}\"><li>{{ searches.title }}</li></a>
            <li>{{ searches.content }}</li>
            <li>{{ searches.author }}</li>

{% endfor %}
{% endif %}

<h1>Все посты</h1>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque doloribus dolorum, earum laudantium libero necessitatibus nemo nobis obcaecati provident quae quod reiciendis sunt voluptas. Asperiores aspernatur at distinctio inventore ipsa?
    <div class=\"container\">
        {% for post in posts  %}
            <a href=\"{{ path('app_site_post', {'title': post.title}) }}\"><li>{{ post.title }}</li></a>
            <li>{{ post.content }}</li>
            <li>{{ post.author }}</li>
        {% endfor %}

        <div class=\"count\">
            {{ knp_pagination_render(pagination) }}
        </div>

    </div>
</body>
</html>
", "site/login.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/login.html.twig");
    }
}
