<?php

/* WhiteOctoberBreadcrumbsBundle::json-ld.html.twig */
class __TwigTemplate_520ee0edd21901ff0e9509c7a19aee7346a72e806034bd6fa486e830d4ebaa8a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::json-ld.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WhiteOctoberBreadcrumbsBundle::json-ld.html.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->extensions['WhiteOctober\BreadcrumbsBundle\Twig\Extension\BreadcrumbsExtension']->getBreadcrumbs())) {
            // line 2
            ob_start();
            // line 3
            echo "<script type=\"application/ld+json\">
        {
            \"@context\": \"http://schema.org\",
            \"@type\": \"BreadcrumbList\",
            \"itemListElement\":
            [
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new Twig_Error_Runtime('Variable "breadcrumbs" does not exist.', 9, $this->source); })()));
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
                // line 10
                echo "                    {
                        \"@type\": \"ListItem\",
                        \"position\": ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo ",
                        \"item\":
                        {
                            \"@id\": \"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "url", array()), "html", null, true);
                echo "\",
                            \"name\": \"";
                // line 16
                if ((twig_get_attribute($this->env, $this->source, $context["b"], "translate", array(), "any", true, true) && (twig_get_attribute($this->env, $this->source, $context["b"], "translate", array()) == true))) {
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["b"], "text", array()), twig_get_attribute($this->env, $this->source, $context["b"], "translationParameters", array()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 16, $this->source); })()), (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new Twig_Error_Runtime('Variable "locale" does not exist.', 16, $this->source); })())), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["b"], "text", array()), "html", null, true);
                }
                echo "\"
                        }
                    }";
                // line 18
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ",";
                }
                // line 19
                echo "                ";
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
            // line 20
            echo "            ]
        }
        </script>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WhiteOctoberBreadcrumbsBundle::json-ld.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  85 => 19,  81 => 18,  72 => 16,  68 => 15,  62 => 12,  58 => 10,  41 => 9,  33 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if wo_breadcrumbs()|length %}
    {%- spaceless -%}
        <script type=\"application/ld+json\">
        {
            \"@context\": \"http://schema.org\",
            \"@type\": \"BreadcrumbList\",
            \"itemListElement\":
            [
                {% for b in breadcrumbs %}
                    {
                        \"@type\": \"ListItem\",
                        \"position\": {{ loop.index }},
                        \"item\":
                        {
                            \"@id\": \"{{ b.url }}\",
                            \"name\": \"{% if b.translate is defined and b.translate == true %}{{- b.text | trans(b.translationParameters, translation_domain, locale) -}}{% else %}{{- b.text -}}{% endif %}\"
                        }
                    }{% if not loop.last %},{% endif %}
                {% endfor %}
            ]
        }
        </script>
    {%- endspaceless -%}
{% endif %}
", "WhiteOctoberBreadcrumbsBundle::json-ld.html.twig", "/home/boris/PhpstormProjects/newProject/vendor/whiteoctober/breadcrumbs-bundle/WhiteOctober/BreadcrumbsBundle/Resources/views/json-ld.html.twig");
    }
}
