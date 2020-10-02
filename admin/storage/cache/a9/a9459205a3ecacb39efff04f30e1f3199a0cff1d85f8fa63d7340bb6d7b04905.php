<?php

/* momday/celebrity.twig */
class __TwigTemplate_3a58de0d6347b4b5561c401a515ef992b7b4b98437e717e05c520b1a3bc671bc extends Twig_Template
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
                <button onclick=\"preFormSubmit()\" type=\"submit\" form=\"form-celebrity\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>

    <link rel=\"stylesheet\" href=\"view/javascript/cropper/cropper.css\">
    <script src=\"view/javascript/cropper/cropper.js\" ></script>";
        // line 21
        echo "
    <style>
        #dz-previews-container .dz-remove{
            color: red;
        }
        #dz-previews-container .dz-progress{
            display: block;
            height: 5px;
        }
        #dz-previews-container .dz-upload {
            display: block;
            height: 100%;
            background: #b7e2b7;
            width: 0;
        }

    </style>

    <script>
        var cropper_aspect_ratio = 1;
    </script>
    <!-- Modal -->
    <div class=\"modal fade\" id=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalLabel\" aria-hidden=\"true\" data-backdrop=\"static\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-body\">
                    <div class=\"img-container\" >
                        <img id=\"modal-celebrity-image\" style = \"max-width:100%;/*max-height:calc(100vh - 200px);*/align:center;\">
                    </div>
                </div>
                <div id=\"dz-previews-container\" style=\"padding:15px; padding-top:0;\"></div>
                <div class=\"modal-footer\">
                    <button id=\"dropzone-celebrity-image\" type=\"button\" class=\"btn btn-primary\" style= \"float: left;\" onclick=\"clearFeaturedPreviewsConatainer()\">Browse</button>
                    <button type=\"button\" class=\"btn btn-success\" style= \"float: left;\" data-dismiss=\"modal\" onclick=\"saveCroppedImage()\" data-toggle=\"tooltip\" title=\"";
        // line 54
        echo (isset($context["text_button_accept_crop"]) ? $context["text_button_accept_crop"] : null);
        echo "\">Accept</button>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                    <input type=\"hidden\" id=\"modal_request_source\">
                </div>
            </div>
        </div>
    </div>
    <script>
        \$('#modal').on('shown.bs.modal', function (e) {
            onModalOpen();
        })
    </script>

    <div class=\"container-fluid\">";
        // line 68
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 69
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>";
        }
        // line 73
        echo "        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>";
        // line 75
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 78
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-celebrity\" class=\"form-horizontal\">

                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-account-first-name\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo (isset($context["help_account_first_name"]) ? $context["help_account_first_name"] : null);
        echo "\">";
        echo (isset($context["entry_account_first_name"]) ? $context["entry_account_first_name"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"account_first_name\" value=\"";
        // line 83
        echo (isset($context["account_first_name"]) ? $context["account_first_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_account_first_name"]) ? $context["entry_account_first_name"] : null);
        echo "\" id=\"input-account-first-name\" class=\"form-control\" />";
        // line 84
        if ((isset($context["error_account_first_name"]) ? $context["error_account_first_name"] : null)) {
            // line 85
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_account_first_name"]) ? $context["error_account_first_name"] : null);
            echo "</div>";
        }
        // line 86
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-account-last-name\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo (isset($context["help_account_last_name"]) ? $context["help_account_last_name"] : null);
        echo "\">";
        echo (isset($context["entry_account_last_name"]) ? $context["entry_account_last_name"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"account_last_name\" value=\"";
        // line 91
        echo (isset($context["account_last_name"]) ? $context["account_last_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_account_last_name"]) ? $context["entry_account_last_name"] : null);
        echo "\" id=\"input-account-last-name\" class=\"form-control\" />";
        // line 92
        if ((isset($context["error_account_last_name"]) ? $context["error_account_last_name"] : null)) {
            // line 93
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_account_last_name"]) ? $context["error_account_last_name"] : null);
            echo "</div>";
        }
        // line 94
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 97
        echo (isset($context["help_email"]) ? $context["help_email"] : null);
        echo "\">";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                            <input";
        // line 99
        if ((isset($context["edit_mode"]) ? $context["edit_mode"] : null)) {
            echo "readonly";
        }
        echo " type=\"text\" name=\"email\" value=\"";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />";
        // line 100
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 101
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>";
        }
        // line 102
        echo "</div>
                    </div>
                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 105
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"telephone\" value=\"";
        // line 107
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />";
        // line 108
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 109
            echo "                                <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>";
        }
        // line 110
        echo "</div>
                    </div>







                    <div class=\"form-group required\">
                        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 120
        echo (isset($context["help_celebrity_first_name"]) ? $context["help_celebrity_first_name"] : null);
        echo "\">";
        echo (isset($context["entry_celebrity_first_name"]) ? $context["entry_celebrity_first_name"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 123
            echo "                                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                                    <input type=\"text\" name=\"celebrity_details[";
            // line 124
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][first_name]\" value=\"";
            echo (($this->getAttribute((isset($context["celebrity_details"]) ? $context["celebrity_details"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["celebrity_details"]) ? $context["celebrity_details"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "first_name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_celebrity_first_name"]) ? $context["entry_celebrity_first_name"] : null);
            echo "\" class=\"form-control\" />
                                </div>";
            // line 126
            if ($this->getAttribute((isset($context["error_celebrity_first_name"]) ? $context["error_celebrity_first_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 127
                echo "                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_celebrity_first_name"]) ? $context["error_celebrity_first_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        echo (isset($context["help_celebrity_last_name"]) ? $context["help_celebrity_last_name"] : null);
        echo "\">";
        echo (isset($context["entry_celebrity_last_name"]) ? $context["entry_celebrity_last_name"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 136
            echo "                                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                                    <input type=\"text\" name=\"celebrity_details[";
            // line 137
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][last_name]\" value=\"";
            echo (($this->getAttribute((isset($context["celebrity_details"]) ? $context["celebrity_details"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["celebrity_details"]) ? $context["celebrity_details"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "last_name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_celebrity_last_name"]) ? $context["entry_celebrity_last_name"] : null);
            echo "\" class=\"form-control\" />
                                </div>";
            // line 139
            if ($this->getAttribute((isset($context["error_celebrity_last_name"]) ? $context["error_celebrity_last_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 140
                echo "                                    <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_celebrity_last_name"]) ? $context["error_celebrity_last_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                        </div>
                    </div>";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 146
            echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-bio";
            // line 147
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_bio"]) ? $context["entry_bio"] : null);
            echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 149
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                                    <textarea name=\"celebrity_details[";
            // line 150
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][bio]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_bio"]) ? $context["entry_bio"] : null);
            echo "\" id=\"input-bio";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["celebrity_details"]) ? $context["celebrity_details"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["celebrity_details"]) ? $context["celebrity_details"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "bio", array())) : (""));
            echo "</textarea>
                                </div>
                            </div>
                        </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 156
        echo (isset($context["help_status"]) ? $context["help_status"] : null);
        echo "\">";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">";
        // line 160
        echo "                            <label class=\"radio-inline\">";
        // line 161
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 162
            echo "                                    <input type=\"radio\" name=\"status\" value=\"1\" checked=\"checked\" />";
            // line 163
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        } else {
            // line 165
            echo "                                    <input type=\"radio\" name=\"status\" value=\"1\" />";
            // line 166
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        }
        // line 168
        echo "                            </label>
                            <label class=\"radio-inline\">";
        // line 170
        if ( !(isset($context["status"]) ? $context["status"] : null)) {
            // line 171
            echo "                                    <input type=\"radio\" name=\"status\" value=\"0\" checked=\"checked\" />";
            // line 172
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        } else {
            // line 174
            echo "                                    <input type=\"radio\" name=\"status\" value=\"0\" />";
            // line 175
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
        }
        // line 177
        echo "                            </label>


                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 185
        echo (isset($context["entry_square_image"]) ? $context["entry_square_image"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                            <img alt=\"blank\" style=\"border:1px solid lightgrey;  width:300px;\" id=\"square_image\" src=\"";
        // line 187
        echo (isset($context["square_image"]) ? $context["square_image"] : null);
        echo "\">
                            <input type=\"hidden\" name=\"square_image\" id=\"square_image_src\">
                            <div class=\"row\" style=\"margin-top:10px;\">
                                <div class=\"col-sm-12\">
                                    <button onclick=\"changeSquare()\" form=\"form1\" class=\"btn btn-primary\" style=\"font-weight: bold;margin-right: 10px;\" id=\"changeSquare\" data-target=\"#modal\" data-toggle=\"modal\">Change</button>
                                    <button onclick=\"removeSquare()\" form=\"form1\" class=\"btn btn-danger\" style=\"font-weight: bold;margin-right: 10px;\" id=\"removeSquare\" >Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\">";
        // line 199
        echo (isset($context["entry_portrait_image"]) ? $context["entry_portrait_image"] : null);
        echo "</span></label>
                        <div class=\"col-sm-10\">
                            <img alt=\"blank\" style=\"border:1px solid lightgrey;  width:300px;height:450px;\" id=\"portrait_image\" src=\"";
        // line 201
        echo (isset($context["portrait_image"]) ? $context["portrait_image"] : null);
        echo "\">
                            <input type=\"hidden\" name=\"portrait_image\" id=\"portrait_image_src\">
                            <div class=\"row\" style=\"margin-top:10px;\">
                                <div class=\"col-sm-12\">
                                    <button onclick=\"changePortrait()\" form=\"form1\" class=\"btn btn-primary\" style=\"font-weight: bold;margin-right: 10px;\" id=\"changePortrait\" data-target=\"#modal\" data-toggle=\"modal\">Change</button>
                                    <button onclick=\"removePortrait()\" form=\"form1\" class=\"btn btn-danger\" style=\"font-weight: bold;margin-right: 10px;\" id=\"removePortrait\" >Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
</div>";
        // line 220
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "


<style>
    .dropzone .dz-preview .dz-details .dz-filename, .dropzone-previews .dz-preview .dz-details .dz-filename {
        overflow: hidden;
        height: 100%;
        text-align: center;
        margin-top: 20px;
    }

    .dropzone .dz-preview .dz-details img, .dropzone-previews .dz-preview .dz-details img {
        cursor: pointer;
    }
</style>

<link rel=\"stylesheet\" href=\"view/css/momday/dropzone.css\">
<script src=\"view/javascript/momday/dropzone.js\" ></script>

<style>
    #square_image{
        max-width: 100%; /* This rule is very important, please do not ignore this! */
    }
    #portrait_image{
        max-width: 100%; /* This rule is very important, please do not ignore this! */
    }
</style>

<script>
    function initializeCropper() {
        // var cropperimage = document.getElementById(cropper);
        // var cropperimage = \$('#cropper');
        var cropperimage = \$('#modal-celebrity-image');

        var cropper = cropperimage.cropper('destroy').cropper({
            // var cropper = new Cropper(cropperimage, {

            // options here


            // Define the view mode of the cropper
            viewMode: 2, // 0, 1, 2, 3

            // Define the dragging mode of the cropper
//                 dragMode: DRAG_MODE_CROP, // 'crop', 'move' or 'none'

            // Define the aspect ratio of the crop box
            // aspectRatio: 1,
            aspectRatio: cropper_aspect_ratio,

            // An object with the previous cropping result data
            data: null,

            // A selector for adding extra containers to preview
            preview: '',

            // Re-render the cropper when resize the window
            responsive: true,

            // Restore the cropped area after resize the window
            restore: true,

            // Check if the current image is a cross-origin image
            checkCrossOrigin: true,

            // Check the current image's Exif Orientation information
            checkOrientation: true,

            // Show the black modal
            modal: true,

            // Show the dashed lines for guiding
            guides: true,

            // Show the center indicator for guiding
            center: true,

            // Show the white modal to highlight the crop box
            highlight: true,

            // Show the grid background
            background: true,

            // Enable to crop the image automatically when initialize
            autoCrop: true,

            // Define the percentage of automatic cropping area when initializes
            autoCropArea: 0.8,

            // Enable to move the image
            movable: true,

            // Enable to rotate the image
            rotatable: true,

            // Enable to scale the image
            scalable: true,

            // Enable to zoom the image
            zoomable: true,

            // Enable to zoom the image by dragging touch
            zoomOnTouch: true,

            // Enable to zoom the image by wheeling mouse
            zoomOnWheel: true,

            // Define zoom ratio when zoom the image by wheeling mouse
//                 wheel<a href=\"https://www.jqueryscript.net/zoom/\">Zoom</a>Ratio: 0.1,

            // Enable to move the crop box
            cropBoxMovable: true,

            // Enable to resize the crop box
            cropBoxResizable: true,

            // Toggle drag mode between \"crop\" and \"move\" when click twice on the cropper
            toggleDragModeOnDblclick: true,

            // Size limitation
            minCanvasWidth: 0,
            minCanvasHeight: 0,
            minCropBoxWidth: 0,
            minCropBoxHeight: 0,
            minContainerWidth: 200,
            minContainerHeight: 100,

            // Shortcuts of events
            ready: null,
            cropstart: null,
            cropmove: null,
            cropend: null,
            crop: null,
            zoom: null


        });

    }

    function onModalOpen(){
        initializeCropper();
    }


    function b64toBlob(b64Data, contentType, sliceSize) {
        contentType = contentType || '';
        sliceSize = sliceSize || 512;

        var byteCharacters = atob(b64Data);
        var byteArrays = [];

        for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
            var slice = byteCharacters.slice(offset, offset + sliceSize);

            var byteNumbers = new Array(slice.length);
            for (var i = 0; i < slice.length; i++) {
                byteNumbers[i] = slice.charCodeAt(i);
            }

            var byteArray = new Uint8Array(byteNumbers);

            byteArrays.push(byteArray);
        }

        var blob = new Blob(byteArrays, {type: contentType});
        return blob;
    }

    function saveCroppedImage(){
        var request_source = document.getElementById(\"modal_request_source\").value;
        var destination_image_id;
        if(request_source === \"square\"){
            destination_image_id = \"square_image\";
        }else if(request_source === \"portrait\"){
            destination_image_id = \"portrait_image\";
        }

        var cropperimage = \$('#modal-celebrity-image');
        var ImageURL = cropperimage.cropper('getCroppedCanvas').toDataURL('image/jpeg',0.9);
        // Split the base64 string in data and contentType
        var block = ImageURL.split(\";\");
        // Get the content type
        var contentType = block[0].split(\":\")[1];// In this case \"image/gif\"
        // get the real base64 content of the file
        var realData = block[1].split(\",\")[1];// In this case \"iVBORw0KGg....\"

        // Convert to blob
        var blob = b64toBlob(realData, contentType);

        // Create a FormData and append the file
        var fd = new FormData();
        fd.append(\"file\", blob,\"blob.jpeg\");

        // Submit Form and upload file
            \$.ajax({
            url:\"";
        // line 416
        echo (isset($context["upload_file_url"]) ? $context["upload_file_url"] : null);
        echo "\",
            data: fd,// the formData function is available in almost all new browsers.
            type:\"POST\",
            contentType:false,
            processData:false,
            cache:false,
            dataType:\"json\", // Change this according to your response from the server.
            beforeSend: function() {
                disable_square_buttons();
                removeTempImage(request_source);
                document.getElementById(destination_image_id).src = '";
        // line 426
        echo (isset($context["loading_image"]) ? $context["loading_image"] : null);
        echo "';
            },
            error:function(err){
                // console.error(err);
            },
            success:function(data){
                // console.log(data);
                document.getElementById(destination_image_id).src = data.image_url + data.filepath + data.filename;
            },
            complete:function(){
                enable_square_buttons();
                // console.log(\"Request finished.\");
            }
        });

    }

    function removeTempImage(image_type){
        var cropped_image_id;
        if(image_type === 'square'){
            cropped_image_id = 'square_image'
        }else if(image_type === 'portrait'){
            cropped_image_id = 'portrait_image';
        }else if(image_type === 'modal'){
            cropped_image_id = 'modal-celebrity-image';
        }else{
            return;
        }
        var cropped_image_source = document.getElementById(cropped_image_id).src;
        var name_to_array = cropped_image_source.split(\"/\");
        var name_array_length = name_to_array.length;
        var filenameToRemove = name_to_array[name_array_length-1];
        var parentFolderName = name_to_array[name_array_length-2];

        // Create a FormData and append the file details
        var fd = new FormData();
        fd.append(\"filenameToRemove\", filenameToRemove);

        // if image path is not temp, image removal will be handled on update
        if(parentFolderName === \"temp\") {
            \$.ajax({
                url: \"";
        // line 467
        echo (isset($context["remove_temp_image_url"]) ? $context["remove_temp_image_url"] : null);
        echo "\",
                data: fd,
                type: \"POST\",
                contentType: false,
                processData: false,
                cache: false,
                dataType: \"json\", // Change this according to your response from the server.
            });
        }
    }


    function clearFeaturedPreviewsConatainer(){
        document.getElementById('dz-previews-container').innerHTML=\"\";
    }

    \$(\"#dropzone-celebrity-image\").dropzone({
        addRemoveLinks: false,
        uploadMultiple: false,
        createImageThumbnails: false,
        previewsContainer : '#dz-previews-container',
        previewTemplate: '<div class=\"uploaded-image\"><span data-dz-name></span> <strong class=\"dz-size\" data-dz-size></strong><div class=\"dz-error-message\" data-dz-errormessage></div><div class=\"dz-progress\"><span class=\"dz-upload\" data-dz-uploadprogress></span></div></div>',
        acceptedFiles: '.jpeg,.jpg,.png,.gif',
        dictMaxFilesExceeded: \"Maximum upload limit reached\",
        url: \"";
        // line 491
        echo (isset($context["upload_file_url"]) ? $context["upload_file_url"] : null);
        echo "\",";
        // line 495
        echo "        dictInvalidFileType: \"upload only JPG/PNG/GIF\",

        init: function() {
            this.on(\"success\", function (file,serverFileName) {
                removeTempImage('modal');
                document.getElementById('modal-celebrity-image').src=serverFileName.image_url + serverFileName.filepath + serverFileName.filename;
                initializeCropper();
            });
            this.on(\"error\", function(file, message) {
                this.removeFile(file);
                alert(message);
            });
        }
    });

    function preFormSubmit(){
        document.getElementById(\"square_image_src\").value = document.getElementById(\"square_image\").src;
        document.getElementById(\"portrait_image_src\").value = document.getElementById(\"portrait_image\").src;
        removeTempImage('modal');
    }

    function changeSquare(){
        cropper_aspect_ratio = 1;
        document.getElementById(\"modal_request_source\").value = \"square\";
    }
    function removeSquare(){
        removeTempImage('square');
        document.getElementById(\"square_image\").src = \"";
        // line 522
        echo (isset($context["blank_image"]) ? $context["blank_image"] : null);
        echo "\";
    }
    function changePortrait(){
        cropper_aspect_ratio = 0.667;
        document.getElementById(\"modal_request_source\").value = \"portrait\";
    }
    function removePortrait(){
        removeTempImage('portrait');
        document.getElementById(\"portrait_image\").src = \"";
        // line 530
        echo (isset($context["blank_image"]) ? $context["blank_image"] : null);
        echo "\";
    }

    function disable_square_buttons(){
        document.getElementById(\"changeSquare\").disabled = true;
        document.getElementById(\"removeSquare\").disabled = true;
    }

    function enable_square_buttons(){
        document.getElementById(\"changeSquare\").disabled = false;
        document.getElementById(\"removeSquare\").disabled = false;
    }

    function disable_portrait_buttons(){
        document.getElementById(\"changePortrait\").disabled = true;
        document.getElementById(\"removePortrait\").disabled = true;
    }

    function enable_portrait_buttons(){
        document.getElementById(\"changePortrait\").disabled = false;
        document.getElementById(\"removePortrait\").disabled = false;
    }
</script>";
    }

    public function getTemplateName()
    {
        return "momday/celebrity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 530,  775 => 522,  746 => 495,  743 => 491,  716 => 467,  672 => 426,  659 => 416,  460 => 220,  439 => 201,  434 => 199,  419 => 187,  414 => 185,  404 => 177,  401 => 175,  399 => 174,  396 => 172,  394 => 171,  392 => 170,  389 => 168,  386 => 166,  384 => 165,  381 => 163,  379 => 162,  377 => 161,  375 => 160,  369 => 156,  366 => 155,  350 => 150,  342 => 149,  335 => 147,  332 => 146,  328 => 145,  325 => 143,  316 => 140,  314 => 139,  306 => 137,  297 => 136,  293 => 135,  287 => 133,  282 => 130,  273 => 127,  271 => 126,  263 => 124,  254 => 123,  250 => 122,  244 => 120,  232 => 110,  227 => 109,  225 => 108,  220 => 107,  215 => 105,  210 => 102,  205 => 101,  203 => 100,  194 => 99,  187 => 97,  182 => 94,  177 => 93,  175 => 92,  170 => 91,  163 => 89,  158 => 86,  153 => 85,  151 => 84,  146 => 83,  139 => 81,  133 => 78,  127 => 75,  123 => 73,  116 => 69,  114 => 68,  98 => 54,  63 => 21,  56 => 13,  46 => 11,  42 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button onclick="preFormSubmit()" type="submit" form="form-celebrity" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <link rel="stylesheet" href="view/javascript/cropper/cropper.css">*/
/*     <script src="view/javascript/cropper/cropper.js" ></script>*/
/* */
/*     {#<script src="view/javascript/cropper/jquery-cropper.js" ></script>#}*/
/* */
/*     <style>*/
/*         #dz-previews-container .dz-remove{*/
/*             color: red;*/
/*         }*/
/*         #dz-previews-container .dz-progress{*/
/*             display: block;*/
/*             height: 5px;*/
/*         }*/
/*         #dz-previews-container .dz-upload {*/
/*             display: block;*/
/*             height: 100%;*/
/*             background: #b7e2b7;*/
/*             width: 0;*/
/*         }*/
/* */
/*     </style>*/
/* */
/*     <script>*/
/*         var cropper_aspect_ratio = 1;*/
/*     </script>*/
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" data-backdrop="static">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-body">*/
/*                     <div class="img-container" >*/
/*                         <img id="modal-celebrity-image" style = "max-width:100%;/*max-height:calc(100vh - 200px);*//* align:center;">*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="dz-previews-container" style="padding:15px; padding-top:0;"></div>*/
/*                 <div class="modal-footer">*/
/*                     <button id="dropzone-celebrity-image" type="button" class="btn btn-primary" style= "float: left;" onclick="clearFeaturedPreviewsConatainer()">Browse</button>*/
/*                     <button type="button" class="btn btn-success" style= "float: left;" data-dismiss="modal" onclick="saveCroppedImage()" data-toggle="tooltip" title="{{ text_button_accept_crop }}">Accept</button>*/
/*                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>*/
/*                     <input type="hidden" id="modal_request_source">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         $('#modal').on('shown.bs.modal', function (e) {*/
/*             onModalOpen();*/
/*         })*/
/*     </script>*/
/* */
/*     <div class="container-fluid">*/
/*         {% if error_warning %}*/
/*             <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-celebrity" class="form-horizontal">*/
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-account-first-name"><span data-toggle="tooltip" title="{{ help_account_first_name }}">{{ entry_account_first_name }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="account_first_name" value="{{ account_first_name }}" placeholder="{{ entry_account_first_name }}" id="input-account-first-name" class="form-control" />*/
/*                             {% if error_account_first_name %}*/
/*                                 <div class="text-danger">{{ error_account_first_name }}</div>*/
/*                             {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-account-last-name"><span data-toggle="tooltip" title="{{ help_account_last_name }}">{{ entry_account_last_name }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="account_last_name" value="{{ account_last_name }}" placeholder="{{ entry_account_last_name }}" id="input-account-last-name" class="form-control" />*/
/*                             {% if error_account_last_name %}*/
/*                                 <div class="text-danger">{{ error_account_last_name }}</div>*/
/*                             {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-email"><span data-toggle="tooltip" title="{{ help_email }}">{{ entry_email }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             <input {% if edit_mode %}readonly{% endif %} type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*                             {% if error_email %}*/
/*                                 <div class="text-danger">{{ error_email }}</div>*/
/*                             {% endif %}</div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*                         <div class="col-sm-10">*/
/*                             <input type="text" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*                             {% if error_telephone %}*/
/*                                 <div class="text-danger">{{ error_telephone }}</div>*/
/*                             {% endif %}</div>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                     <div class="form-group required">*/
/*                         <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_celebrity_first_name }}">{{ entry_celebrity_first_name }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             {% for language in languages %}*/
/*                                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                                     <input type="text" name="celebrity_details[{{ language.language_id }}][first_name]" value="{{ celebrity_details[language.language_id] ? celebrity_details[language.language_id].first_name }}" placeholder="{{ entry_celebrity_first_name }}" class="form-control" />*/
/*                                 </div>*/
/*                                 {% if error_celebrity_first_name[language.language_id] %}*/
/*                                     <div class="text-danger">{{ error_celebrity_first_name[language.language_id] }}</div>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_celebrity_last_name }}">{{ entry_celebrity_last_name }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             {% for language in languages %}*/
/*                                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                                     <input type="text" name="celebrity_details[{{ language.language_id }}][last_name]" value="{{ celebrity_details[language.language_id] ? celebrity_details[language.language_id].last_name }}" placeholder="{{ entry_celebrity_last_name }}" class="form-control" />*/
/*                                 </div>*/
/*                                 {% if error_celebrity_last_name[language.language_id] %}*/
/*                                     <div class="text-danger">{{ error_celebrity_last_name[language.language_id] }}</div>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     {% for language in languages %}*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-bio{{ language.language_id }}">{{ entry_bio }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                                     <textarea name="celebrity_details[{{ language.language_id }}][bio]" rows="5" placeholder="{{ entry_bio }}" id="input-bio{{ language.language_id }}" class="form-control">{{ celebrity_details[language.language_id] ? celebrity_details[language.language_id].bio }}</textarea>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_status }}">{{ entry_status }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             {#<label class="radio-inline"><input type="radio" name="status" value="1" checked="checked" />{{ text_yes }}</label>#}*/
/*                             {#<label class="radio-inline"><input type="radio" name="status" value="0" />{{ text_no }}</label>#}*/
/*                             <label class="radio-inline">*/
/*                                 {% if status %}*/
/*                                     <input type="radio" name="status" value="1" checked="checked" />*/
/*                                     {{ text_yes }}*/
/*                                 {% else %}*/
/*                                     <input type="radio" name="status" value="1" />*/
/*                                     {{ text_yes }}*/
/*                                 {% endif %}*/
/*                             </label>*/
/*                             <label class="radio-inline">*/
/*                                 {% if not status %}*/
/*                                     <input type="radio" name="status" value="0" checked="checked" />*/
/*                                     {{ text_no }}*/
/*                                 {% else %}*/
/*                                     <input type="radio" name="status" value="0" />*/
/*                                     {{ text_no }}*/
/*                                 {% endif %}*/
/*                             </label>*/
/* */
/* */
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_square_image}}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             <img alt="blank" style="border:1px solid lightgrey;  width:300px;" id="square_image" src="{{ square_image }}">*/
/*                             <input type="hidden" name="square_image" id="square_image_src">*/
/*                             <div class="row" style="margin-top:10px;">*/
/*                                 <div class="col-sm-12">*/
/*                                     <button onclick="changeSquare()" form="form1" class="btn btn-primary" style="font-weight: bold;margin-right: 10px;" id="changeSquare" data-target="#modal" data-toggle="modal">Change</button>*/
/*                                     <button onclick="removeSquare()" form="form1" class="btn btn-danger" style="font-weight: bold;margin-right: 10px;" id="removeSquare" >Remove</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-2 control-label">{{ entry_portrait_image }}</span></label>*/
/*                         <div class="col-sm-10">*/
/*                             <img alt="blank" style="border:1px solid lightgrey;  width:300px;height:450px;" id="portrait_image" src="{{ portrait_image }}">*/
/*                             <input type="hidden" name="portrait_image" id="portrait_image_src">*/
/*                             <div class="row" style="margin-top:10px;">*/
/*                                 <div class="col-sm-12">*/
/*                                     <button onclick="changePortrait()" form="form1" class="btn btn-primary" style="font-weight: bold;margin-right: 10px;" id="changePortrait" data-target="#modal" data-toggle="modal">Change</button>*/
/*                                     <button onclick="removePortrait()" form="form1" class="btn btn-danger" style="font-weight: bold;margin-right: 10px;" id="removePortrait" >Remove</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/* */
/* */
/* */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
/* */
/* <style>*/
/*     .dropzone .dz-preview .dz-details .dz-filename, .dropzone-previews .dz-preview .dz-details .dz-filename {*/
/*         overflow: hidden;*/
/*         height: 100%;*/
/*         text-align: center;*/
/*         margin-top: 20px;*/
/*     }*/
/* */
/*     .dropzone .dz-preview .dz-details img, .dropzone-previews .dz-preview .dz-details img {*/
/*         cursor: pointer;*/
/*     }*/
/* </style>*/
/* */
/* <link rel="stylesheet" href="view/css/momday/dropzone.css">*/
/* <script src="view/javascript/momday/dropzone.js" ></script>*/
/* */
/* <style>*/
/*     #square_image{*/
/*         max-width: 100%; /* This rule is very important, please do not ignore this! *//* */
/*     }*/
/*     #portrait_image{*/
/*         max-width: 100%; /* This rule is very important, please do not ignore this! *//* */
/*     }*/
/* </style>*/
/* */
/* <script>*/
/*     function initializeCropper() {*/
/*         // var cropperimage = document.getElementById(cropper);*/
/*         // var cropperimage = $('#cropper');*/
/*         var cropperimage = $('#modal-celebrity-image');*/
/* */
/*         var cropper = cropperimage.cropper('destroy').cropper({*/
/*             // var cropper = new Cropper(cropperimage, {*/
/* */
/*             // options here*/
/* */
/* */
/*             // Define the view mode of the cropper*/
/*             viewMode: 2, // 0, 1, 2, 3*/
/* */
/*             // Define the dragging mode of the cropper*/
/* //                 dragMode: DRAG_MODE_CROP, // 'crop', 'move' or 'none'*/
/* */
/*             // Define the aspect ratio of the crop box*/
/*             // aspectRatio: 1,*/
/*             aspectRatio: cropper_aspect_ratio,*/
/* */
/*             // An object with the previous cropping result data*/
/*             data: null,*/
/* */
/*             // A selector for adding extra containers to preview*/
/*             preview: '',*/
/* */
/*             // Re-render the cropper when resize the window*/
/*             responsive: true,*/
/* */
/*             // Restore the cropped area after resize the window*/
/*             restore: true,*/
/* */
/*             // Check if the current image is a cross-origin image*/
/*             checkCrossOrigin: true,*/
/* */
/*             // Check the current image's Exif Orientation information*/
/*             checkOrientation: true,*/
/* */
/*             // Show the black modal*/
/*             modal: true,*/
/* */
/*             // Show the dashed lines for guiding*/
/*             guides: true,*/
/* */
/*             // Show the center indicator for guiding*/
/*             center: true,*/
/* */
/*             // Show the white modal to highlight the crop box*/
/*             highlight: true,*/
/* */
/*             // Show the grid background*/
/*             background: true,*/
/* */
/*             // Enable to crop the image automatically when initialize*/
/*             autoCrop: true,*/
/* */
/*             // Define the percentage of automatic cropping area when initializes*/
/*             autoCropArea: 0.8,*/
/* */
/*             // Enable to move the image*/
/*             movable: true,*/
/* */
/*             // Enable to rotate the image*/
/*             rotatable: true,*/
/* */
/*             // Enable to scale the image*/
/*             scalable: true,*/
/* */
/*             // Enable to zoom the image*/
/*             zoomable: true,*/
/* */
/*             // Enable to zoom the image by dragging touch*/
/*             zoomOnTouch: true,*/
/* */
/*             // Enable to zoom the image by wheeling mouse*/
/*             zoomOnWheel: true,*/
/* */
/*             // Define zoom ratio when zoom the image by wheeling mouse*/
/* //                 wheel<a href="https://www.jqueryscript.net/zoom/">Zoom</a>Ratio: 0.1,*/
/* */
/*             // Enable to move the crop box*/
/*             cropBoxMovable: true,*/
/* */
/*             // Enable to resize the crop box*/
/*             cropBoxResizable: true,*/
/* */
/*             // Toggle drag mode between "crop" and "move" when click twice on the cropper*/
/*             toggleDragModeOnDblclick: true,*/
/* */
/*             // Size limitation*/
/*             minCanvasWidth: 0,*/
/*             minCanvasHeight: 0,*/
/*             minCropBoxWidth: 0,*/
/*             minCropBoxHeight: 0,*/
/*             minContainerWidth: 200,*/
/*             minContainerHeight: 100,*/
/* */
/*             // Shortcuts of events*/
/*             ready: null,*/
/*             cropstart: null,*/
/*             cropmove: null,*/
/*             cropend: null,*/
/*             crop: null,*/
/*             zoom: null*/
/* */
/* */
/*         });*/
/* */
/*     }*/
/* */
/*     function onModalOpen(){*/
/*         initializeCropper();*/
/*     }*/
/* */
/* */
/*     function b64toBlob(b64Data, contentType, sliceSize) {*/
/*         contentType = contentType || '';*/
/*         sliceSize = sliceSize || 512;*/
/* */
/*         var byteCharacters = atob(b64Data);*/
/*         var byteArrays = [];*/
/* */
/*         for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {*/
/*             var slice = byteCharacters.slice(offset, offset + sliceSize);*/
/* */
/*             var byteNumbers = new Array(slice.length);*/
/*             for (var i = 0; i < slice.length; i++) {*/
/*                 byteNumbers[i] = slice.charCodeAt(i);*/
/*             }*/
/* */
/*             var byteArray = new Uint8Array(byteNumbers);*/
/* */
/*             byteArrays.push(byteArray);*/
/*         }*/
/* */
/*         var blob = new Blob(byteArrays, {type: contentType});*/
/*         return blob;*/
/*     }*/
/* */
/*     function saveCroppedImage(){*/
/*         var request_source = document.getElementById("modal_request_source").value;*/
/*         var destination_image_id;*/
/*         if(request_source === "square"){*/
/*             destination_image_id = "square_image";*/
/*         }else if(request_source === "portrait"){*/
/*             destination_image_id = "portrait_image";*/
/*         }*/
/* */
/*         var cropperimage = $('#modal-celebrity-image');*/
/*         var ImageURL = cropperimage.cropper('getCroppedCanvas').toDataURL('image/jpeg',0.9);*/
/*         // Split the base64 string in data and contentType*/
/*         var block = ImageURL.split(";");*/
/*         // Get the content type*/
/*         var contentType = block[0].split(":")[1];// In this case "image/gif"*/
/*         // get the real base64 content of the file*/
/*         var realData = block[1].split(",")[1];// In this case "iVBORw0KGg...."*/
/* */
/*         // Convert to blob*/
/*         var blob = b64toBlob(realData, contentType);*/
/* */
/*         // Create a FormData and append the file*/
/*         var fd = new FormData();*/
/*         fd.append("file", blob,"blob.jpeg");*/
/* */
/*         // Submit Form and upload file*/
/*             $.ajax({*/
/*             url:"{{ upload_file_url }}",*/
/*             data: fd,// the formData function is available in almost all new browsers.*/
/*             type:"POST",*/
/*             contentType:false,*/
/*             processData:false,*/
/*             cache:false,*/
/*             dataType:"json", // Change this according to your response from the server.*/
/*             beforeSend: function() {*/
/*                 disable_square_buttons();*/
/*                 removeTempImage(request_source);*/
/*                 document.getElementById(destination_image_id).src = '{{ loading_image }}';*/
/*             },*/
/*             error:function(err){*/
/*                 // console.error(err);*/
/*             },*/
/*             success:function(data){*/
/*                 // console.log(data);*/
/*                 document.getElementById(destination_image_id).src = data.image_url + data.filepath + data.filename;*/
/*             },*/
/*             complete:function(){*/
/*                 enable_square_buttons();*/
/*                 // console.log("Request finished.");*/
/*             }*/
/*         });*/
/* */
/*     }*/
/* */
/*     function removeTempImage(image_type){*/
/*         var cropped_image_id;*/
/*         if(image_type === 'square'){*/
/*             cropped_image_id = 'square_image'*/
/*         }else if(image_type === 'portrait'){*/
/*             cropped_image_id = 'portrait_image';*/
/*         }else if(image_type === 'modal'){*/
/*             cropped_image_id = 'modal-celebrity-image';*/
/*         }else{*/
/*             return;*/
/*         }*/
/*         var cropped_image_source = document.getElementById(cropped_image_id).src;*/
/*         var name_to_array = cropped_image_source.split("/");*/
/*         var name_array_length = name_to_array.length;*/
/*         var filenameToRemove = name_to_array[name_array_length-1];*/
/*         var parentFolderName = name_to_array[name_array_length-2];*/
/* */
/*         // Create a FormData and append the file details*/
/*         var fd = new FormData();*/
/*         fd.append("filenameToRemove", filenameToRemove);*/
/* */
/*         // if image path is not temp, image removal will be handled on update*/
/*         if(parentFolderName === "temp") {*/
/*             $.ajax({*/
/*                 url: "{{ remove_temp_image_url }}",*/
/*                 data: fd,*/
/*                 type: "POST",*/
/*                 contentType: false,*/
/*                 processData: false,*/
/*                 cache: false,*/
/*                 dataType: "json", // Change this according to your response from the server.*/
/*             });*/
/*         }*/
/*     }*/
/* */
/* */
/*     function clearFeaturedPreviewsConatainer(){*/
/*         document.getElementById('dz-previews-container').innerHTML="";*/
/*     }*/
/* */
/*     $("#dropzone-celebrity-image").dropzone({*/
/*         addRemoveLinks: false,*/
/*         uploadMultiple: false,*/
/*         createImageThumbnails: false,*/
/*         previewsContainer : '#dz-previews-container',*/
/*         previewTemplate: '<div class="uploaded-image"><span data-dz-name></span> <strong class="dz-size" data-dz-size></strong><div class="dz-error-message" data-dz-errormessage></div><div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div></div>',*/
/*         acceptedFiles: '.jpeg,.jpg,.png,.gif',*/
/*         dictMaxFilesExceeded: "Maximum upload limit reached",*/
/*         url: "{{ upload_file_url }}",*/
/*         {#params: {#}*/
/*         {#post_id: "{{ post_id }}"#}*/
/*         {#},#}*/
/*         dictInvalidFileType: "upload only JPG/PNG/GIF",*/
/* */
/*         init: function() {*/
/*             this.on("success", function (file,serverFileName) {*/
/*                 removeTempImage('modal');*/
/*                 document.getElementById('modal-celebrity-image').src=serverFileName.image_url + serverFileName.filepath + serverFileName.filename;*/
/*                 initializeCropper();*/
/*             });*/
/*             this.on("error", function(file, message) {*/
/*                 this.removeFile(file);*/
/*                 alert(message);*/
/*             });*/
/*         }*/
/*     });*/
/* */
/*     function preFormSubmit(){*/
/*         document.getElementById("square_image_src").value = document.getElementById("square_image").src;*/
/*         document.getElementById("portrait_image_src").value = document.getElementById("portrait_image").src;*/
/*         removeTempImage('modal');*/
/*     }*/
/* */
/*     function changeSquare(){*/
/*         cropper_aspect_ratio = 1;*/
/*         document.getElementById("modal_request_source").value = "square";*/
/*     }*/
/*     function removeSquare(){*/
/*         removeTempImage('square');*/
/*         document.getElementById("square_image").src = "{{ blank_image }}";*/
/*     }*/
/*     function changePortrait(){*/
/*         cropper_aspect_ratio = 0.667;*/
/*         document.getElementById("modal_request_source").value = "portrait";*/
/*     }*/
/*     function removePortrait(){*/
/*         removeTempImage('portrait');*/
/*         document.getElementById("portrait_image").src = "{{ blank_image }}";*/
/*     }*/
/* */
/*     function disable_square_buttons(){*/
/*         document.getElementById("changeSquare").disabled = true;*/
/*         document.getElementById("removeSquare").disabled = true;*/
/*     }*/
/* */
/*     function enable_square_buttons(){*/
/*         document.getElementById("changeSquare").disabled = false;*/
/*         document.getElementById("removeSquare").disabled = false;*/
/*     }*/
/* */
/*     function disable_portrait_buttons(){*/
/*         document.getElementById("changePortrait").disabled = true;*/
/*         document.getElementById("removePortrait").disabled = true;*/
/*     }*/
/* */
/*     function enable_portrait_buttons(){*/
/*         document.getElementById("changePortrait").disabled = false;*/
/*         document.getElementById("removePortrait").disabled = false;*/
/*     }*/
/* </script>*/
