<?php

/* PageBundle:Home:index.html.twig */
class __TwigTemplate_a0a26b785b209368b44851018de45bad91c37ba919ba42cac6788d857b7ef681 extends Twig_Template
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
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CoreBundle:Widget:searchPanel"));
        echo "

    <div class=\"row\">
        ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div class=\"col-xs-2 text-center\" style=\"margin-bottom: 20px\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("advert", array("alias" => $this->getAttribute($context["category"], "alias", array()))), "html", null, true);
            echo "\">
                ";
            // line 13
            if ($this->getAttribute($context["category"], "image", array())) {
                // line 14
                echo "                    <img class=\"image img-thumbnail\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "image", array()), "html", null, true);
                echo "\" />
                ";
            } else {
                // line 16
                echo "                    <i style=\"font-size: 64px\" class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "icon", array()), "html", null, true);
                echo "\"></i>
                ";
            }
            // line 18
            echo "                    <br/>
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "

                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus egestas, neque et vehicula cursus, urna est
        venenatis ligula, condimentum mollis magna ligula sit amet turpis. Aenean luctus ornare eros, sed pretium lacus.
        Vivamus auctor erat non efficitur consectetur. Nam a hendrerit sem, id venenatis mi. Mauris elit dui, sagittis
        et metus vitae, accumsan molestie velit. Aliquam gravida dui non ex sollicitudin, tincidunt semper orci blandit.
        Etiam commodo lorem id dapibus gravida. Pellentesque placerat dapibus vulputate. Sed sit amet laoreet sem.
        Curabitur placerat odio in velit egestas consequat. Interdum et malesuada fames ac ante ipsum primis in
        faucibus. Donec ac blandit massa.</p>
    <p>Suspendisse nunc lectus, elementum et ultricies ut, fringilla ut libero. Integer vitae mi sagittis, eleifend quam
        ac, aliquam lacus. Donec tristique fringilla elit ac porta. Curabitur mollis nunc id suscipit hendrerit. Proin
        nec ex malesuada, blandit tortor nec, efficitur mauris. Etiam tincidunt sodales quam non aliquam. Fusce vitae
        cursus mi. Fusce facilisis dolor nunc. Nulla quis purus sit amet purus mattis rhoncus. Morbi tincidunt diam nec
        ante commodo, condimentum ultricies dolor placerat. Nullam vel tortor interdum, finibus est pretium, porttitor
        lectus. In lorem est, porta ut ante vestibulum, scelerisque rhoncus leo. Nunc eu leo a leo vulputate faucibus.
        Praesent cursus sed tortor et tempor. Sed dui quam, sodales id purus aliquet, viverra accumsan metus.</p>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  82 => 19,  79 => 18,  73 => 16,  67 => 14,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  48 => 7,  45 => 6,  42 => 5,  37 => 3,  11 => 1,);
    }
}
