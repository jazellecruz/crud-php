<?php

function addNote($conn, $note) {
  mysqli_query($conn, "INSERT INTO notes (note, created_at) VALUES ('$note', CURDATE());");
}

function deleteNote($conn, $id) {
  mysqli_query($conn, "DELETE FROM notes WHERE id = $id;");
}

function editNote($conn, $id, $note) {
  mysqli_query($conn, "UPDATE notes SET note='$note' WHERE id= $id;");
}

?>