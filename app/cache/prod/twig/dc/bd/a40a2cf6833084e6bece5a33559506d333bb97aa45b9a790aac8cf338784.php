<?php

/* AdvertBundle:Component:newAdvertModal.html.twig */
class __TwigTemplate_dcbda40a2cf6833084e6bece5a33559506d333bb97aa45b9a790aac8cf338784 extends Twig_Template
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
        echo "<div class=\"modal fade\" id=\"new-advert-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\"
     aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span
                            class=\"sr-only\">Close</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 8
        echo "Новое обявление";
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
            </div>
        </div>
    </div>
</div>

";
        // line 18
        echo "    ";
        // line 19
        echo "        ";
        // line 20
        echo "            ";
        // line 21
        echo "        ";
        // line 22
        echo "
        ";
        // line 24
        echo "            ";
        // line 25
        echo "            ";
        // line 26
        echo "            ";
        // line 27
        echo "                ";
        // line 28
        echo "                ";
        // line 29
        echo "                ";
        // line 30
        echo "                ";
        // line 31
        echo "                ";
        // line 32
        echo "                    ";
        // line 33
        echo "                        ";
        // line 34
        echo "                        ";
        // line 35
        echo "                    ";
        // line 36
        echo "                        ";
        // line 37
        echo "                    ";
        // line 38
        echo "                ";
        // line 39
        echo "            ";
        // line 40
        echo "        ";
        // line 41
        echo "    ";
    }

    public function getTemplateName()
    {
        return "AdvertBundle:Component:newAdvertModal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 41,  86 => 40,  84 => 39,  82 => 38,  80 => 37,  78 => 36,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  68 => 31,  66 => 30,  64 => 29,  62 => 28,  60 => 27,  58 => 26,  56 => 25,  54 => 24,  51 => 22,  49 => 21,  47 => 20,  45 => 19,  43 => 18,  34 => 11,  28 => 8,  19 => 1,);
    }
}
