<?php
    $id = $_GET["id"];
    $sql = "delete from roadnews where id=$id limit 1";
    include("database.php");
    $conn->query($sql);
    $conn->close();

    header("Location: roadnews.php");
?>
