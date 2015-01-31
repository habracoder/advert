<?php

/* CoreBundle:Form:alerts.html.twig */
class __TwigTemplate_53bcf2af229bae271f8311594df663386f6f0c1fa9a95358a2f4fd058c1cf9ae extends Twig_Template
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
        $context["alerts"] = array(0 => "danger", 1 => "warning", 2 => "info", 3 => "success");
        // line 2
        echo "<div id=\"notification\">
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alerts"]) ? $context["alerts"] : $this->getContext($context, "alerts")));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 4
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "has", array(0 => $context["alert"]), "method")) {
                // line 5
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => $context["alert"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 6
                    echo "                <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
                    echo "\" style=\"display: none\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["flashMessage"]), "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Form:alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  54 => 12,  51 => 11,  42 => 8,  36 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
