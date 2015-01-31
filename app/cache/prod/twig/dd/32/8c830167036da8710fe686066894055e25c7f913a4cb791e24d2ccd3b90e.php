<?php

/* @User/Component/shortAdvertsList.html.twig */
class __TwigTemplate_dd328c830167036da8710fe686066894055e25c7f913a4cb791e24d2ccd3b90e extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 2
            echo "<div class=\"product-list grid-layout clearfix\">
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-12 the-title\">
            <div class=\"row\">
                <div class=\"col-md-7 col-sm-7 col-xs-8\">
                    <h3>";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["heading_title"]) ? $context["heading_title"] : $this->getContext($context, "heading_title")), "html", null, true);
            echo "</h3>
                    <span>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["heading_descr"]) ? $context["heading_descr"] : $this->getContext($context, "heading_descr")), "html", null, true);
            echo "</span>
                </div>
                <div class=\"col-md-5 col-sm-5 col-xs-4\">
                    <a class=\"pull-right btn btn-flat-alizarin\">Показать больше <i class=\"fa fa-arrow-right\"></i></a>
                </div>
            </div>
        </div>

        ";
            // line 16
            if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
                // line 17
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
                    // line 18
                    echo "                ";
                    try {
                        $this->env->loadTemplate("@Advert/Advert/Section/advert.html.twig")->display($context);
                    } catch (Twig_Error_Loader $e) {
                        // ignore missing template
                    }

                    // line 19
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "        ";
            } else {
                // line 21
                echo "            ";
                echo twig_include($this->env, $context, "@Core/Section/noResult.html.twig");
                echo "
        ";
            }
            // line 23
            echo "    </div>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@User/Component/shortAdvertsList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  88 => 21,  85 => 20,  71 => 19,  63 => 18,  45 => 17,  43 => 16,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
