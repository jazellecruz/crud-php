<?php 

require("dbConnection.php");

// fetch all notes from database
$fetchedNotes = mysqli_query($mysqlClient, "SELECT id, note FROM notes;");
$notesList = mysqli_fetch_all($fetchedNotes, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="container-sm">
  <h1 class="text-center pt-4 pb-4">CRUD App in PHP</h1>
  <div class="notes-list">
    <?php foreach ($notesList as $note){ ?>
      <form action='server.php' class='d-flex justify-content-between mt-2 mb-2' method='post'>
        <input type='hidden' name='note-id' class='list-group-item' value='<?php echo $note["id"]; ?>'>
        <input type='text' name='note' class='form-control' value='<?php echo $note["note"]; ?>'> 
        <div class='d-flex align-items-center'>
          <button name="update" type="submit" class='btn btn-success btn-sm m-1'>Edit</button>
          <a href='server.php?del=<?php echo $note["id"]?>' class='btn btn-danger btn-sm m-1'>Delete</a>
        </div>
      </form>
    <?php } ?>
    <form action="server.php" method="post" >
      <div class="input-group mb-3">
        <input type="text" name="note" id="noteInput" class="form-control form-control" placeholder="Add Note">
        <button class="btn btn-primary" type="submit" name="save" id="button-addon2">Submit</button>
    </form>
  </div>
</body>
</html>