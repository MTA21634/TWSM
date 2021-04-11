<?php
  $conn = mysqli_connect("localhost", "root", "", "chat");
  if ($conn) {
    echo "connected to chat database";
  }else {
    echo "not connected";
  }
 ?>
