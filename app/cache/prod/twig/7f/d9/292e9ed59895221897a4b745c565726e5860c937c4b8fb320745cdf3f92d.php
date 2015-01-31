<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7fd9292e9ed59895221897a4b745c565726e5860c937c4b8fb320745cdf3f92d extends Twig_Template
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-md-offset-3\">
                <div class=\"login-panel panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 17
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("security_check");
        echo "\" method=\"post\" role=\"form\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
                            <fieldset>
                                <div class=\"form-group\">
                                    <label for=\"username\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input type=\"email\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"/>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"password\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                    <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                                </div>
                                <div class=\"checkbox\">
                                    <label>
                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                        ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type=\"submit\" class=\"btn btn-lg btn-success btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  90 => 31,  81 => 25,  75 => 22,  71 => 21,  65 => 18,  60 => 17,  54 => 15,  52 => 14,  46 => 11,  39 => 6,  36 => 5,  11 => 1,);
    }
}
