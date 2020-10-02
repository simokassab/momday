<?php

/* common/filemanager.twig */
class __TwigTemplate_6d3278495d82c284c1aa418feb253ac725ee5765954ce378175b9bbb0179aad6 extends Twig_Template
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
        // line 2
        if ( !(isset($context["is_ajax"]) ? $context["is_ajax"] : null)) {
            // line 3
            echo "            <!DOCTYPE html>
            <html dir=\"ltr\" lang=\"en\">
            <head>
                <meta charset=\"UTF-8\" />
                <title>Image Manager</title>
                <base href=\"";
            // line 8
            echo (isset($context["base"]) ? $context["base"] : null);
            echo "\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
                <script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
                <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
                <link href=\"view/javascript/bootstrap/css/bootstrap.css\" rel=\"stylesheet\" />
                <link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
                <link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
                <script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>";
            // line 16
            if ((isset($context["ckeditor"]) ? $context["ckeditor"] : null)) {
                // line 17
                echo "                <script>
                var ckeditor =";
                // line 18
                echo (isset($context["ckeditor"]) ? $context["ckeditor"] : null);
                echo ";
                var imgpath = '";
                // line 19
                echo (isset($context["imgpath"]) ? $context["imgpath"] : null);
                echo "';
\t\t\t\tvar ckparams = '&";
                // line 20
                echo (isset($context["params"]) ? $context["params"] : null);
                echo "';
                </script>";
            }
            // line 23
            echo "                <style>
                #modal-image .modal-dialog{
                    width:100%;
                    margin: 0 auto;
                }
                .modal-header .close{
                display:none;
                }
                </style>
            </head>
            <body>
            <div id=\"modal-image\">";
        }
        // line 36
        echo "            
<div id=\"filemanager\" class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 41
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\"><a href=\"";
        // line 45
        echo (isset($context["parent"]) ? $context["parent"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_parent"]) ? $context["button_parent"] : null);
        echo "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a> <a href=\"";
        echo (isset($context["refresh"]) ? $context["refresh"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_refresh"]) ? $context["button_refresh"] : null);
        echo "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 46
        echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 47
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 48
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 52
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "\" class=\"form-control\">
            <span class=\"input-group-btn\">
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 54
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </span></div>
        </div>
      </div>
      <hr />";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["images"]) ? $context["images"] : null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 60
            echo "      <div class=\"row\">";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 62
                echo "        <div class=\"col-sm-3 col-xs-6 text-center\">";
                // line 63
                if (($this->getAttribute($context["image"], "type", array()) == "directory")) {
                    // line 64
                    echo "          <div class=\"text-center\"><a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a></div>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 66
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\" />";
                    // line 67
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "</label>";
                }
                // line 69
                if (($this->getAttribute($context["image"], "type", array()) == "image")) {
                    // line 70
                    echo "          <a href=\"";
                    echo $this->getAttribute($context["image"], "href", array());
                    echo "\" class=\"thumbnail\"><img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "\" /></a>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 72
                    echo $this->getAttribute($context["image"], "path", array());
                    echo "\" />";
                    // line 73
                    echo $this->getAttribute($context["image"], "name", array());
                    echo "</label>";
                }
                // line 75
                echo "        </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "      </div>
      <br />";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    </div>
    <div class=\"modal-footer\">";
        // line 81
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--";
        // line 85
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 86
            echo "\$('a.thumbnail').on('click', function(e) {
\te.preventDefault();";
            // line 89
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 90
                echo "\t\$('#";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "').find('img').attr('src', \$(this).find('img').attr('src'));";
            }
            // line 92
            echo "
\t\$('#";
            // line 93
            echo (isset($context["target"]) ? $context["target"] : null);
            echo "').val(\$(this).parent().find('input').val());

\t\$('#modal-image').modal('hide');
});";
        }
        // line 98
        echo "

            if (typeof (ckeditor) !== 'undefined') {
                \$('a.thumbnail').off('click').on('click', function(e) {
                    e.preventDefault();

                    window.opener.CKEDITOR.tools.callFunction(ckeditor, imgpath + \$(this).parent().find('input').attr('value'));

                    self.close();
                });
            }
            
\$('a.directory').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));
});

\$('.pagination a').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));
});

\$('#button-parent').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));
});

\$('#button-refresh').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));
});

