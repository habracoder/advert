<?php

/* ::base.html.twig */
class __TwigTemplate_bbef05d07e0158ca263d869def390975aad42f14e885cb2d6ab1dfec1d7f5add extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'alerts' => array($this, 'block_alerts'),
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\">

    <title>";
        // line 11
        if (array_key_exists("title", $context)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "html", null, true);
        }
        echo "</title>

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        $this->env->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig")->display($context);
        // line 23
        echo "

    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "</head>

<body>
<div class=\"site-wrapper\">
    <div class=\"site-row row-offcanvas row-offcanvas-left\">

        <!-- Block alerts -->
        ";
        // line 49
        $this->displayBlock('alerts', $context, $blocks);
        // line 52
        echo "
        <!-- Block navigations -->
        ";
        // line 54
        $this->env->loadTemplate(":Partial:navigation.html.twig")->display($context);
        // line 55
        echo "
        <!-- Block Title and breadcrumbs -->
        <section id=\"title-section\" class=\"micro\">
            <div class=\"title-section\">
                <div class=\"container\">
                    <div class=\"col-md-12\">
                        <div class=\"title-section-content\">
                            <h1 class=\"title-heading\">";
        // line 62
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
                        </div>
                    </div>
                    ";
        // line 65
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 68
        echo "                </div>
            </div>
        </section>

        <!-- Block content -->
        <div class=\"container overflow-hidden\">
            <div class=\"row row-offcanvas row-offcanvas-left row-offcanvas-sm row-offcanvas-sm-left row-offcanvas-xs box-padding\">
                ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "            </div>
        </div>

        <!-- Additional includes -->
        ";
        // line 81
        echo twig_include($this->env, $context, ":Secured:login.modal.html.twig");
        echo "
        ";
        // line 82
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AdvertBundle:Component:newAdvertModal"));
        echo "
    </div>
</div>
</body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/font-awesome/css/font-awesome.min.css", 2 => "assets/css/style.css", 3 => "assets/css/main.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 20
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" rel=\"stylesheet\"/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo " ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "assets/vendor/jquery/jquery-2.1.1.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.min.js", 2 => "assets/js/main.js", 3 => "bundles/bazingajstranslation/js/translator.min.js", 4 => "bundles/bazingajstranslation/js/translator.min.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 33
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/vendor/fileupload/js/vendor/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/vendor/fileupload/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/vendor/fileupload/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("bazinga_jstranslation_js");
        echo "\"></script>
    ";
    }

    // line 49
    public function block_alerts($context, array $blocks = array())
    {
        // line 50
        echo "            ";
        $this->env->loadTemplate("CoreBundle:Form:alerts.html.twig")->display($context);
        // line 51
        echo "        ";
    }

    // line 62
    public function block_title($context, array $blocks = array())
    {
    }

    // line 65
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 66
        echo "                        ";
        // line 67
        echo "                    ";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 76,  217 => 75,  213 => 67,  211 => 66,  208 => 65,  203 => 62,  199 => 51,  196 => 50,  193 => 49,  187 => 40,  183 => 39,  179 => 38,  175 => 37,  171 => 36,  166 => 35,  157 => 33,  152 => 26,  149 => 25,  145 => 21,  136 => 20,  131 => 14,  128 => 13,  118 => 82,  114 => 81,  108 => 77,  106 => 75,  97 => 68,  95 => 65,  89 => 62,  80 => 55,  78 => 54,  74 => 52,  72 => 49,  63 => 42,  61 => 25,  57 => 23,  54 => 22,  52 => 13,  43 => 11,  38 => 9,  28 => 2,  25 => 1,);
    }
}
