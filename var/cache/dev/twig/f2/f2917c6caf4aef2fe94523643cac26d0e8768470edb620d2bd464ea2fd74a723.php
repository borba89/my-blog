<?php

/* WhiteOctoberBreadcrumbsBundle::microdata.html.twig */
class __TwigTemplate_03bc67f0e9d5ba3f28ff81be7124e20e5eaa46aaef294f3cd8fe1602544e49ec extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::microdata.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::microdata.html.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->extensions['WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension']->getBreadcrumbs())) {
            // line 2
            ob_start();
            // line 3
            echo "<ol id=\"";
            echo twig_escape_filter($this->env, (isset($context["listId"]) || array_key_exists("listId", $context) ? $context["listId"] : (function () { throw new Twig_Error_Runtime('Variable "listId" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["listClass"]) || array_key_exists("listClass", $context) ? $context["listClass"] : (function () { throw new Twig_Error_Runtime('Variable "listClass" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 4, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["b"]) {
                // line 5
                echo "                <li";
                if (((isset($context["itemClass"]) || array_key_exists("itemClass", $context)) && twig_length_filter($this->env, (isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new Twig_Error_Runtime('Variable "itemClass" does not exist.', 5, $this->source); })())))) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemClass"]) || array_key_exists("itemClass", $context) ? $context["itemClass"] : (function () { throw new Twig_Error_Runtime('Variable "itemClass" does not exist.', 5, $this->source); })()), "html", null, true);
                    echo "\"";
                }
                echo " itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    ";
                // line 6
                if ((twig_get_attribute($this->env, $this->source, $context["b"], "url", array()) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                    // line 7
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "url", array()), "html", null, true);
                    echo "\" itemprop=\"item\"";
                    if (((isset($context["linkRel"]) || array_key_exists("linkRel", $context)) && twig_length_filter($this->env, (isset($context["linkRel"]) || array_key_exists("linkRel", $context) ? $context["linkRel"] : (function () { throw new Twig_Error_Runtime('Variable "linkRel" does not exist.', 7, $this->source); })())))) {
                        echo " rel=\"";
                        echo twig_escape_filter($this->env, (isset($context["linkRel"]) || array_key_exists("linkRel", $context) ? $context["linkRel"] : (function () { throw new Twig_Error_Runtime('Variable "linkRel" does not exist.', 7, $this->source); })()), "html", null, true);
                        echo "\"";
                    }
                    echo ">
                        ";
                }
                // line 9
                echo "                        <span itemprop=\"name\">";
                if ((twig_get_attribute($this->env, $this->source, $context["b"], "translate", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, $context["b"], "translate", array()) == true))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["b"], "text", array()), twig_get_attribute($this->env, $this->source, $context["b"], "translationParameters", array()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 9, $this->source); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 9, $this->source); })())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "text", array()), "html", null, true);
                }
                echo "</span>
                        ";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, $context["b"], "url", array()) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                    // line 11
                    echo "                    </a>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 12
$context["b"], "url", array())) {
                    // line 13
                    echo "                        <meta itemprop=\"item\" content=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "url", array()), "html", null, true);
                    echo "\" />
                    ";
                }
                // line 15
                echo "                    <meta itemprop=\"position\" content=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "\" />

                    ";
                // line 17
                if (( !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 17, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()))) {
                    // line 18
                    echo "                        <span class='";
                    echo twig_escape_filter($this->env, (isset($context["separatorClass"]) || array_key_exists("separatorClass", $context) ? $context["separatorClass"] : (function () { throw new Twig_Error_Runtime('Variable "separatorClass" does not exist.', 18, $this->source); })()), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 18, $this->source); })()), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 20
                echo "                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['b'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ol>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::microdata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 22,  118 => 20,  110 => 18,  108 => 17,  102 => 15,  96 => 13,  94 => 12,  91 => 11,  89 => 10,  80 => 9,  68 => 7,  66 => 6,  57 => 5,  40 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if wo_breadcrumbs()|length %}
    {%- spaceless -%}
        <ol id=\"{{ listId }}\" class=\"{{ listClass }}\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
            {% for b in breadcrumbs %}
                <li{% if itemClass is defined and itemClass|length %} class=\"{{ itemClass }}\"{% endif %} itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
                    {% if b.url and not loop.last %}
                    <a href=\"{{ b.url }}\" itemprop=\"item\"{% if linkRel is defined and linkRel|length %} rel=\"{{ linkRel }}\"{% endif %}>
                        {% endif %}
                        <span itemprop=\"name\">{% if b.translate is defined and b.translate == true %}{{- b.text | trans(b.translationParameters, translation_domain, locale) -}}{% else %}{{- b.text -}}{% endif %}</span>
                        {% if b.url and not loop.last %}
                    </a>
                    {% elseif b.url %}
                        <meta itemprop=\"item\" content=\"{{ b.url }}\" />
                    {% endif %}
                    <meta itemprop=\"position\" content=\"{{ loop.index }}\" />

                    {% if separator is not null and not loop.last %}
                        <span class='{{ separatorClass }}'>{{ separator }}</span>
                    {% endif %}
                </li>
            {% endfor %}
        </ol>
    {%- endspaceless -%}
{% endif %}
", "WhiteOctoberBreadcrumbsBundle::microdata.html.twig", "/home/boris/PhpstormProjects/newProject/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views/microdata.html.twig");
    }
}
