<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_748a28660873c8e1b2951a51f5ab5e19c1d7e0178622060f9b148b038bc2a8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("path" => $this->env->getExtension('routing')->getPath("homepage"), "title" => $this->env->getExtension('translator')->trans("project.homepage")), 1 => array("title" => $this->env->getExtension('translator')->trans("profile.one")));
        // line 8
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getFullName", array()), "html", null, true);
        echo "
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"row row-offcanvas row-offcanvas-left row-offcanvas-sm row-offcanvas-sm-left row-offcanvas-xs box-padding\">
        <div class=\"col-md-3 sidebar-offcanvas sidebar-offcanvas-sm\">
            ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Component:sidebarProfile"));
        echo "
        </div>

        <div class=\"col-md-9\">
            <div class=\"profile-content\">
                <div class=\"tab-content no-bg no-border\">
                    ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Component:bookmarksAdverts"));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Component:recentAdverts", array("user_id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Component:viewedAdverts"));
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 26,  81 => 25,  77 => 24,  68 => 18,  64 => 16,  61 => 15,  54 => 12,  51 => 11,  44 => 8,  41 => 4,  38 => 3,  11 => 1,);
    }
}
