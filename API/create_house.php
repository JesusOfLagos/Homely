


<?php
include 'db_connection.php'; // Include database connection

$address = $_POST['address'];
$price = $_POST['price'];

$query = "INSERT INTO houses (address, price) VALUES ('$address', '$price')";
$result = mysqli_query($conn, $query);

if ($result) {
  echo json_encode(['message' => 'House added successfully']);
} else {
  echo json_encode(['message' => 'Error adding house']);
}
?>
