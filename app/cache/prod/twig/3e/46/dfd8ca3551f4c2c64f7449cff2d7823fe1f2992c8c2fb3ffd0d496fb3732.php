<?php

/* UserBundle:Component:sidebarProfile.html.twig */
class __TwigTemplate_3e46dfd8ca3551f4c2c64f7449cff2d7823fe1f2992c8c2fb3ffd0d496fb3732 extends Twig_Template
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
        echo "<div class=\"aside-profile\">
    <div class=\"panel panel-default panel-profile\">
        <div class=\"panel-body no-padding\">
            <div class=\"media profile text-center\">
                <div class=\"media-avatar\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()), "avatar"), "html", null, true);
        echo "\" class=\"img-circle\" />
                    ";
        // line 8
        echo "                    <span class=\"label label-info label-speech\">Looking to buy!</span>
                </div>
                <div class=\"media-body\">
                    <h4 class=\"media-heading\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getFullName", array()), "html", null, true);
        echo "</h4>
                    <span class=\"media-meta\"><i class=\"fa fa-map-marker\"></i> Kuala Lumpur, Malaysia</span>
                    <!-- <a href=\"#\" class=\"btn btn-flat-green\">Contact</a> -->
                </div>

                <ul class=\"list-group list-group-inline media-counter clearfix\">
                    <li class=\"list-group-item col-md-6 col-sm-6 col-xs-6\">
                        <span class=\"counter-number\">";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adverts", array())), "html", null, true);
        echo "</span>
                        <span class=\"counter-text\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Обявления"), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item col-md-6 col-sm-6 col-xs-6\">
                        <span class=\"counter-number\">";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "advertBookmarks", array())), "html", null, true);
        echo "</span>
                        <span class=\"counter-text\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("В закладках"), "html", null, true);
        echo "</span>
                    </li>
                </ul>

                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <h5 class=\"list-title uppercase\">About</h5>
                        <p>
                            Pudding bear claw soufflé chocolate cake carrot cake. Pie marzipan pudding cupcake.
                        </p>
                    </li>
                    <li class=\"list-group-item\">
                        <h5 class=\"list-title uppercase\">Interested in <span>buying</span></h5>
                        <div class=\"product-tags clean clearfix\">
                            <a href=\"#\">Bukit Jalil</a>
                            <a href=\"#\">Subang Jaya</a>
                            <a href=\"#\">Kuala Lumpur</a>
                            <a href=\"#\">Apartment</a>
                            <a href=\"#\">Townhouse</a>
                            <a href=\"#\">Link House</a>
                            <a href=\"#\">Putrajaya</a>
                            <a href=\"#\">Ammenities</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Component:sidebarProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  55 => 22,  49 => 19,  45 => 18,  35 => 11,  30 => 8,  26 => 6,  19 => 1,);
    }
}
