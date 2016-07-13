<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}

	define('PPL_MODE', 'live');

	define('PPL_API_USER', '');
	define('PPL_API_PASSWORD', '');
	define('PPL_API_SIGNATURE', '');

	define('PPL_LANG', 'EN');

	define('PPL_LOGO_IMG', 'https://typicalbot.ml/emblem.png');

	define('PPL_RETURN_URL', 'https://typicalbot.ml/donate/');
	define('PPL_CANCEL_URL', 'https://typicalbot.ml/donate/');

	define('PPL_CURRENCY_CODE', 'USD');
?>
