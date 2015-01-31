<?php

/* BazingaJsTranslationBundle::getTranslations.json.twig */
class __TwigTemplate_113c54917f806d59406ebb2ffb449e3c51b2ed48bcd488823accc2044e0b89d5 extends Twig_Template
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
        // line 1
        echo "{
";
        // line 2
        if ((isset($context["include_config"]) ? $context["include_config"] : $this->getContext($context, "include_config"))) {
            // line 3
            echo "    \"fallback\": \"";
            echo twig_escape_filter($this->env, (isset($context["fallback"]) ? $context["fallback"] : $this->getContext($context, "fallback")), "html", null, true);
            echo "\",
    \"defaultDomain\": \"";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["defaultDomain"]) ? $context["defaultDomain"] : $this->getContext($context, "defaultDomain")), "html", null, true);
            echo "\",
";
        }
        // line 6
        echo "    \"translations\": ";
        echo twig_jsonencode_filter((isset($context["translations"]) ? $context["translations"] : $this->getContext($context, "translations")));
        echo "
}
";
    }

    public function getTemplateName()
    {
        return "BazingaJsTranslationBundle::getTranslations.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
