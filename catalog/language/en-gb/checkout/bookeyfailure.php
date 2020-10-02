<?php
// Heading

$html ='<div class="text-center">Failed Payment!</div>';
$html .='<div class="errortext errortextc">'.$_GET["errorMessage"].'</div>';

$_['heading_title'] = $html;

// Text
$_['text_basket']   = 'Shopping Cart';
$_['text_checkout'] = 'Checkout';
$_['text_failure']  = 'Failed Payment';
$_['text_message']  = '<p>There was a problem processing your payment and the order did not complete.</p>

<p>Possible reasons are:</p>
<ul>
  <li>Insufficient funds</li>
  <li>Verification failed</li>
</ul>

<p>Please try to order again using a different payment method.</p>

<p>If the problem persists please <a href="%s">contact us</a> with the details of the order you are trying to place.</p>
';
?>
<style type="text/css">
	.errortextc {
	text-align: center;
	padding: 13px 10px;
	background: tomato;
	color: #fff;
	margin: 24px 0 39px 0;
}
</style>