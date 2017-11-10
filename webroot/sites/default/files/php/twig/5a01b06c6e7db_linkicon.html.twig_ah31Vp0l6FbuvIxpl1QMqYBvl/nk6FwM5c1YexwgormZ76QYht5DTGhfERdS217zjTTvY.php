<?php

/* modules/contrib/linkicon/templates/linkicon.html.twig */
class __TwigTemplate_e918919219b9494d591e1a7505861902d9426dd04579594eb200dd2c32682623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 18, "if" => 24, "spaceless" => 39, "for" => 42);
        $filters = array("clean_class" => 21, "clean_id" => 41);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'spaceless', 'for'),
                array('clean_class', 'clean_id'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        $context["wrapper_classes"] = array(0 => "item-list", 1 => "item-list--linkicon", 2 => (($this->getAttribute(        // line 21
($context["settings"] ?? null), "wrapper_class", array())) ? (\Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["settings"] ?? null), "wrapper_class", array()))) : ("")));
        // line 24
        if ($this->getAttribute(($context["settings"] ?? null), "load", array())) {
            // line 25
            echo "  ";
            // line 26
            $context["classes"] = array(0 => (( !$this->getAttribute(            // line 27
($context["settings"] ?? null), "vertical", array())) ? ("linkicon--inline") : ("")), 1 => (($this->getAttribute(            // line 28
($context["settings"] ?? null), "color", array())) ? ("linkicon--color") : ("")), 2 => (($this->getAttribute(            // line 29
($context["settings"] ?? null), "no_text", array())) ? ("linkicon--no-text") : ("")), 3 => (($this->getAttribute(            // line 30
($context["settings"] ?? null), "color", array())) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["settings"] ?? null), "color", array())))) : ("")), 4 => (($this->getAttribute(            // line 31
($context["settings"] ?? null), "style", array())) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["settings"] ?? null), "style", array())))) : ("")), 5 => (($this->getAttribute(            // line 32
($context["settings"] ?? null), "size", array())) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["settings"] ?? null), "size", array())))) : ("")), 6 => (($this->getAttribute(            // line 33
($context["settings"] ?? null), "tooltip", array())) ? ("linkicon--tooltip") : ("")), 7 => (($this->getAttribute(            // line 34
($context["settings"] ?? null), "position", array())) ? (("linkicon--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["settings"] ?? null), "position", array())))) : ("")));
        }
        // line 38
        echo "
";
        // line 39
        ob_start();
        // line 40
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", array(0 => ($context["wrapper_classes"] ?? null)), "method"), "html", null, true));
        echo ">
  <ul id=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId($this->getAttribute(($context["attributes"] ?? null), "id", array())), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "linkicon", 1 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "<li>
        ";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["item"], "html", null, true));
            echo "
      </li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/linkicon/templates/linkicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 47,  83 => 44,  80 => 43,  76 => 42,  71 => 41,  66 => 40,  64 => 39,  61 => 38,  58 => 34,  57 => 33,  56 => 32,  55 => 31,  54 => 30,  53 => 29,  52 => 28,  51 => 27,  50 => 26,  48 => 25,  46 => 24,  44 => 21,  43 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation for the Link icon template.
 *
 * Available variables:
 * - items: An array of items containing links with icon formatted.
 * - settings: An array of settings that decides the link icon output.
 * - attributes: The array of attributes to hold classes, id and optional
 *     data-title to display as tooltip.
 *
 * @see template_preprocess_linkicon()
 *
 * @ingroup themeable
 */
#}
{%
  set wrapper_classes = [
    'item-list',
    'item-list--linkicon',
    settings.wrapper_class ? settings.wrapper_class|clean_class,
  ]
%}
{% if settings.load %}
  {%
    set classes = [
      not settings.vertical ? 'linkicon--inline',
      settings.color ? 'linkicon--color',
      settings.no_text ? 'linkicon--no-text',
      settings.color ? 'linkicon--' ~ settings.color|clean_class,
      settings.style ? 'linkicon--' ~ settings.style|clean_class,
      settings.size ? 'linkicon--' ~ settings.size|clean_class,
      settings.tooltip ? 'linkicon--tooltip',
      settings.position ? 'linkicon--' ~ settings.position|clean_class,
    ]
  %}
{% endif %}

{% spaceless %}
<div{{ wrapper_attributes.addClass(wrapper_classes) }}>
  <ul id=\"{{ attributes.id|clean_id }}\"{{ attributes.addClass('linkicon', classes) }}>
    {%- for item in items -%}
      <li>
        {{ item }}
      </li>
    {%- endfor -%}
  </ul>
</div>
{% endspaceless %}
", "modules/contrib/linkicon/templates/linkicon.html.twig", "/var/www/html/webroot/modules/contrib/linkicon/templates/linkicon.html.twig");
    }
}
