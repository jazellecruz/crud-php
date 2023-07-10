<?php

require("dbConnection.php");
require("functions.php");

if(isset($_POST["save"])){
  $note = $_POST['note'];

  mysqli_query($mysqlClient, "INSERT INTO notes (note, created_at) VALUES ('$note', CURDATE());");
  header("location: index.php");
}

if(isset($_POST['update'])){
  $note = $_POST['note'];
  $id = $_POST['note-id'];

  editNote($mysqlClient, $id, $note);
  header("location: index.php");
}

if(isset($_GET["del"])){
  $id = $_GET["del"];
  deleteNote($mysqlClient, $id);
  header("location: index.php");
}

?>

