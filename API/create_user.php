<?php
include 'db_connection.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo json_encode(['message' => 'User created successfully']);
  } else {
    echo json_encode(['message' => 'Error creating user']);
  }
}
?>