\$('input[name=\\'search\\']').on('keydown', function(e) {
\tif (e.which == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('#button-search').on('click', function(e) {
\tvar url = 'index.php?route=common/filemanager&user_token=";
        // line 141
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'search\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}";
        // line 149
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 150
            echo "\turl += '&thumb=' + '";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "';";
        }
        // line 153
        if ((isset($context["target"]) ? $context["target"] : null)) {
            // line 154
            echo "\turl += '&target=' + '";
            echo (isset($context["target"]) ? $context["target"] : null);
            echo "';";
        }
        // line 156
        echo "
\t\$('#modal-image').load(url);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/filemanager/upload&user_token=";
        // line 177
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\talert(json['error']);
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#button-folder').popover({
\thtml: true,
\tplacement: 'bottom',
\ttrigger: 'click',
\ttitle: '";
        // line 215
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "',
\tcontent: function() {
\t\thtml  = '<div class=\"input-group\">';
\t\thtml += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 218
        echo (isset($context["entry_folder"]) ? $context["entry_folder"] : null);
        echo "\" class=\"form-control\">';
\t\thtml += '  <span class=\"input-group-btn\"><button type=\"button\" title=\"";
        // line 219
        echo (isset($context["button_folder"]) ? $context["button_folder"] : null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></span>';
\t\thtml += '</div>';

\t\treturn html;
\t}
});

\$('#button-folder').on('shown.bs.popover', function() {
\t\$('#button-create').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/folder&user_token=";
        // line 229
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&directory=";
        echo (isset($context["directory"]) ? $context["directory"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-create').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-create').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#modal-image #button-delete').on('click', function(e) {
\tif (confirm('";
        // line 258
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/delete&user_token=";
        // line 260
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>";
        // line 289
        if ( !(isset($context["is_ajax"]) ? $context["is_ajax"] : null)) {
            // line 290
            echo "                </div>
            </body>
            </html>";
        }
        // line 294
        echo "            
";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 294,  445 => 290,  443 => 289,  413 => 260,  408 => 258,  374 => 229,  361 => 219,  357 => 218,  351 => 215,  308 => 177,  285 => 156,  280 => 154,  278 => 153,  273 => 150,  271 => 149,  260 => 141,  215 => 98,  208 => 93,  205 => 92,  200 => 90,  198 => 89,  195 => 86,  193 => 85,  187 => 81,  184 => 80,  177 => 77,  171 => 75,  167 => 73,  164 => 72,  152 => 70,  150 => 69,  146 => 67,  143 => 66,  137 => 64,  135 => 63,  133 => 62,  129 => 61,  127 => 60,  123 => 59,  116 => 54,  109 => 52,  102 => 48,  98 => 47,  94 => 46,  84 => 45,  77 => 41,  70 => 36,  56 => 23,  51 => 20,  47 => 19,  43 => 18,  40 => 17,  38 => 16,  28 => 8,  21 => 3,  19 => 2,);
    }
}
/* */
/*             {% if not is_ajax %}*/
/*             <!DOCTYPE html>*/
/*             <html dir="ltr" lang="en">*/
/*             <head>*/
/*                 <meta charset="UTF-8" />*/
/*                 <title>Image Manager</title>*/
/*                 <base href="{{ base }}" />*/
/*                 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />*/
/*                 <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/*                 <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/*                 <link href="view/javascript/bootstrap/css/bootstrap.css" rel="stylesheet" />*/
/*                 <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/*                 <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />*/
/*                 <script src="view/javascript/common.js" type="text/javascript"></script>*/
/*                 {% if ckeditor %}*/
/*                 <script>*/
/*                 var ckeditor = {{ ckeditor }};*/
/*                 var imgpath = '{{ imgpath }}';*/
/* 				var ckparams = '&{{ params }}';*/
/*                 </script>*/
/*                 {% endif %}*/
/*                 <style>*/
/*                 #modal-image .modal-dialog{*/
/*                     width:100%;*/
/*                     margin: 0 auto;*/
/*                 }*/
/*                 .modal-header .close{*/
/*                 display:none;*/
/*                 }*/
/*                 </style>*/
/*             </head>*/
/*             <body>*/
/*             <div id="modal-image">*/
/*             {% endif %}*/
/*             */
/* <div id="filemanager" class="modal-dialog modal-lg">*/
/*   <div class="modal-content">*/
/*     <div class="modal-header">*/
/*       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/*       <h4 class="modal-title">{{ heading_title }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*       <div class="row">*/
/*         <div class="col-sm-5"><a href="{{ parent }}" data-toggle="tooltip" title="{{ button_parent }}" id="button-parent" class="btn btn-default"><i class="fa fa-level-up"></i></a> <a href="{{ refresh }}" data-toggle="tooltip" title="{{ button_refresh }}" id="button-refresh" class="btn btn-default"><i class="fa fa-refresh"></i></a>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_upload }}" id="button-upload" class="btn btn-primary"><i class="fa fa-upload"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_folder }}" id="button-folder" class="btn btn-default"><i class="fa fa-folder"></i></button>*/
/*           <button type="button" data-toggle="tooltip" title="{{ button_delete }}" id="button-delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>*/
/*         </div>*/
/*         <div class="col-sm-7">*/
/*           <div class="input-group">*/
/*             <input type="text" name="search" value="{{ filter_name }}" placeholder="{{ entry_search }}" class="form-control">*/
/*             <span class="input-group-btn">*/
/*             <button type="button" data-toggle="tooltip" title="{{ button_search }}" id="button-search" class="btn btn-primary"><i class="fa fa-search"></i></button>*/
/*             </span></div>*/
/*         </div>*/
/*       </div>*/
/*       <hr />*/
/*       {% for image in images|batch(4) %}*/
/*       <div class="row">*/
/*         {% for image in image %}*/
/*         <div class="col-sm-3 col-xs-6 text-center">*/
/*           {% if image.type == 'directory' %}*/
/*           <div class="text-center"><a href="{{ image.href }}" class="directory" style="vertical-align: middle;"><i class="fa fa-folder fa-5x"></i></a></div>*/
/*           <label>*/
/*             <input type="checkbox" name="path[]" value="{{ image.path }}" />*/
/*             {{ image.name }}</label>*/
/*           {% endif %}*/
/*           {% if image.type == 'image' %}*/
/*           <a href="{{ image.href }}" class="thumbnail"><img src="{{ image.thumb }}" alt="{{ image.name }}" title="{{ image.name }}" /></a>*/
/*           <label>*/
/*             <input type="checkbox" name="path[]" value="{{ image.path }}" />*/
/*             {{ image.name }}</label>*/
/*           {% endif %}*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <br />*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="modal-footer">{{ pagination }}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* {% if target %}*/
/* $('a.thumbnail').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	{% if thumb %}*/
/* 	$('#{{ thumb }}').find('img').attr('src', $(this).find('img').attr('src'));*/
/* 	{% endif %}*/
/* */
/* 	$('#{{ target }}').val($(this).parent().find('input').val());*/
/* */
/* 	$('#modal-image').modal('hide');*/
/* });*/
/* {% endif %}*/
/* */
/* */
/*             if (typeof (ckeditor) !== 'undefined') {*/
/*                 $('a.thumbnail').off('click').on('click', function(e) {*/
/*                     e.preventDefault();*/
/* */
/*                     window.opener.CKEDITOR.tools.callFunction(ckeditor, imgpath + $(this).parent().find('input').attr('value'));*/
/* */
/*                     self.close();*/
/*                 });*/
/*             }*/
/*             */
/* $('a.directory').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));*/
/* });*/
/* */
/* $('.pagination a').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));*/
/* });*/
/* */
/* $('#button-parent').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));*/
/* });*/
/* */
/* $('#button-refresh').on('click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#modal-image').load($(this).attr('href') + (typeof (ckeditor) !== 'undefined' ? ckparams : ''));*/
/* });*/
/* */
/* $('input[name=\'search\']').on('keydown', function(e) {*/
/* 	if (e.which == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('#button-search').on('click', function(e) {*/
/* 	var url = 'index.php?route=common/filemanager&user_token={{ user_token }}&directory={{ directory }}';*/
/* */
/* 	var filter_name = $('input[name=\'search\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	{% if thumb %}*/
/* 	url += '&thumb=' + '{{ thumb }}';*/
/* 	{% endif %}*/
/* */
/* 	{% if target %}*/
/* 	url += '&target=' + '{{ target }}';*/
/* 	{% endif %}*/
/* */
/* 	$('#modal-image').load(url);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-upload').on('click', function() {*/
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file[]" value="" multiple="multiple" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file[]\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file[]\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=common/filemanager/upload&user_token={{ user_token }}&directory={{ directory }}',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$('#button-upload i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 					$('#button-upload').prop('disabled', true);*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('#button-upload i').replaceWith('<i class="fa fa-upload"></i>');*/
/* 					$('#button-upload').prop('disabled', false);*/
/* 				},*/
/* 				success: function(json) {*/
/* 					if (json['error']) {*/
/* 						alert(json['error']);*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$('#button-refresh').trigger('click');*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* */
/* $('#button-folder').popover({*/
/* 	html: true,*/
/* 	placement: 'bottom',*/
/* 	trigger: 'click',*/
/* 	title: '{{ entry_folder }}',*/
/* 	content: function() {*/
/* 		html  = '<div class="input-group">';*/
/* 		html += '  <input type="text" name="folder" value="" placeholder="{{ entry_folder }}" class="form-control">';*/
/* 		html += '  <span class="input-group-btn"><button type="button" title="{{ button_folder }}" id="button-create" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></span>';*/
/* 		html += '</div>';*/
/* */
/* 		return html;*/
/* 	}*/
/* });*/
/* */
/* $('#button-folder').on('shown.bs.popover', function() {*/
/* 	$('#button-create').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=common/filemanager/folder&user_token={{ user_token }}&directory={{ directory }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: 'folder=' + encodeURIComponent($('input[name=\'folder\']').val()),*/
/* 			beforeSend: function() {*/
/* 				$('#button-create').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-create').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					alert(json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					alert(json['success']);*/
/* */
/* 					$('#button-refresh').trigger('click');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* });*/
/* */
/* $('#modal-image #button-delete').on('click', function(e) {*/
/* 	if (confirm('{{ text_confirm }}')) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=common/filemanager/delete&user_token={{ user_token }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $('input[name^=\'path\']:checked'),*/
/* 			beforeSend: function() {*/
/* 				$('#button-delete').prop('disabled', true);*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-delete').prop('disabled', false);*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					alert(json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					alert(json['success']);*/
/* */
/* 					$('#button-refresh').trigger('click');*/
/* 				}*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	}*/
/* });*/
/* //--></script>*/
/* */
/*             {% if not is_ajax %}*/
/*                 </div>*/
/*             </body>*/
/*             </html>*/
/*             {% endif %}*/
/*             */
/* */
