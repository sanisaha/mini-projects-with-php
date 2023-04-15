<?php
// connect to database
$host ='db1';
$dbname = 'todo';
$user = 'root';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass, $dbname);

// handle form submissions
if(isset($_POST['create_todo'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $status = $_POST['status'];

  $sql = "INSERT INTO tasks (title, description, status) VALUES ('$title', '$description', '$status')";
  if($conn->query($sql) === TRUE) {
      echo "Todo created successfully";
  } else {
      echo "Error creating todo: " . $conn->error;
  }
}

if(isset($_POST['update_todo'])) {
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $sql = "UPDATE tasks SET title='$title', description='$description' WHERE id='$id'";
  if($conn->query($sql) === TRUE) {
      echo "Todo updated successfully";
  } else {
      echo "Error updating todo: " . $conn->error;
  }
}

if(isset($_POST['delete_todo'])) {
  $id = $_POST['id'];

  $sql = "DELETE FROM tasks WHERE id='$id'";
  if($conn->query($sql) === TRUE) {
      echo "Todo deleted successfully";
  } else {
      echo "Error deleting todo: " . $conn->error;
  }
}

if(isset($_POST['edit_todo'])) {
  $id = $_POST['id'];
  $sql = "SELECT * FROM tasks WHERE id='$id'";
  $result = $conn->query($sql);
  if ($result === false) {
    echo "Error fetching task: " . $conn->error;
  } else {
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo "<div class='container'>
              <form method='POST' id='editform'>
                <h3>Edit this todo task:</h3>
                <input type='hidden' name='id' value='" . $row["id"] . "'>
                <label for='edit-title'>Title:</label>
                <input id='edit-title' type='text' name='title' placeholder='Title' value='" . $row["title"] . "' required><br>
                <label for='edit-description'>Description:</label>
                <textarea id='edit-description' name='description' placeholder='Description' required>" . $row["description"] . "</textarea><br>
                <button type='submit' name='update_todo'>Update Todo</button>
              </form>
            </div>";
    } else {
      echo "Task not found";
    }
  }
}

// display tasks
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result === false) {
  echo "Error fetching tasks: " . $conn->error;
} else {
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "
        <div class='container'>
          <div class='todo-card'>
            <h3>" . $row["title"] . "</h3>
            <p>" . $row["description"] . "</p>
            <p>Status: " . ($row["status"] ? 'Completed' : 'Not completed') . "</p>
            <form method='POST'>
              <input type='hidden' name='id' value='" . $row["id"] . "'>
              <button type='submit' name='delete_todo' id='delete'>Delete</button>
            </form>
            <form method='POST' action='todo.php'>
              <input type='hidden' name='id' value='" . $row["id"] . "'>
              <button type='submit' name='edit_todo' id='edit'>Edit</button>
            </form>
          </div>
        </div>
      ";
    }
  } else {
      echo "No tasks found";
  }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Todo App</title>
  <link rel="stylesheet" href="todo.css">
</head>
<body>
  <div class="container">
<!-- HTML FORM TO CREATE A NEW TODO -->
 <form method="POST" id="create">
  <input type="text" name="title" placeholder="Title" required><br>
  <textarea name="description" placeholder="Description" required></textarea><br>
  <input type="hidden" name="status" value="0">
  <button type="submit" name="create_todo">Create Todo</button>
</form>
</div>
</body>
</html>




