<?php

/* site/login.html.twig */
class __TwigTemplate_36141f38130d177c2e39cc6342f05e4b912a985c5d0da1717e1dab1f09127e2c extends Twig_Template
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
";
        // line 7
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("main");
        echo "
<h1>Все посты</h1>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque doloribus dolorum, earum laudantium libero necessitatibus nemo nobis obcaecati provident quae quod reiciendis sunt voluptas. Asperiores aspernatur at distinctio inventore ipsa?
    <div class=\"container\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "author", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pos"]) || array_key_exists("pos", $context) ? $context["pos"] : (function () { throw new Twig_Error_Runtime('Variable "pos" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["po"]) {
            // line 19
            echo "            <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["po"], "title", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["po"], "content", array()), "html", null, true);
            echo "</li>
            <li>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["po"], "author", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['po'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </div>
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
        return array (  90 => 23,  82 => 21,  78 => 20,  73 => 19,  69 => 18,  66 => 17,  58 => 15,  54 => 14,  49 => 13,  45 => 12,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Symfony!</title>

<body>
{{ knp_menu_render('main') }}
<h1>Все посты</h1>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque doloribus dolorum, earum laudantium libero necessitatibus nemo nobis obcaecati provident quae quod reiciendis sunt voluptas. Asperiores aspernatur at distinctio inventore ipsa?
    <div class=\"container\">
        {% for post in posts  %}
            <li>{{ post.title }}</li>
            <li>{{ post.content }}</li>
            <li>{{ post.author }}</li>
        {% endfor %}

        {% for po in pos  %}
            <li>{{ po.title }}</li>
            <li>{{ po.content }}</li>
            <li>{{ po.author }}</li>
        {% endfor %}
    </div>
</body>
</html>
", "site/login.html.twig", "/home/boris/PhpstormProjects/newProject/templates/site/login.html.twig");
    }
}
