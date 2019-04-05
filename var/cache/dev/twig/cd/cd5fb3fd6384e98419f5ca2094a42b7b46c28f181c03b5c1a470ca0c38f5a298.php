<?php

/* site/index.html.twig */
class __TwigTemplate_0874869773029841ba8575d63ce67fcc3d6a6e8071e27c667ecec6b90b5d90ec extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "site/index.html.twig"));

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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sonata_admin_dashboard");
            echo "\">Admin</a>
    </li>

";
        }
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 16
            echo "
";
        } else {
            // line 18
            echo "<li class=\"nav-item\">

    <a class=\"nav-link\" href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
</li>
<ul class=\"navbar-nav ml-auto\">

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
        </li>
    ";
        }
        // line 28
        echo "</ul>
";
        // line 29
        echo $this->extensions['WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension']->renderBreadcrumbs(array("separator" => ">", "listId" => "breadcrumbs"));
        echo "


";
        // line 33
        echo "
<!--<form class=\"form-inline my-2 my-lg-0\" action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_site_index");
        echo "\" method=\"get\">-->
    <input class=\"form-control mr-sm-2\" type=\"search\" aria-label=\"Search\" name=\"q\">
    <a href=\"/site/search\"><button class=\"btn btn-default my-2 my-sm-0\" type=\"submit\">Ищем</button></a>
<!--</form>-->

";
        // line 48
        echo "
<h1>Все посты</h1>

<p>Sort by:</p>

    <div class=\"container\">
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 55
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_site_post", array("title" => twig_get_attribute($this->env, $this->source, $context["post"], "title", array()))), "html", null, true);
            echo "\"><li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</li></a>
            <li>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        <div class=\"count\">
            ";
        // line 61
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 61, $this->source); })()));
        echo "
        </div>
        <div class=\"count\">
            ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 64, $this->source); })()), "getTotalItemCount", array()), "html", null, true);
        echo "
        </div>
        <table>
            <tr>
                ";
        // line 69
        echo "                <th>";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 69, $this->source); })()), "Title", "p.title");
        echo "</th>
                <th>";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 70, $this->source); })()), "Content", "p.content");
        echo "</th>
                <th>";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 71, $this->source); })()), "Author", "p.author");
        echo "</th>
            </tr>

            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 74, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 75
            echo "                <tr ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                    <td><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_site_post", array("title" => twig_get_attribute($this->env, $this->source, $context["post"], "title", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </table>

        <div class=\"navigation\">
            ";
        // line 84
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 84, $this->source); })()));
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
        return "site/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 84,  212 => 81,  195 => 78,  191 => 77,  185 => 76,  178 => 75,  161 => 74,  155 => 71,  151 => 70,  146 => 69,  139 => 64,  133 => 61,  129 => 59,  121 => 57,  117 => 56,  110 => 55,  106 => 54,  98 => 48,  90 => 34,  87 => 33,  81 => 29,  78 => 28,  72 => 25,  64 => 20,  60 => 18,  56 => 16,  54 => 15,  47 => 11,  44 => 10,  42 => 9,  38 => 8,  29 => 1,);
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
{% if is_granted('ROLE_ADMIN') %}
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('sonata_admin_dashboard') }}\">Admin</a>
    </li>

{% endif %}
{% if is_granted('ROLE_USER') %}

{% else %}
<li class=\"nav-item\">

    <a class=\"nav-link\" href=\"{{ path('app_register') }}\">Register</a>
</li>
<ul class=\"navbar-nav ml-auto\">

        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login</a>
        </li>
    {% endif %}
</ul>
{{ wo_render_breadcrumbs({separator: '>', listId: 'breadcrumbs'}) }}


{# form(form)#}

<!--<form class=\"form-inline my-2 my-lg-0\" action=\"{{ path('app_site_index') }}\" method=\"get\">-->
    <input class=\"form-control mr-sm-2\" type=\"search\" aria-label=\"Search\" name=\"q\">
    <a href=\"/site/search\"><button class=\"btn btn-default my-2 my-sm-0\" type=\"submit\">Ищем</button></a>
<!--</form>-->

{#  if query != '' %}
{% for searches in search %}

            <a href=\"{{ path('app_site_post', {'title': searches.title}) }}\"><li>{{ searches.title }}</li></a>
            <li>{{ searches.content }}</li>
            <li>{{ searches.author }}</li>

{% endfor %}
{% endif #}

<h1>Все посты</h1>

<p>Sort by:</p>

    <div class=\"container\">
        {% for post in posts  %}
            <a href=\"{{ path('app_site_post', {'title': post.title}) }}\"><li>{{ post.title }}</li></a>
            <li>{{ post.content }}</li>
            <li>{{ post.author }}</li>
        {% endfor %}

        <div class=\"count\">
            {{ knp_pagination_render(pagination) }}
        </div>
        <div class=\"count\">
            {{ pagination.getTotalItemCount }}
        </div>
        <table>
            <tr>
                {# sorting of properties based on query components #}
                <th>{{ knp_pagination_sortable(pagination, 'Title', 'p.title') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Content', 'p.content') }}</th>
                <th>{{ knp_pagination_sortable(pagination, 'Author', 'p.author') }}</th>
            </tr>

            {% for post in pagination %}
                <tr {% if loop.index is odd %}class=\"color\"{% endif %}>
                    <td><a href=\"{{ path('app_site_post', {'title': post.title}) }}\">{{ post.title }}</a></td>
                    <td>{{ post.content }}</td>
                    <td>{{ post.author }}</td>
                </tr>
            {% endfor %}
        </table>

        <div class=\"navigation\">
            {{ knp_pagination_render(pagination) }}
        </div>
    </div>
</body>
</html>
", "site/index.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/index.html.twig");
    }
}
