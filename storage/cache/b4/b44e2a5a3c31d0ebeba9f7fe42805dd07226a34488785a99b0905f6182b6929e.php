<?php

/* journal2/template/checkout/checkout.twig */
class __TwigTemplate_0142bd2e67112bdd9e39d4bc6805a6debd4cbed17da81227adf802a9c68307f4 extends Twig_Template
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
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i>";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            $context["class"] = "col-sm-6";
        } elseif ((        // line 16
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            $context["class"] = "col-sm-9";
        } else {
            // line 19
            $context["class"] = "col-sm-12";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 26
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>";
        // line 32
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 33
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 35
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>";
        } else {
            // line 42
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 44
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>";
        }
        // line 51
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 52
            echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 54
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
            // line 62
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>";
        }
        // line 69
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 71
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 79
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>";
        // line 86
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    </div>
</div>
<script type=\"text/javascript\"><!--
\$(document).on('change', 'input[name=\\'account\\']', function() {
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 93
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 95
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 99
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 101
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t}
\t}
});";
        // line 106
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 107
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/login',
        dataType: 'html',
        success: function(html) {
           \$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 114
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});";
        } else {
            // line 124
            echo "\$(document).ready(function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address',
        dataType: 'html',
        success: function(html) {
            \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 131
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});";
        }
        // line 141
        echo "
