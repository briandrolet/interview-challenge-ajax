<?php
require __DIR__ . "/App.php";
$app = new App();
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script
		src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
	<title>Ajax Call v<?=$app->getVersion();?></title>
	<style>
		.profile
		{
			width: 75px;
			height: 75px;
			border-radius: 50%;
			margin-top: 20px;
			text-align: center;
			padding: 20px;
		}
		.facebook
		{
			background: #3b5998;
			color: white;
			
		}
		.twitter
		{
			background: #2A8BC3;
			color: white;
		}
	</style>
</head>
<body>
<div class="content container">
	<h1>Social Profile List</h1>
	<hr/>
	<div class="list row">
		<div class="col-sm facebook_list">
			<h3>Facebook</h3>
			<strong class="loading">Loading...</strong>
		</div>
		<div class="col-sm twitter_list">
			<h3>Twitter</h3>
			<strong class="loading">Loading...</strong>
		</div>
	</div>
</div>
<script src="/index.js"></script>
</body>
</html>
