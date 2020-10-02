<?php

/* momday/preloved.twig */
class __TwigTemplate_6dfe9620cd037d0efe36dfdea1ed452ff93314fcade7becb82ec6af54ed3e0bc extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>";
        // line 9
        echo "                <button type=\"button\" form=\"form-product\" formaction=\"";
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
        </div>
    </div>

    <style>
        .form-group + .form-group {
            border-top: 0px;
        }
    </style>

    <!-- Modal View More -->
    <div class=\"modal fade\" id=\"modal_view_more\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\" style=\"overflow-y: auto;\" id=\"modal-body\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div id=\"filter-product\" class=\"col-sm-12 hidden-sm hidden-xs\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">";
        // line 36
        echo (isset($context["text_more_details"]) ? $context["text_more_details"] : null);
        echo "</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <table class=\"table table-bordered table-hover\">
                                            <tbody>
                                            <tr id=\"tr_date_created\">
                                                <th>Date Created</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_date_updated\">
                                                <th>Date Updated</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_date_approved\">
                                                <th>Date Approved</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_date_expires\">
                                                <th>Date Expires</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_address\">
                                                <th>Address</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_remarks\">
                                                <th>Admin Remarks</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_description\">
                                                <th>Description</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_width\">
                                                <th>Width</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_height\">
                                                <th>Height</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_length\">
                                                <th>Length</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_dimension_units\">
                                                <th>Dimension Units</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_weight\">
                                                <th>Weight</th>
                                                <td></td>
                                            </tr>
                                            <tr id=\"tr_weight_units\">
                                                <th>Weight Units</th>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video-->
    <div class=\"modal fade\" id=\"modal_video\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\" style=\"width:60%;\">
            <div class=\"modal-content\">
                <div class=\"modal-body\" style=\"overflow-y: auto;\" id=\"modal-body\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div id=\"filter-product\" class=\"col-sm-12 hidden-sm hidden-xs\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Product Video</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <video id=\"product_video\" width=\"100%\" controls=\"\">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Images-->
    <div class=\"modal fade\" id=\"modal_images\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\" style=\"overflow-y: auto;\" id=\"modal-body\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div id=\"filter-product\" class=\"col-sm-12 hidden-sm hidden-xs\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Product Images</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"flexslider\">
                                            <ul class=\"slides\" id=\"flexslider-slides\">
                                                <li>
                                                    <img src=\"/image/momday/1.jpeg\" />
                                                </li>
                                                <li>
                                                    <img src=\"/image/momday/2.jpeg\" />
                                                </li>
                                                <li>
                                                    <img src=\"/image/momday/3.jpeg\" />
                                                </li>
                                                <li>
                                                    <img src=\"/image/momday/4.jpeg\" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Remark -->
    <div class=\"modal fade\" id=\"modal_remark\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\" style=\"overflow-y: auto;\" id=\"modal-body\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div id=\"filter-product\" class=\"col-sm-12 hidden-sm hidden-xs\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Leave Remark</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <form action=\"";
        // line 191
        echo (isset($context["remark"]) ? $context["remark"] : null);
        echo "\" method=\"post\" id=\"form_remark\">
                                            <input type =\"hidden\" name=\"product_id\" id=\"product_id_remark\"/>
                                            <textarea maxlength=\"3000\" rows=\"8\" style=\"width:100%;\" name=\"remark\" id=\"remark_id\"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" onclick=\"postRemark()\" form=\"form_remark\" formaction=\"";
        // line 202
        echo (isset($context["remark"]) ? $context["remark"] : null);
        echo "\" class=\"btn btn-success\" style=\"float:left;\" data-dismiss=\"modal\">Save</button>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Cancel</button>
                </div>
            </div>
        </div>
    </div>";
        // line 215
        echo "    <link rel=\"stylesheet\" href=\"view/javascript/flexslider/flexslider.css\">
    <script src=\"view/javascript/flexslider/jquery.flexslider.js\" ></script>

    <script>

        var products_images = {};";
        // line 221
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 223
                echo "                    products_images['";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "'] =['";
                echo $this->getAttribute($context["product"], "image_large", array());
                echo "'];";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products_images"]) ? $context["products_images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
                    // line 225
                    echo "                        if('";
                    echo $this->getAttribute($context["product_image"], "product_id", array());
                    echo "' === '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "') {
                            products_images['";
                    // line 226
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "'].push('";
                    echo $this->getAttribute($context["product_image"], "image", array());
                    echo "');
                        }";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 231
        echo "        console.log(products_images);

        // \$(window).load(function() {
        //     \$('.flexslider').flexslider({
        //         animation: \"slide\"
        //     });
        // });

        // \$(document).ready(function() {
        //     \$('.flexslider').flexslider({
        //         animation: \"slide\"
        //     });
        // });

        var product_id_to_description = {};";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 247
            echo "        product_id_to_description[\"";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"] = \"";
            echo twig_replace_filter($this->getAttribute($context["product"], "description", array()), array("
" => " ", "" => " "));
            echo "\";";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo "
        function modalViewMore(product_id, date_added, date_modified, date_approved, date_expire, remarks, address, status,description,width,height,length,dimension_units,weight,weight_units){
            if(status !== 'active'){
                document.getElementById(\"tr_date_approved\").style.display = \"none\";
                document.getElementById(\"tr_date_expires\").style.display = \"none\";
            }else{
                document.getElementById(\"tr_date_approved\").style.display = \"\";
                document.getElementById(\"tr_date_expires\").style.display = \"\";
            }
            document.getElementById(\"tr_date_created\").cells[1].innerHTML=date_added;
            document.getElementById(\"tr_date_updated\").cells[1].innerHTML=date_modified;
            document.getElementById(\"tr_date_approved\").cells[1].innerHTML=date_approved;
            document.getElementById(\"tr_date_expires\").cells[1].innerHTML=date_expire;
            document.getElementById(\"tr_address\").cells[1].innerHTML=address;
            document.getElementById(\"tr_remarks\").cells[1].innerHTML=remarks;
            document.getElementById(\"tr_description\").cells[1].innerHTML=product_id_to_description[product_id];
            document.getElementById(\"tr_width\").cells[1].innerHTML=width;
            document.getElementById(\"tr_height\").cells[1].innerHTML=height;
            document.getElementById(\"tr_length\").cells[1].innerHTML=length;
            document.getElementById(\"tr_dimension_units\").cells[1].innerHTML=dimension_units;
            document.getElementById(\"tr_weight\").cells[1].innerHTML=weight;
            document.getElementById(\"tr_weight_units\").cells[1].innerHTML=weight_units;
            \$(\"#modal_view_more\").modal();
        }

        function modalViewVideo(video){
            document.getElementById(\"product_video\").src = video;
            \$(\"#modal_video\").modal();
        }

        function modalViewImages(product_id){
            \$('.flexslider').removeData(\"flexslider\");
            var slider_content = \"\";
            var product_image;
            for(product_image in products_images[product_id]){
                slider_content +=
                    \"                                                <li>\\n\" +
                    \"                                                    <img src='\"+ '";
        // line 286
        echo (isset($context["image_url"]) ? $context["image_url"] : null);
        echo "' + products_images[product_id][product_image] + \"' />\" + \"\\n\" +
                    \"                                                </li>\\n\"
            }
            document.getElementById(\"flexslider-slides\").innerHTML = slider_content;
            \$(\"#modal_images\").modal();
        }

        \$('#modal_video').on('hidden.bs.modal', function (e) {
            var vid = document.getElementById(\"product_video\");
            vid.pause();
        });

        \$('#modal_images').on('shown.bs.modal', function (e) {
            // \$(window).load(function() {
            \$('.flex-control-nav').remove();
                \$('.flexslider').flexslider({
                    animation: \"slide\"
                });
            // });
        });

        function modalRemark(product_id, remark){
            document.getElementById(\"product_id_remark\").value = product_id;
            document.getElementById(\"remark_id\").value = remark;
            \$(\"#modal_remark\").modal();
        }

        function activateProduct(product_id){
            document.getElementById('activate_product_id').value= product_id;
            document.getElementById('form_activate').submit();
        }

        function rejectProduct(product_id){
            document.getElementById('reject_product_id').value= product_id;
            document.getElementById('form_reject').submit();
        }

        function postRemark(){
            document.getElementById('form_remark').submit();
        }
    </script>

    <form action=\"";
        // line 328
        echo (isset($context["activate"]) ? $context["activate"] : null);
        echo "\" method=\"post\" id=\"form_activate\">
        <input type=\"hidden\" name=\"product_id\" id=\"activate_product_id\">
    </form>
    <form action=\"";
        // line 331
        echo (isset($context["reject"]) ? $context["reject"] : null);
        echo "\" method=\"post\" id=\"form_reject\">
        <input type=\"hidden\" name=\"product_id\" id=\"reject_product_id\">
    </form>

    <div class=\"container-fluid\">";
        // line 335
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 336
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 340
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 341
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 345
        echo "        <div class=\"row\">
            <div id=\"filter-product\" class=\"col-sm-12 hidden-sm hidden-xs\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i>";
        // line 349
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"form-group col-sm-4\">
                            <label class=\"control-label\" for=\"input-name\">";
        // line 353
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                            <input type=\"text\" name=\"filter_name\" value=\"";
        // line 354
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group col-sm-4\">
                            <label class=\"control-label\" for=\"input-customer-name\">";
        // line 357
        echo (isset($context["entry_customer_name"]) ? $context["entry_customer_name"] : null);
        echo "</label>
                            <input type=\"text\" name=\"filter_customer_name\" value=\"";
        // line 358
        echo (isset($context["filter_customer_name"]) ? $context["filter_customer_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-customer-name\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group col-sm-4\">
                            <label class=\"control-label\" for=\"input-date_modified\">";
        // line 361
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "</label>
                            <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 362
        echo (isset($context["filter_date_modified"]) ? $context["filter_date_modified"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_modified"]) ? $context["entry_date_modified"] : null);
        echo "\" id=\"input-date-modified\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group col-sm-4\">
                            <label class=\"control-label\" for=\"input-price\">";
        // line 365
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                            <input type=\"text\" name=\"filter_price\" value=\"";
        // line 366
        echo (isset($context["filter_price"]) ? $context["filter_price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                        </div>
                        <div class=\"form-group col-sm-4\">
                            <label class=\"control-label\" for=\"input-status\">";
        // line 369
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                            <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                                <option value=\"\"></option>";
        // line 372
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "active")) {
            // line 373
            echo "                                    <option value=\"active\" selected=\"selected\">";
            echo (isset($context["text_active"]) ? $context["text_active"] : null);
            echo "</option>";
        } else {
            // line 375
            echo "                                    <option value=\"active\">";
            echo (isset($context["text_active"]) ? $context["text_active"] : null);
            echo "</option>";
        }
        // line 377
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "pending")) {
            // line 378
            echo "                                    <option value=\"pending\" selected=\"selected\">";
            echo (isset($context["text_pending"]) ? $context["text_pending"] : null);
            echo "</option>";
        } else {
            // line 380
            echo "                                    <option value=\"pending\">";
            echo (isset($context["text_pending"]) ? $context["text_pending"] : null);
            echo "</option>";
        }
        // line 382
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "rejected")) {
            // line 383
            echo "                                    <option value=\"rejected\" selected=\"selected\">";
            echo (isset($context["text_rejected"]) ? $context["text_rejected"] : null);
            echo "</option>";
        } else {
            // line 385
            echo "                                    <option value=\"rejected\">";
            echo (isset($context["text_rejected"]) ? $context["text_rejected"] : null);
            echo "</option>";
        }
        // line 387
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "inactive")) {
            // line 388
            echo "                                    <option value=\"inactive\" selected=\"selected\">";
            echo (isset($context["text_inactive"]) ? $context["text_inactive"] : null);
            echo "</option>";
        } else {
            // line 390
            echo "                                    <option value=\"inactive\">";
            echo (isset($context["text_inactive"]) ? $context["text_inactive"] : null);
            echo "</option>";
        }
        // line 392
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "sold")) {
            // line 393
            echo "                                    <option value=\"sold\" selected=\"selected\">";
            echo (isset($context["text_sold"]) ? $context["text_sold"] : null);
            echo "</option>";
        } else {
            // line 395
            echo "                                    <option value=\"sold\">";
            echo (isset($context["text_sold"]) ? $context["text_sold"] : null);
            echo "</option>";
        }
        // line 397
        echo "                            </select>
                        </div>
                        <div class=\"form-group text-right col-sm-4\">
                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i>";
        // line 400
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
                            <a href=\"";
        // line 401
        echo (isset($context["view_all"]) ? $context["view_all"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
        echo "</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>";
        // line 411
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
                    </div>
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 414
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-bordered table-hover\">
                                    <thead>
                                    <tr>
                                        <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                        <td class=\"text-center\">";
        // line 420
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 421
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 422
        if (((isset($context["sort"]) ? $context["sort"] : null) == "c.customer_name")) {
            echo " <a href=\"";
            echo (isset($context["sort_c_customer_name"]) ? $context["sort_c_customer_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_c_customer_name"]) ? $context["column_c_customer_name"] : null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_c_customer_name"]) ? $context["sort_c_customer_name"] : null);
            echo "\">";
            echo (isset($context["column_c_customer_name"]) ? $context["column_c_customer_name"] : null);
            echo "</a>";
        }
        echo "</td>
                                        <td class=\"text-left\">";
        // line 423
        if (((isset($context["sort"]) ? $context["sort"] : null) == "cs.date_modified")) {
            echo " <a href=\"";
            echo (isset($context["sort_cs_date_modified"]) ? $context["sort_cs_date_modified"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_cs_date_modified"]) ? $context["column_cs_date_modified"] : null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_cs_date_modified"]) ? $context["sort_cs_date_modified"] : null);
            echo "\">";
            echo (isset($context["column_cs_date_modified"]) ? $context["column_cs_date_modified"] : null);
            echo "</a>";
        }
        echo "</td>";
        // line 425
        echo "                                        <td class=\"text-right\">";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.price")) {
            echo " <a href=\"";
            echo (isset($context["sort_price"]) ? $context["sort_price"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_price"]) ? $context["sort_price"] : null);
            echo "\">";
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</a>";
        }
        echo "</td>";
        // line 427
        echo "                                        <td class=\"text-left\">";
        if (((isset($context["sort"]) ? $context["sort"] : null) == "p.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a>";
        }
        echo "</td>
                                        <td class=\"text-right\">";
        // line 428
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                                    </tr>
                                    </thead>
                                    <tbody>";
        // line 433
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 434
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 435
                echo "                                            <tr>
                                                <td class=\"text-center\">";
                // line 436
                if (twig_in_filter($this->getAttribute($context["product"], "product_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 437
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" checked=\"checked\" />";
                } else {
                    // line 439
                    echo "                                                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "\" />";
                }
                // line 440
                echo "</td>
                                                <td class=\"text-center\">";
                // line 441
                if ($this->getAttribute($context["product"], "image", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" />";
                } else {
                    echo " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span>";
                }
                echo "</td>
                                                <td class=\"text-left\">";
                // line 442
                echo $this->getAttribute($context["product"], "name", array());
                echo "</td>
                                                <td class=\"text-left\">";
                // line 443
                echo $this->getAttribute($context["product"], "customer_name", array());
                echo "</td>
                                                <td class=\"text-left\">";
                // line 444
                echo $this->getAttribute($context["product"], "date_modified", array());
                echo "</td>";
                // line 446
                echo "                                                <td class=\"text-right\">";
                if ($this->getAttribute($context["product"], "special", array())) {
                    echo " <span style=\"text-decoration: line-through;\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span><br/>
                                                        <div class=\"text-danger\">";
                    // line 447
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</div>";
                } else {
                    // line 449
                    echo $this->getAttribute($context["product"], "price", array());
                }
                // line 450
                echo "</td>";
                // line 452
                echo "                                                <td class=\"text-left\">";
                echo $this->getAttribute($context["product"], "status", array());
                echo "</td>




                                                <td class=\"text-right\">";
                // line 458
                if ($this->getAttribute($context["product"], "video", array())) {
                    // line 459
                    echo "                                                        <a onclick=\"modalViewVideo('";
                    echo (isset($context["image_url"]) ? $context["image_url"] : null);
                    echo $this->getAttribute($context["product"], "video", array());
                    echo "')\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_video"]) ? $context["button_video"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-play\"></i></a>";
                }
                // line 462
                echo "                                                        <a onclick=\"modalViewImages('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "')\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_images"]) ? $context["button_images"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-image\"></i></a>";
                // line 464
                echo "                                                    <div style=\"min-width: 120px; display:inline;\">
                                                        <div class=\"btn-group\">
                                                            <a onclick=\"modalViewMore('";
                // line 466
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "date_added", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "date_modified", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "date_approved", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "date_expire", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "remarks", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "address", array());
                echo "',
                                                                    '";
                // line 467
                echo $this->getAttribute($context["product"], "status", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "status", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "width", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "height", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "length", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "dimension_units", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "weight_units", array());
                echo "' )\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_view_more"]) ? $context["button_view_more"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-ellipsis-h\"></i></a>
                                                            <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                                                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                                                <li>";
                // line 471
                if ((($this->getAttribute($context["product"], "status", array()) == "pending") || ($this->getAttribute($context["product"], "status", array()) == "rejected"))) {
                    // line 473
                    echo "                                                                        <a style=\"cursor: pointer;\" onclick=\"activateProduct('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "')\"><i class=\"fa fa-power-off\"></i>";
                    echo (isset($context["button_activate"]) ? $context["button_activate"] : null);
                    echo "</a>";
                }
                // line 475
                echo "                                                                </li>
                                                                <li>";
                // line 477
                if ((($this->getAttribute($context["product"], "status", array()) == "pending") || ($this->getAttribute($context["product"], "status", array()) == "rejected"))) {
                    // line 478
                    echo "                                                                        <a style=\"cursor: pointer;\" onclick=\"modalRemark('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "remarks", array());
                    echo "')\"><i class=\"fa fa-comment\"></i>";
                    echo (isset($context["text_add_remark"]) ? $context["text_add_remark"] : null);
                    echo "</a>";
                }
                // line 480
                echo "                                                                </li>
                                                                <li>";
                // line 482
                if ((($this->getAttribute($context["product"], "status", array()) == "active") || ($this->getAttribute($context["product"], "status", array()) == "pending"))) {
                    // line 483
                    echo "                                                                        <a style=\"cursor: pointer;\" onclick=\"rejectProduct('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "')\"><i class=\"fa fa-ban\"></i>";
                    echo (isset($context["button_reject"]) ? $context["button_reject"] : null);
                    echo "</a>";
                }
                // line 485
                echo "                                                                </li>
                                                                <li>
                                                                    <a href=\"";
                // line 487
                echo $this->getAttribute($context["product"], "edit", array());
                echo "\"><i class=\"fa fa-pencil\"></i>";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>";
                // line 507
                echo "


                                            </tr>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 513
            echo "                                        <tr>
                                            <td class=\"text-center\" colspan=\"8\">";
            // line 514
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                                        </tr>";
        }
        // line 517
        echo "                                    </tbody>

                                </table>
                            </div>
                        </form>
                        <div class=\"row\">
                            <div class=\"col-sm-6 text-left\">";
        // line 523
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                            <div class=\"col-sm-6 text-right\">";
        // line 524
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\"><!--
        \$('#button-filter').on('click', function() {
            var url = '';

            var filter_name = \$('input[name=\\'filter_name\\']').val();

            if (filter_name) {
                url += '&filter_name=' + encodeURIComponent(filter_name);
            }

            var filter_customer_name = \$('input[name=\\'filter_customer_name\\']').val();

            if (filter_customer_name) {
                url += '&filter_customer_name=' + encodeURIComponent(filter_customer_name);
            }

            var filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

            if (filter_date_modified) {
                url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
            }

            var filter_model = \$('input[name=\\'filter_model\\']').val();

            if (filter_model) {
                url += '&filter_model=' + encodeURIComponent(filter_model);
            }

            var filter_price = \$('input[name=\\'filter_price\\']').val();

            if (filter_price) {
                url += '&filter_price=' + encodeURIComponent(filter_price);
            }

            // var filter_quantity = \$('input[name=\\'filter_quantity\\']').val();
            //
            // if (filter_quantity) {
            //     url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
            // }

            var filter_status = \$('select[name=\\'filter_status\\']').val();

            if (filter_status !== '') {
                url += '&filter_status=' + encodeURIComponent(filter_status);
            }

            location = 'index.php?route=momday/preloved&user_token=";
        // line 577
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "' + url;
        });
        //--></script>
    <script type=\"text/javascript\"><!--
        // IE and Edge fix!
        \$('button[form=\\'form-product\\']').on('click', function(e) {
            \$('#form-product').attr('action', \$(this).attr('formaction'));
        });

        \$('input[name=\\'filter_name\\']').autocomplete({
            'source': function(request, response) {
                \$.ajax({
                    url: 'index.php?route=momday/preloved/autocomplete&user_token=";
        // line 589
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
                    dataType: 'json',
                    success: function(json) {
                        response(\$.map(json, function(item) {
                            return {
                                label: item['name'],
                                value: item['product_id']
                            }
                        }));
                    }
                });
            },
            'select': function(item) {
                \$('input[name=\\'filter_name\\']').val(item['label']);
            }
        });

        \$('input[name=\\'filter_model\\']').autocomplete({
            'source': function(request, response) {
                \$.ajax({
                    url: 'index.php?route=momday/preloved/autocomplete&user_token=";
        // line 609
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_model=' +  encodeURIComponent(request),
                    dataType: 'json',
                    success: function(json) {
                        response(\$.map(json, function(item) {
                            return {
                                label: item['model'],
                                value: item['product_id']
                            }
                        }));
                    }
                });
            },
            'select': function(item) {
                \$('input[name=\\'filter_model\\']').val(item['label']);
            }
        });
        //--></script></div>";
        // line 626
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "momday/preloved.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1039 => 626,  1020 => 609,  997 => 589,  982 => 577,  926 => 524,  922 => 523,  914 => 517,  909 => 514,  906 => 513,  896 => 507,  886 => 487,  882 => 485,  875 => 483,  873 => 482,  870 => 480,  861 => 478,  859 => 477,  856 => 475,  849 => 473,  847 => 471,  825 => 467,  809 => 466,  805 => 464,  799 => 462,  791 => 459,  789 => 458,  780 => 452,  778 => 450,  775 => 449,  771 => 447,  764 => 446,  761 => 444,  757 => 443,  753 => 442,  741 => 441,  738 => 440,  733 => 439,  728 => 437,  726 => 436,  723 => 435,  719 => 434,  717 => 433,  711 => 428,  692 => 427,  674 => 425,  657 => 423,  639 => 422,  621 => 421,  617 => 420,  608 => 414,  602 => 411,  587 => 401,  583 => 400,  578 => 397,  573 => 395,  568 => 393,  566 => 392,  561 => 390,  556 => 388,  554 => 387,  549 => 385,  544 => 383,  542 => 382,  537 => 380,  532 => 378,  530 => 377,  525 => 375,  520 => 373,  518 => 372,  513 => 369,  505 => 366,  501 => 365,  493 => 362,  489 => 361,  481 => 358,  477 => 357,  469 => 354,  465 => 353,  458 => 349,  452 => 345,  445 => 341,  443 => 340,  436 => 336,  434 => 335,  427 => 331,  421 => 328,  376 => 286,  337 => 249,  326 => 247,  322 => 246,  306 => 231,  291 => 226,  284 => 225,  280 => 224,  274 => 223,  270 => 222,  268 => 221,  261 => 215,  253 => 202,  239 => 191,  81 => 36,  59 => 16,  49 => 14,  45 => 13,  41 => 11,  31 => 9,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-product').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*                 {#<a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>#}*/
/*                 {#<button type="submit" form="form-product" formaction="{{ copy }}" data-toggle="tooltip" title="{{ button_copy }}" class="btn btn-default"><i class="fa fa-copy"></i></button>#}*/
/*                 <button type="button" form="form-product" formaction="{{ delete }}" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-product').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <style>*/
/*         .form-group + .form-group {*/
/*             border-top: 0px;*/
/*         }*/
/*     </style>*/
/* */
/*     <!-- Modal View More -->*/
/*     <div class="modal fade" id="modal_view_more" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body" style="overflow-y: auto;" id="modal-body">*/
/*                     <div class="container-fluid">*/
/*                         <div class="row">*/
/*                             <div id="filter-product" class="col-sm-12 hidden-sm hidden-xs">*/
/*                                 <div class="panel panel-default">*/
/*                                     <div class="panel-heading">*/
/*                                         <h3 class="panel-title"> {{ text_more_details }}</h3>*/
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/*                                         <table class="table table-bordered table-hover">*/
/*                                             <tbody>*/
/*                                             <tr id="tr_date_created">*/
/*                                                 <th>Date Created</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_date_updated">*/
/*                                                 <th>Date Updated</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_date_approved">*/
/*                                                 <th>Date Approved</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_date_expires">*/
/*                                                 <th>Date Expires</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_address">*/
/*                                                 <th>Address</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_remarks">*/
/*                                                 <th>Admin Remarks</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_description">*/
/*                                                 <th>Description</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_width">*/
/*                                                 <th>Width</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_height">*/
/*                                                 <th>Height</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_length">*/
/*                                                 <th>Length</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_dimension_units">*/
/*                                                 <th>Dimension Units</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_weight">*/
/*                                                 <th>Weight</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             <tr id="tr_weight_units">*/
/*                                                 <th>Weight Units</th>*/
/*                                                 <td></td>*/
/*                                             </tr>*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Modal Video-->*/
/*     <div class="modal fade" id="modal_video" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog" role="document" style="width:60%;">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body" style="overflow-y: auto;" id="modal-body">*/
/*                     <div class="container-fluid">*/
/*                         <div class="row">*/
/*                             <div id="filter-product" class="col-sm-12 hidden-sm hidden-xs">*/
/*                                 <div class="panel panel-default">*/
/*                                     <div class="panel-heading">*/
/*                                         <h3 class="panel-title">Product Video</h3>*/
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/*                                         <video id="product_video" width="100%" controls="">*/
/*                                         </video>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Modal Images-->*/
/*     <div class="modal fade" id="modal_images" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body" style="overflow-y: auto;" id="modal-body">*/
/*                     <div class="container-fluid">*/
/*                         <div class="row">*/
/*                             <div id="filter-product" class="col-sm-12 hidden-sm hidden-xs">*/
/*                                 <div class="panel panel-default">*/
/*                                     <div class="panel-heading">*/
/*                                         <h3 class="panel-title">Product Images</h3>*/
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/*                                         <div class="flexslider">*/
/*                                             <ul class="slides" id="flexslider-slides">*/
/*                                                 <li>*/
/*                                                     <img src="/image/momday/1.jpeg" />*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <img src="/image/momday/2.jpeg" />*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <img src="/image/momday/3.jpeg" />*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <img src="/image/momday/4.jpeg" />*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Modal Remark -->*/
/*     <div class="modal fade" id="modal_remark" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body" style="overflow-y: auto;" id="modal-body">*/
/*                     <div class="container-fluid">*/
/*                         <div class="row">*/
/*                             <div id="filter-product" class="col-sm-12 hidden-sm hidden-xs">*/
/*                                 <div class="panel panel-default">*/
/*                                     <div class="panel-heading">*/
/*                                         <h3 class="panel-title">Leave Remark</h3>*/
/*                                     </div>*/
/*                                     <div class="panel-body">*/
/*                                         <form action="{{ remark }}" method="post" id="form_remark">*/
/*                                             <input type ="hidden" name="product_id" id="product_id_remark"/>*/
/*                                             <textarea maxlength="3000" rows="8" style="width:100%;" name="remark" id="remark_id"></textarea>*/
/*                                         </form>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" onclick="postRemark()" form="form_remark" formaction="{{ remark }}" class="btn btn-success" style="float:left;" data-dismiss="modal">Save</button>*/
/*                     <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {#<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>#}*/
/* */
/* */
/*     {#<script src="view/javascript/jquery/jquery-2.1.1.min.js" ></script>#}*/
/*     <link rel="stylesheet" href="view/javascript/flexslider/flexslider.css">*/
/*     <script src="view/javascript/flexslider/jquery.flexslider.js" ></script>*/
/* */
/*     <script>*/
/* */
/*         var products_images = {};*/
/*         {% if products %}*/
/*             {% for product in products %}*/
/*                     products_images['{{ product.product_id }}'] =['{{ product.image_large }}'];*/
/*                     {% for product_image in products_images %}*/
/*                         if('{{ product_image.product_id }}' === '{{ product.product_id }}') {*/
/*                             products_images['{{ product.product_id }}'].push('{{ product_image.image }}');*/
/*                         }*/
/*                     {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*         console.log(products_images);*/
/* */
/*         // $(window).load(function() {*/
/*         //     $('.flexslider').flexslider({*/
/*         //         animation: "slide"*/
/*         //     });*/
/*         // });*/
/* */
/*         // $(document).ready(function() {*/
/*         //     $('.flexslider').flexslider({*/
/*         //         animation: "slide"*/
/*         //     });*/
/*         // });*/
/* */
/*         var product_id_to_description = {};*/
/*         {% for product in products %}*/
/*         product_id_to_description["{{ product.product_id }}"] = "{{ product.description | replace({"\n":" ", "\r":' '}) }}";*/
/*         {% endfor %}*/
/* */
/*         function modalViewMore(product_id, date_added, date_modified, date_approved, date_expire, remarks, address, status,description,width,height,length,dimension_units,weight,weight_units){*/
/*             if(status !== 'active'){*/
/*                 document.getElementById("tr_date_approved").style.display = "none";*/
/*                 document.getElementById("tr_date_expires").style.display = "none";*/
/*             }else{*/
/*                 document.getElementById("tr_date_approved").style.display = "";*/
/*                 document.getElementById("tr_date_expires").style.display = "";*/
/*             }*/
/*             document.getElementById("tr_date_created").cells[1].innerHTML=date_added;*/
/*             document.getElementById("tr_date_updated").cells[1].innerHTML=date_modified;*/
/*             document.getElementById("tr_date_approved").cells[1].innerHTML=date_approved;*/
/*             document.getElementById("tr_date_expires").cells[1].innerHTML=date_expire;*/
/*             document.getElementById("tr_address").cells[1].innerHTML=address;*/
/*             document.getElementById("tr_remarks").cells[1].innerHTML=remarks;*/
/*             document.getElementById("tr_description").cells[1].innerHTML=product_id_to_description[product_id];*/
/*             document.getElementById("tr_width").cells[1].innerHTML=width;*/
/*             document.getElementById("tr_height").cells[1].innerHTML=height;*/
/*             document.getElementById("tr_length").cells[1].innerHTML=length;*/
/*             document.getElementById("tr_dimension_units").cells[1].innerHTML=dimension_units;*/
/*             document.getElementById("tr_weight").cells[1].innerHTML=weight;*/
/*             document.getElementById("tr_weight_units").cells[1].innerHTML=weight_units;*/
/*             $("#modal_view_more").modal();*/
/*         }*/
/* */
/*         function modalViewVideo(video){*/
/*             document.getElementById("product_video").src = video;*/
/*             $("#modal_video").modal();*/
/*         }*/
/* */
/*         function modalViewImages(product_id){*/
/*             $('.flexslider').removeData("flexslider");*/
/*             var slider_content = "";*/
/*             var product_image;*/
/*             for(product_image in products_images[product_id]){*/
/*                 slider_content +=*/
/*                     "                                                <li>\n" +*/
/*                     "                                                    <img src='"+ '{{ image_url }}' + products_images[product_id][product_image] + "' />" + "\n" +*/
/*                     "                                                </li>\n"*/
/*             }*/
/*             document.getElementById("flexslider-slides").innerHTML = slider_content;*/
/*             $("#modal_images").modal();*/
/*         }*/
/* */
/*         $('#modal_video').on('hidden.bs.modal', function (e) {*/
/*             var vid = document.getElementById("product_video");*/
/*             vid.pause();*/
/*         });*/
/* */
/*         $('#modal_images').on('shown.bs.modal', function (e) {*/
/*             // $(window).load(function() {*/
/*             $('.flex-control-nav').remove();*/
/*                 $('.flexslider').flexslider({*/
/*                     animation: "slide"*/
/*                 });*/
/*             // });*/
/*         });*/
/* */
/*         function modalRemark(product_id, remark){*/
/*             document.getElementById("product_id_remark").value = product_id;*/
/*             document.getElementById("remark_id").value = remark;*/
/*             $("#modal_remark").modal();*/
/*         }*/
/* */
/*         function activateProduct(product_id){*/
/*             document.getElementById('activate_product_id').value= product_id;*/
/*             document.getElementById('form_activate').submit();*/
/*         }*/
/* */
/*         function rejectProduct(product_id){*/
/*             document.getElementById('reject_product_id').value= product_id;*/
/*             document.getElementById('form_reject').submit();*/
/*         }*/
/* */
/*         function postRemark(){*/
/*             document.getElementById('form_remark').submit();*/
/*         }*/
/*     </script>*/
/* */
/*     <form action="{{ activate }}" method="post" id="form_activate">*/
/*         <input type="hidden" name="product_id" id="activate_product_id">*/
/*     </form>*/
/*     <form action="{{ reject }}" method="post" id="form_reject">*/
/*         <input type="hidden" name="product_id" id="reject_product_id">*/
/*     </form>*/
/* */
/*     <div class="container-fluid">{% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="row">*/
/*             <div id="filter-product" class="col-sm-12 hidden-sm hidden-xs">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="form-group col-sm-4">*/
/*                             <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                             <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                         </div>*/
/*                         <div class="form-group col-sm-4">*/
/*                             <label class="control-label" for="input-customer-name">{{ entry_customer_name }}</label>*/
/*                             <input type="text" name="filter_customer_name" value="{{ filter_customer_name }}" placeholder="{{ entry_name }}" id="input-customer-name" class="form-control" />*/
/*                         </div>*/
/*                         <div class="form-group col-sm-4">*/
/*                             <label class="control-label" for="input-date_modified">{{ entry_date_modified }}</label>*/
/*                             <input type="text" name="filter_date_modified" value="{{ filter_date_modified }}" placeholder="{{ entry_date_modified }}" id="input-date-modified" class="form-control" />*/
/*                         </div>*/
/*                         <div class="form-group col-sm-4">*/
/*                             <label class="control-label" for="input-price">{{ entry_price }}</label>*/
/*                             <input type="text" name="filter_price" value="{{ filter_price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />*/
/*                         </div>*/
/*                         <div class="form-group col-sm-4">*/
/*                             <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*                             <select name="filter_status" id="input-status" class="form-control">*/
/*                                 <option value=""></option>*/
/*                                 {% if filter_status == 'active' %}*/
/*                                     <option value="active" selected="selected">{{ text_active }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="active">{{ text_active }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if filter_status == 'pending' %}*/
/*                                     <option value="pending" selected="selected">{{ text_pending }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="pending">{{ text_pending }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if filter_status == 'rejected' %}*/
/*                                     <option value="rejected" selected="selected">{{ text_rejected }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="rejected">{{ text_rejected }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if filter_status == 'inactive' %}*/
/*                                     <option value="inactive" selected="selected">{{ text_inactive }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="inactive">{{ text_inactive }}</option>*/
/*                                 {% endif %}*/
/*                                 {% if filter_status == 'sold' %}*/
/*                                     <option value="sold" selected="selected">{{ text_sold }}</option>*/
/*                                 {% else %}*/
/*                                     <option value="sold">{{ text_sold }}</option>*/
/*                                 {% endif %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group text-right col-sm-4">*/
/*                             <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*                             <a href="{{ view_all }}" class="btn btn-default"> {{ text_view_all }}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">*/
/*                         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-product">*/
/*                             <div class="table-responsive">*/
/*                                 <table class="table table-bordered table-hover">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                                         <td class="text-center">{{ column_image }}</td>*/
/*                                         <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a> {% else %} <a href="{{ sort_name }}">{{ column_name }}</a> {% endif %}</td>*/
/*                                         <td class="text-left">{% if sort == 'c.customer_name' %} <a href="{{ sort_c_customer_name }}" class="{{ order|lower }}">{{ column_c_customer_name }}</a> {% else %} <a href="{{ sort_c_customer_name }}">{{ column_c_customer_name }}</a> {% endif %}</td>*/
/*                                         <td class="text-left">{% if sort == 'cs.date_modified' %} <a href="{{ sort_cs_date_modified }}" class="{{ order|lower }}">{{ column_cs_date_modified }}</a> {% else %} <a href="{{ sort_cs_date_modified }}">{{ column_cs_date_modified }}</a> {% endif %}</td>*/
/*                                         {#<td class="text-left">{% if sort == 'p.model' %} <a href="{{ sort_model }}" class="{{ order|lower }}">{{ column_model }}</a> {% else %} <a href="{{ sort_model }}">{{ column_model }}</a> {% endif %}</td>#}*/
/*                                         <td class="text-right">{% if sort == 'p.price' %} <a href="{{ sort_price }}" class="{{ order|lower }}">{{ column_price }}</a> {% else %} <a href="{{ sort_price }}">{{ column_price }}</a> {% endif %}</td>*/
/*                                         {#<td class="text-right">{% if sort == 'p.quantity' %} <a href="{{ sort_quantity }}" class="{{ order|lower }}">{{ column_quantity }}</a> {% else %} <a href="{{ sort_quantity }}">{{ column_quantity }}</a> {% endif %}</td>#}*/
/*                                         <td class="text-left">{% if sort == 'p.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                                         <td class="text-right">{{ column_action }}</td>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/* */
/*                                     {% if products %}*/
/*                                         {% for product in products %}*/
/*                                             <tr>*/
/*                                                 <td class="text-center">{% if product.product_id in selected %}*/
/*                                                         <input type="checkbox" name="selected[]" value="{{ product.product_id }}" checked="checked" />*/
/*                                                     {% else %}*/
/*                                                         <input type="checkbox" name="selected[]" value="{{ product.product_id }}" />*/
/*                                                     {% endif %}</td>*/
/*                                                 <td class="text-center">{% if product.image %} <img src="{{ product.image }}" alt="{{ product.name }}" class="img-thumbnail" /> {% else %} <span class="img-thumbnail list"><i class="fa fa-camera fa-2x"></i></span> {% endif %}</td>*/
/*                                                 <td class="text-left">{{ product.name }}</td>*/
/*                                                 <td class="text-left">{{ product.customer_name }}</td>*/
/*                                                 <td class="text-left">{{ product.date_modified }}</td>*/
/*                                                 {#<td class="text-left">{{ product.model }}</td>#}*/
/*                                                 <td class="text-right">{% if product.special %} <span style="text-decoration: line-through;">{{ product.price }}</span><br/>*/
/*                                                         <div class="text-danger">{{ product.special }}</div>*/
/*                                                     {% else %}*/
/*                                                         {{ product.price }}*/
/*                                                     {% endif %}</td>*/
/*                                                 {#<td class="text-right">{% if product.quantity <= 0 %} <span class="label label-warning">{{ product.quantity }}</span> {% elseif product.quantity <= 5 %} <span class="label label-danger">{{ product.quantity }}</span> {% else %} <span class="label label-success">{{ product.quantity }}</span> {% endif %}</td>#}*/
/*                                                 <td class="text-left">{{ product.status }}</td>*/
/* */
/* */
/* */
/* */
/*                                                 <td class="text-right">*/
/*                                                     {% if product.video %}*/
/*                                                         <a onclick="modalViewVideo('{{ image_url }}{{ product.video }}')" data-toggle="tooltip" title="{{ button_video }}" class="btn btn-primary"><i class="fa fa-play"></i></a>*/
/*                                                     {% endif %}*/
/*                                                     {#{% if products_images[product.product_id] %}#}*/
/*                                                         <a onclick="modalViewImages('{{ product.product_id }}')" data-toggle="tooltip" title="{{ button_images }}" class="btn btn-primary"><i class="fa fa-image"></i></a>*/
/*                                                     {#{% endif %}#}*/
/*                                                     <div style="min-width: 120px; display:inline;">*/
/*                                                         <div class="btn-group">*/
/*                                                             <a onclick="modalViewMore('{{ product.product_id }}', '{{ product.date_added }}', '{{ product.date_modified }}', '{{ product.date_approved }}', '{{ product.date_expire }}', '{{ product.remarks }}', '{{ product.address }}',*/
/*                                                                     '{{ product.status }}', '{{ product.status }}', '{{ product.width }}', '{{ product.height }}', '{{ product.length }}', '{{ product.dimension_units }}', '{{ product.weight }}', '{{ product.weight_units }}' )" data-toggle="tooltip" title="{{ button_view_more }}" class="btn btn-primary"><i class="fa fa-ellipsis-h"></i></a>*/
/*                                                             <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                                                             <ul class="dropdown-menu dropdown-menu-right">*/
/*                                                                 <li>*/
/*                                                                     {% if product.status=='pending' or product.status=='rejected' %}*/
/*                                                                         {#<button type="submit" form="form_activate" onclick="activateProduct('{{ product.product_id }}')"><i class="fa fa-power-off"></i> {{ button_activate }}</button>#}*/
/*                                                                         <a style="cursor: pointer;" onclick="activateProduct('{{ product.product_id }}')"><i class="fa fa-power-off"></i> {{ button_activate }}</a>*/
/*                                                                     {% endif %}*/
/*                                                                 </li>*/
/*                                                                 <li>*/
/*                                                                     {% if product.status=='pending' or product.status=='rejected' %}*/
/*                                                                         <a style="cursor: pointer;" onclick="modalRemark('{{ product.product_id }}', '{{ product.remarks }}')"><i class="fa fa-comment"></i> {{ text_add_remark }}</a>*/
/*                                                                     {% endif %}*/
/*                                                                 </li>*/
/*                                                                 <li>*/
/*                                                                     {% if product.status=='active' or product.status=='pending' %}*/
/*                                                                         <a style="cursor: pointer;" onclick="rejectProduct('{{ product.product_id }}')"><i class="fa fa-ban"></i> {{ button_reject }}</a>*/
/*                                                                     {% endif %}*/
/*                                                                 </li>*/
/*                                                                 <li>*/
/*                                                                     <a href="{{ product.edit }}"><i class="fa fa-pencil"></i> {{ button_edit }}</a>*/
/*                                                                 </li>*/
/*                                                             </ul>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </td>*/
/* */
/*                                                 {#<td class="text-right">#}*/
/*                                                     {#<a onclick="modalViewMore('{{ product.date_added }}', '{{ product.date_modified }}', '{{ product.date_approved }}', '{{ product.date_expire }}', '{{ product.remarks }}', '{{ product.address }}', '{{ product.status }}')" data-toggle="tooltip" title="{{ button_view_more }}" class="btn btn-primary"><i class="fa fa-ellipsis-h"></i></a>#}*/
/*                                                     {#{% if product.video %}#}*/
/*                                                     {#<a onclick="modalViewVideo('{{ image_url }}{{ product.video }}')" data-toggle="tooltip" title="{{ button_video }}" class="btn btn-primary"><i class="fa fa-play"></i></a>#}*/
/*                                                     {#{% endif %}#}*/
/*                                                     {#{% if product.status=='pending' %}#}*/
/*                                                     {#<a onclick="modalEnable ('{{ product.product_id }}')" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-primary"><i class="fa fa-power-off"></i></a>#}*/
/*                                                     {#{% endif %}#}*/
/*                                                     {#{% if product.status=='enabled' or product.status=='pending' %}#}*/
/*                                                     {#<a onclick="modalDisable ('{{ product.remark }}', '{{ product.product_id }}')" data-toggle="tooltip" title="{{ button_deactivate }}" class="btn btn-primary"><i class="fa fa-ban"></i></a>#}*/
/*                                                     {#{% endif %}#}*/
/*                                                     {#<a href="{{ product.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>#}*/
/*                                                 {#</td>#}*/
/* */
/* */
/* */
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% else %}*/
/*                                         <tr>*/
/*                                             <td class="text-center" colspan="8">{{ text_no_results }}</td>*/
/*                                         </tr>*/
/*                                     {% endif %}*/
/*                                     </tbody>*/
/* */
/*                                 </table>*/
/*                             </div>*/
/*                         </form>*/
/*                         <div class="row">*/
/*                             <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                             <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script type="text/javascript"><!--*/
/*         $('#button-filter').on('click', function() {*/
/*             var url = '';*/
/* */
/*             var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*             if (filter_name) {*/
/*                 url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*             }*/
/* */
/*             var filter_customer_name = $('input[name=\'filter_customer_name\']').val();*/
/* */
/*             if (filter_customer_name) {*/
/*                 url += '&filter_customer_name=' + encodeURIComponent(filter_customer_name);*/
/*             }*/
/* */
/*             var filter_date_modified = $('input[name=\'filter_date_modified\']').val();*/
/* */
/*             if (filter_date_modified) {*/
/*                 url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);*/
/*             }*/
/* */
/*             var filter_model = $('input[name=\'filter_model\']').val();*/
/* */
/*             if (filter_model) {*/
/*                 url += '&filter_model=' + encodeURIComponent(filter_model);*/
/*             }*/
/* */
/*             var filter_price = $('input[name=\'filter_price\']').val();*/
/* */
/*             if (filter_price) {*/
/*                 url += '&filter_price=' + encodeURIComponent(filter_price);*/
/*             }*/
/* */
/*             // var filter_quantity = $('input[name=\'filter_quantity\']').val();*/
/*             //*/
/*             // if (filter_quantity) {*/
/*             //     url += '&filter_quantity=' + encodeURIComponent(filter_quantity);*/
/*             // }*/
/* */
/*             var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/*             if (filter_status !== '') {*/
/*                 url += '&filter_status=' + encodeURIComponent(filter_status);*/
/*             }*/
/* */
/*             location = 'index.php?route=momday/preloved&user_token={{ user_token }}' + url;*/
/*         });*/
/*         //--></script>*/
/*     <script type="text/javascript"><!--*/
/*         // IE and Edge fix!*/
/*         $('button[form=\'form-product\']').on('click', function(e) {*/
/*             $('#form-product').attr('action', $(this).attr('formaction'));*/
/*         });*/
/* */
/*         $('input[name=\'filter_name\']').autocomplete({*/
/*             'source': function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=momday/preloved/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         response($.map(json, function(item) {*/
/*                             return {*/
/*                                 label: item['name'],*/
/*                                 value: item['product_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function(item) {*/
/*                 $('input[name=\'filter_name\']').val(item['label']);*/
/*             }*/
/*         });*/
/* */
/*         $('input[name=\'filter_model\']').autocomplete({*/
/*             'source': function(request, response) {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=momday/preloved/autocomplete&user_token={{ user_token }}&filter_model=' +  encodeURIComponent(request),*/
/*                     dataType: 'json',*/
/*                     success: function(json) {*/
/*                         response($.map(json, function(item) {*/
/*                             return {*/
/*                                 label: item['model'],*/
/*                                 value: item['product_id']*/
/*                             }*/
/*                         }));*/
/*                     }*/
/*                 });*/
/*             },*/
/*             'select': function(item) {*/
/*                 $('input[name=\'filter_model\']').val(item['label']);*/
/*             }*/
/*         });*/
/*         //--></script></div>*/
/* {{ footer }}*/
