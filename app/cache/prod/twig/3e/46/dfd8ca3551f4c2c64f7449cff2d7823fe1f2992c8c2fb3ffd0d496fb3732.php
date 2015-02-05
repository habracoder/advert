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
        echo "                    ";
        // line 9
        echo "                </div>
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

                ";
        // line 28
        echo "                    ";
        // line 29
        echo "                        ";
        // line 30
        echo "                        ";
        // line 31
        echo "                            ";
        // line 32
        echo "                        ";
        // line 33
        echo "                    ";
        // line 34
        echo "                    ";
        // line 35
        echo "                        ";
        // line 36
        echo "                        ";
        // line 37
        echo "                            ";
        // line 38
        echo "                            ";
        // line 39
        echo "                            ";
        // line 40
        echo "                            ";
        // line 41
        echo "                            ";
        // line 42
        echo "                            ";
        // line 43
        echo "                            ";
        // line 44
        echo "                            ";
        // line 45
        echo "                        ";
        // line 46
        echo "                    ";
        // line 47
        echo "                ";
        // line 48
        echo "            </div>
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
        return array (  107 => 48,  105 => 47,  103 => 46,  101 => 45,  99 => 44,  97 => 43,  95 => 42,  93 => 41,  91 => 40,  89 => 39,  87 => 38,  85 => 37,  83 => 36,  81 => 35,  79 => 34,  77 => 33,  75 => 32,  73 => 31,  71 => 30,  69 => 29,  67 => 28,  60 => 23,  56 => 22,  50 => 19,  46 => 18,  36 => 11,  32 => 9,  30 => 8,  26 => 6,  19 => 1,);
    }
}
