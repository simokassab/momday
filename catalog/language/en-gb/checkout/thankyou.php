<?php
// Heading
$html ='Your order has been Placed';
$html .='<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700" rel="stylesheet" type="text/css">
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>';
$_['heading_title']        = $html;

// Text
$_['text_basket']          = 'Shopping Cart';
$_['text_checkout']        = 'Checkout';
$_['text_success']         = 'Success';
$_['text_customer']        = '<div class="main-content tkpage">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
		<span class="txnids cdetail">Payment Id:- '.$_GET['txnId'].'</span>
		<span class="mtxnids cdetail">merchantTxnId:- '.$_GET['merchantTxnId'].'</span>
		<span class="mtxnids cdetail">First Name:- '.$_GET['fname'].'</span>
		<span class="mtxnids cdetail">Last Name:- '.$_GET['lname'].'</span>
		<span class="mtxnids cdetail">Email:- '.$_GET['email'].'</span>
		<span class="mtxnids cdetail">Mobile:- '.$_GET['telephone'].'</span>
	</div>';
$_['text_guest']           = '<div class="main-content tkpage">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>

		<span class="txnids cdetail">Payment Id:- '.$_GET['txnId'].'</span>
		<span class="mtxnids cdetail">merchantTxnId:- '.$_GET['merchantTxnId'].'</span>
		<span class="mtxnids cdetail">First Name:- '.$_GET['fname'].'</span>
		<span class="mtxnids cdetail">Last Name:- '.$_GET['lname'].'</span>
		<span class="mtxnids cdetail">Email:- '.$_GET['email'].'</span>
		<span class="mtxnids cdetail">Mobile:- '.$_GET['telephone'].'</span>
	</div>';
?>
<style type="text/css">
	body{text-align: left !important;}
.site-header__title {text-align: center !important;}
.main-content.tkpage {text-align: center;}
#content {text-align: center;}
span.cdetail {float: left;width: 100%;}
span.cdetail {float: left;width: 100%;font-size: 17px;margin-top: 10px;}
.site-header {padding-top: 38px !important; }
#common-thankyou a:link, a:visited {color: #00c2a8;color: #000 !important;}
#common-thankyou .btn.btn-primary {color: #fff !important;}
</style>