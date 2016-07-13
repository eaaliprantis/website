<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://typicalbot.ml">
		<meta property="og:title" content="TypicalBot => The Ultimate Discord Bot">
		<meta property="og:description" content="TypicalBot is an awesome bot with a ton of features that are super easy to use.">
		<meta property="og:site_name" content="TypicalBot">
		<meta property="og:image" content="/tbemblem.png">
		<link href="https://fonts.googleapis.com/css?family=Fugaz+One" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://s.mlcdn.co/bootstrap.css">
		<link href="/style.css" rel="stylesheet" type="text/css">
		<link href="/tbemblem.png" rel="icon" type="image/x-icon"/>
		<title>Donate — TypicalBot</title>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-statis-top">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-head" href="/">TypicalBot</a></div>
                <ul class="nav navbar-nav navbar-right navbar-link-list">
                    <li><a href="https://discord.me/typicalbot" target="_blank" class="tab">Join our Server</a></li>
                    <li><a href="javascript:window.open('https://discordapp.com/oauth2/authorize?&client_id=166527505610702848&scope=bot&permissions=32014&redirect_uri=http://typicalbot.ml/thanks/&response_type=code', 'TBOAUTH', 'width=495,height=600')" class="tab">Invite TypicalBot</a></li>
					<li><a href="javascript:$('#myModal').modal({show: true})">Donate</a></li>
                </ul>
            </div>
        </nav>
		<!--			END NAVIGATION BAR				-->
		<!--			LEFT COLUMN						-->
		<div class="container col-md-2">
			<ul class="nav nav-pills nav-stacked">
                <li role="presentation" class=""><a href="/">Home</a></li>
                <li role="presentation" class=""><a href="/commands/">Documentation</a></li>
			</ul>
		</div>
		<!--			END LEFT COLUMN					-->
		<!--			RIGHT COLUMN					-->
		<div class="container col-md-10">
			<!-- SLIDER -->
			<form method='post' action='process.php?paypal=checkout'>
				<input type='range' name='donateAmount' min='1' max='200' value='5' step='0.1' oninput=sliderUpdate(this.value)>
				<input type="submit" id='donate-btn' name="submitName" value="Donate" />
			</form>
		</div>
        <hr class="hr-gray">
		<footer class="footer">
			<div class="container">
	    		<p>Copyright &copy; 2016 HyperCoder</p>
			</div>
		</footer>
	</body>
</html>

<script src="https://s.mlcdn.co/jquery.js"></script>
<script>
	var $donateButton = $('#donate-btn');
	var donateAmount = 5;
	var CURRENT_AMOUNT = 0;
	var currentAmount = CURRENT_AMOUNT;
	function sliderUpdate(value)
	{
	    $donateButton.text("Donate" + " $" + Math.round(value));
	    donateAmount = parseInt(value);
	    if (init)
	        currentAmount = CURRENT_AMOUNT + donateAmount;
	}
</script>
<script src="https://s.mlcdn.co/bootstrap.js"></script>
