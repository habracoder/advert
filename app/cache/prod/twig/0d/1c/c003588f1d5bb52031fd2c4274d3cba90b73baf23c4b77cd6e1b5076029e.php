<?php

/* AdvertBundle:Advert:show.html.twig */
class __TwigTemplate_0d1cc003588f1d5bb52031fd2c4274d3cba90b73baf23c4b77cd6e1b5076029e extends Twig_Template
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
            'overview' => array($this, 'block_overview'),
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
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "title", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("path" => $this->env->getExtension('routing')->getPath("homepage"), "title" => $this->env->getExtension('translator')->trans("project.homepage")), 1 => array("path" => $this->env->getExtension('routing')->getPath("advert"), "title" => $this->env->getExtension('translator')->trans("Обявления")), 2 => array("title" => $this->env->getExtension('translator')->trans("action.show")));
        // line 13
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "<div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Component:sidebarProfile", array("user" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user", array()))));
        echo "
        </div>
        <div class=\"col-md-9\">
            <div class=\"box\">
                ";
        // line 28
        $this->displayBlock("overview", $context, $blocks);
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 34
    public function block_overview($context, array $blocks = array())
    {
        // line 35
        echo "    <div class=\"row\">
        <div class=\"col-lg-4\">
            <img class=\"img img-thumbnail\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/no_photo.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-lg-8\">
            ";
        // line 40
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "user", array()))) {
            // line 41
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("advert_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default pull-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit"), "html", null, true);
            echo "</a>
            ";
        }
        // line 43
        echo "            <div class=\"price\">
                <h2>Цена: ";
        // line 44
        echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), "UAH"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"description\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array()), "html", null, true);
        echo "
            </div>
            <hr />
            <div class=\"additions\">
                Просмотренно: ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "countOfViews", array()), "html", null, true);
        echo " |
                Создано ";
        // line 52
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()), "medium", "none"), "html", null, true);
        echo "
            </div>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "AdvertBundle:Advert:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 52,  124 => 51,  117 => 47,  111 => 44,  108 => 43,  100 => 41,  98 => 40,  92 => 37,  88 => 35,  85 => 34,  76 => 28,  69 => 24,  65 => 22,  62 => 21,  55 => 13,  52 => 8,  49 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
