<?php

/* momday/all_celebrities.twig */
class __TwigTemplate_934d3db40930a74cf845f8b6eb533e648d20e09ddc247b0191d239899b9643e9 extends Twig_Template
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
        echo "

<link rel=\"stylesheet\" href=\"view/javascript/DataTables/datatables.css\">
<script src=\"view/javascript/DataTables/datatables.js\" ></script>
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<style>
    .add-text{
        font-weight: bold;
    }
</style>";
        // line 13
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 18
        echo $this->getAttribute((isset($context["href"]) ? $context["href"] : null), "href_add", array(), "array");
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["text_button_add"]) ? $context["text_button_add"] : null);
        echo "\" class=\"btn btn-primary add-text\"><i class=\"fa fa-plus\"></i>";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "</a>
            </div>
            <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 23
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">";
        // line 29
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 30
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 34
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 35
            echo "            <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 39
        echo "
        <table id=\"example\" class=\"display\" style=\"width:100%\">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Bio</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
        </table>

    </div>
</div>";
        // line 54
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "



<script>

    function activate_deactivate_celebrity(celebrity_id){
        \$.ajax({
            url: \"";
        // line 62
        echo (isset($context["activate_deactivate_celebrity"]) ? $context["activate_deactivate_celebrity"] : null);
        echo "\",
            type: \"POST\",
            data: {
                celebrity_id: celebrity_id,
                celebrity_status: document.getElementById(\"activate_deactivate_celebrity_\" + celebrity_id).value
                // type: 'delete'
            },
            beforeSend: function() {
                \$(\"#activate_deactivate_celebrity_\" + celebrity_id).tooltip('hide');
                document.getElementById(\"activate_deactivate_icon_\" + celebrity_id).className = \"fa fa-circle-o-notch fa-spin\";
                document.getElementById(\"activate_deactivate_celebrity_\" + celebrity_id).disabled = true;
            },
            success: function(data) {
                var result = JSON.parse(data);
                if(result.new_status === 1){
                    document.getElementById(\"activate_deactivate_icon_\"+result.celebrity_id).className = \"fa fa-star-o\";
                    document.getElementById(\"activate_deactivate_celebrity_\"+result.celebrity_id).value = result.new_status;
                    \$(\"#activate_deactivate_celebrity_\" + celebrity_id).attr(\"data-original-title\", '";
        // line 79
        echo (isset($context["text_deactivate"]) ? $context["text_deactivate"] : null);
        echo "');//.tooltip('show');
                    document.getElementById(\"activate_deactivate_celebrity_\" + celebrity_id).disabled = false;
                    document.getElementById(\"status_id_\" + celebrity_id).innerHTML = '";
        // line 81
        echo (isset($context["text_celebrity"]) ? $context["text_celebrity"] : null);
        echo "';
                }else if(result.new_status === 0){
                    document.getElementById(\"activate_deactivate_icon_\"+result.celebrity_id).className = \"fa fa-star\";
                    document.getElementById(\"activate_deactivate_celebrity_\"+result.celebrity_id).value = result.new_status;
                    \$(\"#activate_deactivate_celebrity_\" + celebrity_id).attr(\"data-original-title\", '";
        // line 85
        echo (isset($context["text_activate"]) ? $context["text_activate"] : null);
        echo "');//.tooltip('show');
                    document.getElementById(\"activate_deactivate_celebrity_\" + celebrity_id).disabled = false;
                    document.getElementById(\"status_id_\" + celebrity_id).innerHTML = '";
        // line 87
        echo (isset($context["text_non_celebrity"]) ? $context["text_non_celebrity"] : null);
        echo "';
                }
            },
            error: function(xhr, status, error){
                if(document.getElementById(\"activate_deactivate_celebrity_\"+result.celebrity_id).value === 1){
                    document.getElementById(\"activate_deactivate_icon_\"+result.celebrity_id).className = \"fa fa-star-o\";
                    \$(\"#activate_deactivate_celebrity_\" + celebrity_id).attr(\"data-original-title\", '";
        // line 93
        echo (isset($context["text_deactivate"]) ? $context["text_deactivate"] : null);
        echo "');//.tooltip('show');
                    document.getElementById(\"activate_deactivate_celebrity_\" + celebrity_id).disabled = false;
                }else if(document.getElementById(\"activate_deactivate_celebrity_\"+result.celebrity_id).value === 0){
                    document.getElementById(\"activate_deactivate_icon_\"+result.celebrity_id).className = \"fa fa-star\";
                    \$(\"#activate_deactivate_celebrity_\" + celebrity_id).attr(\"data-original-title\", '";
        // line 97
        echo (isset($context["text_activate"]) ? $context["text_activate"] : null);
        echo "');//.tooltip('show');
                    document.getElementById(\"activate_deactivate_celebrity_\" + celebrity_id).disabled = false;
                }
            }
        });
    }";
        // line 105
        echo "        \$(document).ready(function() {
            var id_col_index = 4;
            var status_col_index = 3;
            var bio_col_index = 2;
            var table = \$('#example').DataTable( {";
        // line 111
        echo "                \"ajax\": {
                    \"url\": \"";
        // line 112
        echo (isset($context["return_all_url"]) ? $context["return_all_url"] : null);
        echo "\",
                    \"type\": 'POST',
                    \"data\": {
                        \"language_id\": 1
                    }
                },
                \"columns\": [
                    { \"data\": \"first_name\" },
                    { \"data\": \"last_name\" },
                    { \"data\": \"bio\" },
                    { \"data\": \"status\" },
                    { \"data\": \"celebrity_id\" }
                ],
                // \"order\": [[ 3, \"desc\" ]],

                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, \"All\"]],

                // select: 'multi',

                columnDefs: [
                    // { visible: false, targets: [   10, 11, 12, 13, 14, 15, 16] },
                    {
                        targets: bio_col_index,
                        render: function (data) {
                            var dots = '';
                            var length = data.length;
                            if (length > 50){
                                dots = '...'
                            }
                            return data.substring(0,50) + dots;

                        }
                    },
                    {
                        targets: status_col_index,
                        createdCell:  function (td, cellData, rowData, row, col) {
                            \$(td).attr('id', 'status_id_'+rowData.celebrity_id);
                        },
                        render: function (data, type, row) {
                            if(data === '1'){
                                return \"";
        // line 152
        echo (isset($context["text_celebrity"]) ? $context["text_celebrity"] : null);
        echo "\";
                            }else{
                                return \"";
        // line 154
        echo (isset($context["text_non_celebrity"]) ? $context["text_non_celebrity"] : null);
        echo "\"
                            }

                        }
                    },
                    {
                        targets: id_col_index,
                        render: function (data, type, row) {
                            // var response1 = JSON.parse(data);
                            // var post_id = response1.views;
                            var status = row.status;
                            var tooltip_title;
                            var font_class;
                            if (status === \"1\"){
                                tooltip_title = \"";
        // line 168
        echo (isset($context["text_deactivate"]) ? $context["text_deactivate"] : null);
        echo "\";
                                font_class = \"fa fa-star-o\";
                            }else{
                                tooltip_title = \"";
        // line 171
        echo (isset($context["text_activate"]) ? $context["text_activate"] : null);
        echo "\";
                                font_class = \"fa fa-star\";
                            }

                            var buttons =' <form action=\"";
        // line 175
        echo (isset($context["url_delete"]) ? $context["url_delete"] : null);
        echo "\" method=\"post\" id=\"form_delete_' + data + '\"><input type=\"hidden\" name=\"celebrity_id\" value=\"' + data + '\"></form>' +
                                ' <a href=\"";
        // line 176
        echo $this->getAttribute((isset($context["href"]) ? $context["href"] : null), "href_edit", array(), "array");
        echo "' + '&celebrity_id=' + data +  '\" class=\"btn btn-info button\" data-toggle=\"tooltip\"  title=\"";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "\"><i class=\"fa fa-pencil\"></i></a>' +
                                ' <button onclick=\"activate_deactivate_celebrity(' + data + ')\" id= activate_deactivate_celebrity_' + data + ' value=\"' + status + '\" class=\"btn btn-info button\" data-toggle=\"tooltip\"  title=\"' + tooltip_title + '\"><i id= activate_deactivate_icon_' + data + ' class=\"' + font_class + '\"></i></button>'+
                                ' <button onclick=\"return confirm(\\'Are you sure you want to permanently delete celebrity? User account will still be present but celebrity information will be deleted.\\');\" form=\"form_delete_' + data + '\" value=\"Submit\" class=\"btn btn-info button\" data-toggle=\"tooltip\"  title=\"";
        // line 178
        echo (isset($context["text_delete"]) ? $context["text_delete"] : null);
        echo "\"><i class=\"fa fa-trash-o\"></i></button>';

                            return buttons;

                        }
                    }
                ]
            } );


        } );


</script>";
    }

    public function getTemplateName()
    {
        return "momday/all_celebrities.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 178,  268 => 176,  264 => 175,  257 => 171,  251 => 168,  234 => 154,  229 => 152,  186 => 112,  183 => 111,  177 => 105,  169 => 97,  162 => 93,  153 => 87,  148 => 85,  141 => 81,  136 => 79,  116 => 62,  105 => 54,  89 => 39,  82 => 35,  80 => 34,  73 => 30,  71 => 29,  66 => 25,  56 => 23,  52 => 22,  48 => 20,  39 => 18,  31 => 13,  19 => 1,);
    }
}
/* {{ header }}*/
/* */
/* <link rel="stylesheet" href="view/javascript/DataTables/datatables.css">*/
/* <script src="view/javascript/DataTables/datatables.js" ></script>*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <style>*/
/*     .add-text{*/
/*         font-weight: bold;*/
/*     }*/
/* </style>*/
/* */
/* */
/* {{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ href['href_add'] }}" data-toggle="tooltip" title="{{ text_button_add }}" class="btn btn-primary add-text"><i class="fa fa-plus"></i> {{ button_add }}</a>*/
/*             </div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*             <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <table id="example" class="display" style="width:100%">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>First Name</th>*/
/*                 <th>Last Name</th>*/
/*                 <th>Bio</th>*/
/*                 <th>Status</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*             </thead>*/
/*         </table>*/
/* */
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
/* */
/* */
/* <script>*/
/* */
/*     function activate_deactivate_celebrity(celebrity_id){*/
/*         $.ajax({*/
/*             url: "{{ activate_deactivate_celebrity }}",*/
/*             type: "POST",*/
/*             data: {*/
/*                 celebrity_id: celebrity_id,*/
/*                 celebrity_status: document.getElementById("activate_deactivate_celebrity_" + celebrity_id).value*/
/*                 // type: 'delete'*/
/*             },*/
/*             beforeSend: function() {*/
/*                 $("#activate_deactivate_celebrity_" + celebrity_id).tooltip('hide');*/
/*                 document.getElementById("activate_deactivate_icon_" + celebrity_id).className = "fa fa-circle-o-notch fa-spin";*/
/*                 document.getElementById("activate_deactivate_celebrity_" + celebrity_id).disabled = true;*/
/*             },*/
/*             success: function(data) {*/
/*                 var result = JSON.parse(data);*/
/*                 if(result.new_status === 1){*/
/*                     document.getElementById("activate_deactivate_icon_"+result.celebrity_id).className = "fa fa-star-o";*/
/*                     document.getElementById("activate_deactivate_celebrity_"+result.celebrity_id).value = result.new_status;*/
/*                     $("#activate_deactivate_celebrity_" + celebrity_id).attr("data-original-title", '{{ text_deactivate }}');//.tooltip('show');*/
/*                     document.getElementById("activate_deactivate_celebrity_" + celebrity_id).disabled = false;*/
/*                     document.getElementById("status_id_" + celebrity_id).innerHTML = '{{ text_celebrity }}';*/
/*                 }else if(result.new_status === 0){*/
/*                     document.getElementById("activate_deactivate_icon_"+result.celebrity_id).className = "fa fa-star";*/
/*                     document.getElementById("activate_deactivate_celebrity_"+result.celebrity_id).value = result.new_status;*/
/*                     $("#activate_deactivate_celebrity_" + celebrity_id).attr("data-original-title", '{{ text_activate }}');//.tooltip('show');*/
/*                     document.getElementById("activate_deactivate_celebrity_" + celebrity_id).disabled = false;*/
/*                     document.getElementById("status_id_" + celebrity_id).innerHTML = '{{ text_non_celebrity }}';*/
/*                 }*/
/*             },*/
/*             error: function(xhr, status, error){*/
/*                 if(document.getElementById("activate_deactivate_celebrity_"+result.celebrity_id).value === 1){*/
/*                     document.getElementById("activate_deactivate_icon_"+result.celebrity_id).className = "fa fa-star-o";*/
/*                     $("#activate_deactivate_celebrity_" + celebrity_id).attr("data-original-title", '{{ text_deactivate }}');//.tooltip('show');*/
/*                     document.getElementById("activate_deactivate_celebrity_" + celebrity_id).disabled = false;*/
/*                 }else if(document.getElementById("activate_deactivate_celebrity_"+result.celebrity_id).value === 0){*/
/*                     document.getElementById("activate_deactivate_icon_"+result.celebrity_id).className = "fa fa-star";*/
/*                     $("#activate_deactivate_celebrity_" + celebrity_id).attr("data-original-title", '{{ text_activate }}');//.tooltip('show');*/
/*                     document.getElementById("activate_deactivate_celebrity_" + celebrity_id).disabled = false;*/
/*                 }*/
/*             }*/
/*         });*/
/*     }*/
/* */
/*     {#var post_id_to_status = {{ post_id_to_status }}#}*/
/*         $(document).ready(function() {*/
/*             var id_col_index = 4;*/
/*             var status_col_index = 3;*/
/*             var bio_col_index = 2;*/
/*             var table = $('#example').DataTable( {*/
/*                 {#"ajax": "{{ return_all_url }}",#}*/
/*                 "ajax": {*/
/*                     "url": "{{ return_all_url }}",*/
/*                     "type": 'POST',*/
/*                     "data": {*/
/*                         "language_id": 1*/
/*                     }*/
/*                 },*/
/*                 "columns": [*/
/*                     { "data": "first_name" },*/
/*                     { "data": "last_name" },*/
/*                     { "data": "bio" },*/
/*                     { "data": "status" },*/
/*                     { "data": "celebrity_id" }*/
/*                 ],*/
/*                 // "order": [[ 3, "desc" ]],*/
/* */
/*                 lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],*/
/* */
/*                 // select: 'multi',*/
/* */
/*                 columnDefs: [*/
/*                     // { visible: false, targets: [   10, 11, 12, 13, 14, 15, 16] },*/
/*                     {*/
/*                         targets: bio_col_index,*/
/*                         render: function (data) {*/
/*                             var dots = '';*/
/*                             var length = data.length;*/
/*                             if (length > 50){*/
/*                                 dots = '...'*/
/*                             }*/
/*                             return data.substring(0,50) + dots;*/
/* */
/*                         }*/
/*                     },*/
/*                     {*/
/*                         targets: status_col_index,*/
/*                         createdCell:  function (td, cellData, rowData, row, col) {*/
/*                             $(td).attr('id', 'status_id_'+rowData.celebrity_id);*/
/*                         },*/
/*                         render: function (data, type, row) {*/
/*                             if(data === '1'){*/
/*                                 return "{{ text_celebrity }}";*/
/*                             }else{*/
/*                                 return "{{ text_non_celebrity }}"*/
/*                             }*/
/* */
/*                         }*/
/*                     },*/
/*                     {*/
/*                         targets: id_col_index,*/
/*                         render: function (data, type, row) {*/
/*                             // var response1 = JSON.parse(data);*/
/*                             // var post_id = response1.views;*/
/*                             var status = row.status;*/
/*                             var tooltip_title;*/
/*                             var font_class;*/
/*                             if (status === "1"){*/
/*                                 tooltip_title = "{{ text_deactivate}}";*/
/*                                 font_class = "fa fa-star-o";*/
/*                             }else{*/
/*                                 tooltip_title = "{{ text_activate}}";*/
/*                                 font_class = "fa fa-star";*/
/*                             }*/
/* */
/*                             var buttons =' <form action="{{ url_delete }}" method="post" id="form_delete_' + data + '"><input type="hidden" name="celebrity_id" value="' + data + '"></form>' +*/
/*                                 ' <a href="{{ href['href_edit']}}' + '&celebrity_id=' + data +  '" class="btn btn-info button" data-toggle="tooltip"  title="{{ text_edit }}"><i class="fa fa-pencil"></i></a>' +*/
/*                                 ' <button onclick="activate_deactivate_celebrity(' + data + ')" id= activate_deactivate_celebrity_' + data + ' value="' + status + '" class="btn btn-info button" data-toggle="tooltip"  title="' + tooltip_title + '"><i id= activate_deactivate_icon_' + data + ' class="' + font_class + '"></i></button>'+*/
/*                                 ' <button onclick="return confirm(\'Are you sure you want to permanently delete celebrity? User account will still be present but celebrity information will be deleted.\');" form="form_delete_' + data + '" value="Submit" class="btn btn-info button" data-toggle="tooltip"  title="{{ text_delete}}"><i class="fa fa-trash-o"></i></button>';*/
/* */
/*                             return buttons;*/
/* */
/*                         }*/
/*                     }*/
/*                 ]*/
/*             } );*/
/* */
/* */
/*         } );*/
/* */
/* */
/* </script>*/
