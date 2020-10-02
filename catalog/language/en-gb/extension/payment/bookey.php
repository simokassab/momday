<?php

$_['heading_title'] = 'Bookey';
$_['text_title'] = 'Pay with Bookey <div class="mainpay" style="display:none"><div class="paym"><input type="radio" class="spay" name="bookeypaymethod" id="knet" checked value="knet"/>Knet</div><div class="paym"><input type="radio" name="bookeypaymethod" class="spay" id="credit" value="credit"/>Credit</div><div class="paym"><input type="radio" name="bookeypaymethod" class="spay" id="bookey" value="Bookeey"/>Bookey</div><div class="paym"><input type="radio" class="spay" name="bookeypaymethod" id="amex" value="amex"/>Amex</div></div>';
$_['button_confirm'] = 'Confirm';

?>



   <script>
	$(document).ready(function(){
    	$("input[name='payment_method']").click(function(){
			if($(this).val()=='bookey'){
				$('.mainpay').show();
		}else{
			$('.mainpay').hide();
		}
		});
	});
</script>

<script>
    jQuery(document).ready(function($) {
    $(".spay").click(function(){
        var bpayval = $(this).val();
        // localStorage.setItem('adpay', bpayval);

         $.ajax({
        url: "index.php?route=extension/payment/bookey/paymthod",
        type: "post",
        data: {bpayval:bpayval} ,
        success: function (response) {
        	console.log(response);
           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
        
    });
});
</script>

<style type="text/css">
	.paym {
	float: left;
	margin-right: 30px;
	margin-top: 4px;
}
</style>