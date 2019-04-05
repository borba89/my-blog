<?php

/* MgiletNotificationBundle::notifications.html.twig */
class __TwigTemplate_7354409bffbaf82b8e858c732bf945083b5a428aefe984c6a1a25783ee120d55 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MgiletNotificationBundle::notifications.html.twig"));

        // line 1
        echo "Notifications :
";
        // line 2
        if ((twig_length_filter($this->env, (isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new Twig_Error_Runtime('Variable "notificationList" does not exist.', 2, $this->source); })())) > 0)) {
            // line 3
            echo "    <form action=\"";
            echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->generatePath("notification_mark_all_as_seen", twig_get_attribute($this->env, $this->source, twig_first($this->env, (isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new Twig_Error_Runtime('Variable "notificationList" does not exist.', 3, $this->source); })())), "notifiableEntity", array()));
            echo "\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
";
        }
        // line 7
        echo "<ul>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationList"]) || array_key_exists("notificationList", $context) ? $context["notificationList"] : (function () { throw new Twig_Error_Runtime('Variable "notificationList" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <li>
            <b>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "notification", array()), "html", null, true);
            echo "</b>
            <br>
            seen : ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "seen", array()), "html", null, true);
            echo "
            <form action=\"";
            // line 13
            echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->generatePath("notification_mark_as_seen", twig_get_attribute($this->env, $this->source, $context["item"], "notifiableEntity", array()), twig_get_attribute($this->env, $this->source, $context["item"], "notification", array()));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"";
            // line 17
            echo $this->extensions['Mgilet\NotificationBundle\Twig\NotificationExtension']->generatePath("notification_mark_as_unseen", twig_get_attribute($this->env, $this->source, $context["item"], "notifiableEntity", array()), twig_get_attribute($this->env, $this->source, $context["item"], "notification", array()));
            echo "\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MgiletNotificationBundle::notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  68 => 17,  61 => 13,  57 => 12,  52 => 10,  49 => 9,  45 => 8,  42 => 7,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Notifications :
{% if notificationList|length > 0 %}
    <form action=\"{{ mgilet_notification_generate_path('notification_mark_all_as_seen', notificationList|first.notifiableEntity) }}\" method=\"post\">
        <button type=\"submit\">Mark all as seen</button>
    </form>
{% endif %}
<ul>
    {% for item in notificationList %}
        <li>
            <b>{{ item.notification }}</b>
            <br>
            seen : {{ item.seen }}
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_seen', item.notifiableEntity, item.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as seen</button>
            </form>
            <form action=\"{{ mgilet_notification_generate_path('notification_mark_as_unseen', item.notifiableEntity, item.notification) }}\"
                  method=\"post\">
                <button type=\"submit\">Mark as unseen</button>
            </form>
        </li>
    {% endfor %}
</ul>
", "MgiletNotificationBundle::notifications.html.twig", "/home/boris/PhpstormProjects/newProject/vendor/mgilet/notification-bundle/Resources/views/notifications.html.twig");
    }
}
