<?php

require("dbConnection.php");

$dbConn = $mysqlClient;

function addNote($note) {
  mysqli_query($GLOBALS["dbConn"], "INSERT INTO notes (note, created_at) VALUES ('$note', CURDATE());");
}

function deleteNote($id) {
  mysqli_query($GLOBALS["dbConn"], "DELETE FROM notes WHERE id = $id;");
}

function editNote($id, $note) {
  mysqli_query($GLOBALS["dbConn"], "UPDATE notes SET note='$note' WHERE id= $id;");
}

?>