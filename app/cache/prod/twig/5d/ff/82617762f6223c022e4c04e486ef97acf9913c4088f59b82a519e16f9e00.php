<?php

/* AdvertBundle:Advert:index.html.twig */
class __TwigTemplate_5dff82617762f6223c022e4c04e486ef97acf9913c4088f59b82a519e16f9e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Обявления";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("path" => $this->env->getExtension('routing')->getPath("homepage"), "title" => $this->env->getExtension('translator')->trans("project.homepage")), 1 => array("title" => $this->env->getExtension('translator')->trans("Обявления")));
        // line 10
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "<div class=\"col-md-3 sidebar-offcanvas sidebar-offcanvas-sm\">
        ";
        // line 15
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AdvertBundle:Component:filters"));
        echo "
    </div>
    <div class=\"col-md-9\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div id=\"product-list\" class=\"product-list full-listing clearfix grid-layout\">
                    ";
        // line 21
        $this->displayBlock("list", $context, $blocks);
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 28
    public function block_list($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        try {
            $this->env->loadTemplate("@Advert/Advert/Section/filter.html.twig")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 30
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 31
            echo "        ";
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
                // line 32
                echo "            ";
                try {
                    $this->env->loadTemplate("@Advert/Advert/Section/advert.html.twig")->display($context);
                } catch (Twig_Error_Loader $e) {
                    // ignore missing template
                }

                // line 33
                echo "        ";
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
            // line 34
            echo "    ";
        } else {
            // line 35
            echo "        ";
            echo twig_include($this->env, $context, "@Core/Section/noResult.html.twig");
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "AdvertBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 35,  137 => 34,  123 => 33,  115 => 32,  97 => 31,  94 => 30,  86 => 29,  83 => 28,  73 => 21,  64 => 15,  61 => 14,  58 => 13,  51 => 10,  48 => 6,  45 => 5,  39 => 3,  11 => 1,);
    }
}
