<?php
  $title = $_POST["title"];
  include("database.php");
  $sql = "insert into videolist (name) values('" . $title . "');";
  $conn->query($sql);
  $conn->close();
  header("Location: addvideolist.php");
?>
