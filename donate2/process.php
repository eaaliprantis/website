<?php
	include_once("config.php");
	include_once("functions.php");
	include_once("paypal.class.php");

	$paypal = new MyPayPal();

	if(isset($_POST['checkout'] && $_POST['paypal']=='checkout')
	{
		/*-------------------- prepare donation -------------------------*/

		$products = [];
		$charges = [];
		$donationAmount = preg_replace("/[^0-9]/", "", $_POST['donateAmount']);


		$products[0]['ItemName'] = 'TypicalBot';
		$products[0]['ItemPrice'] = $donationAmount;
		$products[0]['ItemNumber'] = '0001';
		$products[0]['ItemDesc'] = 'TypicalBot Contribution.';
		$products[0]['ItemQty'] = 1;

		$paypal->SetExpressCheckout($products, $charges);
	}
	elseif((isset($_GET['token']) && $_GET['token'] != '') && (isset($_GET['PayerID']) && $_GET['PayerID'] != ''))
	{
		$paypal->DoExpressCheckoutPayment();
	}
	else
	{
		//order form
	}
?>