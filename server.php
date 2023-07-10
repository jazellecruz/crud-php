<?php

require("functions.php");

if(isset($_POST["save"])){
  $note = $_POST['note'];

  addNote($note);
  header("location: index.php");
}

if(isset($_POST['update'])){
  $note = $_POST['note'];
  $id = $_POST['note-id'];

  editNote($id, $note);
  header("location: index.php");
}

if(isset($_GET["del"])){
  $id = $_GET["del"];
  deleteNote($id);
  header("location: index.php");
}

?>

