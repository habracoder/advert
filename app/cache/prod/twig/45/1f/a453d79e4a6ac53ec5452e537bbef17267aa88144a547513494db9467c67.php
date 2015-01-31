<?php

/* AdvertBundle:Category:list.html.twig */
class __TwigTemplate_451fa453d79e4a6ac53ec5452e537bbef17267aa88144a547513494db9467c67 extends Twig_Template
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
            'actions' => array($this, 'block_actions'),
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
        echo "    Список категорий
";
    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if ( !(null === (isset($context["mvUp"]) ? $context["mvUp"] : $this->getContext($context, "mvUp")))) {
            // line 9
            echo "        <a class=\"btn btn-default\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["mvUp"]) ? $context["mvUp"] : $this->getContext($context, "mvUp")), "html", null, true);
            echo "\">На уровень выше</a>
    ";
        }
    }

    // line 13
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("path" => $this->env->getExtension('routing')->getPath("homepage"), "title" => $this->env->getExtension('translator')->trans("project.homepage")), 1 => array("title" => $this->env->getExtension('translator')->trans("category.many")));
        // line 18
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        $this->displayBlock("actions", $context, $blocks);
        echo "
    ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
            // line 24
            echo "    <table class=\"table table-bordered\">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Alias</th>
            <th>position</th>
            <th>Icon</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 37
                echo "            <tr>
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("cat_id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "title", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "alias", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 42
                if ( !(null === $context["entity"])) {
                    echo "<i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                echo "</td>
                <td>
                    <div class=\"btn-group btn-group-xs pull-right\">
                        <a class=\"btn btn-default\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("position" => "up", "entity" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-up\"></i></a>
                        <a class=\"btn btn-default\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category", array("position" => "down", "entity" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\"><i class=\"fa fa-arrow-down\"></i></a>
                        <a class=\"btn btn-default\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.show"), "html", null, true);
                echo "</a>
                        <a class=\"btn btn-default\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit"), "html", null, true);
                echo "</a>
                    </div>
                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 56
            echo "        ";
            echo twig_include($this->env, $context, "@Core/Section/noResult.html.twig");
            echo "
    ";
        }
        // line 58
        echo "
    <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("category_new");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.create"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "AdvertBundle:Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 59,  172 => 58,  166 => 56,  161 => 53,  148 => 48,  142 => 47,  138 => 46,  134 => 45,  124 => 42,  120 => 41,  116 => 40,  110 => 39,  104 => 38,  101 => 37,  97 => 36,  83 => 24,  81 => 23,  77 => 22,  74 => 21,  67 => 18,  64 => 14,  61 => 13,  53 => 9,  50 => 8,  47 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
