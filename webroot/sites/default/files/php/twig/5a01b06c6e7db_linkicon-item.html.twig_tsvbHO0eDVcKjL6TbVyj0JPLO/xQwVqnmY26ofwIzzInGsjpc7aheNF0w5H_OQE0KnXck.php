<?php

/* modules/contrib/linkicon/templates/linkicon-item.html.twig */
class __TwigTemplate_9a7c3bcee1537b22fc66f80a7668070e31da6acadf3fb9362d79cf15a87d9353 extends Twig_Template
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
        $tags = array("set" => 21, "if" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 21
        $context["title_classes"] = array(0 => ((        // line 22
($context["icon"] ?? null)) ? ("linkicon__text") : ("linkicon__noicon")));
        // line 25
        if (($context["title_only"] ?? null)) {
            // line 26
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
";
        } else {
            // line 28
            echo "  ";
            if (twig_in_filter(($context["position"] ?? null), array(0 => "bottom", 1 => "right"))) {
                // line 29
                echo "    <span";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "</span>
    ";
                // line 30
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
                echo "
  ";
            } else {
                // line 32
                echo "    ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true));
                echo "
    <span";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "</span>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/linkicon/templates/linkicon-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  69 => 32,  64 => 30,  57 => 29,  54 => 28,  48 => 26,  46 => 25,  44 => 22,  43 => 21,);
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
 * Default theme implementation to display a linkicon item.
 *
 * Available variables:
 * - title: The link text or title, already sanitized at viewElements.
 * - title_only: The link text or title only without spans. 
 * - position: The icon placement relative to link text.
 * - icon_bundle: The icon bundle, integration with icon.module.
 * - icon_name: The icon name, e.g.: twitter, facebook, etc.
 * - attributes: An associative array of attributes to be placed in the span
 *   tag.
 *
 * @see template_preprocess_linkicon_item()
 *
 * @ingroup themeable
 */
#}
{%
  set title_classes = [
    icon ? 'linkicon__text' : 'linkicon__noicon',
  ]
%}
{% if title_only %}
  {{ title }}
{% else %}
  {% if position in ['bottom', 'right'] %}
    <span{{ title_attributes.addClass(title_classes) }}>{{ title }}</span>
    {{ icon }}
  {% else %}
    {{ icon }}
    <span{{ title_attributes.addClass(title_classes) }}>{{ title }}</span>
  {% endif %}
{% endif %}
", "modules/contrib/linkicon/templates/linkicon-item.html.twig", "/var/www/html/webroot/modules/contrib/linkicon/templates/linkicon-item.html.twig");
    }
}
