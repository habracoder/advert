<?php

/* @Advert/Advert/Section/filter.html.twig */
class __TwigTemplate_0f7e0b4019b96393a8d9d10e83c494e50f274140b96cf7037c51da1d152695b6 extends Twig_Template
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
        echo "<div class=\"col-sm-12 col-md-12\">
    <div class=\"filter-bar clearfix\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-5 col-md-5\">
                <h5 class=\"filter-title\">Showing <span>9</span> of <span>30</span> results</h5>
            </div>

            <div class=\"col-xs-12 col-sm-7 col-md-7\">
                <form class=\"form-inline pull-right\">
                    <ul class=\"list-unstyled filter-gridlist\">
                        <li class=\"filter-select\">
                            Sort by:
                            <select class=\"form-control selectpicker\" style=\"display: none;\">
                                <option>Most Recent</option>
                                <option>Highest Price</option>
                                <option>Lower Price</option>
                                <option>Most Popular</option>
                            </select>

                            <div class=\"btn-group bootstrap-select form-control\">
                                <button type=\"button\" class=\"btn dropdown-toggle selectpicker btn-default\"
                                        data-toggle=\"dropdown\" title=\"Most Recent\"><span
                                            class=\"filter-option pull-left\">Most Recent</span>&nbsp;<span
                                            class=\"caret\"></span></button>
                                <div class=\"dropdown-menu open\">
                                    <ul class=\"dropdown-menu inner selectpicker\" role=\"menu\">
                                        <li rel=\"0\" class=\"selected\"><a tabindex=\"0\" class=\"\" style=\"\"
                                                                        data-original-title=\"\" title=\"\"><span
                                                        class=\"text\">Most Recent</span><i
                                                        class=\"glyphicon glyphicon-ok icon-ok check-mark\"></i></a></li>
                                        <li rel=\"1\"><a tabindex=\"0\" class=\"\" style=\"\" data-original-title=\"\"
                                                       title=\"\"><span class=\"text\">Highest Price</span><i
                                                        class=\"glyphicon glyphicon-ok icon-ok check-mark\"></i></a></li>
                                        <li rel=\"2\"><a tabindex=\"0\" class=\"\" style=\"\" data-original-title=\"\"
                                                       title=\"\"><span class=\"text\">Lower Price</span><i
                                                        class=\"glyphicon glyphicon-ok icon-ok check-mark\"></i></a></li>
                                        <li rel=\"3\"><a tabindex=\"0\" class=\"\" style=\"\" data-original-title=\"\"
                                                       title=\"\"><span class=\"text\">Most Popular</span><i
                                                        class=\"glyphicon glyphicon-ok icon-ok check-mark\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class=\"hidden-xs\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" id=\"gridview\"
                               class=\"switcher\" data-original-title=\"Grid View\"><i class=\"fa fa-th\"></i></a>
                        </li>
                        <li class=\"hidden-xs\">
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" id=\"listview\"
                               class=\"switcher active\" data-original-title=\"List View\"><i class=\"fa fa-th-list\"></i></a>
                        </li>
                        <li class=\"hidden-xs\" style=\"display: none;\">
                            <!-- Remove \"display: none;\" for the map marker icon -->
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Map View\"><i class=\"fa fa-map-marker\"></i></a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Advert/Advert/Section/filter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
