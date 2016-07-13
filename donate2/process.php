<?php
	include_once("config.php");
	include_once("functions.php");
	include_once("paypal.class.php");

	error_reporting(E_ALL | ~(E_STRICT ^ E_NOTICE));
    ini_set("display_errors","On");


	$paypal = new MyPayPal();

	if(isset($_POST['paypal'] && $_POST['paypal']=='checkout')
	{
		/*-------------------- prepare donation -------------------------*/

		$products = [];
		$donationAmount = preg_replace("/[^0-9]/", "", $_POST['donateAmount']);


		$products[0]['ItemName'] = 'TypicalBot';
		$products[0]['ItemPrice'] = $donationAmount;
		$products[0]['ItemNumber'] = '0001';
		$products[0]['ItemDesc'] = 'TypicalBot Contribution.';
		$products[0]['ItemQty'] = 1;

		$charges = [];
		
		//Other important variables like tax, shipping cost
		$charges['TotalTaxAmount'] = 0;  //Sum of tax for all items in this order. 
		$charges['HandalingCost'] = 0;  //Handling cost for this order.
		$charges['InsuranceCost'] = 0;  //shipping insurance cost for this order.
		$charges['ShippinDiscount'] = 0; //Shipping discount for this order. Specify this as negative number.
		$charges['ShippinCost'] = 0; //Although you may change the value later, try to pass in a shipping amount that is reasonably accurate.

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