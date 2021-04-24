<?php
include('config.php');
session_start();
//redirect the user in case it tries to skip registering or logging in
if (!isset($_SESSION['unique_id']) ||(trim ($_SESSION['unique_id']) == '')) {
header('location:login.php');
	exit();
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>iChat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
</head>

<body>

<div class="tab_two">
	<img src="img/icon.png" id="small_icon">
  	<header class="header">
		<strong> iChat </strong>
	</header>
</div>

<div class="row">
  <div class="column">
  	<img src="img/join_icon.png" id="choice_icon">
    <h2 id = "tab4">Join an existing chatroom</h2>
    	<input type = "button" value = "Join now" id = "join_now">
  </div>

  <div class="column">
  	<img src="img/new_icon.png" id="choice_icon">
    <h2 id = "tab3">Create a new chatroom</h2>
    	<input type = "submit" value = "Create now" id = "create_now">
  </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src = "js/Tab2.js"></script>
</body>
</html>
