<?php

/* AdvertBundle:Advert:create.html.twig */
class __TwigTemplate_f46cc9665ae1e762e412a01a903524ae36a20a6d4aa7d42b68d458fe24b3f580 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "    Создание обявления
";
    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        // line 8
        echo "    <a class=\"btn btn-default\" href=\"";
        echo $this->env->getExtension('routing')->getPath("advert");
        echo "\">К списку</a>
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "<div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 14
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("UserBundle:Component:sidebarProfile"));
        echo "
        </div>
        <div class=\"col-md-9\">
            <div class=\"box\">
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle("horizontal"), "html", null, true);
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
                ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('braincrafted_bootstrap_form')->setStyle(""), "html", null, true);
        echo "
                <div class=\"text-right\">
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
                </div>
                ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var advertForm = \$('form[name=advert_advert_create]');

            advertForm.find('input').on('change', function() {
                \$(this).parents('.form-group').filter('.has-error').find('.help-block').remove();
                \$(this).parents('.form-group').removeClass('has-error');
            });

            advertForm.on('submit', function() {
                var Request = \$.ajax({
                    'url': advertForm.attr('action'),
                    'dataType': 'json',
                    'data': \$(advertForm).serialize(),
                    'type': 'post'
                });

                Request.always(function(){
                    \$('.has-error .help-block').remove();
                    \$('.form-group').removeClass('has-error');
                });

                Request.done(function(Response) {
                    if (Response.errors) {
                        addMessage('warning', 'Please check form');
                        \$.each(Response.errors, function(field, message) {
                            var element = \$('form [id\$=_'+ field + ']');
                            element.after(\$('<div />', {
                                'class' : 'help-block'
                            }).append(message));

                            element.parents('.form-group').addClass('has-error');
                        });
                    } else {
                        window.location.replace(Response.redirect_href);
                    }
                });

                Request.fail(function(Response) {
                    addMessage('error', Response.responseJSON.message);
                });

                return false;
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "AdvertBundle:Advert:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 32,  102 => 31,  93 => 25,  88 => 23,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  64 => 14,  60 => 12,  57 => 11,  50 => 8,  47 => 7,  42 => 4,  39 => 3,  11 => 1,);
    }
}
