<?php

/* SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_fe942ee8423efbf772fd5c0e64d6cbe6bc392f9ade74e78c691b83437315139c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        if ((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 15, $this->source); })()), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 16
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 16, $this->source); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 17
        echo "    />

    <select id=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "_autocomplete_input_v4\" data-sonata-select2=\"false\"";
        // line 20
        if ((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 20, $this->source); })()), false)) : (false))) {
            echo " readonly=\"readonly\"";
        }
        // line 21
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 21, $this->source); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 22
        echo "    >";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
            if ((($context["idx"] . "") != "_labels")) {
                // line 24
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 24, $this->source); })()), "_labels", array(), "array"), $context["idx"], array(), "array"), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</select>

    <div id=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 29
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 29, $this->source); })())) {
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 31
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 31, $this->source); })()), "html", null, true);
                    echo "[]\"";
                    if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 31, $this->source); })())) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 34
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\"";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 34, $this->source); })())) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), 0, array(), "array", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 36
        echo "</div>

    ";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 38, $this->source); })()), "field_description", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 38, $this->source); })()), "field_description", array()), "hasAssociationAdmin", array()))) {
            // line 39
            echo "        <div id=\"field_actions_";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "\" class=\"field-actions\">
            ";
            // line 40
            $context["display_btn_add"] = ((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 40, $this->source); })()), "edit", array()) != "admin") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 40, $this->source); })()), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 41
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 41, $this->source); })()), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 41, $this->source); })()));
            // line 42
            echo "            ";
            if ((isset($context["display_btn_add"]) || array_key_exists("display_btn_add", $context) ? $context["display_btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "display_btn_add" does not exist.', 42, $this->source); })())) {
                // line 43
                echo "                <a  href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 43, $this->source); })()), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 44
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 44, $this->source); })()), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                // line 45
                echo "\"
                    onclick=\"return start_field_dialog_form_add_";
                // line 46
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 46, $this->source); })()), "html", null, true);
                echo "(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    title=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 48, $this->source); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 48, $this->source); })())), "html", null, true);
                echo "\"
                    >
                    <i class=\"fa fa-plus-circle\"></i>
                    ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 51, $this->source); })()), array(), (isset($context["btn_catalogue"]) || array_key_exists("btn_catalogue", $context) ? $context["btn_catalogue"] : (function () { throw new Twig_Error_Runtime('Variable "btn_catalogue" does not exist.', 51, $this->source); })())), "html", null, true);
                echo "
                </a>
            ";
            }
            // line 54
            echo "            ";
            $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_modal.html.twig", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", 54)->display($context);
            // line 55
            echo "            ";
            $this->loadTemplate("@SonataAdmin/CRUD/Association/edit_many_script.html.twig", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", 55)->display($context);
            // line 56
            echo "        </div>
    ";
        }
        // line 58
        echo "
    <script>
        ";
        // line 61
        echo "        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 64, $this->source); })()), "js", null, true);
        echo "_autocomplete_input' : '#";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 64, $this->source); })()), "js", null, true);
        echo "_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 65, $this->source); })()), "js", null, true);
        echo "_autocomplete_input_v4' : '#";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 65, $this->source); })()), "js", null, true);
        echo "_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {";
        // line 71
        $context["allowClearPlaceholder"] = ((( !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 71, $this->source); })()) &&  !(isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 71, $this->source); })()))) ? (" ") : (""));
        // line 72
        echo "placeholder: '";
        echo twig_escape_filter($this->env, (((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 72, $this->source); })())) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 72, $this->source); })())) : ((isset($context["allowClearPlaceholder"]) || array_key_exists("allowClearPlaceholder", $context) ? $context["allowClearPlaceholder"] : (function () { throw new Twig_Error_Runtime('Variable "allowClearPlaceholder" does not exist.', 72, $this->source); })()))), "js", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 73
        echo (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 73, $this->source); })())) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 74
        echo (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 74, $this->source); })())) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 75
        echo ((((((isset($context["read_only"]) || array_key_exists("read_only", $context))) ? (_twig_default_filter((isset($context["read_only"]) || array_key_exists("read_only", $context) ? $context["read_only"] : (function () { throw new Twig_Error_Runtime('Variable "read_only" does not exist.', 75, $this->source); })()), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "read_only", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "read_only", array()), false)) : (false)))) ? ("true") : ("false"));
        echo ", ";
        // line 76
        echo "                ";
        echo "    ";
        // line 77
        echo "                minimumInputLength: ";
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) || array_key_exists("minimum_input_length", $context) ? $context["minimum_input_length"] : (function () { throw new Twig_Error_Runtime('Variable "minimum_input_length" does not exist.', 77, $this->source); })()), "js", null, true);
        echo ",
                multiple: ";
        // line 78
        echo (((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 78, $this->source); })())) ? ("true") : ("false"));
        echo ",
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: ";
        // line 84
        echo (((isset($context["dropdown_auto_width"]) || array_key_exists("dropdown_auto_width", $context) ? $context["dropdown_auto_width"] : (function () { throw new Twig_Error_Runtime('Variable "dropdown_auto_width" does not exist.', 84, $this->source); })())) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 85
        echo twig_escape_filter($this->env, ((isset($context["container_css_class"]) || array_key_exists("container_css_class", $context) ? $context["container_css_class"] : (function () { throw new Twig_Error_Runtime('Variable "container_css_class" does not exist.', 85, $this->source); })()) . " form-control"), "js", null, true);
        echo "',
                dropdownCssClass: '";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) || array_key_exists("dropdown_css_class", $context) ? $context["dropdown_css_class"] : (function () { throw new Twig_Error_Runtime('Variable "dropdown_css_class" does not exist.', 86, $this->source); })()), "js", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 88
        echo twig_escape_filter($this->env, (((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 88, $this->source); })())) ? ((isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new Twig_Error_Runtime('Variable "url" does not exist.', 88, $this->source); })())) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 88, $this->source); })()), "name", array()), ((twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["route"] ?? null), "parameters", array()), array())) : (array()))))), "js", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["quiet_millis"]) || array_key_exists("quiet_millis", $context) ? $context["quiet_millis"] : (function () { throw new Twig_Error_Runtime('Variable "quiet_millis" does not exist.', 90, $this->source); })()), "js", null, true);
        echo ",
                    cache: ";
        // line 91
        echo (((isset($context["cache"]) || array_key_exists("cache", $context) ? $context["cache"] : (function () { throw new Twig_Error_Runtime('Variable "cache" does not exist.', 91, $this->source); })())) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        ";
        // line 100
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 140
        echo "                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return ";
        // line 148
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        // line 154
        echo "; // format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return ";
        // line 161
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        // line 167
        echo "; // format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 213
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 213, $this->source); })())) {
            // line 214
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 221
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 221, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 224
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 224, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 226
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 234
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 234, $this->source); })())) {
            // line 235
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 242, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 242, $this->source); })()), "js", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 245
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 245, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 247
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 253
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 253, $this->source); })()))) {
            // line 254
            echo "data =";
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 254, $this->source); })())) {
                echo "[";
            }
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 255, $this->source); })()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 256
                    if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 257
                    echo "{id: '";
                    echo twig_escape_filter($this->env, $context["val"], "js", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 257, $this->source); })()), "_labels", array(), "array"), $context["idx"], array(), "array"), "js", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 259, $this->source); })())) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 262
        echo "// Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            ";
        // line 276
        if (((((twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 276, $this->source); })()), "field_description", array()) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 277
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 277, $this->source); })()), "field_description", array()), "hasAssociationAdmin", array())) &&         // line 278
(isset($context["btn_add"]) || array_key_exists("btn_add", $context) ? $context["btn_add"] : (function () { throw new Twig_Error_Runtime('Variable "btn_add" does not exist.', 278, $this->source); })())) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 279
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 279, $this->source); })()), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method")) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 280
(isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 280, $this->source); })()), "field_description", array()), "associationadmin", array()), "hasAccess", array(0 => "create"), "method"))) {
            // line 281
            echo "
                ";
            // line 282
            $context["create_url"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 282, $this->source); })()), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 282, $this->source); })()), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method");
            // line 283
            echo "    
                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('";
            // line 286
            echo twig_escape_filter($this->env, (isset($context["create_url"]) || array_key_exists("create_url", $context) ? $context["create_url"] : (function () { throw new Twig_Error_Runtime('Variable "create_url" does not exist.', 286, $this->source); })()), "js", null, true);
            echo "'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var form = JSON.parse('{\"' + decodeURI(settings.data).replace('+', ' ').replace(/\"/g, '\\\\\"').replace(/&/g, '\",\"').replace(/=/g,'\":\"') + '\"}');
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );";
            // line 294
            if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 294, $this->source); })())) {
                // line 295
                echo "var data = autocompleteInput.select2('data');
                          data.push(item);";
            } else {
                // line 298
                echo "var data = item;";
            }
            // line 301
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 301, $this->source); })()), "js", null, true);
            echo "_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 301, $this->source); })()), "js", null, true);
            echo "\" value=\"'+xhr.responseJSON.objectId+'\" />');
    
                        // append to Select2
                        autocompleteInput.select2('data', data).append(data).trigger('change');
    
                        // manually trigger the `select2:select` event
                        autocompleteInput.select2('data', data).trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                      }
                  }
                });
            ";
        }
        // line 317
        echo "        });
        ";
        // line 319
        echo "    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 100
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        // line 101
        echo "                        return {
                                //search term
                                '";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) || array_key_exists("req_param_name_search", $context) ? $context["req_param_name_search"] : (function () { throw new Twig_Error_Runtime('Variable "req_param_name_search" does not exist.', 103, $this->source); })()), "js", null, true);
        echo "': term,

                                // page size
                                '";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) || array_key_exists("req_param_name_items_per_page", $context) ? $context["req_param_name_items_per_page"] : (function () { throw new Twig_Error_Runtime('Variable "req_param_name_items_per_page" does not exist.', 106, $this->source); })()), "js", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) || array_key_exists("items_per_page", $context) ? $context["items_per_page"] : (function () { throw new Twig_Error_Runtime('Variable "items_per_page" does not exist.', 106, $this->source); })()), "js", null, true);
        echo ",

                                // page number
                                '";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) || array_key_exists("req_param_name_page_number", $context) ? $context["req_param_name_page_number"] : (function () { throw new Twig_Error_Runtime('Variable "req_param_name_page_number" does not exist.', 109, $this->source); })()), "js", null, true);
        echo "': page,

                                // admin
                                ";
        // line 112
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 112, $this->source); })()), "admin", array()))) {
            // line 113
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 113, $this->source); })()), "admin", array()), "uniqid", array()), "js", null, true);
            echo "',
                                    'admin_code': '";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new Twig_Error_Runtime('Variable "sonata_admin" does not exist.', 114, $this->source); })()), "admin", array()), "code", array()), "js");
            echo "',
                                ";
        } elseif (        // line 115
(isset($context["admin_code"]) || array_key_exists("admin_code", $context) ? $context["admin_code"] : (function () { throw new Twig_Error_Runtime('Variable "admin_code" does not exist.', 115, $this->source); })())) {
            // line 116
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, (isset($context["admin_code"]) || array_key_exists("admin_code", $context) ? $context["admin_code"] : (function () { throw new Twig_Error_Runtime('Variable "admin_code" does not exist.', 116, $this->source); })()), "js");
            echo "',
                                ";
        }
        // line 118
        echo "
                                 // subclass
                                ";
        // line 120
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 120, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 121
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 121, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "js", null, true);
            echo "',
                                ";
        }
        // line 123
        echo "
                                ";
        // line 124
        if (((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new Twig_Error_Runtime('Variable "context" does not exist.', 124, $this->source); })()) == "filter")) {
            // line 125
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 125, $this->source); })()), array("filter[" => "", "][value]" => "", "__" => ".")), "js", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 128
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 128, $this->source); })()), "js", null, true);
            echo "'
                                ";
        }
        // line 130
        echo "
                                // other parameters
                                ";
        // line 132
        if ( !twig_test_empty((isset($context["req_params"]) || array_key_exists("req_params", $context) ? $context["req_params"] : (function () { throw new Twig_Error_Runtime('Variable "req_params" does not exist.', 132, $this->source); })()))) {
            echo ",";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) || array_key_exists("req_params", $context) ? $context["req_params"] : (function () { throw new Twig_Error_Runtime('Variable "req_params" does not exist.', 133, $this->source); })()));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 134
                echo "'";
                echo twig_escape_filter($this->env, $context["key"], "js", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, $context["value"], "js", null, true);
                echo "'";
                // line 135
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 138
        echo "                        };
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        // line 149
        if ((((isset($context["safe_label"]) || array_key_exists("safe_label", $context))) ? (_twig_default_filter((isset($context["safe_label"]) || array_key_exists("safe_label", $context) ? $context["safe_label"] : (function () { throw new Twig_Error_Runtime('Variable "safe_label" does not exist.', 149, $this->source); })()), false)) : (false))) {
            // line 150
            echo "                        '<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) || array_key_exists("dropdown_item_css_class", $context) ? $context["dropdown_item_css_class"] : (function () { throw new Twig_Error_Runtime('Variable "dropdown_item_css_class" does not exist.', 150, $this->source); })()), "js", null, true);
            echo "\">'+item.label+'<\\/div>'
                    ";
        } else {
            // line 152
            echo "                        jQuery('<div class=\"";
            echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) || array_key_exists("dropdown_item_css_class", $context) ? $context["dropdown_item_css_class"] : (function () { throw new Twig_Error_Runtime('Variable "dropdown_item_css_class" does not exist.', 152, $this->source); })()), "js", null, true);
            echo "\">').text(item.label).prop('outerHTML')
                    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 161
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        // line 162
        if ((((isset($context["safe_label"]) || array_key_exists("safe_label", $context))) ? (_twig_default_filter((isset($context["safe_label"]) || array_key_exists("safe_label", $context) ? $context["safe_label"] : (function () { throw new Twig_Error_Runtime('Variable "safe_label" does not exist.', 162, $this->source); })()), false)) : (false))) {
            // line 163
            echo "                        item.label
                    ";
        } else {
            // line 165
            echo "                        jQuery('<div>').text(item.label).prop('innerHTML')
                    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 165,  727 => 163,  725 => 162,  716 => 161,  702 => 152,  696 => 150,  694 => 149,  685 => 148,  674 => 138,  657 => 135,  651 => 134,  634 => 133,  631 => 132,  627 => 130,  621 => 128,  614 => 125,  612 => 124,  609 => 123,  603 => 121,  601 => 120,  597 => 118,  591 => 116,  589 => 115,  585 => 114,  580 => 113,  578 => 112,  572 => 109,  564 => 106,  558 => 103,  554 => 101,  545 => 100,  533 => 319,  530 => 317,  508 => 301,  505 => 298,  501 => 295,  499 => 294,  490 => 286,  485 => 283,  483 => 282,  480 => 281,  478 => 280,  477 => 279,  476 => 278,  475 => 277,  474 => 276,  458 => 262,  451 => 259,  437 => 257,  433 => 256,  422 => 255,  417 => 254,  415 => 253,  409 => 247,  404 => 245,  397 => 242,  388 => 235,  386 => 234,  376 => 226,  371 => 224,  366 => 221,  357 => 214,  355 => 213,  307 => 167,  305 => 161,  296 => 154,  294 => 148,  284 => 140,  282 => 100,  270 => 91,  266 => 90,  261 => 88,  256 => 86,  252 => 85,  248 => 84,  239 => 78,  234 => 77,  231 => 76,  228 => 75,  224 => 74,  220 => 73,  215 => 72,  213 => 71,  203 => 65,  197 => 64,  192 => 61,  188 => 58,  184 => 56,  181 => 55,  178 => 54,  172 => 51,  166 => 48,  161 => 46,  158 => 45,  156 => 44,  154 => 43,  151 => 42,  149 => 41,  148 => 40,  143 => 39,  141 => 38,  137 => 36,  125 => 34,  109 => 31,  104 => 30,  102 => 29,  98 => 28,  94 => 26,  83 => 24,  78 => 23,  76 => 22,  72 => 21,  68 => 20,  65 => 19,  61 => 17,  57 => 16,  53 => 15,  40 => 14,  37 => 13,  34 => 12,  32 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% spaceless %}

    <input type=\"text\" id=\"{{ id }}_autocomplete_input\" value=\"\"
        {%- for attribute,value in attr %} {{attribute}}=\"{{value}}\" {% endfor -%}
        {%- if read_only|default(false) %} readonly=\"readonly\"{% endif -%}    {# NEXT_MAJOR: remove #}
        {%- if disabled %} disabled=\"disabled\"{% endif %}
    />

    <select id=\"{{ id }}_autocomplete_input_v4\" data-sonata-select2=\"false\"
        {%- if read_only|default(false) %} readonly=\"readonly\"{% endif -%}
        {%- if disabled %} disabled=\"disabled\"{% endif %}
    >
        {%- for idx, val  in value if idx~'' != '_labels' -%}
            <option value=\"{{ val }}\" selected>{{ value['_labels'][idx] }}</option>
        {%- endfor -%}
    </select>

    <div id=\"{{ id }}_hidden_inputs_wrap\">
        {% if multiple -%}
            {%- for idx, val in value if idx~'' != '_labels' -%}
                <input type=\"hidden\" name=\"{{ full_name }}[]\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ val }}\">
            {%- endfor -%}
        {% else -%}
            <input type=\"hidden\" name=\"{{ full_name }}\" {%- if disabled %} disabled=\"disabled\"{% endif %} value=\"{{ value[0]|default('') }}\">
        {% endif -%}
    </div>

    {% if sonata_admin.field_description and sonata_admin.field_description.hasAssociationAdmin %}
        <div id=\"field_actions_{{ id }}\" class=\"field-actions\">
            {% set display_btn_add = sonata_admin.edit != 'admin' and sonata_admin.field_description.associationadmin.hasRoute('create') 
                                     and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
            {% if display_btn_add %}
                <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create',
                             sonata_admin.field_description.getOption('link_parameters', {})) 
                          }}\"
                    onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                    class=\"btn btn-success btn-sm sonata-ba-action\"
                    title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                    >
                    <i class=\"fa fa-plus-circle\"></i>
                    {{ btn_add|trans({}, btn_catalogue) }}
                </a>
            {% endif %}
            {% include '@SonataAdmin/CRUD/Association/edit_modal.html.twig' %}
            {% include '@SonataAdmin/CRUD/Association/edit_many_script.html.twig' %}
        </div>
    {% endif %}

    <script>
        {% autoescape 'js' %}
        jQuery(function (\$) {
            // Select2 v3 does not used same input as v4.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var usedInputRef = window.Select2 ? '#{{ id }}_autocomplete_input' : '#{{ id }}_autocomplete_input_v4';
            var unusedInputRef = window.Select2 ? '#{{ id }}_autocomplete_input_v4' : '#{{ id }}_autocomplete_input';

            \$(unusedInputRef).remove();
            var autocompleteInput = \$(usedInputRef);

            var select2Options = {
                {%- set allowClearPlaceholder = (not multiple and not required) ? ' ' : '' -%}
                placeholder: '{{ placeholder ?: allowClearPlaceholder }}', // allowClear needs placeholder to work properly
                allowClear: {{ required ? 'false' : 'true' }},
                enable: {{ disabled ? 'false' : 'true' }},
                readonly: {{ read_only|default(false) or attr.read_only|default(false) ? 'true' : 'false' }}, {# NEXT_MAJOR: remove #}
                {# readonly: {{ attr.read_only|default(false) ? 'true' : 'false' }}, #}    {# NEXT_MAJOR: uncomment #}
                minimumInputLength: {{ minimum_input_length }},
                multiple: {{ multiple ? 'true' : 'false' }},
                width: function() {
                    // Select2 v3 and v4 BC. If window.Select2 is defined, then the v3 is installed.
                    // NEXT_MAJOR: Remove Select2 v3 support.
                    return Admin.get_select2_width(window.Select2 ? this.element : jQuery(this));
                },
                dropdownAutoWidth: {{ dropdown_auto_width ? 'true' : 'false' }},
                containerCssClass: '{{ container_css_class ~ ' form-control' }}',
                dropdownCssClass: '{{ dropdown_css_class }}',
                ajax: {
                    url:  '{{ url ?: path(route.name, route.parameters|default([])) }}',
                    dataType: 'json',
                    quietMillis: {{ quiet_millis }},
                    cache: {{ cache ? 'true' : 'false' }},
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        // Select2 v4 got a \"params\" unique argument
                        // NEXT_MAJOR: Remove this BC layer.
                        if (typeof page === 'undefined') {
                            page = typeof term.page !== 'undefined' ? term.page : 1;
                            term = term.term;
                        }

                        {% block sonata_type_model_autocomplete_ajax_request_parameters %}
                        return {
                                //search term
                                '{{ req_param_name_search }}': term,

                                // page size
                                '{{ req_param_name_items_per_page }}': {{ items_per_page }},

                                // page number
                                '{{ req_param_name_page_number }}': page,

                                // admin
                                {% if sonata_admin.admin is not null %}
                                    'uniqid': '{{ sonata_admin.admin.uniqid }}',
                                    'admin_code': '{{ sonata_admin.admin.code|e('js') }}',
                                {% elseif admin_code %}
                                    'admin_code':  '{{ admin_code|e('js') }}',
                                {% endif %}

                                 // subclass
                                {% if app.request.query.get('subclass') %}
                                    'subclass': '{{ app.request.query.get('subclass') }}',
                                {% endif %}

                                {% if context == 'filter' %}
                                    'field':  '{{ full_name|replace({'filter[': '', '][value]': '', '__':'.'}) }}',
                                    '_context': 'filter'
                                {% else %}
                                    'field':  '{{ name }}'
                                {% endif %}

                                // other parameters
                                {% if req_params is not empty %},
                                    {%- for key, value in req_params -%}
                                        '{{- key -}}': '{{- value -}}'
                                        {%- if not loop.last -%}, {% endif -%}
                                    {%- endfor -%}
                                {% endif %}
                        };
                        {% endblock %}
                    },
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            };

            // Select2 v3/v4 special options.
            // NEXT_MAJOR: Remove this BC layer while upgrading to v4.
            var templateResult = function (item) {
                return {% block sonata_type_model_autocomplete_dropdown_item_format -%}
                    {% if safe_label|default(false) %}
                        '<div class=\"{{ dropdown_item_css_class }}\">'+item.label+'<\\/div>'
                    {% else %}
                        jQuery('<div class=\"{{ dropdown_item_css_class }}\">').text(item.label).prop('outerHTML')
                    {% endif %}
                {%- endblock %}; // format of one dropdown item
            };
            var templateSelection = function (item) {
                // Select2 v4 BC select pre-selection.
                if (typeof item.label === 'undefined') {
                    item.label = item.text;
                }
                return {% block sonata_type_model_autocomplete_selection_format -%}
                    {% if safe_label|default(false) %}
                        item.label
                    {% else %}
                        jQuery('<div>').text(item.label).prop('innerHTML')
                    {% endif %}
                {%- endblock %}; // format selected item '<b>'+item.label+'</b>';
            };

            if (window.Select2) {
                select2Options.initSelection = function (element, callback) {
                    callback(element.val());
                };
                select2Options.ajax.results = function (data, page) {
                    // notice we return the value of more so Select2 knows if more results can be loaded
                    return {results: data.items, more: data.more};
                };
                select2Options.formatResult = templateResult;
                select2Options.formatSelection = templateSelection;
            } else {
                select2Options.ajax.processResults = function (data, params) {
                    return {
                        results: data.items,
                        pagination: {
                            more: data.more
                        }
                    };
                };
                select2Options.templateResult = templateResult;
                select2Options.templateSelection = templateSelection;
            }
            // END Select2 v3/v4 special options

            autocompleteInput.select2(select2Options);

            // Events structure is different between v3 and v4
            // NEXT_MAJOR: Remove BC layer.
            var boundEvents = window.Select2 ? 'change' : 'select2:select select2:unselect';
            autocompleteInput.on(boundEvents, function(e) {
                if (e.type === 'select2:select') {
                    e.added = e.params.data;
                }
                if (e.type === 'select2:unselect') {
                    e.removed = e.params.data;
                }

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    {% if multiple %}
                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val('');
                    {%- endif %}
                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    {% if multiple %}
                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#{{ id }}_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"{{ full_name }}[]\" value=\"'+el.id+'\" />');
                        }
                    {%- else -%}
                        \$('#{{ id }}_hidden_inputs_wrap input:hidden').val(addedItems.id);
                    {%- endif %}
                }
            });

            // Initialise the autocomplete
            var data = [];

            {%- if value is not empty -%}
                data = {%- if multiple -%}[ {%- endif -%}
                {%- for idx, val  in value if idx~'' != '_labels' -%}
                    {%- if not loop.first -%}, {% endif -%}
                    {id: '{{ val }}', label:'{{ value['_labels'][idx] }}'}
                {%- endfor -%}
                {%- if multiple -%} ] {%- endif -%};
            {% endif -%}

            // Select2 v3 data populate.
            // NEXT_MAJOR: Remove while dropping v3 support.
            if (window.Select2 && (undefined==data.length || 0<data.length)) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$(usedInputRef).closest('form').submit(function()
            {
                \$(usedInputRef).remove();
                return true;
            });

            // Automatically select the created record after closing the popup window
            {% if sonata_admin.field_description 
                and sonata_admin.field_description.hasAssociationAdmin 
                and btn_add 
                and sonata_admin.field_description.associationadmin.hasRoute('create')
                and sonata_admin.field_description.associationadmin.hasAccess('create') %}

                {% set create_url = sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) %}
    
                \$(document).ajaxSuccess(function(event, xhr, settings) {
                  if(typeof xhr.responseJSON != 'undefined') {
                      if ('{{ create_url }}'.indexOf(settings.url) !== -1 && typeof xhr.responseJSON != 'string' && xhr.responseJSON.result == 'ok') {
                        var form = JSON.parse('{\"' + decodeURI(settings.data).replace('+', ' ').replace(/\"/g, '\\\\\"').replace(/&/g, '\",\"').replace(/=/g,'\":\"') + '\"}');
                        var item = new Option(
                          new DOMParser().parseFromString(xhr.responseJSON.objectName, \"text/html\").documentElement.textContent,
                          xhr.responseJSON.objectId,
                          true, true
                          );
    
                        {%- if multiple -%}
                          var data = autocompleteInput.select2('data');
                          data.push(item);
                        {%- else -%}
                          var data = item;
                        {%- endif -%}
    
                        \$('#{{ id }}_hidden_inputs_wrap').html('<input type=\"hidden\" name=\"{{ full_name }}\" value=\"'+xhr.responseJSON.objectId+'\" />');
    
                        // append to Select2
                        autocompleteInput.select2('data', data).append(data).trigger('change');
    
                        // manually trigger the `select2:select` event
                        autocompleteInput.select2('data', data).trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                      }
                  }
                });
            {% endif %}
        });
        {% endautoescape %}
    </script>
{% endspaceless %}
", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig", "/home/boris/PhpstormProjects/newProject/vendor/sonata-project/admin-bundle/src/Resources/views/Form/Type/sonata_type_model_autocomplete.html.twig");
    }
}
