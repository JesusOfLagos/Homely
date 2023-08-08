<?php
include 'db_connection.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
  $userId = $_GET['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "UPDATE users SET name = '$name', email = '$email', password = '$password' WHERE id = $userId";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo json_encode(['message' => 'User updated successfully']);
  } else {
    echo json_encode(['message' => 'Error updating user']);
  }
}
?>
