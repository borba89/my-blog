<?php

/* site/post.html.twig */
class __TwigTemplate_38e31f5d13667440bb53fd51f8b64d8e8ff33968f55a4bfe19cd5454f062ee01 extends Twig_Template
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


<p>Add Comments:</p>
";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form');
        echo "

<h2>Comments (";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 13, $this->source); })()), "comments", array())), "html", null, true);
        echo "):</h2>

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->source); })()), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 16
            echo "    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
            echo "</li>
    <li>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", array()), "html", null, true);
            echo "</li>
    <li>";
            // line 18
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", array()));
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  81 => 18,  77 => 17,  72 => 16,  68 => 15,  63 => 13,  58 => 11,  51 => 7,  47 => 6,  43 => 5,  38 => 3,  34 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>{{ postName }}</h1>
{{ knp_menu_render('main') }}
{{ wo_render_breadcrumbs({separator: '>', listId: 'breadcrumbs'}) }}

    <li>{{ post.title }}</li>
    <li>{{ post.content }}</li>
    <li>{{ post.author }}</li>


<p>Add Comments:</p>
{{ form(form)}}

<h2>Comments ({{ post.comments|length }}):</h2>

{% for comment in post.comments %}
    <li>{{ comment.content }}</li>
    <li>{{ comment.author }}</li>
    <li>{{ comment.createdAt|ago }}</li>
{% endfor %}", "site/post.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/post.html.twig");
    }
}
