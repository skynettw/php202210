<?php
  $title = $_POST["title"];
  include("database.php");
  $sql = "insert into roadnews (news) values('" . $title . "');";
  $conn->query($sql);
  $conn->close();
  header("Location: roadnews.php");
?>
