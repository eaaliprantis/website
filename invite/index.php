<html>
	<head>
		<meta charset="utf-8">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://typicalbot.ml">
		<meta property="og:title" content="TypicalBot => The Ultimate Discord Bot">
		<meta property="og:description" content="TypicalBot is an awesome bot with a ton of features that are super easy to use.">
		<meta property="og:site_name" content="TypicalBot">
		<meta property="og:image" content="/tbemblem.png">
		<link href="/tbemblem.png" rel="icon" type="image/x-icon"/>
		<title>Get TypicalBot</title>
	</head>
</html>

<?php
    $client = "166527505610702848";
    $perms = "8";
    $redirect = "http://typicalbot.ml/thanks/";
    $response = "code";
    Header("Location: https://discordapp.com/oauth2/authorize?client_id={$client}&permissions={$perms}&scope=bot&redirect_uri={$redirect}&response_type={$response}");
?>
