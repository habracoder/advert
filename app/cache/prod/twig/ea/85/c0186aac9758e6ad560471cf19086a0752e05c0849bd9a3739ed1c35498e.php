<?php

/* :Partial:navigation.html.twig */
class __TwigTemplate_ea85c0186aac9758e6ad560471cf19086a0752e05c0849bd9a3739ed1c35498e extends Twig_Template
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
        echo "<section id=\"header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 5
        $context["navigation_links"] = array(0 => array("title" => "Главная", "path" => "homepage"), 1 => array("title" => "Обявления", "path" => "advert"), 2 => array("title" => "Рубрики", "path" => "category"));
        // line 19
        echo "                <!-- Fixed navbar -->
                <nav class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "html", null, true);
        echo "</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation_links"]) ? $context["navigation_links"] : $this->getContext($context, "navigation_links")));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 27
            echo "                                <li class=\"\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath($this->getAttribute($context["link"], "path", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "title", array()), "html", null, true);
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("advert_create");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("advert.create_new"), "html", null, true);
        echo "</a></li>

                            ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 35
            echo "                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                                       role=\"button\"
                                       aria-expanded=\"false\"> Профиль <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile.show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Профиль</a></li>
                                        <li><a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("profile.edit");
            echo "\">Настройки</a></li>
                                        <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Выйти</a></li>
                                    </ul>
                                </li>
                            ";
        } else {
            // line 46
            echo "                                <li class=\"\">
                                    <a class=\"login\" data-toggle=\"modal\"
                                       href=\"#login-overlay\">";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
            echo "</a>

                                </li>
                                <li>
                                    <a class=\"register\"
                                       href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.registration.submin"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        }
        // line 56
        echo "                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return ":Partial:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 56,  104 => 53,  96 => 48,  92 => 46,  85 => 42,  81 => 41,  77 => 40,  70 => 35,  68 => 34,  61 => 32,  56 => 29,  45 => 27,  41 => 26,  32 => 22,  27 => 19,  25 => 5,  19 => 1,);
    }
}
