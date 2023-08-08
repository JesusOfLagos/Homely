<?php
include 'db_connection.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_POST['user_id'];
  $address = $_POST['address'];
  $price = $_POST['price'];

  $query = "INSERT INTO houses (user_id, address, price) VALUES ('$userId', '$address', '$price')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo json_encode(['message' => 'House added successfully']);
  } else {
    echo json_encode(['message' => 'Error adding house']);
  }
}
?>
