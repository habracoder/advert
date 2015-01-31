<?php

/* @Advert/Advert/Section/advert.html.twig */
class __TwigTemplate_4b676ba8325b594e7ce3762eb830bd8c5181321085943e793a7ecd7cc3db5bad extends Twig_Template
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
        echo "<div class=\"prop-item col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
        <div class=\"thumbnail-img thumbscrubber\">
            <span class=\"ts-inner\">
                <img src=\"http://upload.wikimedia.org/wikipedia/commons/8/89/Semi-detached_house_in_Darlow_Street%2C_Wagga_Wagga.jpg\" alt=\"House\" class=\"ts-currslide\">
                <img src=\"http://upload.wikimedia.org/wikipedia/commons/7/75/Family-room-700.jpg\" alt=\"Family Room\" class=\"\">
                <img src=\"http://upload.wikimedia.org/wikipedia/commons/3/39/METLA_SUIHKU_big.jpg\" alt=\"Bathroom\" class=\"\">
                <img src=\"http://upload.wikimedia.org/wikipedia/commons/b/b2/Fully_Furnished_Atenas_Apartments_for_rent.jpg\" alt=\"Kitchen\" class=\"\">
            </span>
        </div>
        <div class=\"thumbnail-body\">
            <div class=\"caption\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("advert_show", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\">
                    <h3>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h3>
                    ";
        // line 16
        echo "                    <div class=\"prop-price\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "price", array()), "html", null, true);
        echo " грн.</div>
                    <p>
                        ";
        // line 18
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), 0, 150), "html", null, true);
        echo "...
                    </p>
                </a>
            </div>
            <div class=\"content clearfix\">
                <ul class=\"list-unstyled feature-list\">
                    <li><i class=\"fa fa-calendar\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "createdAt", array()), "medium", "none"), "html", null, true);
        echo "</li>
                    <li><i class=\"fa fa-eye\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "countOfViews", array()), "html", null, true);
        echo "</li>
                </ul>
                <div class=\"link-action clearfix\">
                    ";
        // line 28
        $context["status"] = (($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "userBookmarks", array()), "contains", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) ? ("favorited") : (""));
        // line 29
        echo "                    <a href=\"#\" class=\"col-md-6 col-sm-6 col-xs-6 save-favorite ";
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "\" data-handler=\"bookmark\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Save to Favorite\"><i class=\"fa fa-star\"></i></a>
                    <a href=\"#\" class=\"col-md-6 col-sm-6 col-xs-6 contact-agent\" data-toggle=\"tooltip2\" data-placement=\"top\" title=\"\" data-original-title=\"Contact Agent\"><i class=\"fa fa-envelope\"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Advert/Advert/Section/advert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  66 => 28,  60 => 25,  56 => 24,  47 => 18,  41 => 16,  37 => 14,  33 => 13,  19 => 1,);
    }
}
