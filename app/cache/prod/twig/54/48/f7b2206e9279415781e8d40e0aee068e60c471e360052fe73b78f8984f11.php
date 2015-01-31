<?php

/* :Secured:login.modal.html.twig */
class __TwigTemplate_5448f7b2206e9279415781e8d40e0aee068e60c471e360052fe73b78f8984f11 extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
        } else {
            // line 3
            echo "    ";
            // line 4
            echo "    <div class=\"modal fade\" id=\"login-overlay\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModalLabel\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span><span
                                class=\"sr-only\">Close</span></button>
                    <h4 class=\"modal-title\" id=\"loginModalLabel\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <div class=\"well\">
                                <form id=\"loginForm\" method=\"POST\" action=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("security_check");
            echo "\" novalidate=\"novalidate\">
                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\" />
                                    <div class=\"form-group\">
                                        <label for=\"username\" class=\"control-label\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                                        <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"\"
                                               required=\"\" title=\"Please enter you email\"
                                               placeholder=\"example@gmail.com\">
                                        <span class=\"help-block\"></span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"password\" class=\"control-label\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
            echo "</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\"
                                               value=\"\" required=\"\" title=\"Please enter your password\">
                                        <span class=\"help-block\"></span>
                                    </div>
                                    <div id=\"loginErrorMsg\" class=\"alert alert-error hide\">Wrong username og password
                                    </div>
                                    <div class=\"checkbox\">

                                        <label>
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked=\"checked\"> ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </label>
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-success btn-block\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</button>
                                    <p id=\"loginResponse\" class=\"text-danger text-center\"></p>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xs-6\">
                            <p class=\"lead\">Регистрация <span class=\"text-success text-bold\">БЕСПЛАТНАЯ</span></p>
                            <ul class=\"list-unstyled\" style=\"line-height: 2\">
                                <li><span class=\"fa fa-check text-success\"></span> Выставляйте товар на продажу</li>
                                <li><span class=\"fa fa-check text-success\"></span> Покупайте по низким ценам</li>
                                <li><span class=\"fa fa-check text-success\"></span> Зарабатывайте деньги</li>
                                <li><span class=\"fa fa-check text-success\"></span> Распродайте домашний хлам</li>
                                <li><span class=\"fa fa-check text-success\"></span> Получите прибыль</li>
                            </ul>
                            <p><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-info btn-block\">Да, хочу зарегистрироваться!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"text/javascript\">
        \$(document).ready(function(\$){
            \$('form input').on('focus', function(){
                \$('#loginResponse').slideUp().html('');
            });

            \$('form#loginForm').on('submit', function(e){
                var loginForm = \$(this);
                e.preventDefault();
                \$.ajax({
                    type        : loginForm.attr( 'method' ),
                    url         : loginForm.attr( 'action' ),
                    data        : loginForm.serialize(),
                    dataType    : 'json',
                    success     : function(response, status, object) {
                        if (response.success == false) {
                            \$('#loginResponse').html(response.message);
                            \$('#loginResponse').slideDown();
                        } else {
                            window.location.reload();
                        }
                    }
                });
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return ":Secured:login.modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 54,  80 => 40,  74 => 37,  61 => 27,  51 => 20,  46 => 18,  42 => 17,  33 => 11,  24 => 4,  22 => 3,  19 => 1,);
    }
}
