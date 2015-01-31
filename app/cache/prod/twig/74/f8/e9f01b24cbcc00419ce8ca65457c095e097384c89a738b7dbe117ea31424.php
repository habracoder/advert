<?php

/* @Core/Widget/searchPanel.html.twig */
class __TwigTemplate_74f8e9f01b24cbcc00419ce8ca65457c095e097384c89a738b7dbe117ea31424 extends Twig_Template
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
        echo "<div id=\"searchPanel \" style=\"display:none\">
    <div class=\"col12\">
            <span class=\"header-title header-title-support\">

                <h1>Что будем искать?</h1>

            </span>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-12\">
            ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "search-form")));
        echo "

            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "search", array()), 'widget', array("attr" => array("type" => "search", "class" => "search-field form-control", "placeholder" => "Введите что ищите")));
        // line 20
        echo "
            <a class=\"btn btn-success\" href=\"#\">Найти</a>

            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"searchAutocomplete\" style=\"display: none\">
        <ul>
            <li class=\"\"><p class=\"title\">Reports Glossary</p></li>
            <li class=\"active\"><p class=\"title\">Show sale prices</p></li>
            <li class=\"\"><p class=\"title\">Total Sales, Website Conversions, and Top Sellers</p></li>
            <li><p class=\"title\">How do I track sales per product or per discount code?</p></li>
            <li><p class=\"title\">I've made some sales, where is my money?</p></li>
        </ul>
    </div>
</div>
<script type=\"text/javascript\">
    jQuery(document).ready(function (\$) {

    });
</script>";
    }

    public function getTemplateName()
    {
        return "@Core/Widget/searchPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 23,  39 => 20,  37 => 14,  32 => 12,  19 => 1,);
    }
}