// Checkout
\$(document).delegate('#button-account', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val(),
        dataType: 'html',
        beforeSend: function() {
        \t\$('#button-account').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-account').button('reset');
        },
        success: function(html) {
            \$('.alert-dismissible, .text-danger').remove();

            \$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 159
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 161
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Login
\$(document).delegate('#button-login', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/login/save',
        type: 'post',
        data: \$('#collapse-checkout-option :input'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-login').button('loading');
\t\t},
        complete: function() {
            \$('#button-login').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t   }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Register
\$(document).delegate('#button-register', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/register/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-register').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-register').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {";
        // line 241
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 242
            echo "                var shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/shipping_address',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 256
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 265
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

   \t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 269
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 270
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 271
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_address',
                        dataType: 'html',
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 284
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 288
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 289
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 290
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }";
        } else {
            // line 298
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 304
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 308
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });";
        }
        // line 315
        echo "
                \$.ajax({
                    url: 'index.php?route=checkout/payment_address',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-register').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 325
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Payment Address
\$(document).delegate('#button-payment-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_address/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-payment-address').button('loading');
\t\t},
        complete: function() {
\t\t\t\$('#button-payment-address').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {";
        // line 375
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 376
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/shipping_address',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 382
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 386
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 387
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 388
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});";
        } else {
            // line 406
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 412
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 416
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});\t\t\t\t
\t\t\t\t});";
        }
        // line 434
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Shipping Address
\$(document).delegate('#button-shipping-address', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-address').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-address').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 486
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 490
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 491
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t\t
                        \$.ajax({
                            url: 'index.php?route=checkout/shipping_address',
                            dataType: 'html',
                            success: function(html) {
                                \$('#collapse-shipping-address .panel-body').html(html);
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                        });
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                }).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest
\$(document).delegate('#button-guest', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest/save',
        type: 'post',
        data: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
        dataType: 'json',
        beforeSend: function() {
       \t\t\$('#button-guest').button('loading');
\t    },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {";
        // line 562
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 563
            echo "                var shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

                if (shipping_address) {
                    \$.ajax({
                        url: 'index.php?route=checkout/shipping_method',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
                            \$.ajax({
                                url: 'index.php?route=checkout/guest_shipping',
                                dataType: 'html',
                                success: function(html) {
                                    \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 580
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
                                },
                                error: function(xhr, ajaxOptions, thrownError) {
                                    alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                                }
                            });

\t\t\t\t\t\t    \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 589
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 593
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 594
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                } else {
                    \$.ajax({
                        url: 'index.php?route=checkout/guest_shipping',
                        dataType: 'html',
                        complete: function() {
                            \$('#button-guest').button('reset');
                        },
                        success: function(html) {
                            \$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 610
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 614
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 615
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 616
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                }";
        } else {
            // line 624
            echo "                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 633
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 637
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });";
        }
        // line 644
        echo "            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Guest Shipping
\$(document).delegate('#button-guest-shipping', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/guest_shipping/save',
        type: 'post',
        data: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-guest-shipping').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-guest-shipping').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible warning\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/shipping_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-guest-shipping').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 696
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 700
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 701
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-shipping-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
        dataType: 'json',
        beforeSend: function() {
        \t\$('#button-shipping-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-shipping-method').button('reset');

                if (json['error']['warning']) {
                    \$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible warning\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/payment_method',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-shipping-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 745
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 749
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).delegate('#button-payment-method', 'click', function() {
    \$.ajax({
        url: 'index.php?route=checkout/payment_method/save',
        type: 'post',
        data: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
        dataType: 'json',
        beforeSend: function() {
         \t\$('#button-payment-method').button('loading');
\t\t},
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();

            if (json['redirect']) {
                location = json['redirect'];
            } else if (json['error']) {
                \$('#button-payment-method').button('reset');
                
                if (json['error']['warning']) {
                    \$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible warning\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }
            } else {
                \$.ajax({
                    url: 'index.php?route=checkout/confirm',
                    dataType: 'html',
                    complete: function() {
                        \$('#button-payment-method').button('reset');
                    },
                    success: function(html) {
                        \$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 793
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>";
        // line 809
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1040 => 809,  1022 => 793,  975 => 749,  968 => 745,  921 => 701,  917 => 700,  910 => 696,  856 => 644,  847 => 637,  840 => 633,  829 => 624,  819 => 616,  815 => 615,  811 => 614,  804 => 610,  785 => 594,  781 => 593,  774 => 589,  762 => 580,  743 => 563,  741 => 562,  668 => 491,  664 => 490,  657 => 486,  603 => 434,  583 => 416,  576 => 412,  568 => 406,  548 => 388,  544 => 387,  540 => 386,  533 => 382,  525 => 376,  523 => 375,  471 => 325,  459 => 315,  450 => 308,  443 => 304,  435 => 298,  425 => 290,  421 => 289,  417 => 288,  410 => 284,  394 => 271,  390 => 270,  386 => 269,  379 => 265,  367 => 256,  351 => 242,  349 => 241,  267 => 161,  262 => 159,  242 => 141,  230 => 131,  221 => 124,  209 => 114,  200 => 107,  198 => 106,  192 => 101,  187 => 99,  180 => 95,  175 => 93,  165 => 86,  156 => 79,  145 => 71,  141 => 69,  132 => 62,  121 => 54,  117 => 52,  115 => 51,  106 => 44,  102 => 42,  93 => 35,  89 => 33,  87 => 32,  79 => 26,  72 => 22,  65 => 21,  62 => 19,  59 => 17,  57 => 16,  55 => 15,  53 => 14,  49 => 13,  42 => 9,  40 => 8,  38 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       <div class="panel-group" id="accordion">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_option }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-option">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% if not logged and account != 'guest' %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_account }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_payment_address }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if shipping_required %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_shipping_address }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_shipping_method }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_payment_method }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_confirm }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $(document).on('change', 'input[name=\'account\']', function() {*/
/* 	if ($('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {*/
/* 		if (this.value == 'register') {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/* 		} else {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 		}*/
/* 	} else {*/
/* 		if (this.value == 'register') {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_account }}');*/
/* 		} else {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_address }}');*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* {% if not logged %}*/
/* $(document).ready(function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/login',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*            $('#collapse-checkout-option .panel-body').html(html);*/
/* */
/* 			$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 			$('a[href=\'#collapse-checkout-option\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* {% else %}*/
/* $(document).ready(function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address',*/
/*         dataType: 'html',*/
/*         success: function(html) {*/
/*             $('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 			$('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* {% endif %}*/
/* */
/* // Checkout*/
/* $(document).delegate('#button-account', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val(),*/
/*         dataType: 'html',*/
/*         beforeSend: function() {*/
/*         	$('#button-account').button('loading');*/
/* 		},*/
/*         complete: function() {*/
/* 			$('#button-account').button('reset');*/
/*         },*/
/*         success: function(html) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             $('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 			if ($('input[name=\'account\']:checked').val() == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 			}*/
/* */
/* 			$('a[href=\'#collapse-payment-address\']').trigger('click');*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Login*/
/* $(document).delegate('#button-login', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/login/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-checkout-option :input'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-login').button('loading');*/
/* 		},*/
/*         complete: function() {*/
/*             $('#button-login').button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#collapse-checkout-option .panel-body').prepend('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'email\']').parent().addClass('has-error');*/
/* 				$('input[name=\'password\']').parent().addClass('has-error');*/
/* 		   }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Register*/
/* $(document).delegate('#button-register', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/register/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/* 			$('#button-register').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/*             $('.form-group').removeClass('has-error');*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-register').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/* 							// Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/shipping_address',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/* */
/* 							$('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/*    							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_address',*/
/*                         dataType: 'html',*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*                 {% endif %}*/
/* */
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_address',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-register').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Payment Address*/
/* $(document).delegate('#button-payment-address', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-payment-address').button('loading');*/
/* 		},*/
/*         complete: function() {*/
/* 			$('#button-payment-address').button('reset');*/
/*         },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_address',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});				*/
/* 				});*/
/*                 {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Shipping Address*/
/* $(document).delegate('#button-shipping-address', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_address/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/* 			$('#button-shipping-address').button('loading');*/
/* 	    },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-address').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-address').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 						*/
/*                         $.ajax({*/
/*                             url: 'index.php?route=checkout/shipping_address',*/
/*                             dataType: 'html',*/
/*                             success: function(html) {*/
/*                                 $('#collapse-shipping-address .panel-body').html(html);*/
/*                             },*/
/*                             error: function(xhr, ajaxOptions, thrownError) {*/
/*                                 alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                             }*/
/*                         });*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 }).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Guest*/
/* $(document).delegate('#button-guest', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*        		$('#button-guest').button('loading');*/
/* 	    },*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 {% if shipping_required %}*/
/*                 var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/*                 if (shipping_address) {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/shipping_method',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/* 							// Add the shipping address*/
/*                             $.ajax({*/
/*                                 url: 'index.php?route=checkout/guest_shipping',*/
/*                                 dataType: 'html',*/
/*                                 success: function(html) {*/
/*                                     $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/*                                 },*/
/*                                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                                     alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                                 }*/
/*                             });*/
/* */
/* 						    $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 } else {*/
/*                     $.ajax({*/
/*                         url: 'index.php?route=checkout/guest_shipping',*/
/*                         dataType: 'html',*/
/*                         complete: function() {*/
/*                             $('#button-guest').button('reset');*/
/*                         },*/
/*                         success: function(html) {*/
/*                             $('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                         },*/
/*                         error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                         }*/
/*                     });*/
/*                 }*/
/*                 {% else %}*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*                 {% endif %}*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* // Guest Shipping*/
/* $(document).delegate('#button-guest-shipping', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/guest_shipping/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-guest-shipping').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-guest-shipping').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/shipping_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-guest-shipping').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $(document).delegate('#button-shipping-method', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/shipping_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*         	$('#button-shipping-method').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-shipping-method').button('reset');*/
/* */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-shipping-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/payment_method',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-shipping-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $(document).delegate('#button-payment-method', 'click', function() {*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/payment_method/save',*/
/*         type: 'post',*/
/*         data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*          	$('#button-payment-method').button('loading');*/
/* 		},*/
/*         success: function(json) {*/
/*             $('.alert-dismissible, .text-danger').remove();*/
/* */
/*             if (json['redirect']) {*/
/*                 location = json['redirect'];*/
/*             } else if (json['error']) {*/
/*                 $('#button-payment-method').button('reset');*/
/*                 */
/*                 if (json['error']['warning']) {*/
/*                     $('#collapse-payment-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible warning">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                 }*/
/*             } else {*/
/*                 $.ajax({*/
/*                     url: 'index.php?route=checkout/confirm',*/
/*                     dataType: 'html',*/
/*                     complete: function() {*/
/*                         $('#button-payment-method').button('reset');*/
/*                     },*/
/*                     success: function(html) {*/
/*                         $('#collapse-checkout-confirm .panel-body').html(html);*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/* 					},*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*                 });*/
/*             }*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */
