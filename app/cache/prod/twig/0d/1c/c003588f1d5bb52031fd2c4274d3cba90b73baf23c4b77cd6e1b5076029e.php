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
        // line 23
        echo "<div class=\"row\">
        <div class=\"col-lg-4\">
            <img class=\"img img-thumbnail\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/no_photo.png"), "html", null, true);
        echo "\">
        </div>
        <div class=\"col-lg-8\">
            <div class=\"price\">
                <h2>Цена: ";
        // line 29
        echo twig_escape_filter($this->env, twig_localized_currency_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), "UAH"), "html", null, true);
        echo "</h2>
            </div>
            <div class=\"description\">
                ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "content", array()), "html", null, true);
        echo "
            </div>
            <hr />
            <div class=\"additions\">
                Просмотренно: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "countOfViews", array()), "html", null, true);
        echo " |
                Создано ";
        // line 37
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
        return array (  92 => 37,  88 => 36,  81 => 32,  75 => 29,  68 => 25,  64 => 23,  61 => 21,  54 => 13,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
