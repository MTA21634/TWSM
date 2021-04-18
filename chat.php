<?php
	include('config.php');
	session_start();
  //redirect the user in case it tries to skip registering or logging in
	if (!isset($_SESSION['unique_id']) ||(trim ($_SESSION['unique_id']) == '')) {
	header('location:login.php');
    exit();
	}

	$uquery=mysqli_query($conn,"SELECT * FROM `users` WHERE unique_id='".$_SESSION['unique_id']."'");
	$urow=mysqli_fetch_assoc($uquery);


	              $fetchVideos = mysqli_query($conn, "SELECT * FROM users ORDER BY unique_id DESC");
	              while($row = mysqli_fetch_assoc($fetchVideos)){


	                $username = $row['username'];

	                echo $username;
	              }




?>
<!DOCTYPE html>
<html>
<head>
<title>Chatroom: </title>
</head>
<body>
<table id="chat_room" align="center">
	<tr>
	<th><?php echo $urow['username']; ?></h4></th>
	</tr>
	<?php
		$query=mysqli_query($conn,"select * from `chat_room`");
		$row=mysqli_fetch_array($query);
	?>
				<div>
				<tr>
				<td><?php echo $row['chat_room_name']; ?></td><br><br>
				</tr>
				</div>
			<tr>
				<td>
				<div id="result" style="overflow-y:scroll; height:300px; width: 605px;"></div>
				<form class="#">
					<!--<input type="text" id="msg">--><br/>
					<textarea id="msg" rows="4" cols="85"></textarea><br/>
					<input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
					<button type="button" id="send_msg" class="#">Send</button>
				</form>
				</td>
			</tr>

</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="chat.js"></script>
</body>
</html>
