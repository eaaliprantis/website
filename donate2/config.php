<?php
	//start session in all pages
	if (session_status() == PHP_SESSION_NONE)
	{
		session_start();
	}
	//PHP >= 5.4.0
	//if(session_id() == '') { session_start(); } //uncomment this line if PHP < 5.4.0 and comment out line above

	// sandbox or live
	define('PPL_MODE', 'sandbox'); //change this to 'live' if you want this to work

	if(PPL_MODE=='sandbox')
	{
		define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');
	}
	else
	{
		define('PPL_API_USER', 'somepaypal_api.yahoo.co.uk');
		define('PPL_API_PASSWORD', '123456789');
		define('PPL_API_SIGNATURE', 'opupouopupo987kkkhkixlksjewNyJ2pEq.Gufar');
	}

	define('PPL_LANG', 'EN');

	define('PPL_LOGO_IMG', 'https://typicalbot.ml/emblem.png');

	define('PPL_RETURN_URL', 'https://typicalbot.ml/donate/');
	define('PPL_CANCEL_URL', 'https://typicalbot.ml/donate/');

	define('PPL_CURRENCY_CODE', 'EUR');
?>